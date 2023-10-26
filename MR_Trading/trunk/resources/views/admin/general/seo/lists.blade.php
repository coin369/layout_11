@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> SEO for website.      ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
          

<div class="row">


     <?php
        if(isset($_GET['con'])){
            App\Model\TestSeoPage::where('object',"App\Model\Tag")->update(['priority'=>'1']);
        }
        if(isset($_GET['kk'])){
               $all=\App\Model\Tag::all();

                 foreach($all as $a){
                    
                    if(!empty($a['alias'])){

                    $links=route("search.detail",['alias'=>$a['alias']]);

                    $check_aaa=App\Model\TestSeoPage::where('path',$links)->first();

                    if(empty($check_aaa['id'])){

                            $T=$a;
                            $alias=$a['alias'];
                             if(!empty($T['id'])){

                                 $TUpdated= App\Model\Tag::find($T['id']);
                                 $TUpdated->name=$TUpdated->name;

                                 if($TUpdated->save()){

                                    $title=substr($a['name'],0,100);
                                    $description="Bạn đang tìm kiếm {$title} tại Đất Cảnh Group, thiết kế nội thất biệt thự, nhà phố, văn phòng";

                                      \SEO\Seo::save($TUpdated , route("search.detail",['alias'=>$alias]), [
                                                      'title' =>$title,
                                                      'description'=>$description,
                                                      'images'=>[
                                                                      "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg"
                                                                ],
                                                       'twitter'=>[
                                                            'title'=>$title,
                                                            'description'=>$description
                                                       ]
                                         ]);

                                        $Seo= App\Model\TestSeoPage::where('object',"App\Model\Tag")->where("object_id",$T['id'])->first();
                                        $Seo->robot_index='index';
                                        $Seo->robot_follow='follow';
                                        $Seo->title=$title;
                                        $Seo->description=$description;
                                       
                                        $Seo->save();


                                        $check =App\Model\TestSeoTag::where('seo_page_id',$Seo->id)->first();
                                        if(empty($check)){
                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=4;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=5;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=6;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=7;
                                            $TestSeoTag->content=route("search.detail",['alias'=>$alias]);
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=10;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=22;
                                            $TestSeoTag->content="summary";
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=25;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=26;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=1;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=27;
                                            $TestSeoTag->content=   "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg";
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=9;
                                            $TestSeoTag->content=   "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg";
                                            $TestSeoTag->save();

                                        }
                                    



                                      
                                  
                                
                                }
                                  
                   }
                }
                    }

            }

            echo 'exit';exit;
        }

     ?>





    <?php
        if(isset($_GET['c'])){
               $all=\App\Model\News::all();

                 foreach($all as $a){
                    

                    $links=route("news.cate",['alias'=>$a['alias']]);

                    $check_aaa=App\Model\TestSeoPage::where('path',$links)->first();

                    if(empty($check_aaa['id'])){

                            $T=$a;
                            $alias=$a['alias'];
                             if(!empty($T['id'])){

                                 $TUpdated= App\Model\News::find($T['id']);
                                 $TUpdated->name=$TUpdated->name;

                                 if($TUpdated->save()){

                                    $title=mb_convert_encoding(substr($a['name'],0,70),"UTF-8");
                                    $description=mb_convert_encoding(substr(strip_tags($a['description']),0,170),"UTF-8");

                                      \SEO\Seo::save($TUpdated , route("news.cate",['alias'=>$alias]), [
                                                      'title' =>$title,
                                                      'description'=>$description,
                                                      'images'=>[
                                                                    asset_cdn("/upload/news/big/".$T->picture)
                                                                ],
                                                       'twitter'=>[
                                                            'title'=>$title,
                                                            'description'=>$description
                                                       ]
                                         ]);

                                        $Seo= App\Model\TestSeoPage::where('object',"App\Model\News")->where("object_id",$T['id'])->first();
                                        $Seo->robot_index='index';
                                        $Seo->robot_follow='follow';
                                        $Seo->title=$title;
                                        $Seo->description=$description;
                                       
                                        $Seo->save();


                                        $check =App\Model\TestSeoTag::where('seo_page_id',$Seo->id)->first();
                                        if(empty($check)){
                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=4;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=5;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=6;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=7;
                                            $TestSeoTag->content=route("news.cate",['alias'=>$alias]);
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=10;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=22;
                                            $TestSeoTag->content="summary";
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=25;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=26;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=1;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=27;
                                            $TestSeoTag->content=asset_cdn("/upload/news/big/".$T->picture);
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=9;
                                            $TestSeoTag->content=asset_cdn("/upload/news/big/".$T->picture);
                                            $TestSeoTag->save();

                                        }
                                    



                                      
                                  
                                
                                }
                                  
                   }
                }

            }

            echo 'exit';exit;
        }

     ?>















    <?php
        if(isset($_GET['t'])){

            $all=\App\Model\Seolinks::all();

            foreach($all as $a){
              

                if(str_contains($a['links'],'tin-tuc')){

                    $x=(explode("/",$a['links']));
                    if(!empty($x[2])){
                    $alias=$x[2];
                            $T=\App\Model\News::where("alias",$alias)->first();
                           
                             if(!empty($T['id'])){

                                 $TUpdated= App\Model\News::find($T['id']);
                                 $TUpdated->name=$TUpdated->name;

                                 if($TUpdated->save()){

                                    $title=mb_convert_encoding(substr($a['title'],0,70),"UTF-8");
                                    $description=mb_convert_encoding(substr($a['description'],0,170),"UTF-8");

                                      \SEO\Seo::save($TUpdated , route("news.cate",['alias'=>$alias]), [
                                                      'title' =>$title,
                                                      'description'=>$description,
                                                      'images'=>[
                                                                    asset_cdn("/upload/news/big/".$T->picture)
                                                                ],
                                                       'twitter'=>[
                                                            'title'=>$title,
                                                            'description'=>$description
                                                       ]
                                         ]);

                                        $Seo= App\Model\TestSeoPage::where('object',"App\Model\News")->where("object_id",$T['id'])->first();
                                        $Seo->robot_index='index';
                                        $Seo->robot_follow='follow';
                                        $Seo->title=$title;
                                        $Seo->description=$description;
                                       
                                        $Seo->save();


                                        $check =App\Model\TestSeoTag::where('seo_page_id',$Seo->id)->first();
                                        if(empty($check)){
                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=4;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=5;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=6;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=7;
                                            $TestSeoTag->content=route("news.cate",['alias'=>$alias]);
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=10;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=22;
                                            $TestSeoTag->content="summary";
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=25;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=26;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=1;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=27;
                                            $TestSeoTag->content=asset_cdn("/upload/news/big/".$T->picture);
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=9;
                                            $TestSeoTag->content=asset_cdn("/upload/news/big/".$T->picture);
                                            $TestSeoTag->save();

                                        }
                                    



                                      
                                  }
                                
                                }
                                  
                   }
                }




                //DICH VU 

                if(str_contains($a['links'],'dich-vu')){

                    $x=(explode("/",$a['links']));
                    if(!empty($x[2])){
                    $alias=$x[2];
                            $T=\App\Model\Service::where("alias",$alias)->first();
                           
                             if(!empty($T['id'])){

                                 $TUpdated= App\Model\Service::find($T['id']);
                                 $TUpdated->name=$TUpdated->name;

                                 if($TUpdated->save()){

                                    $title=mb_convert_encoding(substr($a['title'],0,70),"UTF-8");
                                    $description=mb_convert_encoding(substr($a['description'],0,170),"UTF-8");

                                      \SEO\Seo::save($TUpdated , route("service.detail",['alias'=>$alias]), [
                                                      'title' =>$title,
                                                      'description'=>$description,
                                                      'images'=>[
                                                                    asset_cdn("/upload/service/big/".$T->picture)
                                                                ],
                                                       'twitter'=>[
                                                            'title'=>$title,
                                                            'description'=>$description
                                                       ]
                                         ]);

                                        $Seo= App\Model\TestSeoPage::where('object',"App\Model\Service")->where("object_id",$T['id'])->first();
                                        $Seo->robot_index='index';
                                        $Seo->robot_follow='follow';
                                        $Seo->title=$title;
                                        $Seo->description=$description;
//                                       
                                        $Seo->save();


                                        $check =App\Model\TestSeoTag::where('seo_page_id',$Seo->id)->first();
                                        if(empty($check)){
                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=4;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=5;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=6;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=7;
                                            $TestSeoTag->content=route("service.detail",['alias'=>$alias]);
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=10;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=22;
                                            $TestSeoTag->content="summary";
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=25;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=26;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=1;
                                            $TestSeoTag->content="article";
                                            $TestSeoTag->save();

                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=27;
                                            $TestSeoTag->content=asset_cdn("/upload/service/big/".$T->picture);
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=9;
                                            $TestSeoTag->content=asset_cdn("/upload/service/big/".$T->picture);
                                            $TestSeoTag->save();

                                        }
                                    



                                      
                                  }
                                
                                }
                                  
                   }
               }
                   // TU KHOA

                    if(str_contains($a['links'],'tim-kiem')){

                    $x=(explode("/",$a['links']));
                    if(!empty($x[2])){
                            $alias=$x[2];
                            $T=\App\Model\Tag::where("alias",$alias)->first();
                           
                            if(!empty($T['id'])){

                                 $TUpdated= App\Model\Tag::find($T['id']);
                                 $TUpdated->name=$TUpdated->name;

                                 if($TUpdated->save()){

                                        $title=mb_convert_encoding(substr($a['title'],0,70),"UTF-8");
                                        $description=mb_convert_encoding(substr($a['description'],0,170),"UTF-8");

                                        \SEO\Seo::save($TUpdated , route("search.detail",['alias'=>$alias]), [
                                                      'title' =>$title,
                                                      'description'=>$description,
                                                      'images'=>[
                                                                    "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg"

                                                                ],
                                                       'twitter'=>[
                                                            'title'=>$title,
                                                            'description'=>$description
                                                       ]
                                         ]);

                                        $Seo= App\Model\TestSeoPage::where('object',"App\Model\Tag")->where("object_id",$T['id'])->first();
                                        $Seo->robot_index='index';
                                        $Seo->robot_follow='follow';
                                        $Seo->title=$title;
                                        $Seo->description=$description;
                                    
                                        $Seo->save();


                                        $check =App\Model\TestSeoTag::where('seo_page_id',$Seo->id)->first();
                                        if(empty($check)){
                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=4;
                                            $TestSeoTag->content="webpage";
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=5;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=6;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=7;
                                            $TestSeoTag->content=route("search.detail",['alias'=>$alias]);
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=10;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=22;
                                            $TestSeoTag->content="summary";
                                            $TestSeoTag->save();


                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=25;
                                            $TestSeoTag->content=$description;
                                            $TestSeoTag->save();

                                             $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=26;
                                            $TestSeoTag->content=$title;
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=1;
                                            $TestSeoTag->content="webpage";
                                            $TestSeoTag->save();

                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=27;
                                            $TestSeoTag->content= "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg";
                                            $TestSeoTag->save();


                                            $TestSeoTag=new App\Model\TestSeoTag;
                                            $TestSeoTag->seo_page_id=$Seo->id;
                                            $TestSeoTag->seo_meta_tag_id=9;
                                            $TestSeoTag->content= "MY_DOMAIN/upload/slideshow/slide_1655264152.jpg";
                                            $TestSeoTag->save();

                                        }
                                    



                                      
                                  }
                                
                            }
                                  
                   }
            }


            }


            var_dump("OK");exit;
        }


     ?>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i>  SEO for website.     ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th> Đường dẫn         </th>
                                            
                                                
                                                <th> Title   </th>
                                                 <th> Description   </th>
                                              
                                                <th> Tuỳ chọn </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                    <a href="{{$list['links']}}" target="_black">
                                                        <?php echo $list['links'];?>
                                                    </a>
                                                    
                                                            

                                                        </td>
                                                       
                                                <td>
                                                   
                                                 {{$list['title']}}
                                               
                                                </td>
                                                
                                                     <td>
                                                   
                                                 {{$list['description']}}
                                               
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href='/admin/seo/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i> Sửa </a><br />
                                                    

                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/seo/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
                                                </td>

                                            </tr>
                                           
                                           <?php endforeach;?>
                                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        {!! $data_list->appends(['search'=>$search])->render() !!}
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
     @endsection
    @section('script_js') 
        <script type="text/javascript">
            document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
            document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
            initEditor('description');
              //document.getElementById('multi_picture').addEventListener('change', handleFileSelectMulti, false);
        </script>
    @endsection