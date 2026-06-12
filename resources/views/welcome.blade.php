<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminiscence - Cerita Petualangan</title>
    <meta name="description" content="A little journey through time of Aan — cerita petualangan mendaki gunung dan menjelajah alam.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0B1120;
            --text-main: #F8FAFC;
            --text-muted: #94A3B8;
            --accent: #10B981;
            --card-bg: rgba(30, 41, 59, 0.7);
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Nav */
        .top-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            display: flex;
            justify-content: flex-end;
            padding: 20px 24px;
            gap: 12px;
        }
        .nav-link {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(10px);
            padding: 10px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background: rgba(255,255,255,0.15);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background: linear-gradient(to bottom, rgba(11,17,32,0.4), var(--bg-color)), url('/images/bg-home2.webp') center/cover no-repeat;
        }
        .hero-content {
            z-index: 2;
            padding: 0 20px;
        }
        .hero h1 {
            font-size: clamp(2.8rem, 8vw, 5rem);
            font-weight: 700;
            letter-spacing: -2px;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #fff, #94A3B8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero p {
            font-size: clamp(1rem, 2vw, 1.4rem);
            color: var(--text-muted);
            font-weight: 300;
            max-width: 550px;
            margin: 0 auto;
        }
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
            color: var(--text-muted);
            font-size: 0.8rem;
            letter-spacing: 3px;
            text-transform: uppercase;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(-15px) translateX(-50%); }
            60% { transform: translateY(-8px) translateX(-50%); }
        }

        /* Main Grid */
        main {
            max-width: 1200px;
            margin: -80px auto 80px auto;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        @media (min-width: 640px) { .grid { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .grid { grid-template-columns: repeat(3, 1fr); } }

        /* Card Design */
        .card {
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.05);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
        }
        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.6);
            border-color: rgba(255,255,255,0.1);
        }
        .card-img {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .card:hover .card-img img {
            transform: scale(1.05);
        }
        .badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(4px);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-main);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .card-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .card-sub {
            color: var(--accent);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 14px;
        }
        .card-date {
            color: var(--text-muted);
            font-size: 0.8rem;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .read-more {
            color: #fff;
            opacity: 0;
            transform: translateX(-8px);
            transition: all 0.3s ease;
        }
        .card:hover .read-more {
            opacity: 1;
            transform: translateX(0);
        }

        /* Responsive Mobile */
        @media (max-width: 600px) {
            .top-nav { padding: 12px 16px; }
            .nav-link { padding: 8px 14px; font-size: 0.8rem; }
            .hero { min-height: 400px; }
            main { margin-top: -50px; padding: 0 16px; margin-bottom: 60px; }
            .card-img { height: 180px; }
            .card-content { padding: 16px; }
            .card-title { font-size: 1.15rem; }
        }
    </style>
</head>
<body>

    <nav class="top-nav">
        <a href="/about" class="nav-link">Tentang</a>
        <a href="/galeri/" class="nav-link">Galeri Pendakian</a>
    </nav>

    <header class="hero">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1>Reminiscence</h1>
            <p>A little journey through time of Aan</p>
        </div>
        <div class="scroll-indicator">
            Scroll down
            <svg class="w-6 h-6 mx-auto mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px; margin: 8px auto 0 auto;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </header>

    <main>
        <div class="filter-container" style="margin-bottom: 2rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <input type="text" id="searchInput" placeholder="Cari gunung..." style="padding: 10px 16px; border-radius: 50px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.5); color: white; outline: none; width: 100%; max-width: 300px;">
            <select id="regionFilter" style="padding: 10px 16px; border-radius: 50px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.5); color: white; outline: none;">
                <option value="all">Semua Wilayah</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        </div>

        <div class="grid">
            <!-- Card 1: Gunung Merbabu -->
            <a href="/cerita/gunung-merbabu/" class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img">
                    <img src="/images/merbabu.webp" alt="Gunung Merbabu">
                    <span class="badge">Jawa Tengah</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Gunung Merbabu</h2>
                    <p class="card-sub">Via Gancik Selo</p>
                    <div class="card-date">
                        <span>13 - 15 November 2024</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Card 2: Gunung Pangrango -->
            <a href="/cerita/gunung-pangrango/" class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="/images/pangrango.webp" alt="Gunung Pangrango">
                    <span class="badge">Jawa Barat</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Gunung Pangrango</h2>
                    <p class="card-sub">Via Cibodas</p>
                    <div class="card-date">
                        <span>7 Mei 2026</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Card 3: Gunung Salak 1 -->
            <a href="/cerita/gunung-salak-1/" class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-img">
                    <img src="/images/salak1.webp" alt="Gunung Salak 1">
                    <span class="badge">Jawa Barat</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Gunung Salak 1</h2>
                    <p class="card-sub">Via Cimelati</p>
                    <div class="card-date">
                        <span>13 April 2024</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Card 4: Gunung Salak 2 -->
            <a href="/cerita/gunung-salak-2/" class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img">
                    <img src="/images/salak2.webp" alt="Gunung Salak 2">
                    <span class="badge">Jawa Barat</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Gunung Salak 2</h2>
                    <p class="card-sub">Via Ajisaka</p>
                    <div class="card-date">
                        <span>10 Oktober 2024</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Card 5: Gunung Butik -->
            <a href="/cerita/gunung-butik/" class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="/images/butik.webp" alt="Gunung Butik" style="object-position: 30% 60%;">
                    <span class="badge">Jawa Barat</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Gunung Butik</h2>
                    <p class="card-sub">Via Hanjawong</p>
                    <div class="card-date">
                        <span>21 Agustus 2024</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- Card 6: Puncak Lumut -->
            <a href="/cerita/puncak-lumut/" class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-img">
                    <img src="/images/lumut.webp" alt="Puncak Lumut">
                    <span class="badge">Jawa Barat</span>
                </div>
                <div class="card-content">
                    <h2 class="card-title">Puncak Lumut</h2>
                    <p class="card-sub">Via Sukamakmur</p>
                    <div class="card-date">
                        <span>28 Juli 2025</span>
                        <span class="read-more">Baca Cerita &rarr;</span>
                    </div>
                </div>
            </a>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 800
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const regionFilter = document.getElementById('regionFilter');
            const cards = document.querySelectorAll('.card');

            function filterCards() {
                const searchText = searchInput.value.toLowerCase();
                const region = regionFilter.value;

                cards.forEach(card => {
                    const title = card.querySelector('.card-title').textContent.toLowerCase();
                    const badge = card.querySelector('.badge').textContent;
                    
                    const matchSearch = title.includes(searchText);
                    const matchRegion = region === 'all' || badge === region;

                    if (matchSearch && matchRegion) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            if(searchInput) searchInput.addEventListener('input', filterCards);
            if(regionFilter) regionFilter.addEventListener('change', filterCards);
        });
    </script>
</body>
</html>
