@extends('backend.layout.main')

@section('backend')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Header -->
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Approval Dashboard 📋</h5>
                                <p class="mb-4">
                                    Kelola semua permintaan persetujuan dari user. Review dan approve konten yang telah
                                    dibuat.
                                </p>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('backend.approval.articles') }}"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="bx bx-news"></i> Articles
                                    </a>
                                    <a href="{{ route('backend.approval.careers') }}" class="btn btn-sm btn-outline-info">
                                        <i class="bx bx-briefcase"></i> Careers
                                    </a>
                                    <a href="{{ route('backend.approval.motorola') }}"
                                        class="btn btn-sm btn-outline-warning">
                                        <i class="bx bx-radio"></i> Motorola
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/assets1/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="Approval Dashboard">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row">
            <!-- Articles Stats -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="bx bx-news"></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Articles</span>
                        <div class="row">
                            <div class="col-4 text-center">
                                <small class="text-warning">Pending</small>
                                <h4 class="text-warning mb-0">{{ $stats['articles']['pending'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-success">Approved</small>
                                <h4 class="text-success mb-0">{{ $stats['articles']['approved'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-danger">Rejected</small>
                                <h4 class="text-danger mb-0">{{ $stats['articles']['rejected'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Careers Stats -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-info">
                                    <i class="bx bx-briefcase"></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Careers</span>
                        <div class="row">
                            <div class="col-4 text-center">
                                <small class="text-warning">Pending</small>
                                <h4 class="text-warning mb-0">{{ $stats['careers']['pending'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-success">Approved</small>
                                <h4 class="text-success mb-0">{{ $stats['careers']['approved'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-danger">Rejected</small>
                                <h4 class="text-danger mb-0">{{ $stats['careers']['rejected'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Motorola Stats -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="bx bx-radio"></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Motorola Products</span>
                        <div class="row">
                            <div class="col-4 text-center">
                                <small class="text-warning">Pending</small>
                                <h4 class="text-warning mb-0">{{ $stats['motorola']['pending'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-success">Approved</small>
                                <h4 class="text-success mb-0">{{ $stats['motorola']['approved'] }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <small class="text-danger">Rejected</small>
                                <h4 class="text-danger mb-0">{{ $stats['motorola']['rejected'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Pending Items -->
        <div class="row">
            <!-- Pending Articles -->
            @if ($pendingArticles->count() > 0)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h5 class="card-header">
                            Pending Articles
                            <span class="badge bg-warning ms-2">{{ $pendingArticles->count() }}</span>
                        </h5>
                        <div class="card-body">
                            @foreach ($pendingArticles as $article)
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ Str::limit($article->title, 30) }}</h6>
                                        <small class="text-muted">
                                            by {{ $article->creator->name ?? 'Unknown' }} •
                                            {{ $article->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                    <a href="{{ route('backend.approval.articles') }}"
                                        class="btn btn-sm btn-outline-primary">
                                        Review
                                    </a>
                                </div>
                                @if (!$loop->last)
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Pending Careers -->
            @if ($pendingCareers->count() > 0)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h5 class="card-header">
                            Pending Careers
                            <span class="badge bg-warning ms-2">{{ $pendingCareers->count() }}</span>
                        </h5>
                        <div class="card-body">
                            @foreach ($pendingCareers as $career)
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ $career->position }}</h6>
                                        <small class="text-muted">
                                            by {{ $career->creator->name ?? 'Unknown' }} •
                                            {{ $career->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                    <a href="{{ route('backend.approval.careers') }}"
                                        class="btn btn-sm btn-outline-primary">
                                        Review
                                    </a>
                                </div>
                                @if (!$loop->last)
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Pending Motorola Products -->
            @if ($pendingMotorolaProducts->count() > 0)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <h5 class="card-header">
                            Pending Motorola Products
                            <span class="badge bg-warning ms-2">{{ $pendingMotorolaProducts->count() }}</span>
                        </h5>
                        <div class="card-body">
                            @foreach ($pendingMotorolaProducts as $product)
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ Str::limit($product->name, 25) }}</h6>
                                        <small class="text-muted">
                                            by {{ $product->creator->name ?? 'Unknown' }} •
                                            {{ $product->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                    <a href="{{ route('backend.approval.motorola') }}"
                                        class="btn btn-sm btn-outline-primary">
                                        Review
                                    </a>
                                </div>
                                @if (!$loop->last)
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- No Pending Items -->
            @if ($pendingArticles->count() == 0 && $pendingCareers->count() == 0 && $pendingMotorolaProducts->count() == 0)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center py-5">
                            <div class="avatar mx-auto mb-3">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                    style="width: 60px; height: 60px;">
                                    <i class="bx bx-check" style="font-size: 24px;"></i>
                                </span>
                            </div>
                            <h5 class="mb-2">All Clear! 🎉</h5>
                            <p class="text-muted">No pending items require your approval at the moment.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Quick Actions -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Quick Actions</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('backend.approval.articles') }}" class="btn btn-outline-primary w-100">
                                    <i class="bx bx-news me-2"></i>
                                    Review Articles
                                    @if ($stats['articles']['pending'] > 0)
                                        <span class="badge bg-warning ms-2">{{ $stats['articles']['pending'] }}</span>
                                    @endif
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('backend.approval.careers') }}" class="btn btn-outline-info w-100">
                                    <i class="bx bx-briefcase me-2"></i>
                                    Review Careers
                                    @if ($stats['careers']['pending'] > 0)
                                        <span class="badge bg-warning ms-2">{{ $stats['careers']['pending'] }}</span>
                                    @endif
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('backend.approval.motorola') }}" class="btn btn-outline-warning w-100">
                                    <i class="bx bx-radio me-2"></i>
                                    Review Products
                                    @if ($stats['motorola']['pending'] > 0)
                                        <span class="badge bg-warning ms-2">{{ $stats['motorola']['pending'] }}</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
