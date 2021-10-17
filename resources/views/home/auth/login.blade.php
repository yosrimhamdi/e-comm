<x-home.base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%; margin: 0 auto;"
      >
        <h4 class="">Sign in</h4>
        <form
          class="register-form outer-top-xs"
          role="form"
          action="{{ route('login') }}"
          method="POST"
        >

          @csrf
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputEmail1"
            >Email Address <span>*</span></label>
            <input
              type="email"
              name="email"
              class="form-control unicase-form-control text-input"
            >
            <x-error input="email" />
          </div>
          <div class="form-group">
            <label
              class="info-title"
              for="exampleInputPassword1"
            >Password <span>*</span></label>
            <input
              type="password"
              name="password"
              class="form-control unicase-form-control text-input"
              id="exampleInputPassword1"
            >
            <x-error input="password" />
          </div>
          <div class="radio outer-xs">
            <label>
              <input
                class="form-check-input"
                type="checkbox"
                id="flexCheckChecked"
                name="remember"
              >
              Remember me!
            </label>
            <a
              href="{{ route('password.request') }}"
              class="forgot-password pull-right"
            >Forgot your Password?</a>
          </div>
          <button
            type="submit"
            class="btn-upper btn btn-primary checkout-page-button"
          >Login</button>
        </form>
        <!-- /.row -->
      </div><!-- /.sigin-in-->
    </div><!-- /.container -->
  </div>
</x-home.base>
