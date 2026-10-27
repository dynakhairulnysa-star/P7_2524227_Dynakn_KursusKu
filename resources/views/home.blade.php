@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<!-- 1. HERO SECTION -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge text-bg-success mb-3">Kursus teknologi untuk mahasiswa</span>
                <h1 class="display-4 fw-bold text-white mb-3">Belajar lebih terarah bersama KursusKu</h1>
                <p class="lead text-secondary mb-4">Pilih kursus, cek ketersediaan kursi, lalu isi formulir pendaftaran.</p>
                <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-lg px-4">Daftar Kursus</a>
            </div>
        </div>
    </div>
</section>

<!-- 2. KATALOG SECTION (PAKAI BOOTSTRAP GRID) -->
<section class="katalog-section">
    <div class="container">
        <h2 class="text-center text-white mb-5">Kursus Tersedia</h2>
        
        <!-- Gunakan class row dan g-4 (gap) bawaan Bootstrap -->
        <div class="row g-4">
            @foreach ($featured as $course)
            <!-- col-md-4 membuat card berjejer 3 ke samping di layar laptop -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 custom-card">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="course-code">{{ $course['code'] }}</span>
                        <h3 class="mt-2">{{ $course['name'] }}</h3>
                        <p class="course-date">Mulai: {{ $course['start'] }}</p>
                        
                        <div class="course-price mt-2">{{ $course['price'] }}</div>
                        <p class="course-quota">Sisa kuota: {{ $course['quota'] }} kursi</p>
                        
                        <div class="mt-auto">
                            @if ($course['quota'] > 0)
                                <span class="badge-available">Tersedia</span>
                            @else
                                <span class="badge-full">Penuh</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>
@endsection