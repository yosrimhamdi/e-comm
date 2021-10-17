@if ($errors->any())
  <div {{ $attributes }}>
    <ul style="background-color: #A94442; padding: .5em; margin-top: 1em; color: white">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
