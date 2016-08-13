@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <div class="span2">
        <!-- block -->

        <!-- /block -->
    </div>
    <div class="span8">
        <!-- block -->
        <div class="block">

            <div class="block-content collapse in">
                <div class="container">
                    {!! Form::open(['url' => 'change-pass','class'=>'form-signin' ]) !!}


                    <h2 class="form-signin-heading">Change Password</h2>
                    <input type="password" name="new_password"  placeholder=" New Password" class="span6"></br>
                    <input type="password" name="confirm_password"  placeholder="Confirm Password" class="span6"><br/>
                    <button class="btn btn-large btn-primary" type="submit">Submit</button>
                    {!! Form::close() !!}

                </div> <!-- /container -->
            </div>
        </div>
        <!-- /block -->
    </div>

    <div class="span2">
        <!-- block -->

        <!-- /block -->
    </div>
</div>


@endsection