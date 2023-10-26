<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use App\Model\Recuitment as DTRecuitment;
use App\Model\News as DTNews;
use App\Model\News_Cate as DTNewsCate;
use Cache;


class RecuitmentController extends AppController
{

	public function __construct(Request $request){
		parent::__construct($request);
		$this->View['TNews_cate']=Cache::remember("News_Index",1000,function(){
            return DTNewsCate::where("status","1")->where("id","!=",5)->orderBy("orderby","ASC")->get();
        });
        $this->View['TNews_hot']=Cache::remember("News_News_Hot",1000,function(){
            return DTNews::where("status","1")->limit(4)->orderBy("viewer","DESC")->get();
        });
	}
	public function index(){
		$this->View['TRecuitment']=DTRecuitment::orderBy("id","DESC")->paginate(7);
		return view("default.recuitment.index",$this->View);	
	}
	public function detail($alias){
		$this->View['TRecuitment']=DTRecuitment::where("alias",$alias)->first();
		return view("default.recuitment.detail",$this->View);	
	}
}