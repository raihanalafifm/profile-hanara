@extends('backend.layout.main')

@section('backend')
    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">
                        Manajemen Artikel
                        @if (auth()->user()->isUser())
                            <small class="text-muted">(My Articles)</small>
                        @endif
                    </h5>
                </div>
                <div class="col-lg-4 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        <i class="bx bx-plus"></i> Tambah Artikel
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
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Kategori</th>
                        @if (auth()->user()->isAdmin())
                            <th>Created By</th>
                        @endif
                        <th>Approval Status</th>
                        <th>Tanggal Publish</th>
                        <th>Deskripsi</th>
                        @if (auth()->user()->isAdmin())
                            <th>Active Status</th>
                        @endif
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <strong>{{ Str::limit($article->title, 30) }}</strong>
                                <br><small class="text-muted">{{ $article->created_at->format('d M Y H:i') }}</small>
                            </td>
                            <td>
                                @if ($article->image)
                                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                        class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-label-primary">{{ ucfirst($article->category) }}</span>
                            </td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs me-2">
                                            <img src="{{ $article->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($article->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                                alt="Avatar" class="rounded-circle">
                                        </div>
                                        <span>{{ $article->creator->name ?? 'Unknown' }}</span>
                                    </div>
                                </td>
                            @endif
                            <td>
                                <span class="badge bg-{{ $article->approval_status_badge_class }}">
                                    {{ $article->approval_status_label }}
                                </span>
                                @if ($article->approval_status === 'rejected' && $article->approval_notes)
                                    <br><small class="text-danger">{{ Str::limit($article->approval_notes, 30) }}</small>
                                @endif
                            </td>
                            <td>{{ $article->published_at ? $article->published_at->format('d M Y') : '-' }}</td>
                            <td>{!! Str::limit(strip_tags($article->description), 50) !!}</td>
                            @if (auth()->user()->isAdmin())
                                <td>
                                    <form action="{{ route('backend.articles.toggle-status', $article) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-sm btn-{{ $article->is_active ? 'success' : 'secondary' }}">
                                            {{ $article->is_active ? 'Active' : 'Inactive' }}
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
                                        <a class="dropdown-item edit-article" href="javascript:void(0)"
                                            data-id="{{ $article->id }}" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        @if (auth()->user()->isAdmin() || $article->created_by === auth()->id())
                                            <form action="{{ route('backend.articles.destroy', $article) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
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
                            <td colspan="{{ auth()->user()->isAdmin() ? '10' : '8' }}" class="text-center">
                                @if (auth()->user()->isUser())
                                    Anda belum membuat artikel
                                @else
                                    Belum ada artikel
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal Add Article -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <form action="{{ route('backend.articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="title" class="form-label">Judul Artikel <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="title" name="title"
                                    class="form-control @error('title') is-invalid @enderror" required
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                                <select name="category" id="category"
                                    class="form-select @error('category') is-invalid @enderror" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="solusi" {{ old('category') == 'solusi' ? 'selected' : '' }}>Solusi
                                        Teknologi Bisnis</option>
                                    <option value="kasus" {{ old('category') == 'kasus' ? 'selected' : '' }}>Studi Kasus
                                        Klien</option>
                                    <option value="tips" {{ old('category') == 'tips' ? 'selected' : '' }}>Tips &
                                        Panduan IT</option>
                                    <option value="tech" {{ old('category') == 'tech' ? 'selected' : '' }}>Tren
                                        Teknologi</option>
                                    <option value="hnr" {{ old('category') == 'hnr' ? 'selected' : '' }}>Layanan Hanara
                                    </option>
                                    <option value="faq" {{ old('category') == 'faq' ? 'selected' : '' }}>FAQ Teknologi
                                    </option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Upload Gambar</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image" accept="image/*" onchange="previewImage(this)">
                                <small class="text-muted">Format: JPG, PNG, GIF. Max: 2MB</small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="published_at" class="form-label">Tanggal Publish</label>
                                <input type="datetime-local" id="published_at" name="published_at"
                                    class="form-control @error('published_at') is-invalid @enderror"
                                    value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}">
                                @error('published_at')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="description" class="form-label">Deskripsi Singkat <span
                                        class="text-danger">*</span></label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                    rows="3" maxlength="200" required>{{ old('description') }}</textarea>
                                <small class="text-muted">Deskripsi ini akan muncul di preview artikel (max 200
                                    karakter)</small>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="content" class="form-label">Konten Artikel</label>
                                <textarea id="content" name="content" class="form-control summernote @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="image-preview" class="mt-2"></div>
                            </div>
                        </div>

                        @if (auth()->user()->isUser())
                            <div class="alert alert-info">
                                <i class="bx bx-info-circle me-2"></i>
                                Artikel akan menunggu persetujuan admin sebelum dipublikasikan.
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            @if (auth()->user()->isAdmin())
                                Simpan & Publish Artikel
                            @else
                                Submit untuk Approval
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Article -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="edit_title" class="form-label">Judul Artikel <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="edit_title" name="title" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="edit_category" class="form-label">Kategori <span
                                        class="text-danger">*</span></label>
                                <select name="category" id="edit_category" class="form-select" required>
                                    <option value="solusi">Solusi Teknologi Bisnis</option>
                                    <option value="kasus">Studi Kasus Klien</option>
                                    <option value="tips">Tips & Panduan IT</option>
                                    <option value="tech">Tren Teknologi</option>
                                    <option value="hnr">Layanan Hanara</option>
                                    <option value="faq">FAQ Teknologi</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="edit_image" class="form-label">Upload Gambar Baru</label>
                                <input class="form-control" type="file" id="edit_image" name="image"
                                    accept="image/*" onchange="previewEditImage(this)">
                                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                                <div id="current-image" class="mt-2"></div>
                                <div id="edit-image-preview" class="mt-2"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="edit_published_at" class="form-label">Tanggal Publish</label>
                                <input type="datetime-local" id="edit_published_at" name="published_at"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit_description" class="form-label">Deskripsi Singkat <span
                                        class="text-danger">*</span></label>
                                <textarea id="edit_description" name="description" class="form-control" rows="3" maxlength="200" required></textarea>
                                <small class="text-muted">Deskripsi ini akan muncul di preview artikel (max 200
                                    karakter)</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="edit_content" class="form-label">Konten Artikel</label>
                                <textarea id="edit_content" name="content" class="form-control"></textarea>
                            </div>
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
                                Update Artikel
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
        $(document).ready(function() {
            // Test summernote loading
            console.log('jQuery loaded:', typeof $ !== 'undefined');
            console.log('Summernote loaded:', typeof $.fn.summernote !== 'undefined');

            // Initialize Summernote for add form dengan delay untuk memastikan DOM ready
            setTimeout(function() {
                $('#content').summernote({
                    height: 400,
                    placeholder: 'Tulis konten artikel di sini...',
                    tabsize: 2,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks: {
                        onChange: function(contents, $editable) {
                            // Update hidden textarea dengan konten
                            $('#content').val(contents);
                        }
                    }
                });
            }, 100);

            // Handle edit button click
            // Handle edit button click
            $('.edit-article').on('click', function(e) {
                e.preventDefault();

                const articleId = $(this).data('id');
                console.log('Editing article ID:', articleId); // Debug log

                // Show loading state
                $('#editModal .modal-body').prepend(
                    '<div class="loading-spinner text-center py-3"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>'
                );

                // Fetch article data via AJAX
                $.ajax({
                    url: `{{ url('backend/articles') }}/${articleId}/edit`,
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    success: function(article) {
                        console.log('Article data received:', article); // Debug log

                        // Remove loading spinner
                        $('#editModal .loading-spinner').remove();

                        // Set form action
                        $('#editForm').attr('action',
                            `{{ url('backend/articles') }}/${article.id}`);

                        // Fill form fields
                        $('#edit_title').val(article.title);
                        $('#edit_category').val(article.category);
                        $('#edit_description').val(article.description);

                        // Handle published date
                        if (article.published_at) {
                            $('#edit_published_at').val(article.published_at);
                        }

                        // Handle current image display
                        if (article.image) {
                            const imagePath = article.image.startsWith('articles/') ?
                                `/storage/${article.image}` : `/storage/${article.image}`;
                            $('#current-image').html(`
                                <p class="mb-1">Gambar saat ini:</p>
                                <img src="${imagePath}" class="img-thumbnail" style="max-height: 200px;">
                            `);
                        } else {
                            $('#current-image').html('');
                        }

                        // Clear new image preview
                        $('#edit-image-preview').html('');

                        // Initialize Summernote for edit form with content
                        $('#edit_content').summernote({
                            height: 400,
                            placeholder: 'Tulis konten artikel di sini...',
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'italic', 'underline', 'clear']],
                                ['fontname', ['fontname']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ],
                            callbacks: {
                                onInit: function() {
                                    // Set content after initialization
                                    $('#edit_content').summernote('code', article
                                        .content || '');
                                },
                                onChange: function(contents, $editable) {
                                    // Update hidden textarea dengan konten
                                    $('#edit_content').val(contents);
                                }
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', xhr.responseText); // Debug log

                        // Remove loading spinner
                        $('#editModal .loading-spinner').remove();

                        let errorMessage = 'Error loading article data. Please try again.';

                        if (xhr.status === 403) {
                            errorMessage = 'You can only edit your own articles.';
                        } else if (xhr.status === 404) {
                            errorMessage = 'Article not found.';
                        } else if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMessage = xhr.responseJSON.error;
                        }

                        alert(errorMessage);
                        $('#editModal').modal('hide');
                    }
                });
            });

            // Clean up Summernote when edit modal closes
            $('#editModal').on('hidden.bs.modal', function() {
                // Destroy Summernote instance
                if ($('#edit_content').data('summernote')) {
                    $('#edit_content').summernote('destroy');
                }

                // Clear form
                $('#editForm')[0].reset();
                $('#current-image').html('');
                $('#edit-image-preview').html('');
            });

            // Clean up add modal
            $('#basicModal').on('hidden.bs.modal', function() {
                $('#image-preview').html('');
            });

            // Form submit handler untuk memastikan data Summernote terkirim
            $('form').on('submit', function(e) {
                // Update textarea dengan konten Summernote terbaru
                if ($(this).find('.summernote').length) {
                    $(this).find('.summernote').each(function() {
                        const summernoteId = $(this).attr('id');
                        const content = $(`#${summernoteId}`).summernote('code');
                        $(this).val(content);
                    });
                }
            });

            // Handle validation errors
            @if ($errors->any() && request()->is('backend/articles') && old('_method') != 'PUT')
                const addModal = new bootstrap.Modal(document.getElementById('basicModal'));
                addModal.show();
            @endif

            @if ($errors->any() && request()->is('backend/articles/*') && old('_method') == 'PUT')
                const editModal = new bootstrap.Modal(document.getElementById('editModal'));
                editModal.show();
            @endif
        });

        // Image preview functions
        function previewImage(input) {
            const preview = document.getElementById('image-preview');
            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML =
                        `<img src="${e.target.result}" class="img-thumbnail" style="max-height: 200px;">`;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewEditImage(input) {
            const preview = document.getElementById('edit-image-preview');
            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `
                <p class="mb-1 mt-2">Gambar baru:</p>
                <img src="${e.target.result}" class="img-thumbnail" style="max-height: 200px;">
            `;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
