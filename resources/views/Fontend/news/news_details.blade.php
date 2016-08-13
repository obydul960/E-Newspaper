@extends('layouts.fontend_master')

@section('content')
<!--marquee & search-->
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 gird-2 m-top ca-gird" >
                <div class="col-md-9 gird-2">
                    <div class="col-md-12">
                        <ol class="breadcrumb catagory-breadcrumb bg-shadow">
                            <li><a href="{{URL::to('/')}}">হোম</a></li>
                            <li><a href="#">{{$main_category->category_name}}</a></li>
                        </ol>
                    </div>
                    <!-- left add section-->
                    <div id="home-middle">
                        <div class="col-md-12 m-top ">
                            <div class="left bg-shadow cata-det-section">
                                <article class="de-catagory-section">
                                    <div class="cata-det-heading">
                                        <h4 class="de-catagory-title">
                                            <a href="#">{{ $news_details->news_title }} </a>
                                        </h4>
                                        <h6 style="font-weight: 600; color: rgb(137, 135, 135);font-size: 13px;">{{ $news_details->editor }}</h6>
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>{{date("F j, Y, g:i a",strtotime($news_details->created_at))}} </span>
                                        <hr class="details-post-hr">
                                    </div>
                                    <div class="de-content-se text-center">
                                        <img src="{{URL::to('/')}}/image_folder/{{$news_details->image}}" class="img-responsives" alt="shutterstock_58382248" height="177" width="371">
                                        <p>{!! $news_details->full_details !!}</p>
                                    </div>
                                </article>
                                <hr class="details-post-hr ">
                                <div class="social-icon text-center">
                                    <div class="ssk-group pull-left">
                                        <a href="https://www.facebook.com" target="_blank" class="ssk ssk-facebook"></a>
                                        <a href="" class="ssk ssk-twitter"  ></a>
                                        <a href="" class="ssk ssk-google-plus"   ></a>
                                        <a href="" class="ssk ssk-pinterest" ></a>
                                        <a href="" class="ssk ssk-tumblr"></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--related post-->
                        <div class="col-md-12">
                            <div class="bg-shadow m-top">
                                <h3 class="populer-news-text-section" style="width: 120px;"><span>সম্পর্কিত সংবাদ</span></h3>
                                <hr class="">
                                <div class="col-md-12">
                                    @foreach($related_news=App\Model\NewsModel::where('main_category','=',$news_details->main_category)->where('published','=',1)->orderBy('id','desc')->get() as $relatedNews)
                                    <div class="col-md-6">
                                        <div class="media catagory-thememail-section">
                                            <div class="media-left">

                                                    @if($reNews=App\Model\ImageModel::where('news_id','=',$relatedNews->news_id)->first())
                                                    <a href="{{ url('news-details')}}/{{ $relatedNews->news_id }}">
                                                        <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$reNews->image}}" alt="...">
                                                    </a>
                                                    @endif

                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $relatedNews->news_id }}">{{ $relatedNews->news_title }}</a></h4>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 10px;">
                                    </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gird-2 ">
                    <br><br>
                    <div class="col-md-12 m-top gird-2">
                        <div class="add-rightside-1">
                            @foreach($selected_add as $value)
                           <a href="{{ url('news-details')}}/{{ $value->news_id }}"> <img src="{{URL::to('/')}}/image_folder/{{$value->add_image}}" class="img-responsive"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection