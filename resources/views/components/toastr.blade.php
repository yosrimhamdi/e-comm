@if (session('toastr'))
  <script>
    const message = '{{ session('message') }}';
    const status = '{{ session('status') }}';

    switch (status) {
      case 'success': {
        toastr.success(message);
        break;
      }
      case 'error': {
        toastr.error(message);
      }
    }
  </script>
@endif
