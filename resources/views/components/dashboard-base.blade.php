<x-home.base>
  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img
            src="{{ asset(Auth::user()->profile_photo_path) }}"
            alt="Logged in user photo"
            style="border-radius: 50%; object-fit: cover; width: 100%; aspect-ratio: 1; margin-bottom: 1em;"
            class="card-img-top"
            id="user-photo"
          >
          <div class="list-group list-group-flash">
            <a
              href=""
              class="btn btn-primary btn-sm btn-block"
            >Home</a>
            <a
              href="{{ route('profile.update.form') }}"
              class="btn btn-primary btn-sm btn-block"
            >Profile Update</a>
            <a
              href=""
              class="btn btn-primary btn-sm btn-block"
            >Change Password</a>
            <a
              href="{{ route('logout') }}"
              class="btn btn-danger btn-sm btn-block"
            >Logout</a>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6">
          {{ $slot }}
        </div>
      </div>
    </div>
  </div>
</x-home.base>
