<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App;
use Validator;

use App\Model\Tag as DTTag;

class KeywordController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $View=[];
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lists(Request $request)
    {

        $search="";
        if($request->isMethod("get")){
            $search=$request->input('search','');
        }
        $data_list=DTTag::orderBy("id","DESC")->paginate(50);
        $this->View['data_list']=$data_list;
        $this->View['search']=$search;

        if(isset($_GET['import'])){
            
            $data_list=DTTag::orderBy("id","DESC")->get();

            foreach($data_list as $d){
                if(!empty($d->alias)){
                    

                        $TUpdated= DTTag::find($d->id);

                        
                        $TUpdated->name=$d->name;
                        $TUpdated->alias=$d->alias;
                        if($TUpdated->save()) {
                            
                                \SEO\Seo::save($TUpdated, route('search.detail',['alias'=>$TUpdated->alias]),
                                        [
                                           'title' => $TUpdated->name,
                                           'images' => [
                                               "MY_DOMAIN/public/upload/slideshow/slide_1618281115.jpg.webp"
                                           ]
                                       ]
                                    
                                );

                         

                       }

                }
                        
            }

            exit;
        }

        return view("admin.general.keyword.list",$this->View);


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
                $data=DTTag::find($id);
              
                $data->delete();
                echo 'destroy success';exit;
            }
        }

    }

    public function edit($id,Request $request){
        
            $data=[];
            
           
            if($request->isMethod("post")){
              
                 $validator=Validator::make($request->all(),[
                    "name"=>"required",


                ]);
                if($validator->fails()){
                    
                    return redirect()->back()->withErrors($validator);
                }else{
                         

                         $TUpdated= DTTag::find($id);

                        $TUpdated->name=$request->input("name");

                        $TUpdated->alias=App\MrData::toAlias2($request->input("name"));
                        
                    
                        if($TUpdated->save()) {
                            
                                \SEO\Seo::save($TUpdated, route('search.detail',['alias'=>$TUpdated->alias]),
                                        [
                                           'title' => $TUpdated->name,
                                           'images' => [
                                               "MY_DOMAIN/public/upload/slideshow/slide_1618281115.jpg.webp"
                                           ]
                                       ]
                                    
                                );

                         

                       }
                      $request->session()->flash("success"," Cập nhật thông tin xuất xứ thành công.");
                    return redirect()->back();
                }
            }
          
            

            
            $data = DTTag::find($id);

             $this->View['model']=$data;
         
            $this->View['data']=$data;


            return view('admin.general.keyword.edit',$this->View);
                
    }

 
}
