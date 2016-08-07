@include("Backend.include.admin_header")
@include("Backend.include.admin_left_nav")


<div class="row-fluid">
    <!-- block -->
    @yield('content')
    <!-- /block -->
</div>


@include("Backend.include.admin_footer")
@include('Backend.include.javascript_code')