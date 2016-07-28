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

                            <td> <input type="submit"  value="Update" class="btn btn-success" data-photo-id="{{$value->id}}"></td>
                        </fieldset>
                        {!! Form::close() !!}
                        <td>
                            <button class="delete-item btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                        </td>

                    </tr>
                    @endforeach
                    <!--- Swite message show  delete by obydul date:28-7-16-->
                    <script>
                        $('button.delete-item').click(function() {
                            var itemId = $(this).attr("data-item-id");
                            deletePhoto(itemId);
                        });
                        function deletePhoto(itemId) {
                            swal({
                                title: "Are you sure?",
                                text: "Are you sure that you want to delete this Item ?",
                                type: "warning",
                                showCancelButton: true,
                                closeOnConfirm: false,
                                confirmButtonText: "Yes, delete it!",
                                confirmButtonColor: "#ec6c62"
                            }, function() {
                                $.ajax({
                                    method: "GET",
                                    url: "/slider-slider-delete/" + itemId,
                                    type: "DELETE"
                                })
                                    .done(function(data) {
                                        swal("Deleted!", "Your item was successfully deleted!", "success");
                                    })
                                    .error(function(data) {
                                        swal("Oops", "We couldn't connect to the server!", "error");
                                    });
                            });
                        }
                    </script>


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