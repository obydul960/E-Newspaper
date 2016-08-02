@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"> News Form</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                {!! Form::open(['url'=>'news-contain-store','id'=>'register-form','class'=>'form-horizontal','method'=>'post','enctype' => 'multipart/form-data','files'=>true])!!}

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead"> Titli </label>
                            <div class="controls">
                                <input type="text" name="news_title" class="span6" id="typeahead">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select01">Main Category</label>
                            <div class="controls">
                                <select name="sel_min_category" id="select01" class="main_category">
                                    <option>Select....</option>
                                    @foreach($min_category_show as $value)
                                    <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select01">Select Sub-Category</label>
                            <div class="controls">
                                <select name="sel_sub_category" id="select01" class="sub_category">
                                    <option>First select main category</option>
                                    <script>
                                        $(document).ready(function () {
                                            $('.main_category').change(function () {
                                                var category = $(this).val();
                                                //alert(category);
                                                $.ajax({
                                                    method: "GET",
                                                    url: "/news-category-show",
                                                    data: {sub_category: category}
                                                })
                                                    .success(function (response) {
                                                       // alert(response);
                                                        $('.sub_category').html(response);
                                                    });

                                            });
                                        });
                                    </script>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image Upload</label>
                            <div class="controls">
                                <input name="news_image" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="span12" id="content">
                                <div class="row-fluid">
                                    <!-- block -->
                                    <div class="block">
                                        <div class="navbar navbar-inner block-header">
                                            <div class="muted pull-left">CKEditor Full</div>
                                        </div>
                                        <div class="block-content collapse in">
                                            <textarea name="news_content" id="ckeditor_full"></textarea>
                                        </div>
                                    </div>
                                    <!-- /block -->
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
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