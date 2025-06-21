@extends('backend.layout.main')

@section('backend')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title mb-0">Careers Approval</h5>
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
                        <th>Position</th>
                        <th>Job Status</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Approval Status</th>
                        <th>Approved By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($careers as $career)
                        <tr>
                            <td>
                                <div>
                                    <strong>{{ $career->position }}</strong>
                                    <br><small class="text-muted">{{ Str::limit($career->description, 60) }}</small>
                                </div>
                            </td>
                            <td>
                                <span
                                    class="badge bg-{{ $career->status === 'open' ? 'success' : ($career->status === 'closed' ? 'danger' : 'warning') }}">
                                    {{ $career->status_icon }} {{ $career->status_label }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xs me-2">
                                        <img src="{{ $career->creator->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($career->creator->name ?? 'Unknown') . '&background=FF6B00&color=fff' }}"
                                            alt="Avatar" class="rounded-circle">
                                    </div>
                                    <span>{{ $career->creator->name ?? 'Unknown' }}</span>
                                </div>
                            </td>
                            <td>{{ $career->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <span class="badge bg-{{ $career->approval_status_badge_class }}">
                                    {{ $career->approval_status_label }}
                                </span>
                            </td>
                            <td>
                                @if ($career->approver)
                                    <small>{{ $career->approver->name }}</small><br>
                                    <small class="text-muted">{{ $career->approved_at->format('d M Y H:i') }}</small>
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
                                            onclick="viewCareer({{ $career->id }})">
                                            <i class="bx bx-show me-1"></i> View Details
                                        </a>
                                        @if ($career->approval_status === 'pending')
                                            <a class="dropdown-item text-success" href="javascript:void(0);"
                                                onclick="approveCareer({{ $career->id }})">
                                                <i class="bx bx-check me-1"></i> Approve
                                            </a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);"
                                                onclick="rejectCareer({{ $career->id }})">
                                                <i class="bx bx-x me-1"></i> Reject
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No careers found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="pagination-wrapper">
                {{ $careers->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Modal View Career -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Career Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="careerDetails">
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
                        <h5 class="modal-title">Approve Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to approve this career posting?</p>
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
                        <h5 class="modal-title">Reject Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to reject this career posting?</p>
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
        function viewCareer(id) {
            // Load career details
            $.ajax({
                url: `/backend/approval/item-details/career/${id}`,
                method: 'GET',
                success: function(response) {
                    const career = response.item;
                    const creator = response.creator;
                    const approver = response.approver;

                    let skillsHtml = '';
                    if (career.skills && career.skills.length > 0) {
                        skillsHtml = '<ul>';
                        career.skills.forEach(skill => {
                            skillsHtml += `<li>${skill}</li>`;
                        });
                        skillsHtml += '</ul>';
                    } else {
                        skillsHtml = '<p class="text-muted">No skills specified</p>';
                    }

                    let qualificationsHtml = '';
                    if (career.qualifications && career.qualifications.length > 0) {
                        qualificationsHtml = '<ul>';
                        career.qualifications.forEach(qualification => {
                            qualificationsHtml += `<li>${qualification}</li>`;
                        });
                        qualificationsHtml += '</ul>';
                    } else {
                        qualificationsHtml = '<p class="text-muted">No qualifications specified</p>';
                    }

                    let html = `
                    <div class="row">
                        <div class="col-md-8">
                            <h5>${career.position}</h5>
                            <p class="text-muted">${career.description}</p>
                            <div class="mb-3">
                                <strong>Job Status:</strong> 
                                <span class="badge bg-${career.status === 'open' ? 'success' : career.status === 'closed' ? 'danger' : 'warning'}">
                                    ${career.status.charAt(0).toUpperCase() + career.status.slice(1).replace('_', ' ')}
                                </span>
                            </div>
                            <div class="mb-3">
                                <strong>Required Skills:</strong>
                                ${skillsHtml}
                            </div>
                            <div class="mb-3">
                                <strong>Qualifications:</strong>
                                ${qualificationsHtml}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Career Info</h6>
                                    <p><strong>Status:</strong> <span class="badge bg-${career.approval_status === 'pending' ? 'warning' : career.approval_status === 'approved' ? 'success' : 'danger'}">${career.approval_status}</span></p>
                                    <p><strong>Created by:</strong> ${creator ? creator.name : 'Unknown'}</p>
                                    <p><strong>Created at:</strong> ${new Date(career.created_at).toLocaleDateString()}</p>
                                    ${approver ? `
                                            <p><strong>Approved by:</strong> ${approver.name}</p>
                                            <p><strong>Approved at:</strong> ${new Date(career.approved_at).toLocaleDateString()}</p>
                                        ` : ''}
                                    ${career.approval_notes ? `<p><strong>Notes:</strong> ${career.approval_notes}</p>` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                    $('#careerDetails').html(html);
                    $('#viewModal').modal('show');
                },
                error: function() {
                    alert('Error loading career details');
                }
            });
        }

        function approveCareer(id) {
            $('#approveForm').attr('action', `/backend/approval/careers/${id}/approve`);
            $('#approveModal').modal('show');
        }

        function rejectCareer(id) {
            $('#rejectForm').attr('action', `/backend/approval/careers/${id}/reject`);
            $('#rejectModal').modal('show');
        }
    </script>
@endsection
