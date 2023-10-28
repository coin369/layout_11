<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



include 'admin.php';
// Route::get('/404',function(){
// 	return 'hello';
// });



Route::group(["namespace"=>"App\Http\Controllers\Defaults",'middleware'=>['web']],function(){
	Route::get('/', "IndexController@index")->name('home');//->middleware("cacheable");
	// Route::get('/sitemap.xml', "IndexController@sitemap");
	// Route::get('/sitemap/{key}', "IndexController@sitemapkey");
	Route::get('/feed', "IndexController@feed")->name('feed');//->middleware("cacheable");
	Route::get('/feed-product', "IndexController@feedproduct")->name('feedproduct');
	Route::post('/tim-kiem', "ProductController@postsearch")->name("postsearch");
	Route::get('/tim-kiem', "ProductController@searchall")->name("search.index");
	Route::get('/tim-kiem/{alias}', "ProductController@search")->name("search.detail");

	Route::get("/lien-he","PageController@contact")->name("contact");
	Route::post("/postcontact","PageController@postcontact")->name('postcontact');
	Route::post("/newsletter","PageController@newsletter");

    Route::get("/khong-tim-thay-trang","IndexController@notfound")->name("notfound");
    
	Route::get("/landing-page/thiet-ke-noi-that","PageController@landingpage")->name("landingpage");

	Route::get("/thiet-ke-noi-that/tu-van-dich-vu","PageController@landingpageinfo")->name("landingpageinfo");


	Route::get('/tin-tuc', "NewsController@index")->name("news.index");
	Route::get('/tin-tuc/{alias}', "NewsController@cate")->name("news.cate");

	
	Route::any('/dang-nhap', "CustomerController@login")->name("signin");
	Route::any('/dang-ky', "CustomerController@signup")->name("signup");
	Route::any('/quen-mat-khau', "CustomerController@resetpassword")->name("forget_password");

	Route::group(['middleware'=>'customer'],function(){
		Route::any('/thay-doi-mat-khau', "CustomerController@password");
		Route::any('/thong-tin-ca-nhan', "CustomerController@info");
		Route::any('/lich-su-giao-dich', "CustomerController@order");
		Route::any('/phuc-hoi-mat-khau/{token}', "CustomerController@reset");
		Route::get("/huy-don-hang/{order}","CustomerController@orderremove");
		Route::get("/chi-tiet-don-hang/{order}","CustomerController@orderdetail");
	});
	Route::get("/socialite-redirect-facebook","SocialController@facebookredirect");
	Route::any("/socialite-callback-facebook","SocialController@facebookcallback");

   
    Route::get("/youtube","PageController@youtube")->name("youtube.index");
   

    Route::get("/tuyen-dung","RecuitmentController@index")->name("recuitment.index");
    Route::get("/tuyen-dung/{alias}","RecuitmentController@detail")->name("recuitment.detail");

    Route::any('/dich-vu', "ServiceController@index")->name("service.index");
    Route::any('/dich-vu/{alias}', "ServiceController@detail")->name("service.detail");

    Route::any('/du-an', "EducateController@index")->name("educate.index");
    Route::any('/du-an/{alias}', "EducateController@detail")->name("educate.detail");


    Route::any('/add_post_contact', "PageController@cooperate")->name("cooperate");

	Route::any('/gio-hang', "OrderController@cart")->name("order.index");
	Route::any("/thong-tin-don-hang","OrderController@second")->name("order.second");
	Route::post("/them-gio-hang","OrderController@submitcart")->name("order.add");

	Route::any('/hoan-thanh-don-hang', "OrderController@finish")->name("order.finish");

	Route::post("/remove-cart/{id}","OrderController@removecart")->name("order.remove");
	Route::get("/update-quality-cart/{id}","OrderController@updatequality")->name("order.update");


	Route::get("/countcart","OrderController@countcart")->name("order.countcart");


});

