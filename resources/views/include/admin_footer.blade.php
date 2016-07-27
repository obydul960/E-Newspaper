</div>
</div>
<hr>
<footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>
<!--/.fluid-container-->
<script src="Src/vendors/jquery-1.9.1.min.js"></script>
<script src="Src/bootstrap/js/bootstrap.min.js"></script>
<script src="Src/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="Src/assets/DT_bootstrap.js"></script>
<script src="Src/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="Src/assets/scripts.js"></script>

<!--/.fluid-container-->
<link href="Src/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="Src/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="Src/vendors/chosen.min.css" rel="stylesheet" media="screen">
<link href="Src/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="Src/vendors/jquery.uniform.min.js"></script>
<script src="Src/vendors/chosen.jquery.min.js"></script>
<script src="Src/vendors/bootstrap-datepicker.js"></script>
<script src="Src/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="Src/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
<script src="Src/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="Src/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="Src/assets/form-validation.js"></script>


<!--- Flash message ---->
<?php
function js($scripts, $default) {
    $html = '';
    foreach ($scripts as $script) {
        $html.= Html::script($default . $script . '.js');
    }
    return $html;
}
?>
{!!

js(
[
'jquery.min',
'/bootstrap/bootstrap.min',
'plugins',
'jquery-ui/jquery-ui.min',
'moment/moment.min',
'select2',
'date-range-picker/daterangepicker',
'toastr/toastr.min',
'rickshaw/d3.v3',
'datatable',
'tabletools',
'angular',
],'js/')
!!}
<!-- main file -->








<script type="text/javascript">
    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>
<!-- Basic Single Date Picker -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

        // setTimeout(function() {
        //                toastr.options = {
        //                    closeButton: true,
        //                    progressBar: true,
        //                    showMethod: 'slideDown',
        //                    timeOut: 4000
        //                };
        //                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        //            }, 1300);

    });
</script>
<!-- ================================================
Below codes are only for index widgets
================================================ -->


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

<!-- /////////////////////////////////////////////////////////////////////// -->

<style type="text/css">
    table.dataTable tbody td {
        padding: 4px 2px;
    }
    tbody > tr > td, .table > tfoot > tr > td {
        line-height: 1.7;
        min-width: 50px;
        /*text-align: center;*/
    }
    .panel-body, .panel-heading {
        overflow-x:visible;
    }
    .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
        border-top: 0;
        width: 50px;
    }
</style>
<script type="text/javascript">

    $(document).ready(function () {
        $(".sidebar-panel nav li").removeClass("active");
        $('#empsalary').addClass('active');
        // $('.nav li ul ').slideUp();
        $(".expandsalary").slideDown();
    });


</script>



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




