<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\News as DTNews;
use App\Models\News_Cate as DTNewsCate;
use App\Models\Slideshow as DTSlideshow;
use App\Models\Tag as DTTag;

use Cache;
//use Share;
use URL;
use DB;
class NewsController extends AppController
{

    public function __construct(Request $request){
        parent::__construct($request);
       
         $this->View['alias_cate']="";
        $this->View['TSlide']=DTSlideshow::where("cid_main","2")->where('status','1')->orderBy("position","ASC")->get();
          $this->View['TCate']=DTNewsCate::where("status","1")->orderBy("orderby","ASC")->get();


    }
    public function index(){
        
    	
    	
        $this->View['TNews']=DTNews::where("status","1")->limit(4)->orderBy("updated_at","DESC")->get();

    	return view("default.news.index",$this->View);
    }
    public function cate($alias){
    	//Cate
        
        $ex=explode("-",$alias);
        
    	$cate=DTNewsCate::where("id",$ex[count($ex)-1])->first();

       
    	if(!empty($cate)){
            $this->View['cate']=$cate;
            $this->View['alias_cate']=$cate['alias'];

            $this->View['TNews']=DTNews::where("status",'1')->where("cid_cate",$cate['id'])->orderBy('id',"DESC")->paginate(4);
         
            return view("default.news.cate",$this->View);
    	}else{
            return redirect("notfound");
        }
    	
    }
    public function detail($alias)
    {
        $news=DTNews::where("alias",$alias)->first();
        if(!empty($news)){
            $news->viewer=(int)$news->viewer+1;
            $news->save();
            $this->View['detail']=$news;
            $this->View['cate']=$cate=$news->Cate();
             $this->View['alias_cate']=$cate['alias'];
          
           
            return view("default.news.detail",$this->View);
        }
         return redirect("notfound");
        // code...
    }
}
