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
                            <p class="mb-4">
                                Selamat datang di Dashboard Admin PT Hanara Prima Solusindo. 
                                Kelola konten website Anda dengan mudah melalui panel ini.
                            </p>
                            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-primary">View Website</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/assets1/img/illustrations/man-with-laptop-light.png') }}" 
                                 height="140" alt="View Badge User" 
                                 data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                 data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- Articles Card -->
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
                    <span class="fw-semibold d-block mb-1">Total Articles</span>
                    <h3 class="card-title mb-2">{{ \App\Models\Article::count() }}</h3>
                    <small class="text-success fw-semibold">
                        <i class="bx bx-up-arrow-alt"></i> {{ \App\Models\Article::active()->count() }} Active
                    </small>
                </div>
            </div>
        </div>
        
        <!-- Careers Card -->
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
                    <span class="fw-semibold d-block mb-1">Job Openings</span>
                    <h3 class="card-title mb-2">{{ \App\Models\Career::count() }}</h3>
                    <small class="text-success fw-semibold">
                        <i class="bx bx-up-arrow-alt"></i> {{ \App\Models\Career::active()->count() }} Active
                    </small>
                </div>
            </div>
        </div>
        
        <!-- Users Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="bx bx-user"></i>
                            </span>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Admin Users</span>
                    <h3 class="card-title mb-2">{{ \App\Models\User::count() }}</h3>
                    <small class="text-muted fw-semibold">
                        <i class="bx bx-user-check"></i> All Active
                    </small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Articles -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <h5 class="card-header">Recent Articles</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach(\App\Models\Article::latest()->take(5)->get() as $article)
                            <tr>
                                <td>{{ Str::limit($article->title, 40) }}</td>
                                <td>
                                    <span class="badge bg-{{ $article->is_active ? 'success' : 'secondary' }}">
                                        {{ $article->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ $article->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('backend.articles.index') }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bx bx-edit-alt me-1"></i> Manage
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection