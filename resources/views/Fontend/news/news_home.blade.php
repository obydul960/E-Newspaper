@extends('layouts.fontend_master')

@section('content')

<!--main menu start-->
<section id="header" class="hidden-xs m-top menu-box clearfix" >
    <div class="container">
        <div class="row">
            <div class=" main-menu2  ">
                <div class="col-md-12 col-sm-12 " >
                    <ul id="menu-li">
                        <li><a href="index.html"> হোম</a></li>
                        @foreach($main_category_up as $value)
                        <li><a href="{{URL::to('/')}}/category-details/{{$value->id}}">{{$value->category_name}}</a> </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid hidden-xs main-menu-under" id="menu-box">
        <div class="row">
            <div class=" main-menu2  ">
                <div class="col-md-12 col-sm-12 " >
                    <ul id="menu-li">
                        @foreach($main_category_down as $value)
                        <li><a href="{{URL::to('/')}}/manueDetails/{{$value->id}}">{{$value->category_name}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="header" class="container-fluid bg-shadow intr">
        <div class="row-fluid">
            <div class="brnews col-md-1 col-sm-8 col-xs-10">
                <h3>Breaking News</h3>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="br-news-text">
                    <marquee direction="left" height="322" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        @foreach($backing_news as $value)
                        <strong><a href="{{$value->back_link}}"  target="_blank"><i class="fa fa-location-arrow" aria-hidden="true"></i>{{$value->news_title}}</a></strong>
                        @endforeach

                    </marquee>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<!-menu main-under start-->


<!--mobile-menu-->
<section class=" hidden-md visible-xs main-menu5">
    <div class="col-md-12 col-sm-12 ">
        <div class=" ">
            <ul class="menuzord-menu border-tb hidden-xs " id="menu-list5">
                <li><a href="index.php" class="current">  হোম</a></li>
                @foreach($main_category_down as $value)
                <li><a href="{{URL::to('/')}}/category-details/{{$value->id}}">{{$value->category_name}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!--slide-->
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 gird-2 slider-h clearfix" style="">
                <div class="col-md-6 col-sm-12 main-slider">
                    <div id="" class="slider-pro slider_vedio  bg-shadow" style="padding: 7px;">
                        <div class="sp-slides" >
                            <div class="sp-slide">
                                <img class="sp-image"
                                     src="Src/fortend_news/image/slider/image4_medium.jpg"
                                     data-src="Src/fortend_news/image/slider/image4_medium.jpg"
                                    />

                                <p class="sp-layer sp-black sp-padding"
                                   data-position="bottomLeft" data-vertical="0" data-width="100%"
                                   data-show-transition="up">
                                    লাইকা ক্যামেরার ‘পি৯’ উন্মোচন করলো হুয়াওয়ে-রবি
                                </p>
                            </div>
                            <div class="sp-slide">
                                <img class="sp-image"
                                     src="Src/fortend_news/image/slider/image4_medium.jpg"
                                     data-src="Src/fortend_news/image/slider/image4_medium.jpg"
                                    />

                                <p class="sp-layer sp-black sp-padding"
                                   data-position="bottomLeft" data-vertical="0" data-width="100%"
                                   data-show-transition="up">
                                    লাইকা ক্যামেরার ‘পি৯’ উন্মোচন করলো হুয়াওয়ে-রবি
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!--end slider-->

                <div class="col-md-4 col-sm-12 ">
                    <div class="slider-h-tab">
                        <div class="bg-shadow">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home"> শীর্ষ খবর</a></li>
                                <li><a data-toggle="tab" href="#menu1">নির্বাচিত</a></li>
                            </ul>

                            <div class="tab-content" >
                                <div id="home" class="tab-pane fade in active">
                                    <ul class="top_news" style="padding: 10px;">
                                        <li>
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-2.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-5.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content cata-content-right">
                                                    <h4 class="media-heading cata-list-right" ><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-6.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-7.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="news-navigation">
                                        <a href="#" class="news-next bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                        <a href="#" class="news-prev bg-shadow"><i class="fa fa-chevron-down"></i></a>
                                    </div>
                                </div>


                                <div id="menu1" class="tab-pane fade">
                                    <ul class="selected_news" style="padding: 10px;">
                                        <li>
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-2.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-9.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content cata-content-right">
                                                    <h4 class="media-heading cata-list-right" ><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-8.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr style="margin-top: 10px;">
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="Src/fortend_news/image/slider/small_image-7.jpg" alt="...">
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="#">১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট</a></h4>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="news-navigation">
                                        <a href="#" class="news-next1 bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                        <a href="#" class="news-prev1 bg-shadow"><i class="fa fa-chevron-down"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="bg-shadow add-h-body-top">
                        <img src="Src/fortend_news/image/add/add-2.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                    <h3 class="populer-news-text-section" style=" width: 50px;">
                        <a href="#" title="Game News"><span>জাতীয়</span></a>
                    </h3>
                    <hr class="cata-title-border">
                    <div class="col-md-6 col-sm-12  gird-2 ">
                        <div class="left ">
                            <article class="catagory-section ca-pg-img">
                                <img src="Src/fortend_news/image/content-image/national-big-2.jpg" class="img-responsive" alt="">
                                <div class="cata-content">
                                    @foreach($national_news as $value)
                                    <h4 class="catagory-title1 cata-content-right h-ca">
                                        <a href="{{ url('fontend-details')}}/{{ $value->main_category}}">{{ $value->news_title}}</a>
                                    </h4>
                                    @endforeach
                                </div>
                            </article>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12  gird-2">
                        <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                            <ul id="national-h">
                                @foreach($national_news_2nd as $value)
                                <li>
                                    <div class="media right-Selected-body" style="margin-top: 10px;">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="image_folder/{{$value->image}}" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body cata-content">
                                            <h4 class="media-heading"><a href="#">{{ $value->news_title}}</a></h4>

                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <div id="news-navigation">
                            <a href="#" id="news-next-national" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                            <a href="#" id="news-prev-national" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <!--end national-->
                </div>
            </div><!--populer news-->
            <div class="col-md-3 col-sm-12 middle_section">
                <div class="bg-shadow job-h-section" >
                    <h3 class="populer-news-text-section" style=" width: 50px;">
                        <a href="#" title="Game News"><span>চাকুরী </span></a>
                    </h3>
                    <hr class="cata-title-border">
                    <div class="news-wrapper right-content job-h-section  bg-shadow" style="height: 262px;">
                        <ul id="job-h">
                            @foreach($job_query as $value)
                            <li>
                                <h4><a href="#">{{ $value->news_title}}</a></h4>
                                <p>{{$value->short_details}}</p>

                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="news-navigation">
                        <a href="#" id="news-next-job" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                        <a href="#" id="news-prev-job" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>

            </div>
            <!--add right-->
            <div class="col-md-3 hidden-sm hidden-xs right-section">
                <div class="right-add" style="">
                    <a href="#"><img src="Src/fortend_news/image/add/banner_01.jpg"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- left add section-->

<section>
    <div class="container">
        <div class="row">
            <div id="home-middle">
                @foreach($home_view_category as $value)
                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="#" title="Game News"><span>{{$value->category_name}}/{{$value->id}}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                <article class="catagory-section ca-pg-img">
                                    <img src="Src/fortend_news/image/content-image/Entertainment-1.jpg" class="img-responsive" alt="">
                                    <div class="cata-content">
                                        @foreach(App\Model\NewsModel::all() as $value)

                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="#">{!! $value->news_title !!}</a>
                                        </h4>
                                        @endforeach
                                    </div>
                                </article>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                                <ul id="international-h">
                                    <li>
                                        <div class="media right-Selected-body">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="image_folder/{{$value->image}}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="#">{{$value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="media right-Selected-body">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="image_folder/{{$value->image}}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body cata-content cata-content-right">
                                                <h4 class="media-heading cata-list-right" ><a href="#">{{$value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="media right-Selected-body">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="image_folder/{{$value->image}}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="#">{{$value->news_title}}</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="media right-Selected-body">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="image_folder/{{$value->image}}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="#">{{$value->news_title}}</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div id="news-navigation">
                                <a href="#" id="news-next-international" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" id="news-prev-international" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <!--end international-->
                    </div>
                </div>

                @endforeach


                <!--end sport-->
            </div>
        </div>
    </div>
</section>
@endsection