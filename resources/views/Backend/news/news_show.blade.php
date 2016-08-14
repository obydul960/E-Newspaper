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
                        <th style="width: 20%">Title</th>
                        <th style="width: 20%">Status</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($show_news as $value)
                    <tr>
                        <td><img style="width:50px;height:50px; border-radius: 5px; margin: 0px auto" src="image_folder/{{$value->image}}"></td>
                        <td>{{ $value->news_title }} </td>
                        <td>
                            {!!Form::open(['url'=>['news-published',$value->id],'class'=>'form-horizontal'])!!}
                            <select name="published_news" onchange='this.form.submit()' style="width: 100%">
                                <option selected>
                                    @if($value->published == 1)
                                    Published
                                    @endif
                                    @if($value->published == 0)
                                    unpublished
                                    @endif
                                </option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                            {!!Form::close()!!}

                        </td>
                        <td>

                            <a class="btn btn-success" href="{{ url('news-edit-form')}}/{{$value->id}}">Edit</a>
                            <button  class="new_delete btn btn-danger" data-item-id="{{$value->id}}">Delete</button>
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

<!--- Swite message show  delete form News by obydul date:28-7-16-->
<script>
    $('button.new_delete').click(function() {
        var itemId = $(this).attr("data-item-id");
        newsDelete(itemId);
    });
    function newsDelete(itemId) {
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
                url: "{{URL::to('/')}}/news-show-delete/" + itemId,
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