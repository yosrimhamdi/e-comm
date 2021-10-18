<x-home.base>
  <div class="body-content">
    <div class="container">
      <div
        class="sign-in-page"
        style="width: 50%; margin: 0 auto;"
      >
        <div class="mb-4 text-sm text-gray-600">
          {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
          <div
            class="mb-4 font-medium text-sm text-green-600"
            style="color: green; margin-top: 1em;"
          >
            {{ session('status') }}
          </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form
          class="register-form outer-top-xs"
          role="form"
          action="{{ route('user.password.email') }}"
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
          </div>
          <button
            type="submit"
            class="btn-upper btn btn-primary checkout-page-button"
          >Email Password Reset Link</button>
        </form>
        <!-- /.row -->
      </div><!-- /.sigin-in-->
    </div><!-- /.container -->
  </div>
</x-home.base>
