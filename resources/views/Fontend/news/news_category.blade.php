@extends('layouts.fontend_master')

@section('content')
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 gird-2 m-top ca-gird clearfix" >
                <div class="col-md-12">
                    <ol class="breadcrumb catagory-breadcrumb bg-shadow">
                        <li class="active">
                            @if($category=App\Model\CategoryModel::where('id','=',$id)->first())
                            {{ $category->category_name }}
                            @endif
                        </li>
                    </ol>
                </div>
                <!-- left add section-->
                <div id="home-middle">
                    <div class="col-md-12 m-top gird-2 clearfix">
                        @foreach($category=App\Model\NewsModel::where('main_category','=',$id)->take(2)->orderBy('id','desc')->get() as $details)
                        <div class="col-md-6 ">
                            <div class="left bg-shadow">
                                <article class="catagory-section">
                                    @if($img=App\Model\ImageModel::where('news_id','=',$details->news_id)->first())
                                    <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsives" alt="shutterstock_58382248" height="177" width="371">
                                    @endif
                                    <div class="cata-page-content">
                                        <h4 class="catagory-title">
                                            <a href="{{ url('news-details')}}/{{ $details->news_id }}" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">{{ $details->news_title }}</a>
                                        </h4>
                                    </div>
                                </article>
                                <!--<hr style="margin-top: 10px;">-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--main-category-section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div id="home-middle">
                @foreach($viewSubcategory as $sub_category)
                @if($img=App\Model\NewsModel::where('sub_category','=',$sub_category->id)->first() )
                <div class="col-md-6 col-sm-12 m-top clearfix">
                    <div class="  clearfix mo-en-sp cata-ho bg-shadow">
                        <h3 class="populer-news-text-section" style=" width: 50px;">
                            <a href="#" title="Game News"><span>{{ $sub_category->sub_cat_name }}</span></a>
                        </h3>
                        <hr class="cata-title-border">
                        <div class="col-md-6 col-sm-12  gird-2 ">
                            <div class="left ">
                                @foreach($v=App\Model\NewsModel::where('sub_category','=',$sub_category->id)->take(1)->orderBy('id','desc')->get() as $subCat)
                                <article class="catagory-section ca-pg-img">
                                    @if($img=App\Model\ImageModel::where('news_id','=',$subCat->news_id)->first())
                                    <img src="{{URL::to('/')}}/image_folder/{{$img->image}}" class="img-responsive" alt="">
                                    @endif
                                    <div class="cata-content">
                                        <h4 class="catagory-title1 cata-content-right h-ca">
                                            <a href="{{ url('news-details')}}/{{ $subCat->news_id }}">{!! $subCat->news_title !!}</a>
                                        </h4>
                                    </div>
                                </article>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12  gird-2">
                            <div class="news-wrapper right-content  bg-shadow" style="height: 262px;">
                                <ul id="international-h">
                                    @foreach($v=App\Model\NewsModel::where('sub_category','=',$sub_category->id)->orderBy('id','desc')->get() as $subCat)
                                    <li>
                                        <div class="media right-Selected-body">
                                            <div class="media-left">
                                                @if($img=App\Model\ImageModel::where('news_id','=',$subCat->news_id)->first())
                                                <a href="{{ url('news-details')}}/{{ $subCat->news_id }}">
                                                    <img class="media-object" src="{{URL::to('/')}}/image_folder/{{$img->image}}" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="media-body cata-content">
                                                <h4 class="media-heading"><a href="{{ url('news-details')}}/{{ $subCat->news_id }}">{{$subCat->news_title}}</a></h4>
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
             @endforeach

                <!--end sport-->
            </div>
        </div>
    </div>
</section>
<!--end international+sport-->
<!--start entertainment+carrier-->

@endsection