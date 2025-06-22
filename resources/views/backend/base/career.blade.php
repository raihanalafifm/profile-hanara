@extends('backend.layout.main')

@section('backend')
    <!-- Career Management -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">
                        Manajemen Career
                        @if (auth()->user()->isUser())
                            <small class="text-muted">(My Career Posts)</small>
                        @endif
                    </h5>
                </div>
                <div class="col-lg-4 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCareerModal">
                        <i class="bx bx-plus"></i> Tambah Career
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

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Position</th>
                        <th>Description</th>
                        @if (auth()->user()->isAdmin())
                            <th>Created By</th>
                        @endif
                        <th>Approval Status</th>
                        <th>Job Status</th>
                        @if (auth()->user()->isAdmin())
                            <th>Active</th>
                        @endif
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($careers as $career)
                        <tr>
                            <td>{{ $loop->iteration + ($careers->currentPage() - 1) * $careers->perPage() }}</td>
                            <td>
                                <strong>{{ $career->position }}</strong>
                                <br><small class="text-muted">{{ $career->created_at->format('d M Y H:i') }}</small>
                            </td>
                            <td>{{ Str::limit($career->description, 50) }}</td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2">
                                            <img src="{{ $career->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($career->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                                alt="Avatar" class="rounded-circle">
                                        </div>
                                        <span>{{ $career->creator->name ?? 'Unknown' }}</span>
                                    </div>
                                </td>
                            @endif
                            <td>
                                <span class="badge bg-{{ $career->approval_status_badge_class }}">
                                    {{ $career->approval_status_label }}
                                </span>
                                @if ($career->approval_status === 'rejected' && $career->approval_notes)
                                    <br><small class="text-danger">{{ Str::limit($career->approval_notes, 30) }}</small>
                                @endif
                            </td>
                            <td>
                                @if (auth()->user()->isAdmin())
                                    <form action="{{ route('backend.careers.update-status', $career) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" class="form-select form-select-sm status-select"
                                            onchange="this.form.submit()" style="width: auto; display: inline-block;">
                                            <option value="open" {{ $career->status == 'open' ? 'selected' : '' }}
                                                class="text-success">✅ Open</option>
                                            <option value="closed" {{ $career->status == 'closed' ? 'selected' : '' }}
                                                class="text-danger">❌ Closed</option>
                                            <option value="on_hold" {{ $career->status == 'on_hold' ? 'selected' : '' }}
                                                class="text-warning">🕓 On Hold</option>
                                        </select>
                                    </form>
                                @else
                                    <span
                                        class="badge bg-{{ $career->status === 'open' ? 'success' : ($career->status === 'closed' ? 'danger' : 'warning') }}">
                                        {{ $career->status_icon }} {{ $career->status_label }}
                                    </span>
                                @endif
                            </td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <form action="{{ route('backend.careers.toggle-status', $career) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-sm btn-{{ $career->is_active ? 'success' : 'secondary' }}">
                                            {{ $career->is_active ? 'Active' : 'Inactive' }}
                                        </button>
                                    </form>
                                </td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick='editCareer(@json($career))' data-bs-toggle="modal"
                                            data-bs-target="#editCareerModal">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        @if (auth()->user()->isAdmin() || $career->created_by === auth()->id())
                                            <form action="{{ route('backend.careers.destroy', $career) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus career ini?');">
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
                            <td colspan="{{ auth()->user()->isAdmin() ? '8' : '6' }}" class="text-center">
                                @if (auth()->user()->isUser())
                                    Anda belum membuat career posting
                                @else
                                    Belum ada career
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $careers->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal Add Career -->
    <div class="modal fade" id="addCareerModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('backend.careers.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="text" id="position" name="position"
                                    class="form-control @error('position') is-invalid @enderror"
                                    placeholder="e.g. IT Support, Software Developer" value="{{ old('position') }}"
                                    required>
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select id="status" name="status"
                                    class="form-select @error('status') is-invalid @enderror" required>
                                    <option value="open" {{ old('status') == 'open' ? 'selected' : '' }}>✅ Open</option>
                                    <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>❌ Closed
                                    </option>
                                    <option value="on_hold" {{ old('status') == 'on_hold' ? 'selected' : '' }}>🕓 On Hold
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="4" placeholder="Job description..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="skills" class="form-label">Skills</label>
                            <textarea id="skills" name="skills" class="form-control @error('skills') is-invalid @enderror" rows="5"
                                placeholder="Satu skill per baris:&#10;Troubleshooting&#10;Technical Knowledge&#10;Customer Service">{{ old('skills') }}</textarea>
                            <small class="text-muted">Masukkan satu skill per baris</small>
                            @error('skills')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="qualifications" class="form-label">Qualifications</label>
                            <textarea id="qualifications" name="qualifications"
                                class="form-control @error('qualifications') is-invalid @enderror" rows="5"
                                placeholder="Satu kualifikasi per baris:&#10;Minimal D3/S1 Teknik Informatika&#10;Pengalaman minimal 1 tahun">{{ old('qualifications') }}</textarea>
                            <small class="text-muted">Masukkan satu kualifikasi per baris</small>
                            @error('qualifications')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if (auth()->user()->isUser())
                            <div class="alert alert-info">
                                <i class="bx bx-info-circle me-2"></i>
                                Career post akan menunggu persetujuan admin sebelum dipublikasikan.
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            @if (auth()->user()->isAdmin())
                                Simpan & Publish Career
                            @else
                                Submit untuk Approval
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Career -->
    <div class="modal fade" id="editCareerModal" tabindex="-1" aria-hidden="true"data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="editCareerForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="edit_position" class="form-label">Position <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="edit_position" name="position" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="edit_status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select id="edit_status" name="status" class="form-select" required>
                                    <option value="open">✅ Open</option>
                                    <option value="closed">❌ Closed</option>
                                    <option value="on_hold">🕓 On Hold</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea id="edit_description" name="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="edit_skills" class="form-label">Skills</label>
                            <textarea id="edit_skills" name="skills" class="form-control" rows="5"></textarea>
                            <small class="text-muted">Masukkan satu skill per baris</small>
                        </div>

                        <div class="mb-3">
                            <label for="edit_qualifications" class="form-label">Qualifications</label>
                            <textarea id="edit_qualifications" name="qualifications" class="form-control" rows="5"></textarea>
                            <small class="text-muted">Masukkan satu kualifikasi per baris</small>
                        </div>

                        @if (auth()->user()->isAdmin())
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="edit_is_active" name="is_active"
                                        value="1">
                                    <label class="form-check-label" for="edit_is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info">
                                <i class="bx bx-info-circle me-2"></i>
                                Perubahan akan menunggu persetujuan admin sebelum dipublikasikan.
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            @if (auth()->user()->isAdmin())
                                Update Career
                            @else
                                Submit Perubahan
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function editCareer(career) {
            console.log('Edit career data:', career); // Debug log

            // Set form action dengan route helper
            const form = document.getElementById('editCareerForm');
            form.action = `{{ url('backend/careers') }}/${career.id}`;

            // Fill form fields
            document.getElementById('edit_position').value = career.position || '';
            document.getElementById('edit_description').value = career.description || '';
            document.getElementById('edit_status').value = career.status || 'open';

            // Handle skills array
            if (career.skills && Array.isArray(career.skills) && career.skills.length > 0) {
                document.getElementById('edit_skills').value = career.skills.join('\n');
            } else {
                document.getElementById('edit_skills').value = '';
            }

            // Handle qualifications array
            if (career.qualifications && Array.isArray(career.qualifications) && career.qualifications.length > 0) {
                document.getElementById('edit_qualifications').value = career.qualifications.join('\n');
            } else {
                document.getElementById('edit_qualifications').value = '';
            }

            // Handle checkbox is_active (only for admin)
            @if (auth()->user()->isAdmin())
                const isActiveCheckbox = document.getElementById('edit_is_active');
                if (isActiveCheckbox) {
                    isActiveCheckbox.checked = career.is_active ? true : false;
                }
            @endif
        }

        // Handle validation errors on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Reset modal when closed
            $('#editCareerModal').on('hidden.bs.modal', function() {
                // Clear form
                document.getElementById('editCareerForm').reset();
                // Remove any backdrop if stuck
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
            });

            $('#addCareerModal').on('hidden.bs.modal', function() {
                // Clear form
                document.getElementById('addCareerModal').querySelector('form').reset();
                // Remove any backdrop if stuck
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
            });

            // Handle validation errors
            @if ($errors->any() && request()->is('backend/careers') && old('_method') != 'PUT')
                const addModal = new bootstrap.Modal(document.getElementById('addCareerModal'));
                addModal.show();
            @endif

            @if ($errors->any() && request()->is('backend/careers/*') && old('_method') == 'PUT')
                const editModal = new bootstrap.Modal(document.getElementById('editCareerModal'));
                editModal.show();
            @endif
        });
    </script>

    <style>
        .status-select {
            min-width: 120px;
        }

        .status-select option {
            padding: 5px;
        }
    </style>
@endsection
