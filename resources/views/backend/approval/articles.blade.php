@extends('backend.layout.main')

@section('backend')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Articles Approval</h5>
                </div>
                <div class="col-lg-4 text-end">
                    <!-- Filter -->
                    <form method="GET" class="d-inline">
                        <select name="status" class="form-select form-select-sm d-inline w-auto"
                            onchange="this.form.submit()">
                            <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved
                            </option>
                            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected
                            </option>
                        </select>
                    </form>
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
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Approved By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($articles as $article)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($article->image)
                                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                            class="rounded me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    @endif
                                    <div>
                                        <strong>{{ Str::limit($article->title, 40) }}</strong>
                                        <br><small class="text-muted">{{ Str::limit($article->description, 60) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-label-primary">{{ ucfirst($article->category) }}</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xs me-2">
                                        <img src="{{ $article->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($article->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                            alt="Avatar" class="rounded-circle">
                                    </div>
                                    <span>{{ $article->creator->name ?? 'Unknown' }}</span>
                                </div>
                            </td>
                            <td>{{ $article->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <span class="badge bg-{{ $article->approval_status_badge_class }}">
                                    {{ $article->approval_status_label }}
                                </span>
                            </td>
                            <td>
                                @if ($article->approver)
                                    <small>{{ $article->approver->name }}</small><br>
                                    <small class="text-muted">{{ $article->approved_at->format('d M Y H:i') }}</small>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="viewArticle({{ $article->id }})">
                                            <i class="bx bx-show me-1"></i> View Details
                                        </a>
                                        @if ($article->approval_status === 'pending')
                                            <a class="dropdown-item text-success" href="javascript:void(0);"
                                                onclick="approveArticle({{ $article->id }})">
                                                <i class="bx bx-check me-1"></i> Approve
                                            </a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);"
                                                onclick="rejectArticle({{ $article->id }})">
                                                <i class="bx bx-x me-1"></i> Reject
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No articles found</td>
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

    <!-- Modal View Article -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Article Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="articleDetails">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Approve -->
    <div class="modal fade" id="approveModal" tabindex="-1" aria-hidden="true"data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="approveForm" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Approve Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to approve this article?</p>
                        <div class="mb-3">
                            <label for="approval_notes" class="form-label">Approval Notes (Optional)</label>
                            <textarea id="approval_notes" name="approval_notes" class="form-control" rows="3"
                                placeholder="Add any notes about the approval..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Approve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Reject -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="rejectForm" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Reject Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to reject this article?</p>
                        <div class="mb-3">
                            <label for="reject_notes" class="form-label">Rejection Reason <span
                                    class="text-danger">*</span></label>
                            <textarea id="reject_notes" name="approval_notes" class="form-control" rows="3"
                                placeholder="Please provide a reason for rejection..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function viewArticle(id) {
            // Load article details
            $.ajax({
                url: `/backend/approval/item-details/article/${id}`,
                method: 'GET',
                success: function(response) {
                    const article = response.item;
                    const creator = response.creator;
                    const approver = response.approver;

                    let html = `
                    <div class="row">
                        <div class="col-md-8">
                            <h5>${article.title}</h5>
                            <p class="text-muted">${article.description}</p>
                            <div class="mb-3">
                                <strong>Category:</strong> <span class="badge bg-primary">${article.category}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Content:</strong>
                                <div class="border p-3 rounded" style="max-height: 300px; overflow-y: auto;">
                                    ${article.content || 'No content available'}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            ${article.image ? `<img src="/storage/${article.image}" class="img-fluid rounded mb-3" alt="Article Image">` : ''}
                            <div class="card">
                                <div class="card-body">
                                    <h6>Article Info</h6>
                                    <p><strong>Status:</strong> <span class="badge bg-${article.approval_status === 'pending' ? 'warning' : article.approval_status === 'approved' ? 'success' : 'danger'}">${article.approval_status}</span></p>
                                    <p><strong>Created by:</strong> ${creator ? creator.name : 'Unknown'}</p>
                                    <p><strong>Created at:</strong> ${new Date(article.created_at).toLocaleDateString()}</p>
                                    ${approver ? `
                                                        <p><strong>Approved by:</strong> ${approver.name}</p>
                                                        <p><strong>Approved at:</strong> ${new Date(article.approved_at).toLocaleDateString()}</p>
                                                    ` : ''}
                                    ${article.approval_notes ? `<p><strong>Notes:</strong> ${article.approval_notes}</p>` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                    $('#articleDetails').html(html);
                    $('#viewModal').modal('show');
                },
                error: function() {
                    alert('Error loading article details');
                }
            });
        }

        function approveArticle(id) {
            $('#approveForm').attr('action', `/backend/approval/articles/${id}/approve`);
            $('#approveModal').modal('show');
        }

        function rejectArticle(id) {
            $('#rejectForm').attr('action', `/backend/approval/articles/${id}/reject`);
            $('#rejectModal').modal('show');
        }
    </script>
@endsection
