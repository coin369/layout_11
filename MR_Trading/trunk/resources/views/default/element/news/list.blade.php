
<?php $list_news= \App\Models\News::where("status",1)->orderBy("updated_at","DESC")->limit(4)->get()?>
 <section id="content" class="wow bounceInDown infox" data-wow-duration="1s" data-wow-delay="1s">
                <section class="pageTitle">
                    <div class="pageTitleIn">
                        <h2>INFORMATION<span>お知らせ</span></h2>
                    </div>
                </section>
                <div id="mainContents">

                    @foreach($list_news as $news)
                            @include("default.element.news.news")
                   @endforeach
                </div>
 </section>


            <div class="bnr">
                <a href="{{route('news.index')}}"  rel="noopener" class="imgHover07 a_more" title="お知らせの一覧を見る >>>">
                    お知らせの一覧を見る >>>
                </a>
            </div>

