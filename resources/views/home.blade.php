<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $siteName }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- BACKGROUND ANIMASI KAMU -->
    <canvas id="particle-canvas"></canvas>
    <div id="tech-bg"></div>
    <div class="tech-overlay"></div>
    <div class="tech-binary">
        <span style="top: 15%; left: 10%;">01001011 01110101 01110010</span>
        <span style="top: 30%; left: 80%;">&lt;?php echo "Hello, KursusKu"; ?&gt;</span>
        <span style="top: 70%; left: 15%;">SELECT * FROM courses;</span>
        <span style="top: 85%; left: 75%;">composer create-project</span>
        <span style="top: 45%; left: 50%;">npm run dev</span>
    </div>
    <div class="tech-panel">
        <div class="tech-panel-title">// SYSTEM //</div>
        <div class="tech-bar"><span></span></div>
        <div class="tech-bar"><span></span></div>
        <div style="margin-top: 8px;">STATUS: ONLINE</div>
    </div>

    <!-- HEADER / NAVBAR (Sudah Diperbaiki) -->
    <header class="site-header">
        <!-- Baris Atas -->
        <div class="container top-bar">
            <div class="brand-wrap">
                <div class="logo-badge">K</div>
                <div class="brand-text">
                    <h1>{{ $siteName }}</h1>
                    <!-- Tambahan Laravel MVC di sini -->
                    <p>Pemrograman Web III · Laravel MVC</p>
                </div>
            </div>
            <div class="header-right">
                <span class="milestone-badge">Milestone 7</span>
                <a href="#katalog" class="nav-btn">Lihat Program</a>
            </div>
        </div>
        <!-- Baris Bawah -->
        <div class="nav-bar">
            <div class="container nav-links">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="#alur-mvc">Alur MVC</a>
                <a href="#katalog">Kursus Pilihan</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero container">
        <div class="hero-content">
            <div>
                <span class="eyebrow">PERTEMUAN 7 · FRAMEWORK LARAVEL</span>
                <h2>Belajar terstruktur dengan Route, Controller, dan Blade.</h2>
                <p>Landing page KursusKu dipindahkan dari PHP biasa ke pola framework Laravel. Request masuk melalui route, data disiapkan controller, lalu Blade merender HTML.</p>
                <a href="#katalog" class="button">Program Belajar Unggulan</a>
                <a href="#alur-mvc" class="button button-secondary">Lihat Alur MVC</a>
            </div>
            <div>
                <img src="{{ asset('images/hero-kursus.png') }}" alt="Ilustrasi" class="hero-image">
            </div>
        </div>
    </section>

    <!-- SECTION ALUR MVC -->
    <section class="section container" id="alur-mvc">
        <h2>Alur MVC</h2>
        <div class="mvc-grid">
            <div class="mvc-step">
                <h3>Browser</h3>
                <p>GET /</p>
            </div>
            <div class="mvc-step">
                <h3>Route</h3>
                <p>web.php</p>
            </div>
            <div class="mvc-step">
                <h3>Controller</h3>
                <p>HomeController@index</p>
            </div>
            <div class="mvc-step">
                <h3>Blade View</h3>
                <p>home.blade.php</p>
            </div>
            <div class="mvc-step">
                <h3>Response</h3>
                <p>HTML ke browser</p>
            </div>
        </div>
    </section>

    <!-- KATALOG SECTION -->
    <section class="section container" id="katalog">
        <h2>Kursus Pilihan</h2>
        <div class="course-grid">
            @foreach ($featured as $course)
            <article class="course-card">
                <span class="course-code">{{ $course['code'] }}</span>
                <h3>{{ $course['name'] }}</h3>
                <p class="course-date">Mulai: {{ $course['start'] }}</p>
                
                <div class="course-price">{{ $course['price'] }}</div>
                <p class="course-quota">Sisa kuota: {{ $course['quota'] }} kursi</p>
                
                @if ($course['quota'] > 0)
                    <span class="badge-available" style="margin-top: 10px;">Tersedia</span>
                @else
                    <span class="badge-full" style="margin-top: 10px;">Penuh</span>
                @endif
            </article>
            @endforeach
        </div>
    </section>

    <!-- JAVASCRIPT ANIMASI PARTIKEL -->
    <script>
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        let particlesArray;
        let mouse = { x: null, y: null, radius: 100 }; 

        window.addEventListener('mousemove', function(event) {
            mouse.x = event.x;
            mouse.y = event.y;
        });

        window.addEventListener('mouseout', function() {
            mouse.x = null;
            mouse.y = null;
        });

        window.addEventListener('resize', function() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            init();
        });

        class Particle {
            constructor(x, y, directionX, directionY, size, color) {
                this.x = x; this.y = y; this.directionX = directionX; this.directionY = directionY; this.size = size; this.color = color;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
                ctx.fillStyle = '#60a5fa'; 
                ctx.fill();
            }
            update() {
                if (this.x > canvas.width || this.x < 0) { this.directionX = -this.directionX; }
                if (this.y > canvas.height || this.y < 0) { this.directionY = -this.directionY; }
                let dx = mouse.x - this.x; let dy = mouse.y - this.y;
                let distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < mouse.radius + this.size) {
                    if (mouse.x < this.x && this.x < canvas.width - this.size * 10) { this.x += 5; }
                    if (mouse.x > this.x && this.x > this.size * 10) { this.x -= 5; }
                    if (mouse.y < this.y && this.y < canvas.height - this.size * 10) { this.y += 5; }
                    if (mouse.y > this.y && this.y > this.size * 10) { this.y -= 5; }
                }
                this.x += this.directionX; this.y += this.directionY; this.draw();
            }
        }

        function init() {
            particlesArray = [];
            let numberOfParticles = (canvas.height * canvas.width) / 9000;
            for (let i = 0; i < numberOfParticles; i++) {
                let size = (Math.random() * 2) + 1;
                let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
                let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
                let directionX = (Math.random() * 0.4) - 0.2;
                let directionY = (Math.random() * 0.4) - 0.2;
                particlesArray.push(new Particle(x, y, directionX, directionY, size, '#60a5fa'));
            }
        }

        function connect() {
            let opacityValue = 1;
            for (let a = 0; a < particlesArray.length; a++) {
                for (let b = a; b < particlesArray.length; b++) {
                    let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x)) + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
                    if (distance < (canvas.width / 10) * (canvas.height / 10)) {
                        opacityValue = 1 - (distance / 20000);
                        ctx.strokeStyle = 'rgba(96, 165, 250,' + opacityValue + ')'; 
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0, 0, innerWidth, innerHeight);
            for (let i = 0; i < particlesArray.length; i++) { particlesArray[i].update(); }
            connect();
        }

        init(); animate();
    </script>
</body>
</html>