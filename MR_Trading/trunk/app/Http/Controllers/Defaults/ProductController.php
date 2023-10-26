<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Product as DTProduct;
use App\Model\Cate as DTCate;

use App\Model\Tag as DTTag;
use App\Model\News as DTNews;
use App\Model\Banner as DTBanner;
use App\Model\Youtube as DTYoutube;

use App\Model\Color as DTColor;
use App\Model\Type as DTType;


use App\MrData;
use Cache;
use DB;
//use Share;
use URL;
use Redirect;
class ProductController extends AppController
{
    //
    public function init(){
            $this->View['action_menu']=3;
           // $this->View['TPrice']=Cache::remember("Product_Cate_FIlter",2000,function(){
           //      return DTFilterprice::orderBy("orderby",'ASC')->get();
           //  });
             $this->View['TColor']=Cache::remember("Product_Cate_Colors",2000,function(){
                return DTColor::orderBy("name",'ASC')->get();
            });
              $this->View['TType']=Cache::remember("Product_Cate_TYPEs",2000,function(){
                return DTType::orderBy("orderby",'ASC')->get();
            });

            $this->View['Hot_Tag']=Cache::remember("Product_TTag_HOT",2000,function(){
                return DTTag::whereRaw("id IN (select cid_tag from tag_product)")->orderBy("id",'DESC')->limit(9)->get();
            });
           
            $this->View['orderby']=[
                    "moi-nhat"=>"Mới nhất",
                    "san-pham-hot"=>"Sản phẩm hot",
                
            ];

         
    }
    public function apifillter(){
            $this->init();

            unset($this->View['TSeo']);
            unset($this->View['TPage']);
            echo json_encode($this->View);exit;
    }

     public function apiproduct(Request $request){
            $sql_query=["id > 0 "];
            $my_sort= [ 'id','DESC'];
              $this->View['orderby']=[
                    "moi-nhat"=>"Mới nhất",
                    "san-pham-hot"=>"Sản phẩm hot",
                
            ];
            if($sort=$request->input("sort")){
                if(in_array($sort,array_keys($this->View['orderby']))){
                     $my_sort= [ 'id','DESC'];
                     if($sort=="san-pham-hot"){
                        $my_sort= [ 'is_hot','DESC'];
                     }
                }
            }

            if($c=$request->input("c")){
                $sql_cate=[];
                 if(!empty($c)){
                    foreach($c as $x){
                        $sql_cate[]=" cid_cate = ".$x;
                    }
                    
                }
                if(!empty($sql_cate)){
                     $sql_query[] = implode(" OR ",$sql_cate);
                }            
            }
           if($t=$request->input("t")){
                $sql_type=[];

                 if(!empty($t)){
                    foreach($t  as $x){
                        $sql_type[]=" cid_type = ".$x;
                    }
                    
                }
                if(!empty($sql_type)){
                     $sql_query[] = implode(" OR ",$sql_type);
                }            
            }
           
           if($d=$request->input("d")){
                $sql_color=[];
                 if(!empty($d)){
                    foreach($d as $x){
                        $sql_color[]=" cid_color = ".$x;
                    }
                    
                }
                if(!empty($sql_color)){
                     $sql_query[] = implode(" OR ",$sql_color);
                }            
            }
           
            $sql= implode ( " AND ", $sql_query);
              
            
              $field= explode(",","id,name,alias,picture,description,code,price,status,rating");  
             $product=DTProduct::select($field)->where("status",1)->whereRaw(DB::raw($sql))->orderBy($my_sort[0],$my_sort[1])->paginate(9);

            echo json_encode($product);exit;
    }

    public function index(){
        return view("default.product.index",$this->View);
    }
    public function parent(Request $request,$alias){

            $cate=DTCate::where("alias",$alias)->first();
            $this->View['TSeo']=(array)json_decode($cate['seo']);
            $sql="cid_cate IN ( SELECT id FROM pro_cate WHERE cid_parent = ".$cate['id'].")";
         
            return view("default.product.index",$this->View);

    }
    public function cate($parent,$alias,Request $request){

        if (strpos($alias, '.') !== false) {
            echo 'not found';exit;
        }
        $parent=DTCate::where("alias",$parent)->first();
        if(empty($parent)){
            return Redirect::to("khong-tim-thay-trang",301)->send(301);
        }
    	$detail=DTCate::where("alias",$alias)->where("cid_parent",$parent['id'])->first();
        if(empty($detail)){
            return Redirect::to("khong-tim-thay-trang",301)->send(301);
        }
        $this->View['TSeo']=(array)json_decode($detail['seo']);
        
       
      
      
            return view("default.product.index",$this->View);
    	
    	
    	
    }
   
    public function detail($alias){
         $this->View['TBanner']=Cache::remember("Index_TBannerTBanner",21200,function(){
                 return DTBanner::orderBy('id','ASC')->get();
         });
    	$product= DTProduct::where("alias",$alias)->first();
    	if(empty($product)){
            return Redirect::to("khong-tim-thay-trang",301)->send(301);
    	}

    	$this->View['detail']=$product;
            
        $this->View['action_menu']=3;

    	$this->View['TYoutube']=DTYoutube::where("name","LIKE",$product['name'])->limit(3)->get();

    	$this->View['my_shared']=null;//Share::load(URL::current(), $product['name'])->services('facebook', 'gplus', 'twitter');

         $this->View['is_seo']=true;

    	$this->View['product_other']=DTProduct::where("id","!=",$product['id'])->where("cid_cate",$product['cid_cate'])->where("status","1")->orderBy("id","DESC")->limit(4)->get();
    	return view("default.product.detail",$this->View);
    }
    
    public function postsearch(Request $request){
      //  dd($request->input("s"));
        
        $alias= MrData::toAlias2($request->input("search"));
        
        if(empty($alias)){
            
            return redirect()->back();
        }
        
        return redirect("/tim-kiem/{$alias}");
    }
    public function search($alias,Request $request){


        $this->View['TSeo']['seo_title']="Đất cảng Group ";
        $this->View['search']=$search= str_replace("-", " ", $alias);

        $check_tag=DTTag::where("alias",$alias)->first();
        if(!empty($check_tag['id']))
        {

              $this->View["TSeo"]=[
                'seo_title'=>ucfirst("{$check_tag['name']} | ".$this->View['TSeo']['seo_title']),

                "seo_description"=>"{$check_tag['name']}, ".$this->View['TSeo']['seo_description']
             ];
             $this->View['search']=$this->View['tag']=$check_tag['name'];
        }else{
            $this->View["TSeo"]=[
                'seo_title'=>ucfirst("{$search} ".$this->View['TSeo']['seo_title']),

                "seo_description"=>"{$search}, ".$this->View['TSeo']['seo_description']
             ];
             $this->View['tag']=$search;
        }

       
        $product= DTProduct::whereRaw(
             DB::raw("
                    id IN (
                        SELECT b.cid_product FROM 
                                tag_main AS a INNER JOIN tag_product AS b ON a.id=b.cid_tag
                        WHERE 
                            a.alias LIKE '%{$alias}%'

                         )
                    OR
                    name LIKE '%{$alias}%'
                ")  

        )->where("status","1")->paginate(12);


    
        $this->View['TProduct']=$product;

          $this->View['TNews']=DTNews::whereRaw(
             DB::raw("
                    id IN (
                        SELECT b.cid_news FROM 
                                tag_main AS a INNER JOIN tag_news AS b ON a.id=b.cid_tag
                        WHERE 
                            a.alias LIKE '%{$alias}%'

                         )
                          OR
                    name LIKE '%{$alias}%'
                ")  

        )->where("status","1")->limit(8)->get();
       
     //  dd($this->View);
        return view("default.product.search",$this->View);
    }

        

    public function getSql($get){
        $sql="";
                
            if(isset($get['p'] ) ){
                $p=$get['p'];

                if(is_array($p)){
                    $tam_p=[];
                    foreach ($p as $v) {
                       $color= DTColor::where("alias",$v)->first();
                        if(!empty($color)){
                             $tam_p[]= " cid_color= {$color['id']} ";
                        }
                    }
                    $sql .= " AND ( ".implode(" OR ", $tam_p).")";
                }else{
                    $color= DTColor::where("alias",$p)->first();
                    if(!empty($color)){
                         $sql .= " AND  cid_color= {$color['id']}";
                    }
                   
                }
            }
            if(isset($get['f'])){
                $f=$get['f'];
                if(is_array(($f))){
                    $tam_f=[];
                    foreach ($f as $v) {
                        $filter_price=DTFilterprice::where("alias",$v)->first();
                        if(!empty($filter_price)){
                               $tam_f[] = "  (price >= {$filter_price['price_from']} AND price <= {$filter_price['price_to']} ) ";
                        }      
                    }
                      $sql .= " AND ( ".implode(" OR ", $tam_f).")";
                }else{
                    $filter_price=DTFilterprice::where("alias",$f)->first();
                    if(!empty($filter_price)){
                           $sql .= " AND  price >= {$filter_price['price_from']} AND price <= {$filter_price['price_to']} ";
                    }
                }
                
            }
            if(isset($get['t'])){
                $t=$get['t'];
                if(is_array($t)){
                    $tam_t=[];
                    foreach($t as $v){
                        $type= DTType::where("alias",$v)->first();
                        if(!empty($type)){
                             $tam_t[]= " cid_type= {$type['id']} ";
                        }
                    }
                    $sql .= " AND ( ".implode(" OR ", $tam_t).")";
                }else{
                    $filter_type=DTType::where("alias",$t)->first();
                    if(!empty($filter_type)){
                             $sql .= " AND  cid_type= {$filter_type['id']}";
                    }
                }
                
            }

        return $sql;
    }
     public function getTitleName($get){
        $result="";
                
            if(isset($get['p'] ) ){
                    $color= DTColor::where("alias",$get['p'])->first();
                    if(!empty($color)){
                         $result=$color['name'];
                    }
                   
                
            }
            if(isset($get['f'])){
                $f=$get['f'];
                $filter_price=DTFilterprice::where("alias",$f)->first();
                if(!empty($filter_price)){
                         $result=$filter_price['name'];
                }
            }
            if(isset($get['t'])){
                $t=$get['t'];
                $type= DTType::where("alias",$t)->first();
                if(!empty($type)){
                    $result=$type['name'];           
                }
                
            }

        return $result;
    }
    public function getSort($s){
        $sort=['id','DESC'];
        if(!empty($s['o'])){
            if($s['o']=="gia-tu-thap-den-cao"){
                 $sort=['price','ASC'];
            }
            if($s['o']=="gia-tu-cao-den-thap"){
                 $sort=['price','DESC'];
            }
            if($s['o']=="ten-a-z"){
                 $sort=['name','ASC'];
            }
            if($s['o']=="ten-z-a"){
                 $sort=['name','DESC'];
            }
        }
        return $sort;

  
    }
}
