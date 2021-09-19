<x-admin.base>
  <div
    class="container-full"
    style="width: 50%"
  >
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Edit Profile</h4>

        </div>
        <div class="box-body">
          <form
            action="{{ url('/admin/password/change') }}"
            method="POST"
            style="width: 100%;"
          >
            @csrf

            <div class="form-group">
              <h5>Old password <span class="text-danger">*</span></h5>
              <div class="controls">
                <input
                  type="password"
                  name="password"
                  class="form-control"
                >
              </div>
              <x-error input="password" />
            </div>
            <div class="form-group">
              <h5>New Password <span class="text-danger">*</span></h5>
              <div class="controls">
                <input
                  type="password"
                  name="password-new"
                  class="form-control"
                >
              </div>
              <x-error input="password-new" />
            </div>
            <div class="form-group">
              <h5>Password Confirm <span class="text-danger">*</span></h5>
              <div class="controls">
                <input
                  type="password"
                  name="password-confirm"
                  class="form-control"
                >
              </div>
              <x-error input="password-confirm" />
            </div>
            <div class="text-xs-right">
              <button
                type="submit"
                type="button"
                class="btn btn-rounded btn-primary mb-5"
              >Change Password</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</x-admin.base>
