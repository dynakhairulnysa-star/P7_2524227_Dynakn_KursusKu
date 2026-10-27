@extends('layouts.app')

@section('title', 'Pendaftaran Kursus')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h3 mb-3 text-white">Pendaftaran Kursus</h1>
                <p class="text-secondary">
                    Pilih kursus. Jumlah kursi akan dicek tanpa reload halaman.
                </p>

                <form method="POST" action="{{ route('enrollments.preview') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="course_id" class="form-label">Kursus</label>
                        <select id="course_id" name="course_id" class="form-select" required>
                            <option value="">-- Pilih Kursus --</option>
                            @foreach ($courses as $id => $course)
                                <option value="{{ $id }}" {{ old('course_id') == $id ? 'selected' : '' }}>
                                    {{ $course['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Kotak Availability: Menggunakan custom class -->
                    <div id="availability" class="alert alert-info-custom mb-4">
                        Pilih kursus untuk melihat sisa kursi.
                    </div>

                    <button type="submit" class="btn btn-primary px-4 py-2" style="background: #3b82f6; border: none; font-weight: 600;">Kirim Pendaftaran</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection