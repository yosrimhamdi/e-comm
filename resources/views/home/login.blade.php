<x-home.base>
  <div class="body-content">
    <div class="container">
      <div class="sign-in-page">
        <div class="row">
          <!-- Sign-in -->
          <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">Sign in</h4>
            <p class="">Hello, Welcome to your account.</p>
            <div class="social-sign-in outer-top-xs">
              <a
                href="#"
                class="facebook-sign-in"
              ><i class="fa fa-facebook"></i> Sign In with Facebook</a>
              <a
                href="#"
                class="twitter-sign-in"
              ><i class="fa fa-twitter"></i> Sign In with Twitter</a>
            </div>
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
          </div>
          <!-- Sign-in -->
          <!-- create a new account -->
          <div class="col-md-6 col-sm-6 create-new-account">
            <h4 class="checkout-subtitle">Create a new account</h4>
            <p class="text title-tag-line">Create your new account.</p>
            <form
              class="register-form outer-top-xs"
              method="POST"
              action="{{ route('register') }}"
            >
              @csrf
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail2"
                  style="width: 100%; display: block"
                >Email Address <span>*</span>
                  <input
                    type="email"
                    class="form-control unicase-form-control text-input"
                    id="exampleInputEmail2"
                    name="email"
                  >
                  <x-error input="email" />
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Name <span>*</span></label>
                <input
                  type="text"
                  class="form-control unicase-form-control text-input"
                  name="name"
                >
                <x-error input="name" />
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Phone Number <span>*</span></label>
                <input
                  type="string"
                  class="form-control unicase-form-control text-input"
                  name="phone"
                >
                <x-error input="phone" />
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Password <span>*</span></label>
                <input
                  type="password"
                  class="form-control unicase-form-control text-input"
                  name="password"
                >
                <x-error input="password" />
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
              >Sign Up</button>
            </form>
          </div>
          <!-- create a new account -->
        </div><!-- /.row -->
      </div><!-- /.sigin-in-->
    </div><!-- /.container -->
  </div>
</x-home.base>
