<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\Product as DTProduct;
use App\Model\Order as DTOrder;
use App\MrData as MrData;
use Validator;
use Auth;
use Mail;
use App\Model\Order_Product as DTOrderProduct;

class OrderController extends AppController
{
    //
    public function finish(Request $request){
    	if(!$request->session()->has("CART") && !$request->session()->has("PAYMENT")){
    			return redirect("/");
    		
    	}

        $this->View['action_menu']=3;


    	$this->View['cart']=$cart=$request->session()->get("CART");

    	$this->View['payment']=$payment=$request->session()->get("PAYMENT");
    	$this->View['number_code']=date("Ymdhis").rand();
    	$this->View['TSeo']['seo_title']="Giỏ hàng thành công";

        $total=0;

    	$OrderNew=new DTOrder();
    	$OrderNew->number_order=$this->View['number_code'];
    	$OrderNew->name=$payment['name'];
    	$OrderNew->phone=$payment['phone'];
    	$OrderNew->address=$payment['address'];
        $OrderNew->email=$payment['email'];
    	$OrderNew->note=$payment['note'];
    	$OrderNew->cid_supplier=1;
        if(Auth::check()){
            $OrderNew->cid_user=Auth::user()->id;
        }
    	  $OrderNew->total=1;
    	$OrderNew->approved='1';
    	$OrderNew->save();
    	foreach ($cart as $key => $value) {
    		$ProductOrderNew=new DTOrderProduct();
    		$ProductOrderNew->cid_product=$key;
    		$ProductOrderNew->cid_order=$OrderNew->id;
    	
    		$ProductOrderNew->quality=$value['quality'];
    				if(count($value['product']->Promotion() ) >0 ){
    					
    						$ProductOrderNew->price=(int)$value['product']->PromotionProduct()['price'];
    						
    					}else{
    						$ProductOrderNew->price=(int)(int)$value['product']['price'];
							
    					}

    		$ProductOrderNew->total=$ProductOrderNew->quality*$ProductOrderNew->price;
                $total = $total + $ProductOrderNew->total;
    		$ProductOrderNew->save();

    	}

            $this->View['total']=$total;

            $OrderNew->total=$total;

            $OrderNew->save();

    	$request->session()->forget("CART");
    	$request->session()->forget("PAYMENT");


    	return view("default.order.finish",$this->View);
    }
    public function countcart(Request $request){
    	if(!$request->session()->has("CART") ){
    			return '0';
    		
    	}
    	return count($request->session()->get("CART"));
    }
    public function submitcart(Request $request){
    	$id=$request->input("id",'');
    	$qty=$request->input("qty",1);

    	$cart=[];
    	if($request->session()->has("CART")){
    			$cart=$request->session()->get("CART");
    	}

    	$product=DTProduct::find($id);

    	if($product){
    		if(array_key_exists($id, $cart)){
    			$cart[$id]['quality'] =(int)$cart[$id]['quality']+(int)$qty;
    		}else{
    			$cart[$id]=['quality'=>$qty,'product'=>$product];
    		}
    		$request->session()->put("CART",$cart);
    	}



    	return redirect("/gio-hang");
    }
    public function cart(Request $request){
             $this->View['action_menu']=3;

    	//$request->session()->forget("CART");
    	if($request->isMethod("post")){
    		$validater=Validator::make($request->all(),[
    				"name"=>"required",
    				"phone"=>"required",
    				"address"=>"required"
    		],[
    			"name.required"=>" Vui lòng nhập tên của bạn. ",
    			"phone.required"=>" Vui lòng nhập số điện thoại ",
    			"address.required"=>" Vui lòng nhập địa chỉ"
    		]);
    		if($validater->fails()){
    			return redirect()->back()->withErrors($validater)->withInput();
    		}else{
    			$request->session()->put("PAYMENT",$request->all());
    			return redirect("/hoan-thanh-don-hang");
    		}
    	}

    	if(!$request->session()->has("CART")){
    		$this->View['cart']=[];
    	}else{
    		$this->View['cart']=$request->session()->get("CART");
    	}
    	$this->View['TSeo']['seo_title']="Giỏ hàng";

        $this->View['data']=[];
    	if(Auth::check()){
            $this->View['data']=Auth::user();
        }
    	return view("default.order.cart",$this->View);
    }
    public function second(Request $request){
              $this->View['action_menu']=3;

        if(!$request->session()->has("CART") && !$request->session()->has("PAYMENT")){
                return redirect("/");
            
        }


        //$request->session()->forget("CART");
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                    "name"=>"required",
                    "phone"=>"required",
                    "address"=>"required"
            ],[
                "name.required"=>" Vui lòng nhập tên của bạn. ",
                "phone.required"=>" Vui lòng nhập số điện thoại ",
                "address.required"=>" Vui lòng nhập địa chỉ"
            ]);
            if($validater->fails()){
                return redirect()->back()->withErrors($validater)->withInput();
            }else{
                $request->session()->put("PAYMENT",$request->all());
                return redirect("/hoan-thanh-don-hang");
            }
        }

        if(!$request->session()->has("CART")){
            $this->View['cart']=[];
        }else{
            $this->View['cart']=$request->session()->get("CART");
        }
        $this->View['TSeo']['seo_title']="Giỏ hàng";

        $this->View['data']=[];
        if(Auth::check()){
            $this->View['data']=Auth::user();
        }
        
        return redirect()->back();

        return view("default.order.second",$this->View);
    }
    public function removecart($id,Request $request){
    	
    
    	$cart=[];
    	if($request->session()->has("CART")){
    			$cart=$request->session()->get("CART");
    	}

    	$product=DTProduct::find($id);

    	if($product){
    		if(array_key_exists($id, $cart)){
    			unset($cart[$id]);
    		}
    		$request->session()->put("CART",$cart);
    	}
    	return 'success';
    }
    public function updatequality($id,Request $request){
    	
    	$quality=$request->input("quality");


    	$cart=[];
    	if($request->session()->has("CART")){
    			$cart=$request->session()->get("CART");
    	}

    	$product=DTProduct::find($id);
        $result=[];
    	if($product){
    		if(array_key_exists($id, $cart)){
    			if(!empty($quality) && count($quality) < 3 && (int)$quality > 0 ){
    					$cart[$id]['quality']=$quality;
    					$request->session()->put("CART",$cart);
                        $result['total_product']=MrData::toPrice($quality*$product['price']);
    					
    				
    			}
    		
    		}
    		
    	}
        $total=0;
        foreach ($cart as $pp) {
                        $value=$pp['product'];
                        if(count($value->Promotion() ) >0 ){
                            $total= $total+$value->PromotionProduct()['price']*$pp['quality'];
                        }else{
                           $total= $total+$value['price']*$pp['quality'];
                        }
        }
        $result['total']=MrData::toPrice($total);
        return json_encode($result);
    	return '-1';
    	
    }
    public function mytotal($cart){
    	$total=0;
    	foreach ($cart as $key => $value) {
    					if(count($value['product']->Promotion() ) >0 ){
    						$total=$total+(int)$value['product']->PromotionProduct()['price'];
    						
    					}else{

							$total=$total+(int)$value['product']['price'];
    					}
    	}
    	return $total;
    }
}
