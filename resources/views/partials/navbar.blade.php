<header class="custom-navbar">
    <div class="container nav-container">
        <!-- KIRI: Logo & Teks -->
        <div class="brand-wrap">
            <div class="logo-badge">K</div>
            <div class="brand-text">
                <h1>KursusKu</h1>
                <p>Pemrograman Web III · kursusku-laravel</p>
            </div>
        </div>

        <!-- KANAN: Menu & Badge Milestone -->
        <div class="nav-right">
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link-custom">Beranda</a>
                <a href="{{ route('enrollments.create') }}" class="nav-link-custom">Pendaftaran</a>
            </div>
            <span class="milestone-badge">Milestone 9</span>
        </div>
    </div>
</header>