<x-admin.base>
  <div>

    <div class="widget-user-image">
      <img
        class="rounded-circle"
        src="{{ asset(admin()->profile_photo_path) }}"
        alt="User Avatar"
      >
    </div>
    <form
      action="{{ route('admin.profile.update') }}"
      method="POST"
    >
      @csrf
      <div class="row">
        <div class="col-12">
          <div
            class="form-group"
            style="margin-top: 1em;"
          >
            <h5>Change your image</h5>
            <div class="controls">
              <input
                type="file"
                name="file"
                class="form-control"
              >
            </div>
          </div>
          <div class="form-group">
            <h5>Name <span class="text-danger">*</span></h5>
            <div class="controls">
              <input
                type="text"
                name="name"
                class="form-control"
                value="{{ admin()->name }}"
                required
              >
            </div>
          </div>
          <div class="form-group">
            <h5>Email Field <span class="text-danger">*</span></h5>
            <div class="controls">
              <input
                type="text"
                name="email"
                value="{{ admin()->email }}"
                class="form-control"
                required
              >
              @error('email')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="text-xs-right">
            <button
              type="submit"
              class="btn btn-rounded btn-info"
            >Submit</button>
          </div>
    </form>
  </div>
</x-admin.base>
