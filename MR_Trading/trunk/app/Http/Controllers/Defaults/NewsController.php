<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\News as DTNews;
use App\Model\News_Cate as DTNewsCate;
use App\Model\Youtube as DTYoutube;
use App\Model\Tag as DTTag;
use Cache;
//use Share;
use URL;
use DB;
class NewsController extends AppController
{

    public function __construct(Request $request){
        parent::__construct($request);
         $this->View['action_menu']=6;
        $this->View['TNews_cate']=Cache::remember("News_Index",1000,function(){
            return DTNewsCate::where("status","1")->where("cid_parent","!=",0)->where("id","!=",5)->orderBy("orderby","ASC")->get();
        });
        $this->View['TNews_hot']=Cache::remember("News_News_Hot",1000,function(){
            return DTNews::where("status","1")->limit(4)->orderBy("viewer","DESC")->get();
        });

          $this->View['DTTag']=Cache::remember("DTTag",2000,function(){
            return DTTag::limit(5)->orderByRaw(DB::raw("RAND()"))->get();
      });


    }
    public function index(){
        
    	
    	$this->View['TNews']=DTNews::where("status",'1')->orderBy('id',"DESC")->paginate(12);

        $this->View["TSeo"]['seo_title']="Tin tức ".$this->View["TSeo"]['seo_title'];
    	return view("default.news.index",$this->View);
    }
    public function cate($alias){
    	//Cate
       
       
    	$cate=DTNewsCate::where("alias",$alias)->first();
    	if(!empty($cate)){
            $this->View['cate']=$cate;
                $this->View['TNews']=DTNews::where("status",'1')->where("cid_cate",$cate['id'])->orderBy('id',"DESC")->paginate(12);
            $this->View["TSeo"]=json_decode( $cate['seo'], true );
            return view("default.news.cate",$this->View);
    	}
    	$news=DTNews::where("alias",$alias)->first();
    	if(!empty($news)){
            $news->viewer=(int)$news->viewer+1;
            $news->save();
    		$this->View['detail']=$news;
           // $this->View['my_shared']=['facebook'=>"https://facebook.com?shared="];//Share::load(URL::current(), $news['name'])->services('facebook', 'gplus', 'twitter');
            $this->View["TSeo"]=json_decode( $news['seo'], true );

            $this->View['TYoutubeFirst']=null;
            $key=$news->Tag();
            if(!empty($key)){
                $k='';
                foreach ($key as $key => $value) {
                    $k=$k.$value['alias'];
                }
            
                $this->View['TYoutubeFirst']=DTYoutube::whereRaw(DB::raw("LOCATE(keyword,'{$k}') "))->orderBy('id',"DESC")->orderBy(DB::raw("Rand()"))->limit(2)->get();
            }

           // 
    		return view("default.news.detail",$this->View);
    	}
    }
}
