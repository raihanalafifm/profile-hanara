@extends('backend.layout.main')

@section('backend')
    <!-- Motorola Product Management -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Manajemen Produk Motorola</h5>
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
                        {{-- <th>Price</th> --}}
                        <th>Status</th>
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
                            <td>{{ $product->name }}</td>
                            <td>
                                <span class="badge bg-label-primary">{{ $product->category }}</span>
                            </td>
                            <td>{{ $product->type }}</td>
                            {{-- <td>
                        @if ($product->price)
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        @else
                            -
                        @endif
                    </td> --}}
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
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editMotorolaProduct({{ $product->toJson() }})">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('backend.motorola.destroy', $product) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
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
                            <td colspan="8" class="text-center">Belum ada produk Motorola</td>
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
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="model_number" class="form-label">Model Number</label>
                                <input type="text" id="model_number" name="model_number"
                                    class="form-control @error('model_number') is-invalid @enderror"
                                    placeholder="e.g. XIR P3688 136-174 5W">
                                @error('model_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                <select id="category" name="category"
                                    class="form-select @error('category') is-invalid @enderror" required>
                                    <option value="">Select Category</option>
                                    <option value="VHF">VHF</option>
                                    <option value="UHF">UHF</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Repeater">Repeater</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select id="type" name="type"
                                    class="form-select @error('type') is-invalid @enderror" required>
                                    <option value="">Select Type</option>
                                    <option value="Radio Mobil">Radio Mobil</option>
                                    <option value="Radio Portable">Radio Portable</option>
                                    <option value="Broadband">Broadband</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="col-md-4 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" 
                                   placeholder="e.g. 5000000" step="1000">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="4" placeholder="Product description..."></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="specifications" class="form-label">Specifications</label>
                            <textarea id="specifications" name="specifications"
                                class="form-control @error('specifications') is-invalid @enderror" rows="6"
                                placeholder="Format per baris:&#10;Frequency Range: 136-174 MHz&#10;Power Output: 5W&#10;Channels: 16"></textarea>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
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
                            <div class="col-md-4 mb-3">
                                <label for="edit_category" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select id="edit_category" name="category" class="form-select" required>
                                    <option value="VHF">VHF</option>
                                    <option value="UHF">UHF</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Repeater">Repeater</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="edit_type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select id="edit_type" name="type" class="form-select" required>
                                    <option value="Radio Mobil">Radio Mobil</option>
                                    <option value="Radio Portable">Radio Portable</option>
                                    <option value="Broadband">Broadband</option>
                                </select>
                            </div>
                            {{-- <div class="col-md-4 mb-3">
                            <label for="edit_price" class="form-label">Price</label>
                            <input type="number" id="edit_price" name="price" class="form-control" step="1000">
                        </div> --}}
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function editArticle(article) {
            const form = document.getElementById('editForm');
            form.action = `/backend/articles/${article.id}`;

            document.getElementById('edit_title').value = article.title;
            document.getElementById('edit_link').value = article.link || '';
            document.getElementById('edit_description').value = article.description;

            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }

        function editCareer(career) {
            const form = document.getElementById('editCareerForm');
            form.action = `/backend/careers/${career.id}`;

            document.getElementById('edit_position').value = career.position;
            document.getElementById('edit_type').value = career.type;
            document.getElementById('edit_description').value = career.description;

            // Convert array skills dan qualifications ke string dengan newline
            if (career.skills && career.skills.length > 0) {
                document.getElementById('edit_skills').value = career.skills.join('\n');
            } else {
                document.getElementById('edit_skills').value = '';
            }

            if (career.qualifications && career.qualifications.length > 0) {
                document.getElementById('edit_qualifications').value = career.qualifications.join('\n');
            } else {
                document.getElementById('edit_qualifications').value = '';
            }

            const editModal = new bootstrap.Modal(document.getElementById('editCareerModal'));
            editModal.show();
        }

        function editUser(user) {
            const form = document.getElementById('editUserForm');
            form.action = `/backend/users/${user.id}`;

            document.getElementById('edit_name').value = user.name;
            document.getElementById('edit_email').value = user.email;
            document.getElementById('edit_password').value = '';
            document.getElementById('edit_password_confirmation').value = '';

            const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
            editModal.show();
        }

        function editMotorolaProduct(product) {
            // Parse product data jika masih string
            if (typeof product === 'string') {
                try {
                    product = JSON.parse(product);
                } catch (e) {
                    console.error('Error parsing product data:', e);
                    return;
                }
            }

            const form = document.getElementById('editMotorolaForm');
            form.action = `/backend/motorola/${product.id}`;

            // Set form values
            document.getElementById('edit_name').value = product.name || '';
            document.getElementById('edit_model_number').value = product.model_number || '';
            document.getElementById('edit_category').value = product.category || '';
            document.getElementById('edit_type').value = product.type || '';
            document.getElementById('edit_description').value = product.description || '';

            // Convert specifications object to string format
            if (product.specifications && typeof product.specifications === 'object') {
                let specsText = '';
                for (const [key, value] of Object.entries(product.specifications)) {
                    specsText += `${key}: ${value}\n`;
                }
                document.getElementById('edit_specifications').value = specsText.trim();
            } else {
                document.getElementById('edit_specifications').value = '';
            }

            // Show modal
            const editModal = new bootstrap.Modal(document.getElementById('editMotorolaModal'));
            editModal.show();
        }
    </script>
@endsection
