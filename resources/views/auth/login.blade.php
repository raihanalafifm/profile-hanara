<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon/icon hanara.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/assets1/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/assets1/js/config.js') }}"></script>
    
    <style>
        .authentication-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .authentication-inner {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .card {
            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
            border-radius: 0.375rem;
        }
        
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        
        .success-message {
            color: #198754;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            padding: 0.75rem;
            background-color: #d1e7dd;
            border: 1px solid #badbcc;
            border-radius: 0.375rem;
        }
        
        @media (max-width: 576px) {
            .authentication-inner {
                max-width: 350px;
                margin: 0 1rem;
            }
        }
    </style>
</head>
<body>
 <div class="container-fluid">
      <div class="authentication-wrapper authentication-basic">
        <div class="authentication-inner">
          <!-- Login Card -->
          <div class="card px-4 py-4">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4">
                <a href="{{ url('/') }}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <span class="text-primary">
                     <img src="{{ asset('assets/images/icon/icon hanara.png') }}" alt="logo hanara"
                     width="40px"
                     height="40px">
                    </span>
                  </span>
                  <span class="app-brand-text demo text-heading fw-bold">Hanara</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 text-center">Welcome to Hanara! 👋</h4>
              <p class="mb-4 text-center">Please sign-in to your account</p>

              <!-- Session Status -->
              @if (session('status'))
                  <div class="success-message">
                      {{ session('status') }}
                  </div>
              @endif

              <form method="POST" action="{{ route('login') }}" id="formAuthentication" class="mb-4">
                @csrf
                
                <!-- Email Address -->
                <div class="mb-4">
                  <label for="email" class="form-label">{{ __('Email') }}</label>
                  <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    required
                    autofocus
                    autocomplete="username" />
                  @error('email')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Password -->
                <div class="mb-4 form-password-toggle">
                  <label class="form-label" for="password">{{ __('Password') }}</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      required
                      autocomplete="current-password"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                  </div>
                  @error('password')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="mb-4">
                  <div class="d-flex justify-content-between">
                    <div class="form-check mb-0">
                      <input class="form-check-input" type="checkbox" id="remember_me" name="remember" />
                      <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                          <span>{{ __('Forgot your password?') }}</span>
                        </a>
                    @endif
                  </div>
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                  <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Log in') }}</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Login Card -->
        </div>
      </div>
    </div>

 <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/assets1/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/assets1/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/assets1/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/assets1/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>