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
                    {!! Form::open(['id'=>'register-form','novalidate'=>'novalidate','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                  <!--  <form action="" method="post" id="register-form" novalidate="novalidate">-->

                            <fieldset>
                                <div class="control-group fieldgroup">
                                    <label for="firstname" class="control-label">Title Name</label>
                                <div class="controls">
                                    <input type="text" name="image_title" class="span10">
                                    @foreach($errors->get('image_title') as $error)
                                    <b><span style="color: red">{{ $error }}</span></b>
                                    @endforeach
                                </div>
                                </div>

                                <div class="control-group fieldgroup">
                                    <label for="lastname" class="control-label">Image</label>
                                <div class="controls">
                                    <input type="file" name="picture" class="span10">
                                </div>
                                </div>

                                <div class="control-group fieldgroup">
                                    <label for="lastname" class="control-label">Back Link</label>
                                    <div class="controls">
                                        <input type="text" name="back_link" class="span10">
                                        @foreach($errors->get('back_link') as $error)
                                        <b><span style="color: red">{{ $error }}</span></b>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-actions ">
                                   <!-- <input type="submit" value="Register" class="submit">-->
                                    {!! Form::submit('Save Changes',['class'=>'btn btn-primary','id'=>'userProfileForm'])!!}
                                    {!! Form::reset('Cancel',['class'=>'btn'])!!}
                                </div>
                            </fieldset>
                   <!-- </form>-->
                    {!! Form::close()!!}
                </div>
            </div>
            </div>
        </div>
    </div>
<!-----slider image show and edit delete by obydul date:27-7-16 ---->
<hr>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Backing news show</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">


                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                    <thead>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Action</th>
                        <th>.</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider_show as $value)
                    <tr>
                        {!! Form::open(['url' =>['slider-update',$value->id],'class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true ]) !!}
                        <fieldset>
                            <td>
                                <img style="width:80px;height:80px;border-radius:  margin: 0px auto" src="Slider_image/{{$value->image}}">
                                <input type="file" name="picture" value="{{ $value->image }}" class="span4" id="typeahead">
                            </td>
                            <td><input type="text" name="image_title" value="{{ $value->image_title }}" class="span12" id="typeahead"></td>
                            <td><input type="text" name="image_link" value="{{ $value->back_link }}" class="span12" id="typeahead"></td>
                            <td> <input type="submit"  value="Update" class="btn btn-success" data-photo-id="{{$value->id}}"></td>
                        </fieldset>
                        {!! Form::close() !!}

                        <td>
                            <button class="slider_delete btn btn-danger " data-item-id="{{$value->id}}">Delete</button>

                        </td>
                        <td class="span2">
                            {!!Form::open(['url'=>['slider-show-store',$value->id],'class'=>'form-horizontal'])!!}
                            <select name="slider_store" onchange='this.form.submit()' style="width: 100%" class="span12">
                                <option selected>
                                    @if($value->status == 1)
                                    Yes
                                    @endif
                                    @if($value->status == 0)
                                    No
                                    @endif
                                </option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- /block -->
</div>
<!--- Swite message show  delete form slider image by obydul date:28-7-16-->
<script>
    $('button.slider_delete').click(function() {
        var itemId = $(this).attr("data-item-id");
        sliderDelete(itemId);
    });
    function sliderDelete(itemId) {
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
                url: "{{URL::to('/')}}/slider-delete/" + itemId,
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


@endsection
