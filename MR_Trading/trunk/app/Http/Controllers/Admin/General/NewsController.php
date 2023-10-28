<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use Validator;
use App;
use Image;
use Webp;
use Excel;
use SEO\Seo;

use App\Models\Tag as DTTag;

use App\Models\News as DTNews;
use App\Models\News_Cate as DTNewsCate;
class NewsController extends AppController
{
    protected $View=[];
    
    public function __construct(){
       $this->View['is_side']='news';
    }
    public function addcate(Request $request){
        $data=[];
      
        $data['status']=1;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required|unique:ca_news_cate"
            ],[
                "name.required"=>"Vui lòng nhập tên danh mục tin tức",
                   "name.unique"=>"Tên đã tồn tại "
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTNewsCate();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name"));
                $TNew->status=$request->input("status");
                $TNew->cid_parent=$request->input("cid_parent");
                 $TNew->seo=json_encode([
                    'seo_title'=> ($request->input("seo_title"))? $request->input("seo_title") : $request->input("name"),
                    'seo_description'=>($request->input("seo_description"))? $request->input("seo_description") : $request->input("name"),
                    'seo_keyword'=>($request->input("seo_keyword"))? $request->input("seo_keyword") : $request->input("name"). str_replace("-", " ", $TNew->alias )
                ]);

                $TNew->save();
                $request->session()->flash("success","Thêm mới danh mục tin tức thành công. ");
                return redirect()->back();
            }
        }
        $this->View['cid_parent']=DTNewsCate::where("cid_parent","0")->where("status",'1')->get()->pluck("name","id");
        $this->View['cid_parent'][0]=" Danh mục tin tức chính ";
        $data['cid_parent']=0;
        $this->View['data']=$data;
        return view("admin.general.news.addcate",$this->View);
    }
    public function listcate(Request $request){
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTNewsCate::where("name","LIKE","%$search%")->where("cid_parent","0")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.news.listscate",$this->View);

    }
    public function removecate(Request $request){
         if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTNewsCate::find($id);
                if(!empty($data)){
                    if( (int)$data->cid_parent ==0){
                        DTNewsCate::where("cid_parent",$data->id)->delete();
                    }
                    
                    $data->delete();
                }
                echo 'destroy success';exit;
            }
        }

    }
    public function editcate($id,Request $request){
        $data=[];
     
           
            if($request->isMethod("post")){
                $validator=Validator::make($request->all(),[
                    "name"=>"required|unique:ca_news_cate,name,{$id},id"
                ],[
                    "name.required"=>"Vui lòng nhập tên ",
                    "name.unique"=>"Tên đã tồn tại "
                ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                     $TUpdated=DTNewsCate::find($id);
                     $TUpdated->name=$request->input("name");
                        $TUpdated->alias=App\MrData::toAlias2($request->input("name"));
                        $TUpdated->status=$request->input("status");
                        $TUpdated->cid_parent=$request->input("cid_parent");
                         $TUpdated->seo=json_encode([
                            'seo_title'=> ($request->input("seo_title"))? $request->input("seo_title") : $request->input("name"),
                            'seo_description'=>($request->input("seo_description"))? $request->input("seo_description") : $request->input("name"),
                            'seo_keyword'=>($request->input("seo_keyword"))? $request->input("seo_keyword") : $request->input("name"). str_replace("-", " ", $TUpdated->alias )
                        ]);

                      
                    $TUpdated->save();
                    $request->session()->flash("success","Câp nhật danh mục tin tức thành công.");
                    return redirect()->back();
                }
            }
              $this->View['cid_parent']=DTNewsCate::where("cid_parent","0")->where("status",'1')->get()->pluck("name","id");
              $this->View['cid_parent'][0]=" Danh mục tin tức chính ";
       
            $data= DTNewsCate::find($id)->toArray();
            $data= array_merge($data,(array)json_decode($data['seo']));
            $this->View['data']=$data;
            return view("admin.general.news.editcate",$this->View);
       
    }

    /*
        NEWS
    */
    public function add(Request $request){
         $data=[];
        $data['position']=1;
        $data['status']=1;
          $this->View['model']=new DTNews;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required|unique:ca_news",
                "cid_cate"=>"required",
                "description"=>"required",
                "picture"=>"required"
            ],[
                 "name.required"=>"Vui lòng nhập tên tin tức",
                   "name.unique"=>"Tin tức này đã tồn tại ",
                   "cid_cate.required"=>"Vui lòng chọn danh mục tin tức",
                   "description.required"=>"Vui lòng nhập mô tả ",
                   "picture.required"=>"Vui lòng chọn hình ảnh tin tức "
            ]);
            if($validator->fails()){
                return redirect("/admin/news/add")->withErrors($validator)->withInput();
            }else{
                $TNew=new DTNews();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name"));
                $TNew->description=$request->input("description");
              
                $TNew->content=$request->input("content");

                $TNew->status=$request->input("status");
                $TNew->cid_cate=$request->input("cid_cate");
                 $TNew->seo=json_encode([
                        'seo_title'=> (empty($request->input("seo_title"))) ? $request->input("name") : $request->input("seo_title"),

                         'seo_description'=> (empty($request->input("seo_description"))) ? $request->input("name") : $request->input("seo_description"),

                        'seo_keyword'=> (empty($request->input("seo_keyword"))) ? $request->input("name") : $request->input("seo_keyword"),

                 ]);
                 $picture=$request->file("picture");

                  if($picture){
                     $picture_name= $TNew->alias.".".$picture->getClientOriginalExtension();

                         Image::make($picture)->resize(
                                 config('constants.News.Current.Width'),config('constants.News.Current.Height'))
                            ->save(public_path("/upload/news/".$picture_name));

                       Image::make($picture)->resize(
                                                      config('constants.News.Small.Width'),
                                                      config('constants.News.Small.Height'))
                              ->save(public_path("/upload/news/small/".$picture_name));

                          Image::make($picture)->resize(
                                    config('constants.News.Big.Width'),config('constants.News.Big.Height'))
                                        ->save(public_path("/upload/news/big/".$picture_name));


                       // Webp::make($picture)->resize(
                       //           config('constants.News.Current.Width'),config('constants.News.Current.Height'))
                       //      ->save(public_path("/upload/news/".$picture_name.".webp"));

                       // Webp::make($picture)->resize(
                       //                                config('constants.News.Small.Width'),
                       //                                config('constants.News.Small.Height'))
                       //        ->save(public_path("/upload/news/small/".$picture_name.".webp"));

                       //    Webp::make($picture)->resize(
                       //              config('constants.News.Big.Width'),config('constants.News.Big.Height'))
                       //                  ->save(public_path("/upload/news/big/".$picture_name.".webp"));

                      
                    $TNew->picture=$picture_name;

                }

               

                if ($TNew->save()) {
                      //  var_dump($request->input("page"));exit;
                        \SEO\Seo::save($TNew, route('news.cate',['alias'=>$TNew->alias]),
                               [
                                   'title' => $TNew->name,
                                   'images' => [
                                       asset("/public/upload/news/big/".$TNew->picture)
                                   ]
                               ]
                        );
                }



                 $tag=explode(",", $request->input("tag"));
                if(!empty($tag)){
                    $tag=array_unique($tag);
                      foreach ($tag as $e_tag) {
                          $alias_e_tag=App\MrData::toAlias2($e_tag);

                          $check_tag=DTTag::where("alias",$alias_e_tag)->first();
                          if(empty($check_tag['id'])){
                             $check_tag=new DTTag();
                             $check_tag->name = $e_tag;
                             $check_tag->alias=$alias_e_tag;
                             $check_tag->save();

                            
                          }
                           $check_tag->News()->attach($TNew->id);
                      }
                }



                $request->session()->flash("success","Thêm mới tin tức thành công. ");
                return redirect()->back();
            }
        }
        $this->View['cid_cate']= DTNewsCate::orderBy("name","DESC")->where("cid_parent","!=",0)->pluck("name",'id');
        $this->View['data']=$data;
        return view("admin.general.news.add",$this->View);
    }
     public function lists(Request $request){

        if(isset($_GET['id'])){
                $id=$_GET['id'];
                $n=DTNews::find($id);
                if(!empty($n)){
                        $product =new \App\Models\Product();
                        $product->name=$n->name;
                        $product->alias=$n->slug;
                        $product->cid_cate=3;
                        $product->content=$n->content;
                        $product->status='1';
                        $product->save();
                        $n->delete();
                        


                }

        }
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $this->View['search']=$search;
        $this->View['data_list']=DTNews::where("name","LIKE","%$search%")->orderBy("id","DESC")->paginate(20);
        return view("admin.general.news.list",$this->View);

    }
    public function remove(Request $request){
         if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTNews::find($id);
               
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }
    public function edit($id,Request $request){
        $data=[];
        
            $TUpdated=DTNews::find($id);
            if($request->isMethod("post")){
                $validator=Validator::make($request->all(),[
                        "name"=>"required|unique:ca_news,name,{$id},id",
                        "cid_cate"=>"required",
                        "description"=>"required",
                     
                    ],[
                         "name.required"=>"Vui lòng nhập tên tin tức",
                           "name.unique"=>"Tin tức này đã tồn tại ",
                           "cid_cate.required"=>"Vui lòng chọn danh mục tin tức",
                           "description.required"=>"Vui lòng nhập mô tả ",
                           
                    ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                    $TUpdated->name=$request->input("name");
                    $TUpdated->alias=App\MrData::toAlias2($request->input("name"));
                    $TUpdated->description=$request->input("description");
                  
                    $TUpdated->content=$request->input("content");

                    $TUpdated->status=$request->input("status");
                    $TUpdated->cid_cate=$request->input("cid_cate");
                    $TUpdated->seo=json_encode([
                            'seo_title'=> (empty($request->input("seo_title"))) ? $request->input("name") : $request->input("seo_title"),

                             'seo_description'=> (empty($request->input("seo_description"))) ? $request->input("name") : $request->input("seo_description"),

                            'seo_keyword'=> (empty($request->input("seo_keyword"))) ? $request->input("name") : $request->input("seo_keyword"),

                     ]);
                      $picture=$request->file("picture");
                    if($picture){
                         $picture_name= $TUpdated->alias.".".$picture->getClientOriginalExtension();

                             Image::make($picture)->resize(
                                     config('constants.News.Current.Width'),config('constants.News.Current.Height'))
                                ->save(public_path("/upload/news/".$picture_name));

                           Image::make($picture)->resize(
                                                          config('constants.News.Small.Width'),
                                                          config('constants.News.Small.Height'))
                                  ->save(public_path("/upload/news/small/".$picture_name));

                              Image::make($picture)->resize(
                                        config('constants.News.Big.Width'),config('constants.News.Big.Height'))
                                            ->save(public_path("/upload/news/big/".$picture_name));
                        

                       //   Webp::make($picture)->resize(
                       //           config('constants.News.Current.Width'),config('constants.News.Current.Height'))
                       //      ->save(public_path("/upload/news/".$picture_name.".webp"));

                       // Webp::make($picture)->resize(
                       //                                config('constants.News.Small.Width'),
                       //                                config('constants.News.Small.Height'))
                       //        ->save(public_path("/upload/news/small/".$picture_name.".webp"));

                       //    Webp::make($picture)->resize(
                       //              config('constants.News.Big.Width'),config('constants.News.Big.Height'))
                       //                  ->save(public_path("/upload/news/big/".$picture_name.".webp"));



                        $TUpdated->picture=$picture_name;

                   }

                   // $TUpdated->save();

                 
                    if ($TUpdated->save()) {
                      //  var_dump($request->input("page"));exit;
                        \SEO\Seo::save($TUpdated, route('news.cate',['alias'=>$TUpdated->alias]),

                        [
                           'title' => $TUpdated->name,
                           'images' => [
                               asset("/public/upload/news/big/".$TUpdated->picture)
                           ]
                       ]
                        );
                       }

                      foreach ($TUpdated->Tag() as $t) {
                          $TUpdated->MyTag()->detach($t->id);
                   }                  

                    $tag=explode(",", $request->input("tag"));
                  if(!empty($tag)){
                    $tag=array_unique($tag);
                        foreach ($tag as $e_tag) {
                            $alias_e_tag=App\MrData::toAlias2($e_tag);

                            $check_tag=DTTag::where("alias",$alias_e_tag)->first();
                            if(empty($check_tag['id'])){
                               $check_tag=new DTTag();
                               $check_tag->name = $e_tag;
                               $check_tag->alias=$alias_e_tag;
                               $check_tag->save();

                              
                            }

                             $check_tag->News()->attach($TUpdated->id);
                        }
                  }

                    $request->session()->flash("success","Câp nhật danh mục tin tức thành công.");
                    return redirect()->back();
                }
            }
            $my_data=DTNews::find($id);
            $get_data=$my_data->toArray();




            $data=array_merge($get_data,(array)json_decode($get_data['seo']));

            $tag= $my_data->Tag()->pluck("name")->toArray();
            
            $data['tag']=implode(",", $tag);   
            
            $this->View['cid_cate']= DTNewsCate::orderBy("name","DESC")->pluck("name",'id');
            $this->View['data']=$data;

            $my_data->title=$my_data->name;
            $this->View['model']=$TUpdated;
            return view("admin.general.news.edit",$this->View);
        
    }
}
