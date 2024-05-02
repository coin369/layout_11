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
       $this->View['is_side']='general';
    }
    public function addcate(Request $request){
        $data=[];
      
        $data['status']=1;
        if($request->isMethod("post")){
            $validator=Validator::make($request->all(),[
                "name"=>"required|unique:ca_news_cate"
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew=new DTNewsCate();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name")." ".date("Y-m-d H:i:s"));
                $TNew->status=$request->input("status");
                $TNew->cid_parent=$request->input("cid_parent");
                 $TNew->seo=json_encode([
                    'seo_title'=> ($request->input("seo_title"))? $request->input("seo_title") : $request->input("name"),
                    'seo_description'=>($request->input("seo_description"))? $request->input("seo_description") : $request->input("name"),
                    'seo_keyword'=>($request->input("seo_keyword"))? $request->input("seo_keyword") : $request->input("name"). str_replace("-", " ", $TNew->alias )
                ]);

                $TNew->save();
                $TNew->alias=App\MrData::toAlias2(date("Y-m-d")."-". $TNew->id);
                $TNew->save();

                $request->session()->flash("success","Successfully ");
                return redirect()->back();
            }
        }
        $this->View['cid_parent']=DTNewsCate::where("cid_parent","0")->where("status",'1')->get()->pluck("name","id");
        $this->View['cid_parent'][0]=" Categories ";
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
        $this->View['data_list']=DTNewsCate::orderBy("id","DESC")->paginate(20);
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
                ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                     $TUpdated=DTNewsCate::find($id);
                     $TUpdated->name=$request->input("name");
                       $TUpdated->alias=  App\MrData::toAlias2($request->input("name")." ".date("Y-m-d H:i:s"));
                        $TUpdated->status=$request->input("status");
                        $TUpdated->cid_parent=$request->input("cid_parent");
                         $TUpdated->seo=json_encode([
                            'seo_title'=> ($request->input("seo_title"))? $request->input("seo_title") : $request->input("name"),
                            'seo_description'=>($request->input("seo_description"))? $request->input("seo_description") : $request->input("name"),
                            'seo_keyword'=>($request->input("seo_keyword"))? $request->input("seo_keyword") : $request->input("name"). str_replace("-", " ", $TUpdated->alias )
                        ]);

                      
                    $TUpdated->save();

                   
                   
                    
                    $request->session()->flash("success","Successfully");
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
               
                "content"=>"required"
            ]);
            if($validator->fails()){
                return redirect("/admin/news/add")->withErrors($validator)->withInput();
            }else{
                $TNew=new DTNews();
                $TNew->name=$request->input("name");
                $TNew->alias=App\MrData::toAlias2($request->input("name")." ".date("Y-m-d H:i:s"));
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

                         
                            Image::make($picture)->save(public_path("/upload/news/".$picture_name));

                      

                      
                    $TNew->picture=$picture_name;

                }

                $TNew->save();
                
                if ($TNew->save()) {
                      //  var_dump($request->input("page"));exit;
                        \SEO\Seo::save($TNew, route('news.detail',['alias'=>$TNew->alias]),
                               [
                                   'title' => $TNew->name,
                                   'images' => [
                                       asset("/upload/news/".$TNew->picture)
                                   ]
                               ]
                        );
                }



               

                $request->session()->flash("success","Successfully ");
                return redirect()->back();
            }
        }
        $this->View['cid_cate']= DTNewsCate::orderBy("name","DESC")->pluck("name",'id');
        $this->View['data']=$data;
        return view("admin.general.news.add",$this->View);
    }
     public function lists(Request $request){

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
                        "content"=>"required",
                     
                    ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }else{
                    $TUpdated->name=$request->input("name");
                    $TUpdated->alias=App\MrData::toAlias2($request->input("name")." ".date("Y-m-d H:i:s"));
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

                             Image::make($picture)
                                ->save(public_path("/upload/news/".$picture_name));

                           

                   

                        $TUpdated->picture=$picture_name;

                   }

                $TUpdated->save();
                

                 
                    if ($TUpdated->save()) {
                      //  var_dump($request->input("page"));exit;
                        \SEO\Seo::save($TUpdated, route('news.detail',['alias'=>$TUpdated->alias]),

                        [
                           'title' => $TUpdated->name,
                           'images' => [
                               asset("/upload/news/".$TUpdated->picture)
                           ]
                       ]
                        );
                       }

                      foreach ($TUpdated->Tag() as $t) {
                          $TUpdated->MyTag()->detach($t->id);
                   }                  

                 

                    $request->session()->flash("success","Successfully.");
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
