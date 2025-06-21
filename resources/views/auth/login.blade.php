<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Hanara</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon/icon hanara.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets1/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/assets1/vendor/js/helpers.js') }}"></script>
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

        /* Disable password manager notifications */
        input[type="email"],
        input[type="password"] {
            background-image: none !important;
            background-color: transparent !important;
        }

        /* Hide browser password suggestion */
        input::-webkit-credentials-auto-fill-button {
            visibility: hidden;
            display: none !important;
            pointer-events: none;
            height: 0;
            width: 0;
            margin: 0;
        }

        /* Disable autofill styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #000 !important;
            background-color: transparent !important;
            background-image: none !important;
        }

        /* Hide password manager icons */
        .form-control {
            background-image: none !important;
        }

        /* Custom styles for form */
        .form-control:focus {
            background-image: none !important;
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
                                            width="40px" height="40px">
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

                        <form method="POST" action="{{ route('login') }}" id="formAuthentication" class="mb-4"
                            autocomplete="off">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Enter your email" required autofocus autocomplete="off"
                                    data-form-type="other" />
                                @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4 form-password-toggle">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        required autocomplete="new-password" data-form-type="other"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer" id="toggle-password">
                                        <i class="bx bx-hide"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-4">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember" />
                                    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="mb-4">
                                <button class="btn btn-primary d-grid w-100"
                                    type="submit">{{ __('Log in') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Login Card -->
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('assets/assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/assets1/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/assets1/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/assets1/js/main.js') }}"></script>
    <script src="{{ asset('assets/assets1/js/dashboards-analytics.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const togglePassword = document.getElementById('toggle-password');
            const passwordInput = document.getElementById('password');

            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    const icon = this.querySelector('i');
                    if (type === 'password') {
                        icon.className = 'bx bx-hide';
                    } else {
                        icon.className = 'bx bx-show';
                    }
                });
            }

            // Disable browser password manager notifications
            const form = document.getElementById('formAuthentication');
            if (form) {
                form.setAttribute('autocomplete', 'off');

                // Add additional attributes to prevent password manager
                const inputs = form.querySelectorAll('input');
                inputs.forEach(function(input) {
                    input.setAttribute('autocomplete', 'new-password');
                    input.setAttribute('data-form-type', 'other');
                });
            }

            // Additional measures to prevent password manager
            setTimeout(function() {
                const emailInput = document.getElementById('email');
                const passwordInput = document.getElementById('password');

                if (emailInput) {
                    emailInput.setAttribute('autocomplete', 'off');
                    emailInput.setAttribute('data-form-type', 'other');
                }

                if (passwordInput) {
                    passwordInput.setAttribute('autocomplete', 'new-password');
                    passwordInput.setAttribute('data-form-type', 'other');
                }
            }, 100);
        });

        // Prevent form submission with browser saved credentials
        window.addEventListener('load', function() {
            const form = document.getElementById('formAuthentication');
            if (form) {
                // Clear any autofilled values after page load
                setTimeout(function() {
                    const inputs = form.querySelectorAll('input[type="email"], input[type="password"]');
                    inputs.forEach(function(input) {
                        if (input.value && !input.dataset.userTyped) {
                            input.value = '';
                        }
                    });
                }, 500);
            }
        });

        // Track user typing to distinguish from autofill
        document.addEventListener('input', function(e) {
            if (e.target.type === 'email' || e.target.type === 'password') {
                e.target.dataset.userTyped = 'true';
            }
        });
    </script>
</body>

</html>
