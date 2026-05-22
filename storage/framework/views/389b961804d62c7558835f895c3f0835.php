<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farhan's Travel & Hike Memories</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Space Grotesk', sans-serif; } </style>
</head>
<body class="text-gray-900 p-6 md:p-12 overflow-x-hidden">

    <header class="max-w-6xl mx-auto mb-16 relative">
        <div class="relative z-10 bg-memphis-mint border-4 border-black p-8 shadow-memphis inline-block">
            <h1 class="text-5xl md:text-6xl font-bold uppercase tracking-tight mb-4">Reminiscence</h1>
            <p class="text-xl font-bold bg-white inline-block px-2 border-2 border-black transform -rotate-2">A little journey through time of Aan</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        
        <!-- Card 1: Gunung Merbabu -->
    <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/merbabu.jpg')); ?>" alt="Gunung Merbabu" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Tengah</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col row">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
            <div class="p-6 flex flex-col grow">
                <h2 class="text-2xl font-bold mb-2 uppercase">Gunung Merbabu</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Gancik Selo</p>
                <p class="mb-6 grow">13 - 15 November 2024 </p>
                <a href="<?php echo e(url('/cerita/gunung-merbabu')); ?>" class="block text-center w-full bg-memphis-blue text-white font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-memphis-blue mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 2: Gunung Pangrango -->
    <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/pangrango.jpg')); ?>" alt="Gunung Merbabu" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Barat</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col flex-grow">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
            <div class="p-6 flex flex-col flex-grow">
                <h2 class="text-2xl font-bold mb-2 uppercase">Gunung Pangrango</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Cibodas</p>
                <p class="mb-6 flex-grow">7 Mei 2026</p>
                <a href="<?php echo e(url('/cerita/gunung-pangrango')); ?>" class="block text-center w-full bg-memphis-pink text-white font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-memphis-pink mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 3: Gunung Salak 1 -->
<article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/salak1.jpg')); ?>" alt="Gunung Merbabu" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Barat</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col flex-grow">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
            <div class="p-6 flex flex-col flex-grow">
                <h2 class="text-2xl font-bold mb-2 uppercase">Gunung Salak 1</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Cimelati</p>
                <p class="mb-6 flex-grow">13 April 2024</p>
                <a href="<?php echo e(url('/cerita/gunung-salak-1')); ?>" class="block text-center w-full bg-memphis-yellow text-black font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-black mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 4: Gunung Salak 2 -->
    <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/salak2.jpg')); ?>" alt="Gunung Merbabu" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Barat</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col flex-grow">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
                <h2 class="text-2xl font-bold mb-2 uppercase">Gunung Salak 2</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Ajisaka</p>
                <p class="mb-6 flex-grow">10 Oktober 2024</p>
                <a href="<?php echo e(url('/cerita/gunung-salak-2')); ?>" class="block text-center w-full bg-memphis-mint text-black font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 5: Gunung Butik -->
    <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/butik.jpg')); ?>" alt="Gunung Butik" class="w-full h-full object-cover object-[30%_60%] grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Barat</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col flex-grow">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
                <h2 class="text-2xl font-bold mb-2 uppercase">Gunung Butik</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Hanjawong</p>
                <p class="mb-6 flex-grow">21 Agustus 2024</p>
                <a href="<?php echo e(url('/cerita/gunung-butik')); ?>" class="block text-center w-full bg-memphis-blue text-white font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-memphis-blue mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 6: Puncak Lumut -->
    <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <img src="<?php echo e(asset('images/lumut.jpg')); ?>" alt="Gunung Merbabu" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Barat</div>
    </div>
    <!-- BATAS UBAHAN -->

    <div class="p-6 flex flex-col flex-grow">
        <!-- ... (kode judul dan deskripsi bawahnya tetep sama) ... -->
                <h2 class="text-2xl font-bold mb-2 uppercase">Puncak Lumut</h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Via Sukamakmur</p>
                <p class="mb-6 flex-grow">28 Juli 2025</p>
                <a href="<?php echo e(url('/cerita/puncak-lumut')); ?>" class="block text-center w-full bg-memphis-pink text-white font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-memphis-pink mt-auto">
                    Look a Story ->
                </a>
            </div>
        </article>

        <!-- Card 7: Touring -->
        <article class="bg-white border-4 border-black shadow-memphis transition-all duration-300 hover:-translate-y-2 group flex flex-col">
    
    <!-- BAGIAN INI YANG KITA UBAH -->
    <!-- <div class="h-56 bg-memphis-yellow border-b-4 border-black relative flex-shrink-0 overflow-hidden">
        
        <!-- Masukin Fotonya Disini -->
        <!-- Fungsi asset() itu cara Laravel buat manggil file dari folder public -->
        <!-- <img src="<?php echo e(asset('images/touring.jpg')); ?>" alt="Gunung Butik" class="w-full h-full object-cover object-[30%_60%] grayscale group-hover:grayscale-0 transition duration-500">
        
        <!-- Badge "Jawa Tengah" tetep di atas fotonya -->
        <!-- <div class="absolute top-4 left-4 bg-memphis-pink text-white font-bold py-1 px-3 border-2 border-black -rotate-3 z-10">Jawa Tengah</div> -->
    <!-- </div>
            <div class="p-6 flex flex-col flex-grow">
                <h2 class="text-2xl font-bold mb-2 uppercase"></h2>
                <p class="text-sm font-bold text-gray-600 mb-4">Kemana aje yang penting ngaspal</p>
                <p class="mb-6 flex-grow">Ini cerita tentang touring gua hehe</p>
                <a href="<?php echo e(url('/cerita/touring')); ?>" class="block text-center w-full bg-black text-white font-bold py-3 border-4 border-black shadow-memphis transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-white hover:text-black mt-auto">
                    Look a Story ->
                </a> -->
            <!-- </div> -->
        <!-- </article> --> 

    </main>
</body>
</html><?php /**PATH C:\Users\Nitro V 15\farhan-adventures\resources\views/welcome.blade.php ENDPATH**/ ?>