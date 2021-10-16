@if ($errors->any())
  <div {{ $attributes }}>
    <ul
      style="font-size: 1.5rem; padding: 0.5em;"
      class="bg-danger"
    >
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
