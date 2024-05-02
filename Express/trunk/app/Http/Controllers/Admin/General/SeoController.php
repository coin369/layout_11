<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App;
use Validator;

use App\Models\WP\Posts as DTPosts;
use App\Models\WP\Cate as WPCate;
use App\Models\WP\Postmeta as WPPostmeta;


use App\Models\Seo as DTSeo;

use App\Models\News as DTNews;
use App\Models\Tag as DTTag;

class SeoController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $View=[];
   
    public function add(Request $request)
    {


            $tag=DTTag::get();

            foreach($tag as $key=>$t){
                if(!empty($t['name'])){
                    echo '<a class="my_tag tag-cloud-link tag-link-'.$t['id'].' tag-link-position-'.$key.'" href="MY_DOMAIN/tim-kiem/'.$t['alias'].'" title="'.$t['name'].'" target="_black" aria-label="'.$t['name'].'" >#'.$t['name'].'</a>, ';
                }

                
            }

             echo "<style> 
                    .my_tag{
                            font-family: sans-serif;
                            font-weight: 200;
                            color: #082680 !important;
                            margin: 4px 0;
                            font-size: 13px;
                    }
                </style>
                ";
            exit;



        if($request->isMethod("post")){
          
            $validator=Validator::make($request->all(),[
                "links"=>"required|unique:ca_seo",
                "title"=>"required",
                "description"=>"required"

            ],[
                 "links.required"=>" Vui lòng nhập đường dẫn.",         
                 "links.unique"=>" Đường dẫn đã tồn tại ",
                 "title.required"=>" Vui lòng nhập Title ",

               
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else{
                $TNew= new DTSeo();
                $TNew->links = $request->input("links");
                $TNew->title=$request->input("title");
                $TNew->description=$request->input("description");
                $TNew->save();

                $request->session()->flash("success"," Thêm xuất xứ thành công. ");
                return redirect()->back();
            }
        }
        $data=[];
       

   
        $this->View['data']=$data;
        return view("admin.general.seo.add",$this->View);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lists(Request $request)
    {


         if(isset($_GET['workpress'])){
             $List_News=DTNews::get();

              foreach($List_News as $news){

            $check_a=DTPosts::where("post_title",$news->name)->first();

                    if(empty($check_a['id']) && !empty($news->content)){

                            $date=date("Y-m-d H:i:s");

                            $n = new DTPosts;

                            $n->post_date=$date;
                            $n->post_date_gmt=$date;
                            $n->post_modified=$date;
                            $n->post_modified_gmt=$date;


                            $n->post_author=1;

                            $n->post_content=$news->content." Nguồn: <a href='MY_DOMAIN/tin-tuc/{$news->alias}' target='_black' rel='follow' title='{$news->name}'>{$news->name}</a>";
                            $n->post_title=$news->name;
                            $n->post_excerpt=$news->description;
                            $n->post_status='publish';
                            $n->comment_status='open';
                            $n->ping_status='open';
                            $n->post_password="";
                            $n->post_name=$news->alias;
                            $n->to_ping='';
                            $n->pinged="";
                            $n->post_content_filtered='';
                            $n->post_parent=0;
                            //$n->guid=1;
                            $n->menu_order=0;
                            $n->post_type='post';
                            $n->post_mime_type=0;
                            $n->comment_count   =0;
                            $n->save();


                             $Image = new DTPosts;

                            $Image->post_date=$date;
                            $Image->post_date_gmt=$date;
                            $Image->post_modified=$date;
                            $Image->post_modified_gmt=$date;
                             
                            $Image->post_author=1;
                            $Image->post_content="";
                            $Image->post_title=$news->alias;
                            $Image->post_excerpt="";
                            $Image->post_status='publish';
                            $Image->comment_status='inherit';
                            $Image->ping_status='open';
                            $Image->post_password="";
                            $Image->post_name=$news->alias;
                            $Image->to_ping='';
                            $Image->pinged="";
                            $Image->post_content_filtered='';
                            $Image->post_parent=0;
                            $Image->guid='MY_DOMAIN/public/upload/news/big/'.$news->picture;
                            $Image->menu_order=0;
                            $Image->post_type='attachment';
                            $Image->post_mime_type='image/jpeg';
                            $Image->post_parent=$n->id;
                            $Image->comment_count   =0;
                            $Image->save();


                            $count= WPPostmeta::orderBy("meta_id","DESC")->first();
                            $postmeta=new WPPostmeta;
                             $postmeta->meta_id=$count['meta_id']*1+1;
                            $postmeta->post_id=$n->id;
                            $postmeta->meta_key="_yoast_wpseo_metadesc";
                            $postmeta->meta_value=$news->description;
                            $postmeta->save();



                             $c = new WPCate;

                             $c->object_id=$n->id;
                             $c->term_taxonomy_id=3;
                             $c->term_order=0;
                             $c->save();
                     }

                }
                exit("workpress");
        }



        $search="";
        if($request->isMethod("get")){
            $search=$request->input('search','');
        }
        $data_list=DTSeo::where("links","LIKE","%{$search}%")->orderBy("id","DESC")->paginate(20);
        $this->View['data_list']=$data_list;
        $this->View['search']=$search;

        return view("admin.general.seo.lists",$this->View);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        //
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                $data=DTSeo::find($id);
              
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }

    public function edit($id,Request $request){
        
            $data=[];
          
           
            if($request->isMethod("post")){
              
                 $validator=Validator::make($request->all(),[
                    "links"=>"required|unique:ca_seo,links,{$id},id",


                ],[
                     "links.required"=>" Vui lòng nhập đường dẫn.",         
                     "links.unique"=>" Đường dẫn đã tồn tại "       
                   
                ]);
                if($validator->fails()){
                    
                    return redirect()->back()->withErrors($validator);
                }else{
                         $TUpdated= DTSeo::find($id);
                        $TUpdated->links=$request->input("links");
                  
                 
                      

                        $TUpdated->title=$request->input("title");
                        $TUpdated->description=$request->input("description");
                        
                    
                        $TUpdated->save();
                      $request->session()->flash("success"," Cập nhật thông tin xuất xứ thành công.");
                    return redirect()->back();
                }
            }
          
            
            
            $data = DTSeo::find($id)->toArray();

         
            $this->View['data']=$data;


            return view('admin.general.seo.edit',$this->View);
                
    }

 
}
