<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Educate as DTEducate;

use App\Models\Tag as DTTag;

use App\MrData;
use Cache;
use DB;
//use Share;
use URL;
class EducateController extends AppController
{
	public function index(){
		$this->View['TEducate']=DTEducate::where("status",'1')->paginate(9);
		$this->View['TSeo']['seo_title']="Đào tạo học viên ".$this->View['TSeo']['seo_title'];
		return view("default.educate.index",$this->View);
	}
	public function detail($alias){
		$this->View['detail']=$detail=DTEducate::where("alias",$alias)->first();
	

		$this->View['TSeo']['seo_title']=$detail['name']." | ".$this->View['TSeo']['seo_title'];
		//$this->View['my_shared']=Share::load(URL::current(), $detail['name'])->services('facebook');

		return view("default.educate.detail",$this->View);
	}
}