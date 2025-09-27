@extends('layouts.app')

@section('title', 'Portfolio - Web Developer')

@section('content')


<!-- Projects Section -->
<section id="projects" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Proyek Terbaru</h2>
            <p class="lead">Beberapa proyek yang telah saya kerjakan</p>
        </div>
        <div class="row">
            @foreach($projects as $project)
            <div class="col-lg-4 mb-4">
                <div class="card project-card h-100">
                    @if(!empty($project['image']))
                        <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}" style="height:200px; object-fit:cover;">
                    @else
                        <div class="card-img-top bg-primary d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="fas fa-laptop-code text-white" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $project['title'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <div class="mb-3">
                            @foreach($project['tech'] as $tech)
                                <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        @if(!empty($project['link']) && $project['link'] !== '#')
                            <a href="{{ $project['link'] }}" class="btn btn-primary w-100 rounded-pill btn-lg">
                                Lihat Detail
                            </a>
                        @else
                            <button class="btn btn-secondary w-100 rounded-pill btn-lg" disabled>
                                Tidak tersedia
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection