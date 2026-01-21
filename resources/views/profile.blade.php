<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil STT Candra Sedana | Dedikasi Untuk Tradisi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css'])
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-black text-white antialiased">

    <header class="fixed top-0 w-full z-50 px-4 py-4">
        <x-navbar />
    </header>

    <x-mega-menu />

    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <img src="{{ asset('images/DSC04438.JPG') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-40" 
             alt="Profil Background">
        <div class="absolute inset-0 bg-linear-to-b from-black/60 via-black/80 to-black"></div>
        
        <div class="relative z-10 text-center" data-aos="zoom-out">
            <h1 class="text-[#C5A059] tracking-[0.5em] uppercase text-sm font-bold mb-4">Mengenal Lebih Dekat</h1>
            <h2 class="text-5xl md:text-7xl font-black italic tracking-tighter">PROFIL KAMI</h2>
        </div>
    </section>

    <section class="relative py-24 px-6 md:px-20 bg-elegant">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold mb-8 flex items-center gap-4">
                    <span class="w-12 h-[px] bg-[#C5A059]"></span> VISI
                </h3>
                <p class="text-2xl text-gray-300 font-light leading-relaxed italic">
                    "Mewujudkan generasi muda Banjar Kutuh Kaja yang unggul dalam intelektual, kokoh dalam tradisi, dan harmonis dalam persaudaraan untuk kemajuan desa."
                </p>
            </div>
            <div data-aos="fade-left">
                <h3 class="text-3xl font-bold mb-8 flex items-center gap-4">
                    <span class="w-12 h-[px] bg-[#C5A059]"></span> MISI
                </h3>
                <ul class="space-y-6">
                    <li class="flex gap-4">
                        <span class="text-[#C5A059] font-bold">01.</span>
                        <p class="text-gray-400">Melestarikan nilai-nilai adat dan budaya Bali melalui partisipasi aktif dalam kegiatan keagamaan.</p>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-[#C5A059] font-bold">02.</span>
                        <p class="text-gray-400">Menciptakan wadah kreativitas bagi pemuda di bidang seni, olahraga, dan kewirausahaan.</p>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-[#C5A059] font-bold">03.</span>
                        <p class="text-gray-400">Membangun solidaritas sosial dan kepedulian terhadap lingkungan Banjar Kutuh Kaja.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-[#C5A059] tracking-widest text-sm uppercase font-bold">Core Values</h2>
                <h3 class="text-4xl font-bold mt-4">Nilai Dasar Kami</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-10 border border-white/5 bg-white/2 rounded-3xl hover:border-[#C5A059]/50 transition duration-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-[#C5A059] text-4xl mb-6">✦</div>
                    <h4 class="text-xl font-bold mb-4">Menyama Braya</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Prinsip kekeluargaan dan persaudaraan yang menjadi pondasi utama setiap langkah kami.</p>
                </div>
                <div class="p-10 border border-white/5 bg-white/2 rounded-3xl hover:border-[#C5A059]/50 transition duration-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-[#C5A059] text-4xl mb-6">✦</div>
                    <h4 class="text-xl font-bold mb-4">Yowana Bakti</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Pengabdian tulus generasi muda kepada desa adat dan lingkungan masyarakat.</p>
                </div>
                <div class="p-10 border border-white/5 bg-white/2 rounded-3xl hover:border-[#C5A059]/50 transition duration-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-[#C5A059] text-4xl mb-6">✦</div>
                    <h4 class="text-xl font-bold mb-4">Kreativitas</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Terus berinovasi tanpa meninggalkan akar budaya yang telah diwariskan leluhur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-20 bg-elegant overflow-hidden">
     <X-snow-flakes />
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="w-full md:w-1/2 relative" data-aos="fade-right">
                    <div class="absolute -inset-4 border border-[#C5A059]/30 rounded-2xl"></div>
                    <img src="{{ asset('images/DSC04438.JPG') }}" class="relative z-10 rounded-2xl grayscale hover:grayscale-0 transition duration-700" alt="Sejarah">
                </div>
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <h2 class="text-[#C5A059] tracking-widest text-sm uppercase font-bold mb-4">History</h2>
                    <h3 class="text-4xl font-bold mb-6">Jejak Langkah Candra Sedana</h3>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">
                        Berdiri di jantung Banjar Kutuh Kaja, STT Candra Sedana telah menjadi saksi bisu perkembangan generasi muda dari masa ke masa. Nama "Candra Sedana" melambangkan sinar rembulan yang memberikan kesejahteraan dan ketenangan bagi lingkungan sekitarnya.
                    </p>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Hingga saat ini, kami terus bertransformasi menjadi organisasi modern namun tetap memegang teguh konsep Tri Hita Karana sebagai kompas dalam berorganisasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <x-footer />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1200, once: true });
    </script>
</body>
</html>