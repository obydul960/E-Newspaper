@extends('layouts.master')

@section('content')
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">ADD Form</div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            {!! Form::open(['url'=>'add-store','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

            <fieldset>
                    <div class="control-group">
                        <label class="control-label required" for="typeahead"> Title </label>
                        <div class="controls">
                            <input type="text" name="add_title" class="span6 required" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="typeahead"> Image </label>
                        <div class="controls">
                            <input type="file"  name="add_image" class="span6 required" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="typeahead"> Link </label>
                        <div class="controls">
                            <input type="text" name="back_link" class="span6 required" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="typeahead"> Position </label>
                        <div class="controls">
                            <select name="add_position">
                                <option>Select</option>
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
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="val_fomr" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
</div>
<!-- /block -->
</div>
<hr>
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
                        <th>Position</th>
                        <th rowspan="2">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($show_add as $value)
                    <tr>
                        {!! Form::open(['url' =>['add-update',$value->id],'class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true ]) !!}
                        <fieldset>
                            <td>
                                <img style="width:150px;height:150px; margin: 0px auto" src="image_folder/{{$value->add_image}}">
                                <input type="file" name="image_add" value="{{ $value->add_image }}" class="span4" id="typeahead">
                            </td>
                            <td><input type="text" name="add_title" value="{{ $value->add_title }}" class="span12" id="typeahead"></td>
                            <td><input type="text" name="back_link" value="{{ $value->back_link }}" class="span12" id="typeahead"></td>
                            <td>
                                <select name="add_position">
                                    <option selected>{{ $value->position }}</option>
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
                            </td>
                            <td> <input type="submit"  value="Update" class="btn btn-success" data-photo-id="{{$value->id}}"></td>
                        </fieldset>
                        {!! Form::close() !!}
                        <td>
                            <button class=" btn btn-danger slider-delete" data-item-id="{{$value->id}}">Delete</button>

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
@endsection