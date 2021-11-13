@extends('foruser.header')
@section('konten')
<!-- Feature Carousel Section -->
<section id="feature_news_section" class="feature_news_section section_wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="feature_news_carousel">
                <div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active feature_news_item">
                            <div class="item_wrapper">
                                <div class="item_img">
                                    <img class="img-responsive" src="{{ asset('img/img-carousel1.jpg')}}" alt="Chania">
                                </div> <!--item_img-->
                                <div class="item_title_date">
                                    <div class="news_item_title">
                                        <h2><a href="single.html">Seamlessly embrace B2C catalysts for change vis-a-vis economically sound communities.</a></h2>
                                    </div>
                                    <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                </div> <!--item_title_date-->
                            </div>	<!--item_wrapper-->
                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</div>

                        </div><!--feature_news_item-->

                        <div class="item feature_news_item">
                            <div class="item_wrapper">
                                <div class="item_img">
                                    <img class="img-responsive" src="{{ asset('img/img-carousel2.jpg')}}" alt="Chania">
                                </div> <!--item_img-->
                                <div class="item_title_date">
                                    <div class="news_item_title">
                                        <h2><a href="#">Manchester United want to Back Cristiano Ronaldo natus error sit.</a></h2>
                                    </div>
                                    <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                </div> <!--item_title_date-->
                            </div> <!--item_wrapper-->

                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                            </div>

                        </div><!--feature_news_item-->


                          <!-- Left and right controls -->
                        <div class="control-wrapper">
                            <a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                            <a class="right carousel-control" href="#featured-news-carousal" role="button" data-slide="next">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div><!--carousel-inner-->
                </div><!--carousel-->
            </div><!--feature_news_carousel-->
        </div><!--col-md-6-->

        <div class="col-md-6">
            <div class="feature_news_static">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature_news_item">
                            <div class="item active">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img_feature.jpg')}}" alt="Chania">
                                    </div> <!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h2><a href="single.html">Track Roboto the Real Tracker.</a></h2>
                                        </div>
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div> <!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit
                                </div>

                            </div><!--item-->
                        </div><!--feature_news_item-->
                    </div>

                    <div class="col-md-6">
                        <div class="feature_news_item">
                            <div class="item active">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img_feature2.jpg')}}" alt="Chania">
                                    </div> <!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h2><a href="single.html">David villa change his team last year.</a></h2>
                                        </div>
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div> <!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit
                                </div>

                            </div><!--item-->
                        </div><!--feature_news_item-->
                    </div><!--col-xs-6-->
                </div><!--row-->
            </div><!--feature_news_static-->
        </div><!--col-md-6-->
    </div><!--row-->
</div><!--container-->
</section><!--feature_news_section-->

<!-- Feature Category Section & sidebar -->
<section id="feature_category_section" class="feature_category_section section_wrapper">
<div class="container">
    <div class="row">
           <div class="col-md-9">
               <div class="category_layout">
                   <div class="item_caregory red"><h2><a href="category.html">Football</a></h2></div>
                    <div class="row">
                           <div class="col-md-7">
                            <div class="item feature_news_item">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img_feature_news.jpg')}}" alt="Chania">
                                    </div><!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h2><a href="#">22Leo Messi is boss of the bosses of the football world.</a></h2>
                                        </div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div><!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                                </div><!--item_content-->

                            </div><!--feature_news_item-->
                           </div><!--col-md-7-->

                           <div class="col-md-5">
                            <div class="media_wrapper">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{ asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
                                    </div><!--media-left-->
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Machester United start the player
                                        </a></h3>

                                        <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                    </div><!--media-body-->
                                </div><!--media-->

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{ asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
                                    </div><!--media-left-->
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Machester United start the player
                                        </a></h3>

                                        <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                    </div><!--media-body-->
                                </div><!--media-->

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{ asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                                    </div><!--media-left-->
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Machester United start the player
                                        </a></h3>

                                        <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                    </div><!--media-body-->
                                </div><!--media-->

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{ asset('img/img-list4.jpg')}}" alt="Generic placeholder image"></a>
                                    </div><!--media-left-->
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Machester United start the player
                                        </a></h3>

                                        <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                    </div><!--media-body-->
                                </div><!--media-->
                            </div><!--media_wrapper-->

                           </div><!--col-md-5-->
                       </div><!--row-->
                   </div><!--category_layout-->

               <div class="category_layout">
                   <div class="item_caregory blue"><h2><a href="#">Hockey</a></h2></div>
                <div class="row">
                       <div class="col-md-7">
                        <div class="item active feature_news_item">
                            <div class="item_wrapper">
                                <div class="item_img">
                                    <img class="img-responsive" src="{{ asset('img/img-hockey.jpg')}}" alt="Chania">
                                </div><!--item_img-->
                                <div class="item_title_date">
                                    <div class="news_item_title">
                                        <h2><a href="#">Argentia ahead two step playing hockey tournament</a></h2>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                </div><!--item_title_date-->
                            </div><!--item_wrapper-->
                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                            </div>

                        </div><!--feature_news_item-->
                       </div><!--col-md-7-->

                       <div class="col-md-5">
                        <div class="media_wrapper">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list5.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list6.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list7.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list4.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->
                        </div><!--media_wrapper-->
                       </div><!--col-md-5-->
                   </div><!--row-->
               </div><!--category_layout-->

               <div class="category_layout">
                   <div class="item_caregory teal"><h2><a href="#">Tennis</a></h2></div>
                <div class="row">
                       <div class="col-md-7">
                        <div class="item active feature_news_item">
                            <div class="item_wrapper">
                                <div class="item_img">
                                    <img class="img-responsive" src="{{ asset('img/img_feature_news3.jpg')}}" alt="Chania">
                                </div><!--item_img-->
                                <div class="item_title_date">
                                    <div class="news_item_title">
                                        <h2><a href="#">Leo Messi is boss of the bosses of the football world.</a></h3>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                </div><!--item_title_date-->
                            </div><!--item_wrapper-->
                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                            </div>

                        </div><!--feature_news_item-->
                       </div><!--col-md-7-->

                       <div class="col-md-5">
                        <div class="media_wrapper">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list7.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list8.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list9.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{ asset('img/img-list4.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Machester United start the player
                                    </a></h3>

                                    <p>Sed perspiciatis unde omnis iste natus voluptatem.</p>

                                </div><!--media-body-->
                            </div><!--media-->
                        </div><!--media_wrapper-->
                       </div><!--col-md-5-->
                   </div><!--row-->
               </div><!--category_layout-->

               <div id="more_news_item" class="more_news_item">
                <div class="more_news_heading"><h2><a href="#">More News</a></h2></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature_news_item">
                            <div class="item">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img-news.jpg')}}" alt="Chania">
                                    </div><!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                        </div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div><!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit
                                </div><!--item_content-->

                            </div><!--item-->
                        </div><!--feature_news_item-->
                    </div><!--col-xs-4-->

                    <div class="col-md-4">
                        <div class="feature_news_item">
                            <div class="item active">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img-news1.jpg')}}" alt="Chania">
                                    </div><!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                        </div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div><!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit
                                </div><!--item_content-->

                            </div><!--item-->
                        </div><!--feature_news_item-->
                    </div><!--col-xs-4-->

                    <div class="col-md-4">
                        <div class="feature_news_item">
                            <div class="item active">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img class="img-responsive" src="{{ asset('img/img-news2.jpg')}}" alt="Chania">
                                    </div><!--item_img-->
                                    <div class="item_title_date">
                                        <div class="news_item_title">
                                            <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                        </div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    </div><!--item_title_date-->
                                </div><!--item_wrapper-->
                                <div class="item_content">Sed ut perspiciatis unde omnis iste natus error sit
                                </div><!--item_content-->

                            </div><!--item-->
                        </div><!--feature_news_item-->
                    </div><!--col-xs-4-->
                </div><!--row-->
            </div><!--more_news_item-->
           </div><!--col-md-9-->

           <div class="col-md-3">

            <div class="tab sitebar">
                <ul class="nav nav-tabs">
                    <li class="active"><a  href="#1" data-toggle="tab">Latest</a></li>
                    <li><a href="#2" data-toggle="tab">Populer</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="1">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Spain going to made class football</a></h4>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->

                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list5.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Spain going to made class football</a></h4>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->

                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->

                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->
                    </div><!--tab-pane-->

                    <div class="tab-pane" id="2">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list4.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->

                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="{{ asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>
                            </div><!--media-body-->
                        </div><!--media-->
                    </div><!--tab-pane-->
                </div><!--tab-content-->
            </div><!--tab-->
            <div class="most_comment">
                <div class="sidebar_title">
                    <h2>Most Commented</h2>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
                    </div><!--media-left-->
                    <div class="media-body">
                        <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                         <div class="comment_box">
                            <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                             <div class="comments"><a href="#">9 Comments</a></div>
                         </div><!--comment_box-->
                    </div><!--media-body-->
                </div><!--media-->
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
                    </div><!--media-left-->
                    <div class="media-body">
                        <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                        <div class="comment_box">
                            <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="comments"><a href="#">20 Comments</a></div>
                        </div><!--comment_box-->
                    </div><!--media-body-->
                </div><!--media-->
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                    </div><!--media-left-->
                    <div class="media-body">
                        <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                        <div class="comment_box">
                            <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="comments"><a href="#">23 Comments</a></div>
                        </div><!--comment_box-->
                    </div><!--media-body-->
                </div><!--media-->
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                    </div><!--media-left-->
                    <div class="media-body">
                        <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                        <div class="comment_box">
                            <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="comments"><a href="#">44 Comments</a></div>
                        </div><!--comment_box-->
                    </div><!--media-body-->
                </div><!--media-->
            </div><!--most_comment-->
        </div>
    </div>
</section><!--feature_category_section-->

<!-- Feature Video Item -->
<section id="feature_video_item" class="feature_video_item section_wrapper">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="feature_video_wrapper">
                <div class="feature_video_title"><h2>Featured Videos</h2></div>

                <div id="feature_video_slider" class="owl-carousel">
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video2.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video3.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video2.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                    <div class="item">
                        <div class="video_thumb"><img   src="{{ asset('img/video3.jpg')}}" alt="Owl Image"></div>
                        <div class="video_info">
                            <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the craze of Runner world</a></h3></div><!--video_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                        </div><!--video_info-->
                    </div>
                </div><!--feature_video_slider-->


            </div><!--col-xs-12-->
        </div><!--row-->
    </div><!--feature_video_wrapper-->
</div><!--container-->
</section>
@include('foruser.footer')
@endsection
