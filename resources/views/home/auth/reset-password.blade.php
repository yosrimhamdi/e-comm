<x-home.base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%; margin: 0 auto;"
      >
        <x-jet-validation-errors class="mb-4" />

        <form
          class="register-form outer-top-xs"
          role="form"
          action="{{ route('password.update') }}"
          method="POST"
        >

          @csrf
          <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
          >
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Email Address <span>*</span></label>
            <input
              type="email"
              name="email"
              class="form-control unicase-form-control text-input"
              value="{{ $request->email }}"
            >
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Password <span>*</span></label>
            <input
              type="password"
              name="password"
              class="form-control unicase-form-control text-input"
            >
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Password Confirm <span>*</span></label>
            <input
              type="password"
              name="password_confirmation"
              class="form-control unicase-form-control text-input"
            >
          </div>
          <button
            type="submit"
            class="btn-upper btn btn-primary checkout-page-button"
          >Reset Password</button>
        </form>
        <!-- /.row -->
      </div><!-- /.sigin-in-->
    </div><!-- /.container -->
  </div>
</x-home.base>
