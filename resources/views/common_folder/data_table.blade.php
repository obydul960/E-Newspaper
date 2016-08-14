
<!DOCTYPE html>
<html>

<head>
    <title>Tables</title>
    <!-- Bootstrap -->
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/styles.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('/')}}/Src/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <script src="{{URL::to('/')}}/Src/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
<div class="navbar navbar-fixed-top">




<!--/span-->
<div class="span12" id="content">
<div class="row-fluid">
<!-- block -->
<div class="block">
<div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Bootstrap dataTables</div>
</div>
<div class="block-content collapse in">
<div class="span12">

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
<thead>
<tr>
    <th>Rendering engine</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Engine version</th>
    <th>CSS grade</th>
</tr>
</thead>
<tbody>
<tr class="odd gradeX">
    <td>Trident</td>
    <td>Internet
        Explorer 4.0</td>
    <td>Win 95+</td>
    <td class="center"> 4</td>
    <td class="center">X</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
<!-- /block -->
</div>

</div>
</div>
<hr>
<footer>
    <p>&copy; Vincent Gabriel 2013</p>
</footer>
</div>
<!--/.fluid-container-->

<script src="{{URL::to('/')}}/Src/vendors/jquery-1.9.1.js"></script>
<script src="{{URL::to('/')}}/Src/bootstrap/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/Src/vendors/datatables/js/jquery.dataTables.min.js"></script>


<script src="{{URL::to('/')}}/Src/assets/scripts.js"></script>
<script src="{{URL::to('/')}}/Src/assets/DT_bootstrap.js"></script>
<script>
    $(function() {

    });
</script>
</body>

</html>v