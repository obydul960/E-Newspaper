@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">News Show</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">


                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                    <thead>
                    <tr>
                        <th style="width: 20%">Image</th>
                        <th style="width: 20%">Titel</th>
                        <th style="width: 30%">Description</th>
                        <th style="width: 10%">Status</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($show_news as $value)
                    <tr>
                        <td><img style="width:80px;height:80px; margin: 0px auto" src="image_folder/{{$value->image}}"></td>
                        <td>{{ $value->news_title }} </td>
                        <td> {!! substr($value->short_details, 0, 20) !!} </td>
                        <td>
                           <select>
                               <option>Publish</option>
                               <option>UpPublish</option>
                           </select>
                        </td>
                        <td>

                            <a class="btn btn-success" href="{{ url('news-edit-form')}}/{{$value->id}}">Edit</a>
                            <button class="news-delete-item btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
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
@include('include.javascript_code')
@endsection