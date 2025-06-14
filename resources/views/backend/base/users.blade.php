@extends('backend.layout.main')

@section('backend')
    <!-- User Management -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Manajemen User</h5>
                </div>
                <div class="col-lg-4 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bx bx-plus"></i> Tambah User
                    </button>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                            <td>
                                {{ $user->name }}
                                @if ($user->id === auth()->id())
                                    <span class="badge bg-info ms-1">You</span>
                                @endif
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editUser({{ $user->id }})">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        @if ($user->id !== auth()->id())
                                            <form action="{{ route('backend.users.destroy', $user) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada user</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $users->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal Add User -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('backend.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" required
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="user@example.com"
                                required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position/Jabatan</label>
                            <input type="text" id="position" name="position" class="form-control"
                                placeholder="Contoh: Content Writer & Digital Marketing Team"
                                value="{{ old('position') }}">
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio/Deskripsi Singkat</label>
                            <textarea id="bio" name="bio" class="form-control" rows="3"
                                placeholder="Deskripsi singkat tentang user">{{ old('bio') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar/Foto Profil</label>
                            <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG. Max: 2MB</small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Min. 8 characters" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password <span
                                    class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="Confirm password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editUserForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" id="edit_name" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="edit_email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" id="edit_email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="edit_position" class="form-label">Position/Jabatan</label>
                            <input type="text" id="edit_position" name="position" class="form-control"
                                placeholder="Contoh: Content Writer & Digital Marketing Team">
                        </div>

                        <div class="mb-3">
                            <label for="edit_bio" class="form-label">Bio/Deskripsi Singkat</label>
                            <textarea id="edit_bio" name="bio" class="form-control" rows="3"
                                placeholder="Deskripsi singkat tentang Anda"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="edit_avatar" class="form-label">Avatar/Foto Profil</label>
                            <input type="file" id="edit_avatar" name="avatar" class="form-control"
                                accept="image/*">
                            <small class="text-muted">Format: JPG, PNG. Max: 2MB. Kosongkan jika tidak ingin
                                mengubah</small>
                            <div id="current-avatar" class="mt-2"></div>
                        </div>

                        <hr>
                        <p class="text-muted mb-2">Kosongkan password jika tidak ingin mengubah</p>

                        <div class="mb-3">
                            <label for="edit_password" class="form-label">New Password</label>
                            <input type="password" id="edit_password" name="password" class="form-control"
                                placeholder="Min. 8 characters">
                        </div>

                        <div class="mb-3">
                            <label for="edit_password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" id="edit_password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
