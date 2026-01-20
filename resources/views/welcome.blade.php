
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STT Candra Sedana | Official Site</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css'])

    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
</head>

<body class="bg-black text-white antialiased">

    <!-- Header -->
    <header class="fixed top-0 w-full z-50 px-4 py-4">
    <x-navbar />
    </header>

    <x-mega-menu />

    <!-- Hero Section -->
    <main class="relative h-screen">
        <img src="{{ asset('images/DSC04438.JPG') }}" 
             class="absolute inset-0 w-full h-full object-cover" 
             alt="Hero Background">
        <div class="absolute inset-0 hero-gradient"></div>

        <div class="relative h-full flex flex-col justify-end items-center pb-24 text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-8xl font-bold">Seka Truna Truni</h1>
            <p class="text-[#C5A059] tracking-[0.3em] uppercase mt-4 text-sm md:text-base">
                Banjar Kutuh Kaja, Petulu, Ubud
            </p>

            <div class="mt-10 flex gap-4 flex-wrap justify-center px-4">
                <a href="#profil"
                   class="px-8 py-3 border border-white/30 text-sm uppercase tracking-widest hover:bg-white hover:text-black transition">
                    Profil STT
                </a>
                <a href="#kegiatan"
                   class="px-8 py-3 bg-[#C5A059] text-black text-sm uppercase tracking-widest font-bold hover:scale-105 transition">
                    Lihat Kegiatan
                </a>
            </div>
        </div>
    </main>

    <!-- About Section -->
    <section id="profil" class="relative py-32 px-6 md:px-20 overflow-hidden bg-elegant border-t border-white/5">
        <x-snow-flakes />
        <div class="relative z-10 max-w-6xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">
                    Tentang Kami
                </h2>
                <h3 class="text-4xl md:text-5xl font-bold mt-6">
                    Seka Truna Truni Kutuh Kaja
                </h3>
                <p class="text-gray-400 mt-6 max-w-2xl mx-auto leading-relaxed">
                    Wadah generasi muda Banjar Kutuh Kaja untuk tumbuh,
                    berkarya, menjaga adat, budaya, dan kebersamaan.
                </p>
                <a href="#" class="inline-block mt-8 px-8 py-3 bg-[#C5A059] text-black text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-white transition duration-300">
                    Selengkapnya
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center">
                <img src="{{ asset('images/DSC04438.JPG') }}"
                     class="w-full h-96 object-cover rounded-2xl shadow-2xl"
                     data-aos="fade-right"
                     alt="Tentang STT">

                <div data-aos="fade-left">
                    <h4 class="text-3xl font-bold mb-6">
                        Sejarah & Peran STT
                    </h4>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Seka Truna Truni Kutuh Kaja merupakan organisasi
                        kepemudaan yang berperan aktif dalam kegiatan adat,
                        sosial, dan kebudayaan di lingkungan Banjar Kutuh Kaja.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Kami menjadi garda terdepan dalam menjaga tradisi,
                        mempererat persaudaraan, serta membentuk karakter
                        pemuda yang beretika dan bertanggung jawab.
                    </p>
                    <a href="#" class="inline-block mt-8 px-8 py-3 border border-[#C5A059] text-[#C5A059] text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-[#C5A059] hover:text-black transition duration-300">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kegiatan Section 1 -->
    <section id="kegiatan" class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center overflow-hidden bg-elegant">
        <x-snow-flakes />
        <div data-aos="fade-right" class="relative z-10">
            <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Kebudayaan</h2>
            <h3 class="text-4xl md:text-5xl font-bold mt-6">Ngayah & Tradisi Suci</h3>
            <p class="text-gray-400 mt-8 leading-relaxed">
                STT Candra Sedana aktif berpartisipasi dalam berbagai upacara adat dan tradisi suci di Banjar Kutuh Kaja,
                memperkuat ikatan sosial dan melestarikan warisan budaya yang berharga bagi komunitas kami.
            </p>
            <a href="#" class="inline-block mt-8 px-8 py-3 border border-[#C5A059] text-[#C5A059] text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-[#C5A059] hover:text-black transition duration-300">
                Lihat Detail
            </a>
        </div>

        <div data-aos="zoom-in" class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="w-full h-96 object-cover" src="{{ asset('images/DSC04438.JPG') }}" alt="Kegiatan 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full h-96 object-cover" src="https://images.unsplash.com/photo-1544919982-b61976f0ba43?w=800" alt="Kegiatan 2">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Sports Section -->
    <section class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center border-y border-white/5 overflow-hidden bg-elegant">
        <x-snow-flakes />
        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800"
             class="relative z-20 w-full h-96 object-cover rounded-2xl shadow-2xl order-2 md:order-1"
             data-aos="fade-right"
             alt="Futsal">
        <div class="relative z-10 order-1 md:order-2" data-aos="fade-left">
            <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Sportivitas</h2>
            <h3 class="text-4xl md:text-5xl font-bold mt-6">Kutuh Kaja FC</h3>
            <p class="text-gray-400 mt-8 leading-relaxed">
                Dengan bangga kami di STT Candra Sedana memiliki tim futsal bernama Kutuh Kaja FC dan STT Candra Sedana
                akan selalu berusaha untuk meningkatkan kualitas dan keunggulan tim Kutuh Kaja FC.
            </p>
            <a href="#" class="inline-block mt-8 px-8 py-3 border border-[#C5A059] text-[#C5A059] text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-[#C5A059] hover:text-black transition duration-300">
                Lihat Detail
            </a>
        </div>
    </section>

    <!-- Event Section -->
    <section class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center overflow-hidden bg-elegant">
        <div class="absolute inset-0 z-0 pointer-events-none">
        <x-snow-flakes />
        </div>
        <div data-aos="fade-right">
            <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Kegiatan STT</h2>
            <h3 class="text-4xl md:text-5xl font-bold mt-6">Event STT Candra Sedana</h3>
            <p class="text-gray-400 mt-8 leading-relaxed">
                STT Candra Sedana mengadakan berbagai event menarik untuk memperkuat persaudaraan dan semangat dalam kerja sama. 
                Selain itu kalian juga bisa ikut serta dalam kegiatan yang ada.
            </p>
            <a href="#" class="inline-block mt-8 px-8 py-3 border border-[#C5A059] text-[#C5A059] text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-[#C5A059] hover:text-black transition duration-300">
                Lihat Detail
            </a>
        </div>

        <div data-aos="zoom-in" class="rounded-2xl overflow-hidden shadow-2xl">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="w-full h-96 object-cover" src="{{ asset('images/DSC04438.JPG') }}" alt="Event 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full h-96 object-cover" src="{{ asset('images/DSC04438.JPG') }}" alt="Event 2">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section id="struktur" class="relative py-32 px-6 md:px-20 text-center bg-elegant overflow-hidden">

     <x-snow-flakes />
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#C5A059]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 mb-24" data-aos="fade-up">
            <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">
                Struktur Organisasi
            </h2>
            <h3 class="text-4xl md:text-6xl font-bold">
                STT Candra Sedana
            </h3>
        </div>

        <!-- Ketua -->
        <div class="flex justify-center mb-24 relative z-10">
            <div onclick="openModal({
                nama:'I Putu Dharma Putra',
                jabatan:'Ketua STT Candra Sedana',
                foto:'https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=600',
                deskripsi:'Bertanggung jawab mengkoordinasikan seluruh kegiatan organisasi, menjaga keharmonisan anggota, serta melestarikan nilai adat, budaya, dan persaudaraan.',
                periode:'2024 – 2026',
                bidang:'Kepemimpinan'
            })" class="group text-center cursor-pointer" data-aos="zoom-in">
                <div class="w-56 h-56 mx-auto rounded-full border-2 border-[#C5A059]/80 p-3 mb-6 shadow-[0_0_40px_rgba(197,160,89,0.15)] hover:scale-105 transition">
                    <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=600"
                         class="w-full h-full object-cover rounded-full">
                </div>
                <h4 class="font-bold tracking-[0.3em] uppercase text-sm">
                    I Putu Dharma Putra
                </h4>
                <p class="text-[#C5A059] text-xs tracking-widest uppercase mt-2">
                    Ketua
                </p>
            </div>
        </div>

        <!-- Tim Inti -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 max-w-6xl mx-auto relative z-10">
            <div onclick="openModal({
                nama:'I Made Arya Wijaya',
                jabatan:'Wakil Ketua',
                foto:'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600',
                deskripsi:'Membantu ketua dalam pelaksanaan program kerja dan pengawasan organisasi.',
                periode:'2024 – 2026',
                bidang:'Manajerial'
            })" class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up">
                <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600"
                         class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition">
                </div>
                <h4 class="tracking-[0.2em] uppercase text-xs">
                    I Made Arya Wijaya
                </h4>
                <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                    Wakil Ketua
                </p>
            </div>

            <div onclick="openModal({
                nama:'Ni Luh Putu Sari',
                jabatan:'Sekretaris',
                foto:'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=600',
                deskripsi:'Mengelola administrasi, surat-menyurat, dan dokumentasi organisasi.',
                periode:'2024 – 2026',
                bidang:'Administrasi'
            })" class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition">
                    <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=600"
                         class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition">
                </div>
                <h4 class="tracking-[0.2em] uppercase text-xs">
                    Ni Luh Putu Sari
                </h4>
                <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                    Sekretaris
                </p>
            </div>

            <div onclick="openModal({
                nama:'I Komang Adi Pratama',
                jabatan:'Bendahara',
                foto:'https://images.unsplash.com/photo-1542206395-9feb3edaa68d?q=80&w=600',
                deskripsi:'Mengelola keuangan organisasi secara transparan dan akuntabel.',
                periode:'2024 – 2026',
                bidang:'Keuangan'
            })" class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition">
                    <img src="https://images.unsplash.com/photo-1542206395-9feb3edaa68d?q=80&w=600"
                         class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition">
                </div>
                <h4 class="tracking-[0.2em] uppercase text-xs">
                    I Komang Adi Pratama
                </h4>
                <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                    Bendahara
                </p>
            </div>

            <div onclick="openModal({
                nama:'I Kadek Yoga Saputra',
                jabatan:'Humas',
                foto:'https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=600',
                deskripsi:'Menjalin komunikasi internal dan eksternal organisasi.',
                periode:'2024 – 2026',
                bidang:'Hubungan Masyarakat'
            })" class="group cursor-pointer text-gray-500 hover:text-white transition" data-aos="fade-up" data-aos-delay="300">
                <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6 group-hover:border-[#C5A059] transition">
                    <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=600"
                         class="w-full h-full object-cover rounded-full grayscale group-hover:grayscale-0 transition">
                </div>
                <h4 class="tracking-[0.2em] uppercase text-xs">
                    I Kadek Yoga Saputra
                </h4>
                <p class="text-[10px] uppercase tracking-widest mt-2 text-[#C5A059]">
                    Humas
                </p>
            </div>
        </div>

        <a href="#" class="inline-block mt-16 px-8 py-3 bg-[#C5A059] text-black text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-white transition duration-300">
            Selengkapnya
        </a>
    </section>

    <!-- Modal -->
    <div id="modal" onclick="closeModal()" class="fixed inset-0 bg-black/90 backdrop-blur-md hidden items-center justify-center z-999 p-4">
        <div id="modalBox" onclick="event.stopPropagation()" class="relative bg-linear-to-b from-[#111] to-[#0a0a0a] max-w-xl w-full rounded-2xl border border-[#C5A059]/20 shadow-[0_0_60px_rgba(197,160,89,0.15)] modal-content">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white/60 hover:text-[#C5A059] text-3xl z-10">
                &times;
            </button>
            <div class="p-8 md:p-10 text-center">
                <div class="w-32 h-32 mx-auto rounded-full border-2 border-[#C5A059] p-1 mb-6">
                    <img id="modalFoto" class="w-full h-full object-cover rounded-full">
                </div>

                <h3 id="modalNama" class="text-2xl font-bold"></h3>
                <p id="modalJabatan" class="text-[#C5A059] text-sm tracking-widest uppercase mt-2"></p>
                <p id="modalDeskripsi" class="text-gray-400 mt-6 leading-relaxed"></p>

                <div class="mt-8 grid grid-cols-2 gap-4 text-sm">
                    <div class="border border-white/10 rounded-xl p-4">
                        <p class="text-gray-500">Periode</p>
                        <p id="modalPeriode" class="font-semibold"></p>
                    </div>
                    <div class="border border-white/10 rounded-xl p-4">
                        <p class="text-gray-500">Bidang</p>
                        <p id="modalBidang" class="font-semibold"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsor Section -->
    <section class="relative py-32 border-y border-white/5 bg-elegant overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <x-snow-flakes />
    </div>

    <div class="relative z-10 text-center mb-16" data-aos="fade-up">
        <h2 class="text-[#C5A059] tracking-[0.4em] uppercase text-sm">Sponsor</h2>
        <h3 class="text-4xl md:text-6xl font-bold mt-6 text-white">Didukung Oleh</h3>
    </div>

    <div class="relative z-10 sponsor-container">
        <div class="sponsor-track">
            <div class="sponsor-marquee gap-20 px-10" id="marquee-content">
                <img src="{{ asset('images/openai-logo-1.svg') }}" class="sponsor-logo" alt="OpenAI">
                <img src="{{ asset('images/honda-4.svg') }}" class="sponsor-logo" alt="Honda">
                <img src="{{ asset('images/tesla-9.svg') }}" class="sponsor-logo" alt="Tesla">
                <img src="{{ asset('images/vite.webp') }}" class="sponsor-logo" alt="Vite">
                <img src="{{ asset('images/valorant-2.svg') }}" class="sponsor-logo" alt="Valorant">
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer id="kontak" class="relative bg-black border-t border-white/5 overflow-hidden">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#C5A059]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 py-14 px-6 md:px-20">
            <div class="grid gap-12 md:grid-cols-3 text-center md:text-left max-w-7xl mx-auto">
                <div>
                    <h2 class="tracking-[0.4em] font-bold text-lg">
                        CANDRA<span class="text-[#C5A059]">SEDANA</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-5 leading-relaxed">
                        Seka Truna Truni Banjar Kutuh Kaja merupakan wadah pemuda-pemudi
                        dalam menjaga adat, budaya, persaudaraan, dan pengabdian sosial.
                    </p>
                </div>

                <div>
                    <h4 class="text-sm uppercase tracking-widest text-[#C5A059] mb-5">
                        Navigasi
                    </h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#profil" class="hover:text-white transition">Profil</a></li>
                        <li><a href="#kegiatan" class="hover:text-white transition">Kegiatan</a></li>
                        <li><a href="#struktur" class="hover:text-white transition">Struktur Organisasi</a></li>
                        <li><a href="#kontak" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm uppercase tracking-widest text-[#C5A059] mb-5">
                        Informasi
                    </h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li>📍 Banjar Kutuh Kaja, Petulu, Ubud</li>
                        <li>📧 sttcandrasedana@gmail.com</li>
                        <li>📞 +62 8xx-xxxx-xxxx</li>
                    </ul>

                    <div class="flex justify-center md:justify-start gap-6 mt-6 text-sm text-gray-400">
                        <a href="#" class="hover:text-[#C5A059] transition">Instagram</a>
                        <a href="#" class="hover:text-[#C5A059] transition">YouTube</a>
                        <a href="#" class="hover:text-[#C5A059] transition">WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-4 pb-2 border-t border-white/5 text-center">
                <p class="text-gray-500 text-xs tracking-widest m-0">
                    © 2024 STT Candra Sedana · All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1200,
            once: true,
            offset: 100
        });

        // Initialize Swipers
        new Swiper(".mySwiper1", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });

        new Swiper(".mySwiper2", {
            loop: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });

        //sponsor loop 
        const track = document.getElementById('marquee-content');
            // Salin isi dari marquee-content ke dalamnya sendiri
        const innerContent = track.innerHTML;
        track.innerHTML += innerContent;

        // Mega Menu Toggle - Rivian Style
        const megaMenu = document.getElementById('megaMenu');
        const hamburger = document.getElementById('hamburger');
        const menuItems = document.querySelectorAll('.menu-item');

        function toggleMegaMenu() {
            const isHidden = megaMenu.classList.contains('hidden');
            
            if (isHidden) {
                // Open menu
                megaMenu.classList.remove('hidden');
                hamburger.classList.add('active');
                document.body.style.overflow = 'hidden';
                
                // Animate menu items with stagger
                menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('show');
                    }, index * 100);
                });
            } else {
                // Close menu
                menuItems.forEach(item => item.classList.remove('show'));
                hamburger.classList.remove('active');
                document.body.style.overflow = 'auto';
                
                setTimeout(() => {
                    megaMenu.classList.add('hidden');
                }, 400);
            }
        }

        // Modal Functions
        const modal = document.getElementById('modal');
        const modalBox = document.getElementById('modalBox');

        function openModal(data) {
            document.getElementById('modalFoto').src = data.foto;
            document.getElementById('modalNama').innerText = data.nama;
            document.getElementById('modalJabatan').innerText = data.jabatan;
            document.getElementById('modalDeskripsi').innerText = data.deskripsi;
            document.getElementById('modalPeriode').innerText = data.periode;
            document.getElementById('modalBidang').innerText = data.bidang;

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            setTimeout(() => {
                modalBox.style.transform = 'scale(1)';
                modalBox.style.opacity = '1';
            }, 10);
        }

        function closeModal() {
            modalBox.style.transform = 'scale(0.95)';
            modalBox.style.opacity = '0';

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>