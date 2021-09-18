<x-admin.base>
  <div
    class="container-full"
    style="width: 100%"
  >
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Edit Profile</h4>

        </div>
        <div class="box-body">
          <form
            action="{{ url('/admin/profile') }}"
            method="POST"
            style="width: 100%;"
            enctype="multipart/form-data"
          >
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h5>Name <span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input
                      type="text"
                      name="name"
                      value="{{ admin()->name }}"
                      class="form-control"
                    >
                  </div>
                  <x-error input="name" />
                </div>
                <div class="form-group">
                  <h5>Email <span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input
                      type="email"
                      value="{{ admin()->email }}"
                      name="email"
                      class="form-control"
                    >
                  </div>
                  <x-error input="email" />
                </div>
                <div class="text-xs-right">
                  <button
                    type="submit"
                    type="button"
                    class="btn btn-rounded btn-primary mb-5"
                  >Update</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <h5>Change your photo <span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input
                      type="file"
                      name="photo"
                      class="form-control photo-input"
                    >
                    <img
                      src="{{ asset(admin()->profile_photo_path) }}"
                      alt="admin photo"
                      class="user-photo"
                      style="width: 200px; height: 200px; margin-top: 2em; border-radius: 50%; object-fit:cover;"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
  <script src="{{ asset('/admin/js/updatePhotoOnChange.js') }}"></script>
</x-admin.base>
