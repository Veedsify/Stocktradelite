@if(session('success'))
<script>
    swal({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
          })
</script>
@endif
@if(session('error'))
<script>
    swal({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            button: "OK",
          })
</script>
@endif