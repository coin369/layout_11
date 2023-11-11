<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use App\Models\Page as DTPage;
use App\Models\Contact as DTContact;
use App\Models\Main  as DTMain;
use App\Models\Slideshow as DTSlideshow;

use Mail;
use Cache;
use DB;
class PageController extends AppController
{
    //
  
  

    


    public function page($alias){
        $ex=explode("-",$alias);
        
        $page=DTPage::where("id",$ex[count($ex)-1])->first();

       
        if(!empty($page)){
            $this->View['page']=$page;
           
         
        }
    	return view("default.page.page",$this->View);
    }
    public function contact(Request $request){
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                    "name"=>"required",
                     "kana"=>"required",
                    "phone"=>"required",
                    "email"=>"required",
                    "comment"=>"required|max:200",
                   
                    

            ]);


            if($validater->fails()){
               
                return redirect()->back()->withErrors($validater)->withInput();
            }

         

         
            $mes=$request->input("comment");
        
           
            if(!str_contains($mes,"https") && !str_contains($mes,"url=") && strlen($mes)<200){ 

                    $TNew=new DTContact();
                    $TNew->name=$request->input("name");
                    $TNew->phone= $request->input("phone","");
                    $TNew->email=$request->input("email");
                    $TNew->kana=$request->input("kana"," ");
                    $TNew->old=$request->input("old"," ");
                    $TNew->content=$request->input("comment");
                    $TNew->save();


                    $result=[

                    ];
                      foreach($request->all() as $key=>$value){
                            $result[$key] = strip_tags($value);
                      }

                      
             }else{
                //echo 'no';exit;
             }
          
                $request->session()->flash("success","できるだけ早くご対応させていただきます.");
            

            return redirect("/contact#myform");
        }
         $this->View['action_menu']=5;
    	return view("default.page.contact",$this->View);
    }

    

    public function human()
    {
         $this->View['active']='human';

     $this->View['THome']=DTMain::where('id','2')->first();
      $this->View['TSlide']=DTSlideshow::where("cid_main","2")->where('status','1')->orderBy("position","ASC")->get();

       return view("default.page.human",$this->View);
    }
    public function sweets()
    {
         $this->View['active']='sweets';
          $this->View['THome']=DTMain::where('id','3')->first();
           $this->View['TSlide']=DTSlideshow::where("cid_main","3")->where('status','1')->orderBy("position","ASC")->get();
       return view("default.page.sweets",$this->View);
    }
    public function company()
    {

        $this->View['THome']=DTMain::where("id","5")->first();
         $this->View['TSlide']=DTSlideshow::where("cid_main","5")->where('status','1')->orderBy("position","ASC")->get();
         $this->View['active']='company';
       return view("default.page.company",$this->View);
    }
     public function salon()
    {

        $this->View['THome']=DTMain::where("id","4")->first();
         $this->View['TSlide']=DTSlideshow::where("cid_main","4")->where('status','1')->orderBy("position","ASC")->get();
         $this->View['active']='company';
       return view("default.page.salon",$this->View);
    }
    
}
