<x-home.base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%; margin: 0 auto;"
      >
        <h4 class="checkout-subtitle">Create a new account</h4>
        <form
          class="register-form outer-top-xs"
          method="POST"
          action="{{ route('user.register') }}"
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

      </div><!-- /.sigin-in-->
    </div><!-- /.container -->
  </div>
</x-home.base>
