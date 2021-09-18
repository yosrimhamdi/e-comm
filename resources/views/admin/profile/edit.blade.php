<x-admin.base>
  <div>
    <div class="widget-user-image">
      <img
        class="rounded-circle user-photo"
        src="{{ asset(admin()->profile_photo_path) }}"
        alt="User Avatar"
      >
    </div>
    <form
      action="{{ url('admin/profile') }}"
      method="POST"
      enctype="multipart/form-data"
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
                name="photo"
                class="form-control photo-input"
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
            <x-error input="name" />
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
              <x-error input="email" />
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
  <script src="{{ asset('/admin/js/updatePhotoOnChange.js') }}"></script>
</x-admin.base>
