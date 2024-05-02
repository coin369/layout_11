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


	Route::any("/lien-he","PageController@contact")->name("contact");

	

    Route::get("/not-found","IndexController@notfound")->name("notfound");
    
    Route::get('/gioi-thieu', "PageController@info")->name("info");
    Route::get('/dich-vu', "PageController@service")->name("service");
    
    Route::get('/sweets', "PageController@sweets")->name("sweets");
    Route::get('/company', "PageController@company")->name("company");

	Route::get('/tin-tuc', "NewsController@index")->name("news.index");
	Route::get('/tin-tuc/{alias}', "NewsController@cate")->name("news.cate");
	Route::get('/tin-tuc/chi-tiet/{alias}', "NewsController@detail")->name("news.detail");

	Route::get('/dang-ky', "CustomerController@signup")->name("signup");
    Route::get('/dang-nhap', "CustomerController@login")->name("login");	

    Route::get('/tra-cuu', "CustomerController@order")->name("order");	
     Route::get('/tao-van-don', "CustomerController@created")->name("created");	
      Route::get('/info', "CustomerController@info")->name("info");	

      Route::get('/tim-kiem', "CustomerController@search")->name("search");	
  	
    Route::get("/page/{alias}","PageController@page")->name("page");



});

