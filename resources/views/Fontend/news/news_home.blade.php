@extends('layouts.fontend_master')
@section('content')
<!--slide-->
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 gird-2 slider-h clearfix" style="">
                <div class="col-md-6 col-sm-12 main-slider">
                    <div id="" class="slider-pro slider_vedio  bg-shadow" style="padding: 7px;">
                        <div class="sp-slides" >
                            @foreach($slider_image as $value)
                            <div class="sp-slide">
                                <img class="sp-image"
                                     src="{{URL::to('/')}}/Slider_image/{{$value->image}}"
                                     data-src="{{URL::to('/')}}/Slider_image/{{$value->image}}"
                                    />
                                <p class="sp-layer sp-black sp-padding"
                                   data-position="bottomLeft" data-vertical="0" data-width="100%"
                                   data-show-transition="up">
                                   <a href="{{$value->back_link}}" target="_blank" style="color: #ffffff">{{ $value->image_title}}</a>
                                </p>
                            </div>
                            @endforeach
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
                                        @foreach($hid_news as $topNews)
                                        <li>
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="{{ url('news-details')}}/{{ $topNews->news_id }}">
                                                        @if($topNewsImage=App\Model\ImageModel::where('news_id','=',$topNews->news_id)->first())
                                                        <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$topNewsImage->image}}" alt="...">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $topNews->news_id }}">{{ $topNews->news_title}}</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="news-navigation">
                                        <a href="#" class="news-next bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                        <a href="#" class="news-prev bg-shadow"><i class="fa fa-chevron-down"></i></a>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <ul class="selected_news" style="padding: 10px;">
                                        @foreach($selected_news as $selectNews)
                                        <li>
                                            <div class="media right-Selected-body">
                                                <div class="media-left">
                                                    <a href="{{ url('news-details')}}/{{ $selectNews->news_id }}">
                                                        @if($img=App\Model\ImageModel::where('news_id','=',$selectNews->news_id)->first())
                                                        <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="media-body cata-content">
                                                    <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $selectNews->news_id }}">{{ $selectNews->news_title }}</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
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
                        @foreach($selected_add as $value)
                        <img src="{{URL::to('/')}}/image_folder/{{$value->add_image}}" class="img-responsive">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            @if(count($viewHomePage1)>0)

            <div class="col-md-6 col-sm-12">
                <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                    <h3 class="populer-news-text-section" style=" width: 50px;">
                        <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage1->id}}" title="Game News"><span>{{ $viewHomePage1->category_name}}</span></a>
                    </h3>
                    <hr class="cata-title-border">
                    <div class="col-md-6 col-sm-12  gird-2 ">
                        <div class="left ">
                            <article class="catagory-section ca-pg-img">

                                @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage1->id)->where('published','=',1)->take(1)->orderBy('id','desc')->get() as $national)

                                  @if($img=App\Model\ImageModel::where('news_id','=',$national->news_id)->first())
                               <a href="{{ url('news-details')}}/{{ $national->news_id }}"> <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt=""></a>
                                @endif
                                <div class="cata-content">
                                    <!-- details code -->
                                    <h4 class="catagory-title1 cata-content-right h-ca">
                                        <a href="{{ url('news-details')}}/{{ $national->news_id }}">{{ $national->news_title}}</a>
                                    </h4>
                                </div>
                                  @endforeach
                            </article>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12  gird-2">
                        <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                            <ul id="national-h">
                                @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage1->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)

                                <li>
                                    <div class="media right-Selected-body" style="margin-top: 10px;">
                                        <div class="media-left">
                                          @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                             <a href="{{ url('news-details')}}/{{ $value->news_id }}">
                                                <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                            </a>
                                              @endif
                                        </div>
                                        <div class="media-body cata-content">
                                            <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>

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
            </div>
            @endif
            @if(count($viewHomePage2)>0)

            <!--populer news-->
            <div class="col-md-3 col-sm-12 middle_section">
                <div class="bg-shadow job-h-section" >
                    <h3 class="populer-news-text-section" style=" width: 50px;">
                        <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage2->id}}" title="Game News"><span>{{$viewHomePage2->category_name }} </span></a>
                    </h3>




                    <hr class="cata-title-border">
                    <div class="news-wrapper right-content job-h-section  bg-shadow" style="height: 262px;">
                        <ul id="job-h">


                            @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage2->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)
                            <li>
                                <h4><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>
                                <p>{!! $value->short_details !!}</p>
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
            @endif
            <!--add right-->
            <div class="col-md-3 hidden-sm hidden-xs right-section">
                <div class="right-add" style="">
                    @foreach($selected_add_two as $value)
                    <img src="{{URL::to('/')}}/image_folder/{{$value->add_image}}" class="img-responsive">
                    @endforeach
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
                @if(count($viewHomePage3)>0)

                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage3->id}}" title="Game News"><span>{{ $viewHomePage3->category_name }}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                <article class="catagory-section ca-pg-img">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage3->id)->where('published','=',1)->take(1)->orderBy('id','desc')->get() as $value)

                                    @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                    <a href="{{ url('news-details')}}/{{ $national->news_id }}"> <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt=""></a>
                                    @endif
                                    <div class="cata-content">
                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="{{ url('news-details')}}/{{ $national->news_id }}">{{ $value->news_title}}</a>
                                        </h4>
                                    </div>
                                    @endforeach
                                </article>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">

                                <ul id="international-h">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage3->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)

                                    <li>
                                        <div class="media right-Selected-body" style="margin-top: 10px;">
                                            <div class="media-left">
                                                @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                                <a href="{{ url('news-details')}}/{{ $value->news_id }}">
                                                    <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

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
                @endif
                @if(count($viewHomePage4)>0)

                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage4->id}}" title="Game News"><span>{{ $viewHomePage4->category_name }}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                <article class="catagory-section ca-pg-img">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage4->id)->where('published','=',1)->take(1)->orderBy('id','desc')->get() as $value)

                                    @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                   <a href="{{ url('news-details')}}/{{ $national->news_id }}"> <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt=""></a>
                                    @endif
                                    <div class="cata-content">
                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="{{ url('news-details')}}/{{ $national->news_id }}">{{ $value->news_title}}</a>
                                        </h4>
                                    </div>
                                    @endforeach
                                </article>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                                <ul id="sport-h">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage4->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)

                                    <li>
                                        <div class="media right-Selected-body" style="margin-top: 10px;">
                                            <div class="media-left">
                                                @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                                <a href="{{ url('news-details')}}/{{ $value->news_id }}">
                                                    <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div id="news-navigation">
                                <a href="#" id="news-next-sport" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" id="news-prev-sport" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                <!--end sport-->
            </div>
        </div>
    </div>
</section>
<!--end international+sport-->
<!--start entertainment+carrier-->



<section>
    <div class="container">
        <div class="row">
            <div id="home-middle">
                @if(count($viewHomePage5)>0)

                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage5->id}}" title="Game News"><span>{{ $viewHomePage5->category_name }}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                <article class="catagory-section ca-pg-img">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage5->id)->where('published','=',1)->take(1)->orderBy('id','desc')->get() as $value)

                                    @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                    <a href="{{ url('news-details')}}/{{ $national->news_id }}"> <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt=""></a>
                                    @endif
                                    <div class="cata-content">
                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="{{ url('news-details')}}/{{ $national->news_id }}">{{ $value->news_title}}</a>
                                        </h4>
                                    </div>
                                    @endforeach
                                </article>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">

                                <ul id="international-h">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage5->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)

                                    <li>
                                        <div class="media right-Selected-body" style="margin-top: 10px;">
                                            <div class="media-left">
                                                @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                                <a href="{{ url('news-details')}}/{{ $value->news_id }}">
                                                    <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div id="news-navigation">
                                <a href="#" id="news-next-entertainment" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" id="news-prev-entertainment" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <!--end international-->
                    </div>
                </div>
                @endif

               @if(count($viewHomePage6)>0)

                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="{{URL::to('/')}}/category-news-details/{{$viewHomePage6->id}}" title="Game News"><span>{{ $viewHomePage6->category_name }}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                <article class="catagory-section ca-pg-img">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage6->id)->where('published','=',1)->take(1)->orderBy('id','desc')->get() as $value)

                                    @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                    <a href="{{ url('news-details')}}/{{ $value->news_id }}"><img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt=""></a>
                                    @endif
                                    <div class="cata-content">
                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a>
                                        </h4>
                                    </div>
                                    @endforeach
                                </article>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                                <ul id="sport-h">
                                    @foreach($v=App\Model\NewsModel::where('main_category','=',$viewHomePage6->id)->where('published','=',1)->orderBy('id','desc')->get() as $value)

                                    <li>
                                        <div class="media right-Selected-body" style="margin-top: 10px;">
                                            <div class="media-left">
                                                @if($img=App\Model\ImageModel::where('news_id','=',$value->news_id)->first())
                                                <a href="{{ url('news-details')}}/{{ $value->news_id }}">
                                                    <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $value->news_id }}">{{ $value->news_title}}</a></h4>

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div id="news-navigation">
                                <a href="#" id="news-next-entertainment" class="bg-shadow"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" id="news-prev-entertainment" class="bg-shadow"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                @endif



                <!--end sport-->
            </div>
        </div>
    </div>
</section>

@endsection
