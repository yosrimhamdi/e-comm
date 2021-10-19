<x-home.dashboard-base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%;"
      >
        <h4 class="">Change Password</h4>
        <form
          class="register-form outer-top-xs"
          method="POST"
          action="{{ route('password.change') }}"
        >
          @csrf
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Old Password <span>*</span></label>
            <input
              type="password"
              class="form-control unicase-form-control text-input"
              name="old_password"
            >
            <x-error input="old_password" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >New Password <span>*</span></label>
            <input
              type="password"
              class="form-control unicase-form-control text-input"
              name="new_password"
            >
            <x-error input="new_password" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Confirm Password <span>*</span></label>
            <input
              type="password"
              class="form-control unicase-form-control text-input"
              name="password_confirmation"
            >
            <x-error input="password_confirmation" />
          </div>
          <button
            type="submit"
            class="btn-upper btn btn-primary checkout-page-button"
          >Change Password</button>
        </form>
      </div>
    </div>
  </div>
</x-home.dashboard-base>
