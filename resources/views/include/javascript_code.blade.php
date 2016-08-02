<!--- Swite message show  delete by obydul date:28-7-16-->
<script>
    $('button.delete-item').click(function() {
        var itemId = $(this).attr("data-item-id");
        deletePhoto(itemId);
    });
    function deletePhoto(itemId) {
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
                url: "/slider-delete/" + itemId,
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