 <section class="awe-section-1">

            <div class="home-slider owl-carousel" data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
                
                @foreach($TSlide as $slide)
                <div class="item">

                    <a href="<?=$slide['links']?>" class="clearfix">
                        <div class="full_slider" style="background-image: url('<?='/upload/slideshow/'.$slide['picture']?>');"></div>
                    </a>
                </div>
                @endforeach


            </div>
            <!-- /.products -->

        </section>