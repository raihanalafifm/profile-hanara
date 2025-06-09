@extends('backend.layout.main')

@section('backend')
    <!-- Career Management -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Manajemen Career</h5>
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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($careers as $career)
                        <tr>
                            <td>{{ $loop->iteration + ($careers->currentPage() - 1) * $careers->perPage() }}</td>
                            <td>{{ $career->position }}</td>
                            <td>{{ Str::limit($career->description, 50) }}</td>
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
                                        <form action="{{ route('backend.careers.destroy', $career) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus career ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada career</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            {{ $careers->links() }}
        </div>
    </div>

    <!-- Modal Add Career -->
    <div class="modal fade" id="addCareerModal" tabindex="-1" aria-hidden="true">
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
                            <div class="col mb-3">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="text" id="position" name="position"
                                    class="form-control @error('position') is-invalid @enderror"
                                    placeholder="e.g. IT Support, Software Developer" value="{{ old('position') }}"
                                    required>
                                @error('position')
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
                            <textarea id="qualifications" name="qualifications" class="form-control @error('qualifications') is-invalid @enderror"
                                rows="5"
                                placeholder="Satu kualifikasi per baris:&#10;Minimal D3/S1 Teknik Informatika&#10;Pengalaman minimal 1 tahun">{{ old('qualifications') }}</textarea>
                            <small class="text-muted">Masukkan satu kualifikasi per baris</small>
                            @error('qualifications')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Career</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Career -->
    <div class="modal fade" id="editCareerModal" tabindex="-1" aria-hidden="true">
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
                            <div class="col mb-3">
                                <label for="edit_position" class="form-label">Position <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="edit_position" name="position" class="form-control" required>
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

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="edit_is_active" name="is_active"
                                    value="1">
                                <label class="form-check-label" for="edit_is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Career</button>
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

            // Handle checkbox is_active
            document.getElementById('edit_is_active').checked = career.is_active ? true : false;
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
@endsection
