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
                                {!! Form::label('Main Category Name','',['class'=>'control-label','for'=>'typeahead'])!!}
                                <div class="controls">
                                    {!! Form::text('main_category_name','',['class'=>'span12','id'=>'typeahead'])!!}

                                     @foreach($errors->get('main_category_name') as $error)
                                    <b><span style="color: red">{{ $error }}</span></b>
                                    @endforeach

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
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_category as $value)
                        <tr>
                            <td>{{ $value->category_name}}</td>
                            <td><a class="btn btn-danger" href="{{ url('category-main-category-delete')}}/{{$value->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                                <select id="select01" name="min_category_id" class="chzn-select">

                                    @foreach($main_category as $value)
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
                                {!! Form::text('sub_category_name','',['class'=>'span12','id'=>'typeahead'])!!}

                                @foreach($errors->get('sub_category_name') as $error)
                                <b><span style="color: red">{{ $error }}</span></b>
                                @endforeach
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
                        <th>Sub category name</th>
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
                            <a class="btn btn-danger" href="{{ url('sub-category-delete')}}/{{$value->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /block -->
    </div>
</div>


@endsection