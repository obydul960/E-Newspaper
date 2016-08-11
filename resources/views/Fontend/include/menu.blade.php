
<!--main menu start-->
<section id="header" class="hidden-xs m-top menu-box clearfix" >
    <div class="container">
        <div class="row">
            <div class=" main-menu2  ">
                <div class="col-md-12 col-sm-12 " >
                    <ul id="menu-li">
                        <li><a href="index.html"> হোম</a></li>
                        @foreach($main_category_up as $value)
                        <li><a href="{{URL::to('/')}}/category-news-details/{{$value->id}}">{{$value->category_name}}</a> </li>
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
                        <li><a href="{{URL::to('/')}}/manueDetails/{{$value->id}}">{{$value->category_name}}</a></li>
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