<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STT Candra Sedana | Official Site</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body { font-family: 'Inter', sans-serif; }
        
        /* Gradasi Rivian Style */
        .hero-gradient { 
            background: linear-gradient(to top, 
                rgba(0,0,0,0.9) 0%, 
                rgba(0,0,0,0.4) 50%, 
                rgba(0,0,0,0) 100%); 
        }

        /* Swiper Custom Style */
        .swiper-button-next, .swiper-button-prev {
            color: #C5A059 !important;
            transform: scale(0.6);
        }
        .swiper-pagination-bullet-active {
            background: #C5A059 !important;
        }
        .swiper-pagination-bullet {
            background: rgba(255,255,255,0.5);
        }
    </style>
    
</head>
<body class="bg-black text-white antialiased overflow-x-hidden">

    <header class="fixed top-0 w-full z-50 px-4 py-4">
        <nav class="max-w-7xl mx-auto bg-white/90 backdrop-blur-md rounded-full px-8 py-3 flex justify-between items-center text-black shadow-2xl">
            <div class="flex items-center space-x-6">
                <button class="text-xl font-light hover:text-[#C5A059] transition">☰</button>
                <div class="hidden md:flex space-x-6 text-[12px] font-bold tracking-widest uppercase">
                    <a href="#profil" class="hover:text-[#C5A059] transition">Profil</a>
                    <a href="#kegiatan" class="hover:text-[#C5A059] transition">Kegiatan</a>
                    <a href="#caka" class="hover:text-[#C5A059] transition">Tahun Caka</a>
                </div>
            </div>

            <div class="absolute left-1/2 -translate-x-1/2 text-lg font-bold tracking-[0.4em] uppercase hidden lg:block">
                CANDRA<span class="text-[#C5A059]">SEDANA</span>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="bg-[#C5A059] text-white px-6 py-2 rounded-full text-[11px] font-black uppercase tracking-widest hover:bg-[#8C6A3E] transition shadow-lg">
                    Kontak
                </a>
                <a href="#" class="text-[12px] font-bold hidden sm:block uppercase tracking-widest">Sign In</a>
            </div>
        </nav>
    </header>

    <main class="relative h-screen w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/DSC04438.JPG') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1571235478473-86866299d13e?q=80&w=2000'"
                 class="w-full h-full object-cover" alt="Hero Background">
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative h-full flex flex-col justify-end items-center pb-24 text-center px-4" data-aos="fade-up">
            <h1 class="text-5xl md:text-8xl font-bold tracking-tighter mb-4 drop-shadow-2xl">
                Seka Truna Truni
            </h1>
            <p class="text-lg md:text-2xl font-semibold mb-12 text-[#C5A059] tracking-[0.3em] drop-shadow-md uppercase">
                Banjar Kutuh Kaja, Petulu, Ubud
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 w-full max-w-lg">
                <a href="#kegiatan" class="bg-white text-black px-12 py-4 rounded-sm font-bold text-[11px] uppercase tracking-[0.2em] hover:bg-gray-200 transition flex-1 shadow-2xl">
                    Jelajahi Kegiatan
                </a>
                <a href="{{ route('about') }}" class="bg-black/40 backdrop-blur-md border border-white/30 text-white px-12 py-4 rounded-sm font-bold text-[11px] uppercase tracking-[0.2em] hover:bg-white/10 transition flex-1">
                    Tentang Kami
                </a>
            </div>

            <div class="mt-16 flex space-x-3">
                <div class="w-16 h-[2px] bg-[#C5A059]"></div>
                <div class="w-16 h-[2px] bg-white/20"></div>
                <div class="w-16 h-[2px] bg-white/20"></div>
            </div>
        </div>
    </main>

    <section id="kegiatan" class="py-32 bg-black px-6 md:px-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center min-h-screen">
        <div class="order-2 md:order-1" data-aos="fade-right">
            <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">Kebudayaan</h2>
            <h3 class="text-4xl md:text-6xl font-bold mb-8 leading-tight">Ngayah &<br>Tradisi Suci</h3>
            <p class="text-gray-400 leading-relaxed mb-10 text-lg font-light">
                Menjaga warisan leluhur melalui partisipasi aktif pemuda-pemudi dalam setiap upacara adat di lingkungan Banjar Kutuh Kaja. Dari persiapan hari raya hingga pelaksanaan ritual suci di Pura.
            </p>
            <a href="#" class="inline-block border-b-2 border-[#C5A059] pb-2 text-xs font-bold tracking-[0.3em] hover:text-[#C5A059] transition uppercase">
                Lihat Dokumentasi Lengkap
            </a>
        </div>

        <div class="order-1 md:order-2 overflow-hidden rounded-2xl relative group shadow-2xl" data-aos="zoom-in">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/DSC04438.JPG') }}" onerror="this.src='https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?q=80&w=1200'" class="w-full h-[600px] object-cover" alt="Slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1544919982-b61976f0ba43?q=80&w=1200" class="w-full h-[600px] object-cover" alt="Slide 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1571235478473-86866299d13e?q=80&w=1200" class="w-full h-[600px] object-cover" alt="Slide 3">
                    </div>
                </div>
                <div class="swiper-button-next opacity-0 group-hover:opacity-100 transition"></div>
                <div class="swiper-button-prev opacity-0 group-hover:opacity-100 transition"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-[#080808] px-6 md:px-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center min-h-screen border-y border-white/5">
        <div class="overflow-hidden rounded-2xl shadow-2xl" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=1200" 
                 alt="Kutuh Kaja FC" class="w-full h-[600px] object-cover hover:scale-110 transition duration-[2s]">
        </div>
        <div data-aos="fade-left">
            <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">Sportivitas</h2>
            <h3 class="text-4xl md:text-6xl font-bold mb-8 leading-tight">Kutuh Kaja<br>Football Club</h3>
            <p class="text-gray-400 leading-relaxed mb-10 text-lg font-light">
                Bukan sekadar klub bola, ini adalah wadah persaudaraan. Kami berkomitmen menjalin persatuan pemuda melalui semangat kompetisi yang sehat di lapangan hijau.
            </p>
            <a href="https://instagram.com/kutuhkaja.fc" target="_blank" class="inline-block border-b-2 border-[#C5A059] pb-2 text-xs font-bold tracking-[0.3em] hover:text-[#C5A059] transition uppercase">
                Ikuti di Instagram
            </a>
        </div>
    </section>

    <section id="kegiatan" class="py-32 bg-black px-6 md:px-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center min-h-screen">
        <div class="order-2 md:order-1" data-aos="fade-right">
            <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">Kegiatan STT</h2>
            <h3 class="text-4xl md:text-6xl font-bold mb-8 leading-tight">Kegiatan Muda &<br>Mudi </h3>
            <p class="text-gray-400 leading-relaxed mb-10 text-lg font-light">
                Paruman Rutin (Awal Bulan) Pertemuan wajib seluruh anggota STT untuk merencanakan agenda bulanan, mengevaluasi kegiatan sebelumnya, serta mempererat tali persaudaraan antar pemuda-pemudi.
            </a>
            <a href="#" class="inline-block border-b-2 border-[#C5A059] pb-2 text-xs font-bold tracking-[0.3em] hover:text-[#C5A059] transition uppercase">
                Lihat Dokumentasi Lengkap
            </a>
        </div>

        <div class="order-1 md:order-2 overflow-hidden rounded-2xl relative group shadow-2xl" data-aos="zoom-in">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/DSC04438.JPG') }}" onerror="this.src='https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?q=80&w=1200'" class="w-full h-[600px] object-cover" alt="Slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1544919982-b61976f0ba43?q=80&w=1200" class="w-full h-[600px] object-cover" alt="Slide 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1571235478473-86866299d13e?q=80&w=1200" class="w-full h-[600px] object-cover" alt="Slide 3">
                    </div>
                </div>
                <div class="swiper-button-next opacity-0 group-hover:opacity-100 transition"></div>
                <div class="swiper-button-prev opacity-0 group-hover:opacity-100 transition"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

   <section id="caka" class="py-32 bg-black px-6 md:px-20 min-h-screen text-center">
    <div data-aos="fade-up">
        <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">
            Struktur Organisasi
        </h2>
        <h3 class="text-4xl md:text-6xl font-bold mb-24">
            STT Candra Sedana
        </h3>
    </div>

    <!-- Ketua -->
    <div class="flex justify-center mb-24" data-aos="zoom-in">
        <div class="group text-center">
            <div class="w-56 h-56 mx-auto rounded-full border-2 border-[#C5A059] p-3 mb-6 shadow-2xl shadow-[#C5A059]/10 group-hover:bg-[#C5A059]/10 transition duration-500">
                <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=600"
                     class="w-full h-full object-cover rounded-full" alt="Ketua">
            </div>
            <h4 class="font-bold tracking-[0.3em] uppercase text-sm">
                I Putu Dharma Putra
            </h4>
            <p class="text-[#C5A059] text-xs tracking-widest uppercase mt-2">
                Ketua
            </p>
        </div>
    </div>

    <!-- Pengurus Inti -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-12 max-w-6xl mx-auto">
        
        <!-- Wakil -->
        <div class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="100">
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition duration-500">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600"
                     class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition duration-500"
                     alt="Wakil Ketua">
            </div>
            <h4 class="tracking-[0.2em] uppercase text-xs">
                I Made Arya Wijaya
            </h4>
            <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                Wakil Ketua
            </p>
        </div>

        <!-- Sekretaris -->
        <div class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="200">
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition duration-500">
                <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=600"
                     class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition duration-500"
                     alt="Sekretaris">
            </div>
            <h4 class="tracking-[0.2em] uppercase text-xs">
                Ni Luh Putu Sari
            </h4>
            <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                Sekretaris
            </p>
        </div>

        <!-- Bendahara -->
        <div class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="300">
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition duration-500">
                <img src="https://images.unsplash.com/photo-1542206395-9feb3edaa68d?q=80&w=600"
                     class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition duration-500"
                     alt="Bendahara">
            </div>
            <h4 class="tracking-[0.2em] uppercase text-xs">
                I Komang Adi Pratama
            </h4>
            <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                Bendahara
            </p>
        </div>

        <!-- Humas -->
        <div class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="400">
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition duration-500">
                <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=600"
                     class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition duration-500"
                     alt="Humas">
            </div>
            <h4 class="tracking-[0.2em] uppercase text-xs">
                I Kadek Yoga Saputra
            </h4>
            <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                Humas
            </p>
        </div>

    </div>
</section>


    <footer class="bg-black py-20 border-t border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold tracking-[0.4em] uppercase mb-8">
                CANDRA<span class="text-[#C5A059]">SEDANA</span>
            </h2>
            <div class="flex justify-center space-x-8 mb-10 text-gray-400 text-xs tracking-widest uppercase">
                <a href="#" class="hover:text-white transition">Instagram</a>
                <a href="#" class="hover:text-white transition">Facebook</a>
                <a href="#" class="hover:text-white transition">YouTube</a>
            </div>
            <p class="text-gray-600 text-[10px] tracking-[0.2em] uppercase">
                © 2024 STT Candra Sedana. Banjar Kutuh Kaja, Ubud, Bali.
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // AOS Init
        AOS.init({
            duration: 1200,
            once: false,
            mirror: true
        });

        // Swiper Init
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: { delay: 4000 },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    </script>
</body>
</html>