<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta name="keywords" content="basic jquery validation form demo" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="src/validation/jquery.validate.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Src/css/jaquery_validation.css"/>

    <title>Basic jQuery Validation Form Demo | jQuery4u</title>


    <script type="text/javascript">
        /**
         * Basic jQuery Validation Form Demo Code
         * Copyright Sam Deering 2012
         * Licence: http://www.jquery4u.com/license/
         */
        (function($,W,D)
        {
            var JQUERY4U = {};

            JQUERY4U.UTIL =
            {
                setupFormValidation: function()
                {
                    //form validation rules
                    $("#register-form").validate({
                        rules: {
                            firstname: "required",
                            lastname: "required",
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 5
                            },
                            agree: "required"
                        },
                        messages: {
                            firstname: "Please enter your firstname",
                            lastname: "Please enter your lastname",
                            password: {
                                required: "Please provide a password",
                                minlength: "Your password must be at least 5 characters long"
                            },
                            email: "Please enter a valid email address",
                            agree: "Please accept our policy"
                        },
                        submitHandler: function(form) {
                            form.submit();
                        }
                    });
                }
            }

            //when the dom has loaded setup form validation rules
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });

        })(jQuery, window, document);
    </script>

</head>
<body>
<div id="page-wrap">


    <div id="header">
        <a href="http://www.jquery4u.com/"><img src="http://www.jquery4u.com/wp-content/uploads/2011/07/new-jquery-logo3.png" id="logo-image"></a>
    </div>

    <div id="content">

        <h1>Basic jQuery Validation Form Demo</h1>

        <!-- HTML form for validation demo -->
        <form action="" method="post" id="register-form" novalidate="novalidate">

            <h2>User Registration</h2>

            <div id="form-content">
                <fieldset>

                    <div class="fieldgroup">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname">
                    </div>

                    <div class="fieldgroup">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname">
                    </div>

                    <div class="fieldgroup">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>

                    <div class="fieldgroup">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>

                    <div class="fieldgroup">
                        <p class="right">By clicking register you agree to our <a target="_blank" href="/policy">policy</a>.</p>
                        <input type="submit" value="Register" class="submit">
                    </div>

                </fieldset>
            </div>

            <div class="fieldgroup">
                <p>Already registered? <a href="/login">Sign in</a>.</p>
            </div>
        </form>
        <!-- END HTML form for validation -->


        <p>
            <a href="http://www.jquery4u.com/forms/basic-jquery-form-validation-tutorial/"><img src="http://www.jquery4u.com/demos/images/btn-tutorial-1.jpg" alt="tutorial" /></a>
            <a href="http://www.jquery4u.com/demos/basic-jquery-validation-form/basic-jquery-validation-form-demo.zip"><img src="http://www.jquery4u.com/demos/images/btn-download-1.jpg" alt="download" /></a>
        </p>

    </div>

</div>

</div> <!-- end page wrap -->

<footer>
    <p>&copy; Copyright 2012 jQuery4u. All rights reserved.</p>
</footer>

</body>
</html>