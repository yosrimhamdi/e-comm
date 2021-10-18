<x-home.base>
  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img
            src="{{ Auth::user()->profile_photo_path }}"
            alt="Logged in user photo"
            style="border-radius: 50%; height: 100%; width: 100%; margin-bottom: 1em;"
            class="card-img-top"
          >
          <div class="list-group list-group-flash">
            <a
              href=""
              class="btn btn-primary btn-sm btn-block"
            >Home</a>
            <a
              href="{{ route('user.profile.update.form') }}"
              class="btn btn-primary btn-sm btn-block"
            >Profile Update</a>
            <a
              href=""
              class="btn btn-primary btn-sm btn-block"
            >Change Password</a>
            <a
              href="{{ route('user.logout') }}"
              class="btn btn-danger btn-sm btn-block"
            >Logout</a>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6">
          <div class="card">
            <h3 class="text-center">
              <span class="text-danger">
                Hi {{ user()->name }}
              </span>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-home.base>
