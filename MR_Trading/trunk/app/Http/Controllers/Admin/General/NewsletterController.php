<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AppController;
use App;
use Excel;

class NewsletterController extends AppController
{
    protected $View=[];
    
     public function index(Request $request)
    {
        $search="";
        if($request->isMethod("get")){
            $search=$request->input("search");
        }
        $data_list=App\Model\Newsletter::where("email","LIKE","%{$search}%")->orderBy("id","DESC")->paginate(20);
        $this->View['data_list']=$data_list;
        $this->View['search']=$search;
        return view("admin.general.newsletter.list",$this->View);
    }

    public function export(Request $request){
        $name_excel="Newsletter".time();
        Excel::create($name_excel,function($excel) use ($request){
            /*$excel->setTitle("Xuất thông tin người đăng ký");
             $excel->setCreator('Maatwebsite')
              ->setCompany('Maatwebsite');

    
            $excel->setDescription('A demonstration to change the file properties');*/
            $excel->sheet('Danh sách email', function($sheet) use ($request) {
                $search=$request->input("search");
                $data=App\Model\Newsletter::where("email","LIKE","%{$search}%")->orderBy("id","DESC")->get();
                $result=[];
                $i=1;
                foreach ($data as $key => $value) {
                    # code...
                    $result[]=array($i,$value['email'],$value['created_at']);
                    $i++;
                }
               
                $sheet->fromArray($result);

            });

        })->download('csv');
    }
    public function remove(Request $request)
    {
        
        if($request->isMethod("post")){
            if($id=$request->input("id")){
                App\Model\Newsletter::find($id)->delete();
                echo 'destroy success';exit;
            }
        }

    }
}
