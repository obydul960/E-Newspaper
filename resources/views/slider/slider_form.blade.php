@extends('layouts.master')

@section('content')


<!------ slider image form and show table by obydul date 24-7-16 ------->
<div class="row-fluid">
    <div class="span12">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Slider Image Form</div>
                <div class="pull-right"><span class="badge badge-info"></span></div>
            </div>
            <div class="block-content collapse in">
              <!--  @include('toast::messages')-->
                <div class="block-content collapse in">
                    {!! Form::open(['url'=>'slider-slider-image-store','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                    <fieldset>
                        <div class="control-group">
                            {!! Form::label('Image Title','',['class'=>'control-label','for'=>'typeahead'])!!}
                            <div class="controls">
                                {!! Form::text('image_title','',['class'=>'span10','id'=>'typeahead'])!!}
                            </div>
                        </div>
                        <div class="control-group">
                            {!! Form::label('Image','',['class'=>'control-label','for'=>'typeahead'])!!}
                            <div class="controls">
                                {!! Form::file('picture','',['class'=>'span10','id'=>'typeahead'])!!}
                            </div>
                        </div>
                        <div class="control-group">
                            {!! Form::label('Back Link','',['class'=>'control-label','for'=>'typeahead'])!!}
                            <div class="controls">
                                {!! Form::text('back_link','',['class'=>'span10','id'=>'typeahead'])!!}
                            </div>
                        </div>
                        <div class="form-actions">
                            {!! Form::submit('Save Changes',['class'=>'btn btn-primary','id'=>'userProfileForm'])!!}
                            {!! Form::reset('Cancel',['class'=>'btn'])!!}
                        </div>
                    </fieldset>
                    {!! Form::close()!!}

                </div>
            </div>
            </div>
        </div>
    </div>
<!-----slider image show and edit delete by obydul date:27-7-16 ---->
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Bootstrap dataTables with Toolbar</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">


                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider_show as $value)
                    <tr>
                        {!! Form::open(['url' =>['slider-slider-update',$value->id],'class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true ]) !!}
                        <fieldset>
                            <td>
                                <img style="width:150px;height:150px; margin: 0px auto" src="Slider_image/{{$value->image}}">
                                <input type="file" name="picture" value="" class="span4" id="typeahead">
                            </td>
                            <td><input type="text" name="image_title" value="{{ $value->image_title }}" class="span12" id="typeahead"></td>
                            <td><input type="text" name="image_link" value="{{ $value->back_link }}" class="span12" id="typeahead"></td>
                            <td><input type="submit" value="Update" class="btn btn-success"></td>
                        </fieldset>
                        {!! Form::close() !!}
                        <td><a class="btn btn-danger" href="{{ url('sub-category-delete')}}/{{$value->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>

<!---- Flash message --->

<script type="text/javascript">

    $(document).ready(function () {
        $(".sidebar-panel nav li").removeClass("active");
        $('#emply').addClass('active');
    });


</script>

<script type="text/javascript">

    $(document).ready(function () {
        $(".sidebar-panel nav li").removeClass("active");
        $('#empsalary').addClass('active');
        // $('.nav li ul ').slideUp();
        $(".expandsalary").slideDown();
    });


</script>

@endsection