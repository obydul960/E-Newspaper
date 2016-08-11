@extends('layouts.master')
@section('content')
<!----Main category add form and show table---->
    <div class="row-fluid">
        <div class="span6">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Main Category Form</div>
                    <div class="pull-right"><span class="badge badge-info"></span></div>
                </div>
                <div class="block-content collapse in">
                    <div class="block-content collapse in">
                        {!! Form::open(['url' => 'category-store','class'=>'form-horizontal' ]) !!}
                        <fieldset>
                            <div class="control-group">
                                {!! Form::label('Main Category Name','',['class'=>'control-label','for'=>'contact_name'])!!}
                                <div class="controls">
                                    {!! Form::text('main_category_name','',['class'=>'span12','id'=>'contact_name'])!!}
                                    @foreach($errors->get('main_category_name') as $error)
                                    <b><span style="color: red">{{ $error }}</span></b>
                                    @endforeach

                                </div>
                            </div>
                            <div class="form-actions">
                                {!! Form::submit('Save',['class'=>'btn btn-primary','id'=>'userProfileForm'])!!}
                                {!! Form::reset('Cancel',['class'=>'btn btn-danger'])!!}
                            </div>
                        </fieldset>
                        {!! Form::close()!!}

                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
        <div class="span6">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Main category table</div>
                    <div class="pull-right"><span class="badge badge-info"></span>

                    </div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Main Category Name</th>
                            <th>Home page view</th>
                            <th>Up & Down</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_category as $value)
                        <tr>
                            <td>{{ $value->category_name}}</td>
                            <td>
                                {!!Form::open(['url'=>['home-store',$value->id],'class'=>'form-horizontal'])!!}
                                <select name="main_category_show" onchange='this.form.submit()' style="width: 100%">
                                    <option selected>{{ $value->view_status }}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                {!!Form::close()!!}
                            </td>
                            <td>
                                {!!Form::open(['url'=>['up-down-store',$value->id],'class'=>'form-horizontal'])!!}
                                <select name="up_down" onchange='this.form.submit()' style="width: 100%">
                                    <option selected>
                                        @if($value->status == 1)
                                        Up
                                        @elseif($value->status == 2)
                                        Down
                                        @elseif($value->status == 0)
                                        Nan
                                        @endif
                                    </option>
                                    <option value="1">Up</option>
                                    <option value="2">Down</option>
                                    <option value="0">Nan</option>
                                </select>
                                {!!Form::close()!!}
                            </td>
                            <td>
                                <button id="main_category_delete" class=" btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>

                    </table>
                    <ul class="pagination">
                        <li>{{$main_category->render() }}</li>
                    </ul>
                </div>


            </div>
            <!-- /block -->
        </div>
    </div>



<!---- Sub category add and show table ---->
<hr>
<div class="row-fluid">
    <div class="span6">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Sub Category Form</div>
                <div class="pull-right"><span class="badge badge-info"></span></div>
            </div>
            <div class="block-content collapse in">
                <div class="block-content collapse in">
                    {!! Form::open(['url' => 'sub-category-store','class'=>'form-horizontal' ]) !!}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="select01">Select Main Category list</label>
                            <div class="controls">
                                <select id="select01" name="min_category_id" class="chzn-select span10">
                                   <option>Select once..</option>
                                    @foreach($main_category_show as $value)
                                    <option value="{{$value->id}}">{{$value->category_name}}</option>
                                    @endforeach
                                </select>
                                @foreach($errors->get('min_category_id') as $error)
                                <b><span style="color: red">{{ $error }}</span></b>
                                @endforeach
                            </div>
                        </div>
                        <div class="control-group">
                            {!! Form::label('Sub Category Name','',['class'=>'control-label','for'=>'typeahead'])!!}
                            <div class="controls">
                                {!! Form::text('sub_category_name','',['class'=>'span10','id'=>'typeahead'])!!}

                                @foreach($errors->get('sub_category_name') as $error)
                                <b><span style="color: red">{{ $error }}</span></b>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-actions">
                            {!! Form::submit('Save',['class'=>'btn btn-primary','id'=>'userProfileForm'])!!}
                            {!! Form::reset('Cancel',['class'=>'btn btn-danger'])!!}
                        </div>
                    </fieldset>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>
    <div class="span6">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Main category table</div>
                <div class="pull-right"><span class="badge badge-info"></span>

                </div>
            </div>
            <div class="block-content collapse in">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                    <thead>
                    <tr>
                        <th>Main category Name</th>
                        <th>Sub category Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sub_category as $value)
                    <tr class="odd gradeX">
                        {!! Form::open(['url' =>['sub-category-update',$value->id],'class'=>'form-horizontal','method'=>'post' ]) !!}
                            <fieldset>
                                <td><input type="text" name="main_category" value="{{ $value->category_name }}" class="span12" id="typeahead"></td>
                                <td><input type="text" name="sub_category" value="{{ $value->sub_cat_name }}" class="span12" id="typeahead"></td>
                                <td><input type="submit" value="Update" class="btn btn-success"></td>

                            </fieldset>
                       {!! Form::close() !!}

                        <td>
                            <button class="sub-category-delete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="pagination">
                    <li>{{$main_category->render() }}</li>
                </ul>
            </div>
        </div>
        <!-- /block -->
    </div>
</div>
<!--- Swite message show  delete form main category  by obydul date:28-7-16-->
<script>
    $('button#main_category_delete').click(function() {
        var itemId = $(this).attr("data-item-id");

        deletec(itemId);
    });
    function deletec(itemId) {

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
                url: "/category-delete/" + itemId,
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