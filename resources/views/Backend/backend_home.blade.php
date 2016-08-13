@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <div class="span12">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">News Table</div>
                <div class="pull-right"><span class="badge badge-warning"><a href="{{ url('news-show')}}" style="text-decoration: none;color: #ffffff">View More</a> </span> Total &nbsp;&nbsp;&nbsp;&nbsp; <span class="badge badge-info">{{$newCount}}</span></div>

            </div>
            <div class="block-content collapse in">
                <table class="table table-striped" border="1">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>News Title</th>
                        <th>Editor</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news_show as $value)
                    <tr>
                        <td><img style="width:50px;height:50px; border-radius: 5px; margin: 0px auto" src="image_folder/{{$value->image}}"></td>
                        <td>{{ $value->news_title}}</td>
                        <td>{{ $value->editor}}</td>
                        <td>
                            @if($value->published == 1)
                            <button class="btn btn-success">Published</button>
                            @elseif($value->published == 0)
                            <button class="btn btn-denger">Unpublished</button>
                            @endif
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
<hr>
<div class="row-fluid">
    <div class="span12">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Backing News Table</div>
                <div class="pull-right">Total&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-info">{{$backingnewCount}}</span>

                </div>
            </div>
            <div class="block-content collapse in">
                <table class="table table-striped" border="1">
                    <thead>
                    <tr>
                        <th>News Title</th>
                        <th>View More</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($backingNews as $value)
                    <tr>
                        <td>{{ $value->news_title}}</td>
                        <td><button class="btn btn-success"><a  href="{{ $value->back_link}}" style="text-decoration: none">View more</a></button></td>
                        <td>
                            @if($value->status == 1)
                            Published
                            @elseif($value->status == 0)
                            Unpublished
                            @endif
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