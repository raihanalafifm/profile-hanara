@extends('backend.layout.main')

@section('backend')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
                                <p class="mb-2">
                                    <span class="badge bg-{{ Auth::user()->isAdmin() ? 'danger' : 'primary' }}">
                                        {{ Auth::user()->role_label }}
                                    </span>
                                </p>
                                <p class="mb-4">
                                    @if (Auth::user()->isAdmin())
                                        Selamat datang di Dashboard Admin PT Hanara Prima Solusindo.
                                        Kelola konten website dan approve konten dari user.
                                    @else
                                        Selamat datang di Dashboard Content Creator PT Hanara Prima Solusindo.
                                        Buat dan kelola konten untuk website perusahaan.
                                    @endif
                            </div>
                        </div>
                    </div>

                    <!-- Motorola Products Card -->
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
                                <span class="fw-semibold d-block mb-1">
                                    @if (Auth::user()->isAdmin())
                                        Motorola Products
                                    @else
                                        My Products
                                    @endif
                                </span>
                                @if (Auth::user()->isAdmin())
                                    <h3 class="card-title mb-2">{{ \App\Models\Motorola::count() }}</h3>
                                    <div class="d-flex gap-2">
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-check"></i> {{ \App\Models\Motorola::approved()->count() }}
                                            Approved
                                        </small>
                                        <small class="text-warning fw-semibold">
                                            <i class="bx bx-time"></i> {{ \App\Models\Motorola::pending()->count() }}
                                            Pending
                                        </small>
                                    </div>
                                @else
                                    <h3 class="card-title mb-2">
                                        {{ \App\Models\Motorola::where('created_by', Auth::id())->count() }}</h3>
                                    <div class="d-flex gap-2">
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-check"></i>
                                            {{ \App\Models\Motorola::where('created_by', Auth::id())->approved()->count() }}
                                            Approved
                                        </small>
                                        <small class="text-warning fw-semibold">
                                            <i class="bx bx-time"></i>
                                            {{ \App\Models\Motorola::where('created_by', Auth::id())->pending()->count() }}
                                            Pending
                                        </small>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Only: Approval Summary -->
                @if (Auth::user()->isAdmin())
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card">
                                <h5 class="card-header">
                                    Pending Approvals
                                    @php
                                        $totalPending =
                                            \App\Models\Article::pending()->count() +
                                            \App\Models\Career::pending()->count() +
                                            \App\Models\Motorola::pending()->count();
                                    @endphp
                                    @if ($totalPending > 0)
                                        <span class="badge bg-warning ms-2">{{ $totalPending }}</span>
                                    @endif
                                </h5>
                                <div class="card-body">
                                    @if ($totalPending > 0)
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <span class="avatar-initial rounded bg-label-primary">
                                                            <i class="bx bx-news"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ \App\Models\Article::pending()->count() }}
                                                            Articles</h6>
                                                        <small class="text-muted">Waiting for approval</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="{{ route('backend.approval.articles') }}"
                                                            class="btn btn-sm btn-outline-primary">
                                                            Review
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <span class="avatar-initial rounded bg-label-info">
                                                            <i class="bx bx-briefcase"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ \App\Models\Career::pending()->count() }}
                                                            Careers</h6>
                                                        <small class="text-muted">Waiting for approval</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="{{ route('backend.approval.careers') }}"
                                                            class="btn btn-sm btn-outline-info">
                                                            Review
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <span class="avatar-initial rounded bg-label-warning">
                                                            <i class="bx bx-radio"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">{{ \App\Models\Motorola::pending()->count() }}
                                                            Products</h6>
                                                        <small class="text-muted">Waiting for approval</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="{{ route('backend.approval.motorola') }}"
                                                            class="btn btn-sm btn-outline-warning">
                                                            Review
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="text-center py-4">
                                            <div class="avatar mx-auto mb-3">
                                                <span class="avatar-initial rounded-circle bg-label-success"
                                                    style="width: 60px; height: 60px;">
                                                    <i class="bx bx-check" style="font-size: 24px;"></i>
                                                </span>
                                            </div>
                                            <h6 class="mb-2">All Clear! 🎉</h6>
                                            <p class="text-muted mb-0">No pending items require your approval.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Recent Content -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <h5 class="card-header">
                                @if (Auth::user()->isAdmin())
                                    Recent Content
                                @else
                                    My Recent Content
                                @endif
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            @if (Auth::user()->isAdmin())
                                                <th>Created By</th>
                                            @endif
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php
                                            $recentItems = collect();

                                            if (Auth::user()->isAdmin()) {
                                                $articles = \App\Models\Article::with('creator')
                                                    ->latest()
                                                    ->take(3)
                                                    ->get()
                                                    ->map(function ($item) {
                                                        $item->type = 'Article';
                                                        $item->route = 'backend.articles.index';
                                                        return $item;
                                                    });

                                                $careers = \App\Models\Career::with('creator')
                                                    ->latest()
                                                    ->take(2)
                                                    ->get()
                                                    ->map(function ($item) {
                                                        $item->type = 'Career';
                                                        $item->title = $item->position;
                                                        $item->route = 'backend.careers.index';
                                                        return $item;
                                                    });
                                            } else {
                                                $articles = \App\Models\Article::where('created_by', Auth::id())
                                                    ->latest()
                                                    ->take(3)
                                                    ->get()
                                                    ->map(function ($item) {
                                                        $item->type = 'Article';
                                                        $item->route = 'backend.articles.index';
                                                        return $item;
                                                    });

                                                $careers = \App\Models\Career::where('created_by', Auth::id())
                                                    ->latest()
                                                    ->take(2)
                                                    ->get()
                                                    ->map(function ($item) {
                                                        $item->type = 'Career';
                                                        $item->title = $item->position;
                                                        $item->route = 'backend.careers.index';
                                                        return $item;
                                                    });
                                            }

                                            $recentItems = $articles
                                                ->concat($careers)
                                                ->sortByDesc('created_at')
                                                ->take(5);
                                        @endphp

                                        @forelse($recentItems as $item)
                                            <tr>
                                                <td>
                                                    <span
                                                        class="badge bg-label-{{ $item->type == 'Article' ? 'primary' : 'info' }}">
                                                        {{ $item->type }}
                                                    </span>
                                                </td>
                                                <td>{{ Str::limit($item->title, 40) }}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $item->approval_status_badge_class ?? 'secondary' }}">
                                                        {{ $item->approval_status_label ?? 'Unknown' }}
                                                    </span>
                                                </td>
                                                @if (Auth::user()->isAdmin())
                                                    <td>{{ $item->creator->name ?? 'Unknown' }}</td>
                                                @endif
                                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                                <td>
                                                    <a href="{{ route($item->route) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Manage
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ Auth::user()->isAdmin() ? '6' : '5' }}"
                                                    class="text-center">
                                                    No content available
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Only: Quick Actions -->
                @if (Auth::user()->isUser())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h5 class="card-header">Quick Actions</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <a href="{{ route('backend.articles.index') }}"
                                                class="btn btn-outline-primary w-100">
                                                <i class="bx bx-plus me-2"></i>
                                                Create Article
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <a href="{{ route('backend.careers.index') }}"
                                                class="btn btn-outline-info w-100">
                                                <i class="bx bx-plus me-2"></i>
                                                Post Job Opening
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <a href="{{ route('backend.motorola.index') }}"
                                                class="btn btn-outline-warning w-100">
                                                <i class="bx bx-plus me-2"></i>
                                                Add Product
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endsection
