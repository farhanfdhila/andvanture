<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['nama'] }} - Cerita Farhan</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Space Grotesk', sans-serif; }</style>
</head>
<body class="text-gray-900 p-6 md:p-12 overflow-x-hidden">

    <div class="max-w-4xl mx-auto">
        <a href="{{ url('/') }}" class="inline-block bg-white border-4 border-black font-bold py-2 px-6 mb-10 shadow-[4px_4px_0_0_rgba(0,0,0,1)] transition-all active:translate-y-1 active:translate-x-1 active:shadow-none hover:bg-[#FFE156]">
            <- Balik ke Menu
        </a>

        <div class="bg-[#2DD4BF] border-4 border-black px-8 py-6 mb-8 shadow-[8px_8px_0_0_rgba(0,0,0,1)]">
            <h1 class="text-4xl md:text-5xl font-black uppercase tracking-wide">
                {{ $data['nama'] }}
            </h1>
        </div>

        <div class="bg-white border-4 border-black shadow-[8px_8px_0_0_rgba(0,0,0,1)] p-6 md:p-8 mb-12">
            <p class="text-gray-800 text-lg font-medium leading-relaxed font-sans">
               {{ $data['cerita'] }}
            </p>
        </div>

        <div class="bg-white border-4 border-black p-8 mb-12 shadow-[8px_8px_0_0_rgba(0,0,0,1)] relative">
            <div class="absolute -top-5 -left-5 w-10 h-10 bg-[#FF90E8] border-4 border-black rounded-full z-10"></div>
            <h2 class="text-2xl font-bold mb-4 uppercase border-b-4 border-black inline-block">mots</h2>
            <p class="text-xl font-bold italic text-gray-700 mt-2">
                "{{ $data['mots'] }}"
            </p>
        </div>

        <h2 class="text-3xl font-bold uppercase mb-6 bg-[#FFE156] inline-block px-2 border-4 border-black transform rotate-1">Galeri Foto</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
            <div class="h-64 bg-gray-200 border-4 border-black shadow-[8px_8px_0_0_rgba(0,0,0,1)] flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/' . $data['foto1']) }}" alt="Foto 1" class="object-contain w-full h-full">
            </div>
            <div class="h-64 bg-gray-200 border-4 border-black shadow-[8px_8px_0_0_rgba(0,0,0,1)] flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/' . $data['foto2']) }}" alt="Foto 2" class="object-contain w-full h-full">
            </div>
        </div>
    </div>

</body>
</html>