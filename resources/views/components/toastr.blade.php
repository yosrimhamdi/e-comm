@if (session('toastr'))
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <link
    rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
  >
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
