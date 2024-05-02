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
       
        
        $page=DTPage::where("alias",$alias)->first();

       
        if(!empty($page)){
            $this->View['page']=$page;
           
         
        }
    	return view("default.page.page",$this->View);
    }
    public function contact(Request $request){
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                    "name"=>"required",
                    
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
                    $TNew->address=$request->input("address"," ");
                  
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
          
                $request->session()->flash("success","Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi bạn một cách sớm nhất.");
            

            return redirect("/lien-he");
        }
         $this->View['active']="contact";

        $this->View['page']=DTPage::where("status",1)->first();

   
            
    	return view("default.page.contact",$this->View);
    }

    

    public function info()
    {
         $this->View['active']='info';

        $this->View['TPage']=DTMain::where('id','1')->first();
 

       return view("default.page.info",$this->View);
    }
    public function service()
    {
         $this->View['active']='service';
        
       return view("default.page.service",$this->View);
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
