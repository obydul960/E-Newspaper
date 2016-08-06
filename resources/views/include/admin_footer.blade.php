</div>
</div>
<hr>
<footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>
<!--/.fluid-container-->
<script src="{{URL::to('/')}}/Src/bootstrap/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/')}}/Src/assets/DT_bootstrap.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="{{URL::to('/')}}/Src/assets/scripts.js"></script>
<link href="{{URL::to('/')}}/Src/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="{{URL::to('/')}}/Src/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="{{URL::to('/')}}/Src/vendors/chosen.min.css" rel="stylesheet" media="screen">
<link href="{{URL::to('/')}}/Src/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="{{URL::to('/')}}/Src/vendors/jquery.uniform.min.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/chosen.jquery.min.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/bootstrap-datepicker.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/Src/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="{{URL::to('/')}}/Src/assets/form-validation.js"></script>
<script src="{{URL::to('/')}}/Src/js/toastr/toastr.min.js"></script>

<!--- jquery validation ----->
<script src="{{URL::to('/')}}/Src/validation/jquery.min.js"></script>
<script src="{{URL::to('/')}}/Src/validation/jquery.validate.min.js"></script>
<!--- editor  runing--->
<!--/.fluid-container-->
<script src="Src/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="Src/vendors/jquery-1.9.1.min.js"></script>
<script src="Src/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="Src/vendors/ckeditor/ckeditor.js"></script>
<script src="Src/vendors/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript" src="Src/vendors/tinymce/js/tinymce/tinymce.min.js"></script>


<script>
    $(function() {
        // Bootstrap
        $('#bootstrap-editor').wysihtml5();

        // Ckeditor standard
        $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
            { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
            [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
            { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
        ]});
        $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_basic",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_full",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });

</script>
<!-- editor end -->
<!--- Flash message ---->
@if(Session::has('success'))
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.success('{{ Session::get('success') }}');
        //alert("hello world");

    }, 1300);
</script>

@elseif(Session::has('error'))
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.error('{{ Session::get('error') }}');

    }, 1300);
</script>

@elseif(Session::has('warning'))
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.warning('{{ Session::get('warning') }}');

    }, 1300);
</script>
@elseif(Session::has('voucher'))
<script type="text/javascript">
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            timeOut: 7000
        };
        toastr.success('<a href="{{ Session::get('id') }}">{{ Session::get('voucher') }} | Print Voucher</a>');

    }, 1300);
</script>
@endif
<!---- Flsash message end ---- >


<script>

    jQuery(document).ready(function() {
        FormValidation.init();
    });


    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('.textarea').wysihtml5();

        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('.bar').css({width:$percent+'%'});
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#rootwizard').find('.pager .next').hide();
                $('#rootwizard').find('.pager .finish').show();
                $('#rootwizard').find('.pager .finish').removeClass('disabled');
            } else {
                $('#rootwizard').find('.pager .next').show();
                $('#rootwizard').find('.pager .finish').hide();
            }
        }});
        $('#rootwizard .finish').click(function() {
            alert('Finished!, Starting over!');
            $('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>





</body>

</html>

<!--/.fluid-container-->




