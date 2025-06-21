@extends('backend.layout.main')

@section('backend')
    <!-- Motorola Product Management -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">
                        Manajemen Produk Motorola
                        @if (auth()->user()->isUser())
                            <small class="text-muted">(My Products)</small>
                        @endif
                    </h5>
                </div>
                <div class="col-lg-4 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMotorolaModal">
                        <i class="bx bx-plus"></i> Tambah Produk
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Type</th>
                        @if (auth()->user()->isAdmin())
                            <th>Created By</th>
                        @endif
                        <th>Approval Status</th>
                        @if (auth()->user()->isAdmin())
                            <th>Active Status</th>
                        @endif
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                        style="height: 50px; width: auto;">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $product->name }}</strong>
                                @if ($product->model_number)
                                    <br><small class="text-muted">{{ $product->model_number }}</small>
                                @endif
                                <br><small class="text-muted">{{ $product->created_at->format('d M Y H:i') }}</small>
                            </td>
                            <td>
                                <span class="badge bg-label-primary">{{ $product->category }}</span>
                            </td>
                            <td>{{ $product->type }}</td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2">
                                            <img src="{{ $product->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($product->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                                alt="Avatar" class="rounded-circle">
                                        </div>
                                        <span>{{ $product->creator->name ?? 'Unknown' }}</span>
                                    </div>
                                </td>
                            @endif
                            <td>
                                <span class="badge bg-{{ $product->approval_status_badge_class }}">
                                    {{ $product->approval_status_label }}
                                </span>
                                @if ($product->approval_status === 'rejected' && $product->approval_notes)
                                    <br><small class="text-danger">{{ Str::limit($product->approval_notes, 30) }}</small>
                                @endif
                            </td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <form action="{{ route('backend.motorola.toggle-status', $product) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-sm btn-{{ $product->is_active ? 'success' : 'secondary' }}">
                                            {{ $product->is_active ? 'Active' : 'Inactive' }}
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
                                            onclick="editMotorolaProduct({{ $product->id }})">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        @if (auth()->user()->isAdmin() || $product->created_by === auth()->id())
                                            <form action="{{ route('backend.motorola.destroy', $product) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
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
                            <td colspan="{{ auth()->user()->isAdmin() ? '9' : '7' }}" class="text-center">
                                @if (auth()->user()->isUser())
                                    Anda belum menambahkan produk Motorola
                                @else
                                    Belum ada produk Motorola
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div> <!-- Pagination -->
        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $products->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal Add Motorola Product -->
    <div class="modal fade" id="addMotorolaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('backend.motorola.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Produk Motorola</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Produk <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="e.g. XIR P3688"
                                    required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="model_number" class="form-label">Model Number</label>
                                <input type="text" id="model_number" name="model_number"
                                    class="form-control @error('model_number') is-invalid @enderror"
                                    placeholder="e.g. XIR P3688 136-174 5W" value="{{ old('model_number') }}">
                                @error('model_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select id="category" name="category"
                                    class="form-select @error('category') is-invalid @enderror" required>
                                    <option value="">Select Category</option>
                                    <option value="VHF" {{ old('category') == 'VHF' ? 'selected' : '' }}>VHF</option>
                                    <option value="UHF" {{ old('category') == 'UHF' ? 'selected' : '' }}>UHF</option>
                                    <option value="Accessories" {{ old('category') == 'Accessories' ? 'selected' : '' }}>
                                        Accessories</option>
                                    <option value="Repeater" {{ old('category') == 'Repeater' ? 'selected' : '' }}>
                                        Repeater</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select id="type" name="type"
                                    class="form-select @error('type') is-invalid @enderror" required>
                                    <option value="">Select Type</option>
                                    <option value="Radio Mobil" {{ old('type') == 'Radio Mobil' ? 'selected' : '' }}>Radio
                                        Mobil</option>
                                    <option value="Radio Portable"
                                        {{ old('type') == 'Radio Portable' ? 'selected' : '' }}>Radio Portable</option>
                                    <option value="Broadband" {{ old('type') == 'Broadband' ? 'selected' : '' }}>Broadband
                                    </option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="4" placeholder="Product description...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="specifications" class="form-label">Specifications</label>
                            <textarea id="specifications" name="specifications"
                                class="form-control @error('specifications') is-invalid @enderror" rows="6"
                                placeholder="Format per baris:&#10;Frequency Range: 136-174 MHz&#10;Power Output: 5W&#10;Channels: 16">{{ old('specifications') }}</textarea>
                            <small class="text-muted">Masukkan spesifikasi dengan format "Label: Value" per baris</small>
                            @error('specifications')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" id="image" name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                accept="image/jpeg,image/png,image/jpg">
                            <small class="text-muted">Max: 2MB, Format: JPG, JPEG, PNG</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if (auth()->user()->isUser())
                            <div class="alert alert-info">
                                <i class="bx bx-info-circle me-2"></i>
                                Produk akan menunggu persetujuan admin sebelum dipublikasikan.
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            @if (auth()->user()->isAdmin())
                                Simpan & Publish Produk
                            @else
                                Submit untuk Approval
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Motorola Product -->
    <div class="modal fade" id="editMotorolaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="editMotorolaForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Produk Motorola</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="edit_name" class="form-label">Nama Produk <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="edit_name" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="edit_model_number" class="form-label">Model Number</label>
                                <input type="text" id="edit_model_number" name="model_number" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="edit_category" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select id="edit_category" name="category" class="form-select" required>
                                    <option value="VHF">VHF</option>
                                    <option value="UHF">UHF</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Repeater">Repeater</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="edit_type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select id="edit_type" name="type" class="form-select" required>
                                    <option value="Radio Mobil">Radio Mobil</option>
                                    <option value="Radio Portable">Radio Portable</option>
                                    <option value="Broadband">Broadband</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea id="edit_description" name="description" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="edit_specifications" class="form-label">Specifications</label>
                            <textarea id="edit_specifications" name="specifications" class="form-control" rows="6"></textarea>
                            <small class="text-muted">Masukkan spesifikasi dengan format "Label: Value" per baris</small>
                        </div>

                        <div class="mb-3">
                            <label for="edit_image" class="form-label">Product Image</label>
                            <input type="file" id="edit_image" name="image" class="form-control"
                                accept="image/jpeg,image/png,image/jpg">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            <div id="current-image" class="mt-2"></div>
                        </div>

                        @if (auth()->user()->isUser())
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
                                Update Produk
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
        function editMotorolaProduct(productId) {
            // Fetch product data via AJAX
            $.ajax({
                url: `/backend/motorola/${productId}/edit`,
                method: 'GET',
                success: function(product) {
                    // Set form action
                    const form = document.getElementById('editMotorolaForm');
                    form.action = `/backend/motorola/${product.id}`;

                    // Fill form fields
                    document.getElementById('edit_name').value = product.name || '';
                    document.getElementById('edit_model_number').value = product.model_number || '';
                    document.getElementById('edit_category').value = product.category || '';
                    document.getElementById('edit_type').value = product.type || '';
                    document.getElementById('edit_description').value = product.description || '';
                    document.getElementById('edit_specifications').value = product.specifications || '';

                    // Show current image if exists
                    if (product.image) {
                        document.getElementById('current-image').innerHTML = `
                            <p class="mb-1">Gambar saat ini:</p>
                            <img src="/storage/${product.image}" class="img-thumbnail" style="max-height: 200px;">
                        `;
                    } else {
                        document.getElementById('current-image').innerHTML = '';
                    }

                    // Show modal
                    const editModal = new bootstrap.Modal(document.getElementById('editMotorolaModal'));
                    editModal.show();
                },
                error: function(xhr) {
                    if (xhr.status === 403) {
                        alert('You can only edit your own products.');
                    } else {
                        alert('Error loading product data');
                    }
                }
            });
        }

        // Handle validation errors on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Reset modal when closed
            $('#editMotorolaModal').on('hidden.bs.modal', function() {
                // Clear form
                document.getElementById('editMotorolaForm').reset();
                document.getElementById('current-image').innerHTML = '';
                // Remove any backdrop if stuck
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
            });

            $('#addMotorolaModal').on('hidden.bs.modal', function() {
                // Clear form
                document.getElementById('addMotorolaModal').querySelector('form').reset();
                // Remove any backdrop if stuck
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
            });

            // Handle validation errors
            @if ($errors->any() && request()->is('backend/motorola') && old('_method') != 'PUT')
                const addModal = new bootstrap.Modal(document.getElementById('addMotorolaModal'));
                addModal.show();
            @endif

            @if ($errors->any() && request()->is('backend/motorola/*') && old('_method') == 'PUT')
                const editModal = new bootstrap.Modal(document.getElementById('editMotorolaModal'));
                editModal.show();
            @endif
        });
    </script>
@endsection
