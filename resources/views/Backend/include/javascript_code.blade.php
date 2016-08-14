





<!---- Flash message --->
<script type="text/javascript">

    $(document).ready(function () {
        $(".sidebar-panel nav li").removeClass("active");
        $('#emply').addClass('active');
    });


</script>

<script type="text/javascript">

    $(document).ready(function () {
        $(".sidebar-panel nav li").removeClass("active");
        $('#empsalary').addClass('active');
        // $('.nav li ul ').slideUp();
        $(".expandsalary").slideDown();
    });


</script>

<!---- Form validation  --->
<script type="text/javascript">
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
                        image_title: "required",
                        picture: "required",
                        back_link: "required",
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
                        image_title: "Please enter slider image title",
                        picture: "Please Browse Slider Image",
                        back_link: "Please slider image Link"
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