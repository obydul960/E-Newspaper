@include("Backend.include.admin_header")
<div class="container-fluid">
<div class="row-fluid">
<div class="span12" id="content">
<div class="row-fluid">
    <!-- block -->
    @yield('content')
    <!-- /block -->
</div>
    </div>
    </div>


@include("Backend.include.admin_footer")
@include('Backend.include.javascript_code')