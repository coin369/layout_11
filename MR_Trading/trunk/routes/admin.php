<?php 



Route::group(["namespace"=>"App\Http\Controllers\Admin","prefix"=>"admin","middleware"=>["admin"]],function(){

	
	Route::group(["namespace"=>"General"],function(){
				Route::group(['prefix'=>'index'],function(){
					Route::any("/index","IndexController@index");
					Route::any("/edit/{id}","IndexController@edit");
				});
			
								
					Route::group(['prefix'=>'customer'],function(){
						Route::any('/add','UserController@add');
						Route::any("/edit/{id}","UserController@edit");
						Route::any("/lists","UserController@lists");
						Route::post("/remove","UserController@remove");
						Route::get("/export","UserController@export");
					
					
					});



				Route::group(['prefix'=>'slideshow'],function(){
					Route::any('/add','SlideshowController@add');
					Route::any("/lists","SlideshowController@lists");
					Route::any("/edit/{id}","SlideshowController@edit");
					Route::any("/remove","SlideshowController@remove");
				});
				Route::group(['prefix'=>'banner'],function(){
					Route::any('/add','BannerController@add');
					Route::any("/lists","BannerController@lists");
					Route::any("/edit/{id}","BannerController@edit");
					Route::post("/remove","BannerController@remove");
				});

				
				Route::group(['prefix'=>'users'],function(){
					Route::any('/add','UsersController@add');
					Route::any("/lists","UsersController@lists");
					Route::any("/edit/{id}","UsersController@edit");
					Route::post("/remove","UsersController@remove");
				});


			Route::group(['prefix'=>'contact'],function(){
				Route::any('/index','ContactController@index');
				Route::post('/remove','ContactController@remove');
				Route::any('/edit/{id}','ContactController@edit');

			});

			
			Route::group(['prefix'=>'news'],function(){
				Route::any('/add','NewsController@add');
				Route::any("/lists","NewsController@lists");
				Route::any("/edit/{id}","NewsController@edit");
				Route::post("/remove","NewsController@remove");
				Route::get("/removepicture","NewsController@removepicture");

				Route::any('/addcate','NewsController@addcate');
				Route::any("/listscate","NewsController@listcate");
				Route::any("/editcate/{id}","NewsController@editcate");
				Route::post("/removecate","NewsController@removecate");
			});
			Route::group(['prefix'=>'page'],function(){
				Route::any('/add','PageController@add');
				Route::any("/lists","PageController@lists");
				Route::any("/edit/{id}","PageController@edit");
				Route::post("/remove","PageController@remove");
			});
			Route::group(['prefix'=>'seo'],function(){
				Route::any('/add','SeoController@add');
				Route::any("/lists","SeoController@lists");
				Route::any("/edit/{id}","SeoController@edit");
				Route::post("/remove","SeoController@remove");
			});
			Route::group(['prefix'=>'keyword'],function(){
				Route::any('/add','KeywordController@add');
				Route::any("/lists","KeywordController@lists");
				Route::any("/edit/{id}","KeywordController@edit");
				Route::post("/remove","KeywordController@remove");
			});
	});

	Route::group(["namespace"=>"Info"],function(){
			
				Route::group(['prefix'=>'service'],function(){
					Route::any('/add','ServiceController@add');
					Route::any("/lists","ServiceController@lists");
					Route::any("/edit/{id}","ServiceController@edit");
					Route::post("/remove","ServiceController@remove");
				});

				Route::group(['prefix'=>'rating'],function(){
					Route::any('/add','RatingController@add');
					Route::any("/lists","RatingController@lists");
					Route::any("/edit/{id}","RatingController@edit");
					Route::post("/remove","RatingController@remove");
				});

				Route::group(['prefix'=>'recuitment'],function(){
					Route::any('/add','RecuitmentController@add');
					Route::any("/lists","RecuitmentController@lists");
					Route::any("/edit/{id}","RecuitmentController@edit");
					Route::post("/remove","RecuitmentController@remove");
				});
				Route::group(['prefix'=>'employees'],function(){
					Route::any('/add','EmployeesController@add');
					Route::any("/lists","EmployeesController@lists");
					Route::any("/edit/{id}","EmployeesController@edit");
					Route::post("/remove","EmployeesController@remove");
				});

				Route::group(['prefix'=>'educate'],function(){
					Route::any('/add','EducateController@add');
					Route::any("/lists","EducateController@lists");
					Route::any("/edit/{id}","EducateController@edit");
					Route::post("/remove","EducateController@remove");
				});


					Route::group(['prefix'=>'cooperate'],function(){
						Route::any('/index','CooperateController@index');
						Route::post('/remove','CooperateController@remove');
						Route::any('/edit/{id}','CooperateController@edit');

					});

	});

	
	
	
});

Route::group(['namespace'=>"App\Http\Controllers\Auth",'middleware'=>"web"],function(){
	
	Route::get("/login",['as'=>'login','uses'=>"LoginController@login"]);
	Route::post("/login",['as'=>'postlogin','uses'=>"LoginController@postlogin"]);
});

Route::group(['middleware'=>"web"],function(){
		Route::get('/logout', 'Admin\General\UserController@logout');
		Route::get('/thoat', 'Admin\General\UserController@logout');
	
});

