<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use App\Models\Page as DTPage;
use App\Models\Contact as DTContact;
use App\Models\Product as DTProduct;
use App\Models\Cooperate as DTCooperate;

use App\Models\Youtubecate as DTYoutubecate;
use App\Models\Newsletter as DTNewsletter;
use App\Models\Youtube as DTYoutube;

use Mail;
use Cache;
use DB;
class PageController extends AppController
{
    //
  
    public function cooperate(Request $request){
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                    "name"=>"required",
                    "phone"=>"required",
                  
            ],[
                "name.required"=>" * Vui lòng nhập họ và tên của bạn. ",
                "phone.required"=>" * Vui lòng nhập số điện thoại ",
                "content.required"=>" * Vui lòng nhập nội dụng "
            ]);
            if($validater->fails()){
                   echo json_encode(['success'=>"Vui lòng nhập đầy đủ thông tin ."]);
                        exit;
              //  return redirect()->back()->withErrors($validater)->withInput();
            }
            $TNew=new DTCooperate();
            $TNew->name=$request->input("name");
            $TNew->phone= $request->input("phone");
          
            $TNew->content=$request->input("content",date("d-m-Y H:i:s"));
            $TNew->save();
            $request->session()->flash("success"," Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi đến bạn một cách sớm nhất.");
            
            echo json_encode(['success'=>"Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi đến bạn một cách sớm nhất."]);exit;
        }
        
        return view("default.page.cooperate",$this->View);
    }
    public function landingpage(){
           $this->View['TProduct_hot']=Cache::remember("Index_Product_Hot_LIMIT_NOI_THAT_6_",1000,function(){
                return DTProduct::where("status","1")->where("is_hot","2")
                                ->whereRaw("cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent=2)")
                                ->limit(6)->orderBy("id","DESC")->get();
          });

            $this->View['TProduct_hot_2']=Cache::remember("Index_Product_Hot_LIMIT_KIEN_TRUC_",1000,function(){
                return DTProduct::where("status","1")
                                ->whereRaw("cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent=1)")
                                ->limit(6)->orderBy("id","DESC")->get();
          });
      
        return view("default.page.landingpage",$this->View);
    }


     public function landingpageinfo(){
           $this->View['TProduct_hot']=Cache::remember("Index_Product_Hot_LIMIT_NOI_THAT_t",1000,function(){
                return DTProduct::where("status","1")->where("is_hot","2")
                                ->whereRaw("cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent=2)")
                                ->limit(6)->orderBy("id","DESC")->get();
          });

            $this->View['TProduct_hot_2']=Cache::remember("Index_Product_Hot_LIMIT_KIEN_TRUC_t",1000,function(){
                return DTProduct::where("status","1")
                                ->whereRaw("cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent=1)")
                                ->limit(6)->orderBy("id","DESC")->get();
          });
        
          $this->View['is_seo']=true;
        return view("default.page.landingpageinfo",$this->View);
    }


    public function page($alias){
         $this->View['action_menu']=2;

           $this->View['TProductHot']=Cache::remember("Product_Cate_HOT",2000,function(){
                return DTProduct::where("status","1")->where("is_hot","2")->orderBy('id',"DESC")->limit(8)->get();
            });

    	$this->View['page_cate']=Cache::remember("Page_Page_Cate",200,function(){
            return DTPage::orderBy("id","DESC")->get();
        });
    	$this->View['detail']=DTPage::where("alias",$alias)->first();
          $this->View['TSeo']['seo_title']=$this->View['detail']['name'];
    	return view("default.page.info",$this->View);
    }
    public function contact(){
         $this->View['action_menu']=5;
    	return view("default.page.contact",$this->View);
    }

    public function postcontact(Request $request){

    	if($request->isMethod("post")){
    		$validater=Validator::make($request->all(),[
    				"name"=>"required",
    				//"phone"=>"required",
    				"message"=>"required",
                    "my_token"=>"required"

    		],[
    			"name.required"=>" * Vui lòng nhập họ và tên của bạn. ",
    		//	"phone.required"=>" * Vui lòng nhập số điện thoại ",
    			"message.required"=>" * Vui lòng nhập nội dụng "
    		]);


    		if($validater->fails()){

    			return redirect()->back()->withErrors($validater)->withInput();
    		}

         

             if (!session()->exists('my_token')) {
                 $request->session()->flash("success_popup"," TOKEN ERROR .");
                
                return redirect()->back();
             }

            //  echo $request->input("my_token");
            // var_dump(session()->get("my_token")[0]);exit;
            //  if(session()->get("my_token")[0] != $request->input("my_token")){


            //        $request->session()->flash("success_popup"," TOKEN ERROR .");
            //     return redirect()->back();
            //  }
            
            $mes=$request->input("message");
         //   var_dump(str_contains($mes,"url=https"));exit;
           // var_dump(strlen($mes));exit;

           
            if(!str_contains($mes,"https") && !str_contains($mes,"url=") && strlen($mes)<200){ 

            		$TNew=new DTContact();
            		$TNew->name=$request->input("name");
            		$TNew->phone= $request->input("phone","");
            		$TNew->email=$request->input("email");
                    $TNew->subject=$request->input("subject"," ");
            		$TNew->content=$request->input("message");
            		$TNew->save();


                    $result=[

                    ];
                      foreach($request->all() as $key=>$value){
                            $result[$key] = strip_tags($value);
                      }

                      
             }else{
                //echo 'no';exit;
             }
            if($request->input("my_popup")){
                return  "json popup";
                exit;
            }

            if($request->input("is_popup")){
                $request->session()->flash("success_popup"," Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi đến bạn một cách sớm nhất.");
            }else{
                $request->session()->flash("success"," Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ phản hồi đến bạn một cách sớm nhất.");
            }
    		
  //echo 'z';exit;
           
    		return redirect("/lien-he#my_form");
    	}
    }
     public function newsletter(Request $request){
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                   
                    //"phone"=>"required",
                    "email"=>"required | email"
            ],[
             
            //  "phone.required"=>" * Vui lòng nhập số điện thoại ",
                "email.required"=>" * Vui lòng nhập nội dụng "
            ]);
            if($validater->fails()){
               echo json_encode(['message'=>"Vui lòng nhập đúng định dạng email"]);
               exit;
            }
            $TNew = DTNewsletter::where("email",$request->input("email"))->first();
            if(!empty($TNew->id)){
                 echo json_encode(['message'=>"Email đã đăng ký."]);exit;
            }
            $TNew=new DTNewsletter();
            
            $TNew->email=$request->input("email");
          
            $TNew->save();

            echo json_encode(['message'=>"Cảm ơn bạn đăng ký dịch vụ của chúng tôi."]);
               exit;


            echo "OK";
            exit;
        }
    }
}
