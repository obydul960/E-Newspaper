<!DOCTYPE html>
<html>

<head>
    <title>WYSIWYG Editors</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="Src/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
    <link href="Src/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="Src/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="Src/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>


        <!--/span-->

        <div class="span10">
            <div class="row-fluid">








                <div class="span12" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">TinyMCE Full</div>
                            </div>
                            <div class="block-content collapse in">
                                <textarea id="tinymce_full"></textarea>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>



            </div>
        </div>




<!--/.fluid-container-->
<script src="Src/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="Src/vendors/jquery-1.9.1.min.js"></script>
<script src="Src/bootstrap/js/bootstrap.min.js"></script>
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
</body>

</html>