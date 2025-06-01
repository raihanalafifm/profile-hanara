@extends('backend.layout.main')

@section('backend')
<style>
    .note-editor.note-frame {
        border: 1px solid #ddd !important;
        border-radius: 4px !important;
    }
    
    .note-toolbar {
        background-color: #f8f9fa !important;
        border-bottom: 1px solid #ddd !important;
    }
    
    .note-btn-group {
        margin-right: 5px !important;
    }
</style>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-8">
                <h5 class="card-title mb-0">Manajemen Artikel</h5>
            </div>
            <div class="col-lg-4 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    <i class="bx bx-plus"></i> Tambah Artikel
                </button>
            </div>
        </div>
    </div>

    @if(session('success'))
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
                    <th>Tanggal Publish</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($article->title, 30) }}</td>
                    <td>
                        @if($article->image)
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" 
                                 class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>
                        <span class="badge bg-label-primary">{{ ucfirst($article->category) }}</span>
                    </td>
                    <td>{{ $article->published_at ? $article->published_at->format('d M Y') : '-' }}</td>
                    <td>{{ Str::limit($article->description, 50) }}</td>
                    <td>
                        <form action="{{ route('backend.articles.toggle-status', $article) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-{{ $article->is_active ? 'success' : 'secondary' }}">
                                {{ $article->is_active ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item edit-article" href="javascript:void(0)" 
                                   data-id="{{ $article->id }}"
                                   data-bs-toggle="modal" 
                                   data-bs-target="#editModal">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                <form action="{{ route('backend.articles.destroy', $article) }}" method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
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
                    <td colspan="8" class="text-center">Belum ada artikel</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="card-footer">
        {{ $articles->links() }}
    </div>
</div>

<!-- Modal Add Article -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
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
                            <label for="title" class="form-label">Judul Artikel <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select name="category" id="category" class="form-select" required>
                                <option value="csr">CSR & Lingkungan</option>
                                <option value="news">Berita</option>
                                <option value="event">Event</option>
                                <option value="tech">Teknologi</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*" onchange="previewImage(this)">
                            <small class="text-muted">Format: JPG, PNG, GIF. Max: 2MB</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="published_at" class="form-label">Tanggal Publish</label>
                            <input type="datetime-local" id="published_at" name="published_at" class="form-control" value="{{ now()->format('Y-m-d\TH:i') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="link" class="form-label">Link Eksternal</label>
                            <input type="url" id="link" name="link" class="form-control" placeholder="https://example.com">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
                            <textarea id="description" name="description" class="form-control" rows="3" maxlength="200" required></textarea>
                            <small class="text-muted">Deskripsi ini akan muncul di preview artikel</small>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col mb-3">
                            <label for="content" class="form-label">Konten Artikel</label>
                            <textarea id="content" name="content" class="form-control summernote"></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div id="image-preview" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Article -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
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
                            <label for="edit_title" class="form-label">Judul Artikel <span class="text-danger">*</span></label>
                            <input type="text" id="edit_title" name="title" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="edit_category" class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select name="category" id="edit_category" class="form-select" required>
                                <option value="csr">CSR & Lingkungan</option>
                                <option value="news">Berita</option>
                                <option value="event">Event</option>
                                <option value="tech">Teknologi</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="edit_image" class="form-label">Upload Gambar Baru</label>
                            <input class="form-control" type="file" id="edit_image" name="image" accept="image/*" onchange="previewEditImage(this)">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                            <div id="current-image" class="mt-2"></div>
                            <div id="edit-image-preview" class="mt-2"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="edit_published_at" class="form-label">Tanggal Publish</label>
                            <input type="datetime-local" id="edit_published_at" name="published_at" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="edit_link" class="form-label">Link Eksternal</label>
                            <input type="url" id="edit_link" name="link" class="form-control" placeholder="https://example.com">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col mb-3">
                            <label for="edit_description" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
                            <textarea id="edit_description" name="description" class="form-control" rows="3" maxlength="200" required></textarea>
                            <small class="text-muted">Deskripsi ini akan muncul di preview artikel</small>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col mb-3">
                            <label for="edit_content" class="form-label">Konten Artikel</label>
                            <textarea id="edit_content" name="content" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Artikel</button>
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
            ]
        });
    }, 100);

    // Handle edit button click
    $('.edit-article').on('click', function(e) {
        e.preventDefault();
        
        const articleId = $(this).data('id');
        
        // Show loading state
        $('#editModal .modal-body').prepend('<div class="loading-spinner text-center py-3"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>');
        
        // Fetch article data via AJAX
        $.ajax({
            url: `/backend/articles/${articleId}`,
            method: 'GET',
            success: function(article) {
                // Remove loading spinner
                $('#editModal .loading-spinner').remove();
                
                // Set form action
                $('#editForm').attr('action', `/backend/articles/${article.id}`);
                
                // Fill form fields
                $('#edit_title').val(article.title);
                $('#edit_category').val(article.category);
                $('#edit_description').val(article.description);
                $('#edit_link').val(article.link || '');
                
                // Handle published date
                if (article.published_at) {
                    const date = new Date(article.published_at);
                    const localDate = date.toISOString().slice(0, 16);
                    $('#edit_published_at').val(localDate);
                }
                
                // Handle current image display
                if (article.image) {
                    const imagePath = article.image.startsWith('articles/') ? `/storage/${article.image}` : article.image;
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
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks: {
                        onInit: function() {
                            // Set content after initialization
                            $('#edit_content').summernote('code', article.content || '');
                        }
                    }
                });
            },
            error: function(xhr, status, error) {
                // Remove loading spinner
                $('#editModal .loading-spinner').remove();
                
                alert('Error loading article data. Please try again.');
                console.error('Error:', error);
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
});

// Image preview functions
function previewImage(input) {
    const preview = document.getElementById('image-preview');
    preview.innerHTML = '';
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" style="max-height: 200px;">`;
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
