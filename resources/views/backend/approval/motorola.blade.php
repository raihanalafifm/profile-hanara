@extends('backend.layout.main')

@section('backend')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Motorola Products Approval</h5>
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
                        <th>Product</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Approval Status</th>
                        <th>Approved By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($products as $product)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                            class="rounded me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                    @endif
                                    <div>
                                        <strong>{{ $product->name }}</strong>
                                        @if ($product->model_number)
                                            <br><small class="text-muted">{{ $product->model_number }}</small>
                                        @endif
                                        @if ($product->description)
                                            <br><small
                                                class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-label-primary">{{ $product->category }}</span>
                            </td>
                            <td>{{ $product->type }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xs me-2">
                                        <img src="{{ $product->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($product->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                            alt="Avatar" class="rounded-circle">
                                    </div>
                                    <span>{{ $product->creator->name ?? 'Unknown' }}</span>
                                </div>
                            </td>
                            <td>{{ $product->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <span class="badge bg-{{ $product->approval_status_badge_class }}">
                                    {{ $product->approval_status_label }}
                                </span>
                            </td>
                            <td>
                                @if ($product->approver)
                                    <small>{{ $product->approver->name }}</small><br>
                                    <small class="text-muted">{{ $product->approved_at->format('d M Y H:i') }}</small>
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
                                            onclick="viewProduct({{ $product->id }})">
                                            <i class="bx bx-show me-1"></i> View Details
                                        </a>
                                        @if ($product->approval_status === 'pending')
                                            <a class="dropdown-item text-success" href="javascript:void(0);"
                                                onclick="approveProduct({{ $product->id }})">
                                                <i class="bx bx-check me-1"></i> Approve
                                            </a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);"
                                                onclick="rejectProduct({{ $product->id }})">
                                                <i class="bx bx-x me-1"></i> Reject
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No products found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $products->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal View Product -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="productDetails">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Approve -->
    <div class="modal fade" id="approveModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="approveForm" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Approve Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to approve this product?</p>
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
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="rejectForm" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Reject Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to reject this product?</p>
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
        function viewProduct(id) {
            // Load product details
            $.ajax({
                url: `/backend/approval/item-details/motorola/${id}`,
                method: 'GET',
                success: function(response) {
                    const product = response.item;
                    const creator = response.creator;
                    const approver = response.approver;

                    let specificationsHtml = '';
                    if (product.specifications && typeof product.specifications === 'object' && Object.keys(
                            product.specifications).length > 0) {
                        specificationsHtml = '<ul>';
                        Object.entries(product.specifications).forEach(([key, value]) => {
                            specificationsHtml += `<li><strong>${key}:</strong> ${value}</li>`;
                        });
                        specificationsHtml += '</ul>';
                    } else {
                        specificationsHtml = '<p class="text-muted">No specifications available</p>';
                    }

                    let html = `
                    <div class="row">
                        <div class="col-md-8">
                            <h5>${product.name}</h5>
                            ${product.model_number ? `<p class="text-muted">Model: ${product.model_number}</p>` : ''}
                            ${product.description ? `<p>${product.description}</p>` : ''}
                            <div class="mb-3">
                                <strong>Category:</strong> <span class="badge bg-primary">${product.category}</span>
                                <strong class="ms-3">Type:</strong> <span class="badge bg-info">${product.type}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Specifications:</strong>
                                ${specificationsHtml}
                            </div>
                            ${product.price ? `<div class="mb-3"><strong>Price:</strong> Rp ${new Intl.NumberFormat('id-ID').format(product.price)}</div>` : ''}
                        </div>
                        <div class="col-md-4">
                            ${product.image ? `<img src="/storage/${product.image}" class="img-fluid rounded mb-3" alt="Product Image">` : ''}
                            <div class="card">
                                <div class="card-body">
                                    <h6>Product Info</h6>
                                    <p><strong>Status:</strong> <span class="badge bg-${product.approval_status === 'pending' ? 'warning' : product.approval_status === 'approved' ? 'success' : 'danger'}">${product.approval_status}</span></p>
                                    <p><strong>Created by:</strong> ${creator ? creator.name : 'Unknown'}</p>
                                    <p><strong>Created at:</strong> ${new Date(product.created_at).toLocaleDateString()}</p>
                                    ${approver ? `
                                            <p><strong>Approved by:</strong> ${approver.name}</p>
                                            <p><strong>Approved at:</strong> ${new Date(product.approved_at).toLocaleDateString()}</p>
                                        ` : ''}
                                    ${product.approval_notes ? `<p><strong>Notes:</strong> ${product.approval_notes}</p>` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                    $('#productDetails').html(html);
                    $('#viewModal').modal('show');
                },
                error: function() {
                    alert('Error loading product details');
                }
            });
        }

        function approveProduct(id) {
            $('#approveForm').attr('action', `/backend/approval/motorola/${id}/approve`);
            $('#approveModal').modal('show');
        }

        function rejectProduct(id) {
            $('#rejectForm').attr('action', `/backend/approval/motorola/${id}/reject`);
            $('#rejectModal').modal('show');
        }
    </script>
@endsection
