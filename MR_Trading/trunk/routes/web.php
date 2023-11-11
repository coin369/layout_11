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


	Route::any("/contact","PageController@contact")->name("contact");

	

    Route::get("/not-found","IndexController@notfound")->name("notfound");
    
    Route::get('/human', "PageController@human")->name("human");
    Route::get('/salon', "PageController@salon")->name("salon");
    
    Route::get('/sweets', "PageController@sweets")->name("sweets");
    Route::get('/company', "PageController@company")->name("company");

	Route::get('/news', "NewsController@index")->name("news.index");
	Route::get('/news/{alias}', "NewsController@cate")->name("news.cate");
	Route::get('/news/detail/{alias}', "NewsController@detail")->name("news.detail");

		
  
    Route::get("/page/{alias}","PageController@page")->name("page");



});

