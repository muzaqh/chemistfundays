<script>
    @if ($message = Session::get('success'))
    jQuery(function () {Swal.fire('Success!',@json($message),'success')});
    @elseif ($message = Session::get('error'))
    jQuery(function () {Swal.fire('Failed!',@json($message),'error')});
    @endif
</script>