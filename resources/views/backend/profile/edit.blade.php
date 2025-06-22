@extends('backend.layout.main')

@section('backend')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Account /</span> Profile Settings
        </h4>

        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                aria-selected="true">
                                <i class="bx bx-user me-1"></i> Profile
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-password" aria-controls="navs-pills-top-password"
                                aria-selected="false">
                                <i class="bx bx-lock-alt me-1"></i> Security
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="navs-pills-top-profile" role="tabpanel">
                            <div class="card mb-4">
                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4 mb-4">
                                        <img src="{{ $user->avatar_url }}" alt="user-avatar" class="d-block rounded"
                                            height="100" width="100" id="uploadedAvatar" style="object-fit: cover;" />
                                        <div class="button-wrapper">
                                            <form action="{{ route('profile.update') }}" method="POST"
                                                enctype="multipart/form-data" id="avatarForm">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="name" value="{{ $user->name }}">
                                                <input type="hidden" name="email" value="{{ $user->email }}">
                                                <input type="hidden" name="position" value="{{ $user->position }}">
                                                <input type="hidden" name="bio" value="{{ $user->bio }}">

                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" name="avatar"
                                                        class="account-file-input" hidden accept="image/png, image/jpeg" />
                                                </label>
                                            </form>

                                            @if ($user->avatar)
                                                <form action="{{ route('profile.delete-avatar') }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary account-image-reset mb-4"
                                                        onclick="return confirm('Are you sure you want to delete your avatar?')">
                                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Reset</span>
                                                    </button>
                                                </form>
                                            @endif

                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2MB</p>
                                            @error('avatar')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <form action="{{ route('profile.update') }}" method="POST" id="formAccountSettings">
                                        @csrf
                                        @method('PATCH')

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    name="name" value="{{ old('name', $user->name) }}"
                                                    placeholder="John Doe" autofocus />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email"
                                                    value="{{ old('email', $user->email) }}"
                                                    placeholder="john.doe@example.com" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text"
                                                    class="form-control @error('position') is-invalid @enderror"
                                                    id="position" name="position"
                                                    value="{{ old('position', $user->position) }}"
                                                    placeholder="Content Writer" />
                                                @error('position')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="role">Role</label>
                                                <input type="text" id="role" class="form-control"
                                                    value="{{ $user->role_label }}" readonly />
                                                <small class="text-muted">Role cannot be changed</small>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="bio" class="form-label">Bio</label>
                                                <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3"
                                                    placeholder="Tell us about yourself">{{ old('bio', $user->bio) }}</textarea>
                                                @error('bio')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>
                        </div>

                        <!-- Password Tab -->
                        <div class="tab-pane fade" id="navs-pills-top-password" role="tabpanel">
                            <div class="card">
                                <h5 class="card-header">Change Password</h5>
                                <div class="card-body">
                                    <form action="{{ route('profile.update-password') }}" method="POST"
                                        id="formAccountDeactivation">
                                        @csrf
                                        @method('PATCH')

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="current_password" class="form-label">Current Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="current_password" name="current_password"
                                                        class="form-control @error('current_password') is-invalid @enderror"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="current_password" required />
                                                    <span class="input-group-text cursor-pointer"
                                                        onclick="togglePassword('current_password')">
                                                        <i class="bx bx-hide" id="current_password_icon"></i>
                                                    </span>
                                                </div>
                                                @error('current_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="password" class="form-label">New Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="password" required />
                                                    <span class="input-group-text cursor-pointer"
                                                        onclick="togglePassword('password')">
                                                        <i class="bx bx-hide" id="password_icon"></i>
                                                    </span>
                                                </div>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="password_confirmation" class="form-label">Confirm New
                                                    Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password_confirmation"
                                                        name="password_confirmation" class="form-control"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="password_confirmation" required />
                                                    <span class="input-group-text cursor-pointer"
                                                        onclick="togglePassword('password_confirmation')">
                                                        <i class="bx bx-hide" id="password_confirmation_icon"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="alert alert-warning mt-3">
                                            <h6 class="alert-heading mb-1">Ensure that these requirements are met:</h6>
                                            <span>Minimum 8 characters long</span>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary me-2">Change Password</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Password toggle functionality
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const icon = document.getElementById(fieldId + '_icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.className = 'bx bx-show';
            } else {
                passwordField.type = 'password';
                icon.className = 'bx bx-hide';
            }
        }

        // Auto submit avatar form when file is selected
        document.getElementById('upload').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('uploadedAvatar').src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);

                // Auto submit form
                document.getElementById('avatarForm').submit();
            }
        });

        // Show appropriate tab based on form submission
        @if ($errors->has('current_password') || $errors->has('password'))
            document.addEventListener('DOMContentLoaded', function() {
                const passwordTab = document.querySelector('[data-bs-target="#navs-pills-top-password"]');
                const passwordPane = document.querySelector('#navs-pills-top-password');
                const profileTab = document.querySelector('[data-bs-target="#navs-pills-top-profile"]');
                const profilePane = document.querySelector('#navs-pills-top-profile');

                profileTab.classList.remove('active');
                profilePane.classList.remove('show', 'active');
                passwordTab.classList.add('active');
                passwordPane.classList.add('show', 'active');
            });
        @endif
    </script>
@endsection
