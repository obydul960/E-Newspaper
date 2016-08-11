@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="block-content collapse in">
            <div class="span12">
                {!! Form::open(['url'=>'backing-news-store','id'=>'register-form','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                    <fieldset>
                        <legend>Backing News Form</legend>
                        <div class="control-group">
                            <label class="control-label required" for="typeahead">Backing News Title </label>
                            <div class="controls">
                                <input type="text" name="news_title" class="span6 required">
                                @foreach($errors->get('news_title') as $error)
                                <b><span style="color: red">{{ $error }}</span></b>
                                @endforeach
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label required" for="typeahead">Back Link</label>
                            <div class="controls">
                                <input type="text" name="back_link" class="span6 required">
                                @foreach($errors->get('back_link') as $error)
                                <b><span style="color: red">{{ $error }}</span></b>
                                @endforeach
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">News Icon</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="news_icon"  type="file">
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
                    <tr>
                        <th>News Icon</th>
                        <th>News Title</th>
                        <th>Back Link</th>
                        <th>Update</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($backing_new as $value)
                    <tr>
                        {!! Form::open(['url' =>['backing-news-update',$value->id],'class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true ]) !!}
                        <fieldset>
                            <td>
                                <img style="width:50px;height:50px; border-radius: 5px; margin: 0px auto" src="image_folder/{{$value->news_icon}}">
                                <input type="file" name="news_icon" >
                            </td>
                            <td><input type="text" name="news_title" value="{{ $value->news_title }}" class="span12" id="typeahead"></td>
                            <td><input type="text" name="back_link" value="{{ $value->back_link }}" class="span12" id="typeahead"></td>
                            <td><input type="submit" value="Update" class="btn btn-success"></td>

                        </fieldset>
                        {!! Form::close() !!}

                        <td>
                            <button class="backing-new-delete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
                        </td>
                        <td class="span2">
                            {!!Form::open(['url'=>['backing-news-show',$value->id],'class'=>'form-horizontal'])!!}
                            <select name="backing_news" class="span12" onchange='this.form.submit()' >
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
                <ul class="pagination">
                    <li>{{$backing_new->render() }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>


@endsection