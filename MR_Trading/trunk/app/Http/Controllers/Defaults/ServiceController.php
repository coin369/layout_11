<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Service as DTService;

use App\Model\Tag as DTTag;

use App\MrData;
use Cache;
use DB;
//use Share;
use URL;
class ServiceController extends AppController
{
	public function index(){
		$this->View['TSeo']['seo_title']="Dịch vụ ".$this->View['TSeo']['seo_title'];
		return view("default.service.index",$this->View);
	}
	public function detail($alias){
		$this->View['detail']=$detail=DTService::where("alias",$alias)->first();
		if(!empty($detail)){
			$detail->viewer=(int)$detail->viewer+1;
			$detail->save();
		}

		$this->View['TTag']=DTTag::orderByRaw(DB::raw("RAND()"))->limit(4)->get();

		$this->View['TSeo']['seo_title']=$detail['name']." | ".$this->View['TSeo']['seo_title'];
		$this->View['my_shared']=[];//Share::load(URL::current(), $detail['name'])->services('facebook');

		return view("default.service.detail",$this->View);
	}
}