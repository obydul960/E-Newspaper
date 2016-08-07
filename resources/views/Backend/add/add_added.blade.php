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
@endsection