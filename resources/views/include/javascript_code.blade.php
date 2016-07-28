
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