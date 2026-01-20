<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STT Candra Sedana | Official Site</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>
body { font-family: 'Inter', sans-serif; }
/* ===== SNOW FALL EFFECT ===== */
.snow {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
    z-index: 1;
}

.snow span {
    position: absolute;
    top: -10px;
    width: 4px;
    height: 4px;
    background: gold;
    border-radius: 50%;
    opacity: .9;
    animation: snowFall linear infinite;
}


@keyframes snowFall {
    0% {
        transform: translateY(-10px);
        opacity: 0;
    }
    10% {
        opacity: .9;
    }
    100% {
        transform: translateY(120vh);
        opacity: 0;
    }
}


/* Hero Gradient */
.hero-gradient {
    background: linear-gradient(to top,
        rgba(0,0,0,0.9),
        rgba(0,0,0,0.4),
        rgba(0,0,0,0)
    );
}
/* ELEGANT GRADIENT */
.bg-elegant {
    position: relative;
    background:
        radial-gradient(circle at top,
            rgba(197,160,89,0.15),
            transparent 60%),
        linear-gradient(to bottom,
            #050505,
            #0a0a0a,
            #050505);
}

/* Swiper */
.swiper-button-next,
.swiper-button-prev {
    color: #C5A059 !important;
    transform: scale(0.6);
}
.swiper-pagination-bullet-active { background: #C5A059 !important; }
.swiper-pagination-bullet { background: rgba(255,255,255,.4); }

/* ===== SPONSOR MARQUEE ===== */
@keyframes sponsor-marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.sponsor-track {
    overflow: hidden;
    width: 100%;
}
.sponsor-marquee {
    display: flex;
    width: max-content;
    animation: sponsor-marquee 30s linear infinite;
}
.sponsor-marquee:hover {
    animation-play-state: paused;
}
.sponsor-logo {
    width: 160px;
    height: 80px;
    object-fit: contain;
    filter: grayscale(1) brightness(.8);
    transition: .3s;
}
.sponsor-logo:hover {
    filter: grayscale(0) brightness(1);
    transform: scale(1.05);
}
</style>
</head>

<body class="bg-black text-white antialiased overflow-x-hidden">

<!-- ================= HEADER ================= -->
<header class="fixed top-0 w-full z-50 px-4 py-4">
<nav class="max-w-7xl mx-auto bg-white/90 backdrop-blur-md rounded-full px-8 py-3 flex justify-between items-center text-black shadow-2xl">
<div class="flex items-center space-x-6">
<button class="text-xl">☰</button>
<div class="hidden md:flex space-x-6 text-[12px] font-bold tracking-widest uppercase">
<a href="#profil">Profil</a>
<a href="#kegiatan">Kegiatan</a>
<a href="#caka">Struktur</a>
</div>
</div>

<div class="absolute left-1/2 -translate-x-1/2 font-bold tracking-[0.4em] hidden lg:block">
CANDRA<span class="text-[#C5A059]">SEDANA</span>
</div>

<a href="#" class="bg-[#C5A059] text-white px-6 py-2 rounded-full text-[11px] font-black uppercase tracking-widest">
Kontak
</a>
</nav>
</header>

<!-- ================= HERO ================= -->
<main class="relative h-screen">
<img src="{{ asset('images/DSC04438.JPG') }}" class="absolute inset-0 w-full h-full object-cover">
<div class="absolute inset-0 hero-gradient"></div>

<div class="relative h-full flex flex-col justify-end items-center pb-24 text-center" data-aos="fade-up">
    <h1 class="text-6xl md:text-8xl font-bold">Seka Truna Truni</h1>

    <p class="text-[#C5A059] tracking-[0.3em] uppercase mt-4">
        Banjar Kutuh Kaja, Petulu, Ubud
    </p>

    <!-- BUTTON HERO -->
    <div class="mt-10 flex gap-4">
        <a href="#profil"
           class="px-8 py-3  border border-white/30 text-sm uppercase tracking-widest hover:bg-white hover:text-black transition">
           Profil STT
        </a>

        <a href="#kegiatan"
           class="px-8 py-3 bg-[#C5A059] text-black text-sm uppercase tracking-widest font-bold hover:scale-105 transition">
           Lihat Kegiatan
        </a>
    </div>
</div>
</main>
<!-- ================= ABOUT US ================= -->
<section
id="about"
class="relative py-32 px-6 md:px-20 overflow-hidden bg-elegant border-t border-white/5">

    <!-- SNOW -->
    <div class="snow">
        <span style="left:5%; animation-duration:12s;"></span>
        <span style="left:10%; animation-duration:9s;"></span>
        <span style="left:15%; animation-duration:14s;"></span>
        <span style="left:20%; animation-duration:10s;"></span>
        <span style="left:25%; animation-duration:11s;"></span>
        <span style="left:30%; animation-duration:8s;"></span>
        <span style="left:35%; animation-duration:13s;"></span>
        <span style="left:40%; animation-duration:9s;"></span>
        <span style="left:45%; animation-duration:12s;"></span>
        <span style="left:50%; animation-duration:10s;"></span>

        <span style="left:55%; animation-duration:14s;"></span>
        <span style="left:60%; animation-duration:9s;"></span>
        <span style="left:65%; animation-duration:11s;"></span>
        <span style="left:70%; animation-duration:8s;"></span>
        <span style="left:75%; animation-duration:13s;"></span>
        <span style="left:80%; animation-duration:10s;"></span>
        <span style="left:85%; animation-duration:12s;"></span>
        <span style="left:90%; animation-duration:9s;"></span>
        <span style="left:95%; animation-duration:14s;"></span>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto">

        <!-- TITLE -->
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
        </div>

        <!-- CONTENT -->
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- IMAGE -->
            <img
            src="{{ asset('images/DSC04438.JPG') }}"
            class="wight-2000 height-600
                   object-cover rounded-2xl shadow-2xl"
            data-aos="fade-right"
            alt="Tentang STT">

            <!-- TEXT -->
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
            </div>

        </div>
    </div>
</section>

<section>
<!-- ================= KEGIATAN 1 ================= -->
<section id="kegiatan"
class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center overflow-hidden bg-elegant">


<!-- SNOW -->
<div class="snow">
    <span style="left:2%; animation-duration:12s;"></span>
    <span style="left:5%; animation-duration:9s;"></span>
    <span style="left:8%; animation-duration:14s;"></span>
    <span style="left:12%; animation-duration:10s;"></span>
    <span style="left:15%; animation-duration:11s;"></span>
    <span style="left:18%; animation-duration:8s;"></span>
    <span style="left:22%; animation-duration:13s;"></span>
    <span style="left:25%; animation-duration:9s;"></span>
    <span style="left:28%; animation-duration:12s;"></span>
    <span style="left:32%; animation-duration:10s;"></span>

    <span style="left:35%; animation-duration:14s;"></span>
    <span style="left:38%; animation-duration:9s;"></span>
    <span style="left:42%; animation-duration:11s;"></span>
    <span style="left:45%; animation-duration:8s;"></span>
    <span style="left:48%; animation-duration:13s;"></span>
    <span style="left:52%; animation-duration:10s;"></span>
    <span style="left:55%; animation-duration:12s;"></span>
    <span style="left:58%; animation-duration:9s;"></span>
    <span style="left:62%; animation-duration:14s;"></span>
    <span style="left:65%; animation-duration:11s;"></span>

    <span style="left:68%; animation-duration:8s;"></span>
    <span style="left:72%; animation-duration:13s;"></span>
    <span style="left:75%; animation-duration:10s;"></span>
    <span style="left:78%; animation-duration:12s;"></span>
    <span style="left:82%; animation-duration:9s;"></span>
    <span style="left:85%; animation-duration:14s;"></span>
    <span style="left:88%; animation-duration:11s;"></span>
    <span style="left:92%; animation-duration:8s;"></span>
    <span style="left:95%; animation-duration:13s;"></span>
    <span style="left:98%; animation-duration:10s;"></span>
</div>


<div data-aos="fade-right" class="relative z-10">
    <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Kebudayaan</h2>
    <h3 class="text-5xl font-bold mt-6">Ngayah & Tradisi Suci</h3>
    <p class="text-gray-400 mt-8">
        Menjaga warisan leluhur melalui partisipasi aktif pemuda-pemudi.
    </p>
</div>

<div data-aos="zoom-in" class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <img class="swiper-slide h-[600px] object-cover" src="{{ asset('images/DSC04438.JPG') }}">
            <img class="swiper-slide h-[600px] object-cover" src="https://images.unsplash.com/photo-1544919982-b61976f0ba43">
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
</section>


<section
class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center border-y border-white/5 overflow-hidden bg-elegant">

<!-- SNOW -->
<div class="snow">
    <span style="left:2%; animation-duration:12s;"></span>
    <span style="left:5%; animation-duration:9s;"></span>
    <span style="left:8%; animation-duration:14s;"></span>
    <span style="left:12%; animation-duration:10s;"></span>
    <span style="left:15%; animation-duration:11s;"></span>
    <span style="left:18%; animation-duration:8s;"></span>
    <span style="left:22%; animation-duration:13s;"></span>
    <span style="left:25%; animation-duration:9s;"></span>
    <span style="left:28%; animation-duration:12s;"></span>
    <span style="left:32%; animation-duration:10s;"></span>

    <span style="left:35%; animation-duration:14s;"></span>
    <span style="left:38%; animation-duration:9s;"></span>
    <span style="left:42%; animation-duration:11s;"></span>
    <span style="left:45%; animation-duration:8s;"></span>
    <span style="left:48%; animation-duration:13s;"></span>
    <span style="left:52%; animation-duration:10s;"></span>
    <span style="left:55%; animation-duration:12s;"></span>
    <span style="left:58%; animation-duration:9s;"></span>
    <span style="left:62%; animation-duration:14s;"></span>
    <span style="left:65%; animation-duration:11s;"></span>

    <span style="left:68%; animation-duration:8s;"></span>
    <span style="left:72%; animation-duration:13s;"></span>
    <span style="left:75%; animation-duration:10s;"></span>
    <span style="left:78%; animation-duration:12s;"></span>
    <span style="left:82%; animation-duration:9s;"></span>
    <span style="left:85%; animation-duration:14s;"></span>
    <span style="left:88%; animation-duration:11s;"></span>
    <span style="left:92%; animation-duration:8s;"></span>
    <span style="left:95%; animation-duration:13s;"></span>
    <span style="left:98%; animation-duration:10s;"></span>
</div>
<img
src="https://images.unsplash.com/photo-1574629810360-7efbbe195018"
class="
    wight-2000
    height-600
    object-cover
    rounded-2xl
    shadow-2xl
"
/>


<div class="relative z-10">
    <h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Sportivitas</h2>
    <h3 class="text-5xl font-bold mt-6">Kutuh Kaja FC</h3>
    <p class="text-gray-400 mt-8">
        Wadah persaudaraan dan semangat kompetisi sehat pemuda.
    </p>
</div>
</section>


<!-- ================= KEGIATAN 2 ================= -->
<section id="kegiatan"
class="relative py-32 px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center overflow-hidden bg-elegant">
<div data-aos="fade-right">
<h2 class="text-[#C5A059] tracking-[0.4em] text-sm uppercase">Kegiatan STT</h2>
<h3 class="text-5xl font-bold mt-6">Paruman Rutin</h3>
<p class="text-gray-400 mt-8">
Pertemuan wajib untuk perencanaan dan evaluasi kegiatan.
</p>
</div>

<div data-aos="zoom-in" class="rounded-2xl overflow-hidden shadow-2xl">
<div class="swiper mySwiper">
<div class="swiper-wrapper">
<img class="swiper-slide h-[600px] object-cover" src="{{ asset('images/DSC04438.JPG') }}">
<img class="swiper-slide h-[600px] object-cover" src="https://images.unsplash.com/photo-1571235478473-86866299d13e">
</div>
<div class="swiper-pagination"></div>
</div>
</div>
</section>

<section id="caka" class="py-20 px-6 md:px-20 text-center ">

<!-- ================= STRUKTUR ORGANISASI ================= -->
<section
    class="relative py-32 px-6 md:px-20 text-center
           bg-[radial-gradient(ellipse_at_top,_rgba(197,160,89,0.08),_transparent_100%)]
           bg-gradient-to-b from-black via-[#0b0b0b] to-black overflow-hidden"
>

    <!-- ORNAMEN BLUR EMAS -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2
                w-[600px] h-[600px] bg-[#C5A059]/10
                rounded-full blur-[160px] pointer-events-none"></div>

    <div class="absolute bottom-0 right-0
                w-[400px] h-[400px] bg-[#C5A059]/5
                rounded-full blur-[140px] pointer-events-none"></div>

    <!-- JUDUL -->
    <div class="relative z-10 mb-24" data-aos="fade-up">
        <h2 class="text-[#C5A059] text-sm uppercase tracking-[0.4em] font-bold mb-6">
            Struktur Organisasi
        </h2>
        <h3 class="text-4xl md:text-6xl font-bold">
            STT Candra Sedana
        </h3>
    </div>

    <!-- ================= KETUA ================= -->
    <div class="flex justify-center mb-24 relative z-10">
        <div
            onclick="openModal({
                nama:'I Putu Dharma Putra',
                jabatan:'Ketua STT Candra Sedana',
                foto:'https:images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=600',
                deskripsi:'Bertanggung jawab mengkoordinasikan seluruh kegiatan organisasi, menjaga keharmonisan anggota, serta melestarikan nilai adat, budaya, dan persaudaraan.',
                periode:'2024 – 2026',
                bidang:'Kepemimpinan'
            })"
            class="group text-center cursor-pointer"
        >
            <div class="w-56 h-56 mx-auto rounded-full border-2 border-[#C5A059]/80 p-3 mb-6
                        shadow-[0_0_40px_rgba(197,160,89,0.15)]
                        hover:scale-105 transition">
                <img
                    src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=600"
                    class="w-full h-full object-cover rounded-full"
                >
            </div>
            <h4 class="font-bold tracking-[0.3em] uppercase text-sm">
                I Putu Dharma Putra
            </h4>
            <p class="text-[#C5A059] text-xs tracking-widest uppercase mt-2">
                Ketua
            </p>
        </div>
    </div>

    <!-- ================= PENGURUS INTI ================= -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-12 max-w-6xl mx-auto relative z-10">

        <!-- Wakil -->
        <div
            onclick="openModal({
                nama:'I Made Arya Wijaya',
                jabatan:'Wakil Ketua',
                foto:'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600',
                deskripsi:'Membantu ketua dalam pelaksanaan program kerja dan pengawasan organisasi.',
                periode:'2024 – 2026',
                bidang:'Manajerial'
            })"
            class="group cursor-pointer text-gray-500 hover:text-white transition"
        >
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6
                        group-hover:border-[#C5A059] transition">
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

        <!-- Sekretaris -->
        <div
            onclick="openModal({
                nama:'Ni Luh Putu Sari',
                jabatan:'Sekretaris',
                foto:'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=600',
                deskripsi:'Mengelola administrasi, surat-menyurat, dan dokumentasi organisasi.',
                periode:'2024 – 2026',
                bidang:'Administrasi'
            })"
            class="group cursor-pointer text-gray-500 hover:text-white transition"
        >
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6
                        group-hover:border-[#C5A059] transition">
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

        <!-- Bendahara -->
        <div
            onclick="openModal({
                nama:'I Komang Adi Pratama',
                jabatan:'Bendahara',
                foto:'https://images.unsplash.com/photo-1542206395-9feb3edaa68d?q=80&w=600',
                deskripsi:'Mengelola keuangan organisasi secara transparan dan akuntabel.',
                periode:'2024 – 2026',
                bidang:'Keuangan'
            })"
            class="group cursor-pointer text-gray-500 hover:text-white transition"
        >
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6
                        group-hover:border-[#C5A059] transition">
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

        <!-- Humas -->
        <div
            onclick="openModal({
                nama:'I Kadek Yoga Saputra',
                jabatan:'Humas',
                foto:'https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=600',
                deskripsi:'Menjalin komunikasi internal dan eksternal organisasi.',
                periode:'2024 – 2026',
                bidang:'Hubungan Masyarakat'
            })"
            class="group cursor-pointer text-gray-500 hover:text-white transition"
        >
            <div class="aspect-square rounded-full border border-gray-800 p-3 mb-6
                        group-hover:border-[#C5A059] transition">
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
</section>

<!-- ================= MODAL ================= -->
<div
    id="modal"
    onclick="closeModal()"
    class="fixed inset-0 bg-black/80 backdrop-blur-md hidden
           items-center justify-center z-[999]"
>
    <div
        id="modalBox"
        onclick="event.stopPropagation()"
        class="relative bg-gradient-to-b from-[#111] to-[#0a0a0a]
               max-w-xl w-full mx-6 rounded-2xl
               border border-[#C5A059]/20
               shadow-[0_0_60px_rgba(197,160,89,0.15)]
               transform scale-95 opacity-0 transition-all duration-300"
    >

        <button onclick="closeModal()"
            class="absolute top-4 right-4 text-white/60 hover:text-[#C5A059] text-3xl">
            &times;
        </button>

        <div class="p-10 text-center">
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

<script>
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
        modalBox.classList.remove('scale-95', 'opacity-0');
        modalBox.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeModal() {
    modalBox.classList.add('scale-95', 'opacity-0');
    modalBox.classList.remove('scale-100', 'opacity-100');

    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 300);
}
</script>

<!-- ================= SPONSOR (BARU) ================= -->
<section class="py-32 border-y border-white/5 bg-elegant">

<div class="text-center mb-16" data-aos="fade-up">
<h2 class="text-[#C5A059] tracking-[0.4em] uppercase text-sm">Sponsor</h2>
<h3 class="text-4xl md:text-6xl font-bold mt-6">Didukung Oleh</h3>
</div>

<div class="sponsor-track">
<div class="sponsor-marquee gap-20 px-10">
<img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_BCA.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Logo_BRI.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_Telkomsel_2021.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Gojek_logo_2019.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Grab_logo.svg" class="sponsor-logo">

<!-- DUPLIKASI -->
<img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_BCA.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Logo_BRI.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_Telkomsel_2021.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Gojek_logo_2019.svg" class="sponsor-logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Grab_logo.svg" class="sponsor-logo">
</div>
</div>
</section>

<section>
    <!-- ================= FOOTER ================= -->
<footer class="relative bg-black border-t border-white/5 overflow-hidden">

    <!-- ORNAMEN BLUR -->
    <div class="absolute -top-32 left-1/2 -translate-x-1/2
                 bg-[#C5A059]/10
                rounded-full blur-[140px] pointer-events-none"></div>

    <!-- WRAPPER -->
    <div class="relative z-10 py-14 px-6 md:px-20">

        <!-- GRID -->
        <div class="grid gap-12 md:grid-cols-3 text-center md:text-left max-w-7xl mx-auto">

            <!-- BRAND -->
            <div>
                <h2 class="tracking-[0.4em] font-bold text-lg">
                    CANDRA<span class="text-[#C5A059]">SEDANA</span>
                </h2>
                <p class="text-gray-500 text-sm mt-5 leading-relaxed">
                    Seka Truna Truni Banjar Kutuh Kaja merupakan wadah pemuda-pemudi
                    dalam menjaga adat, budaya, persaudaraan, dan pengabdian sosial.
                </p>
            </div>

            <!-- NAVIGASI -->
            <div>
                <h4 class="text-sm uppercase tracking-widest text-[#C5A059] mb-5">
                    Navigasi
                </h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="#profil" class="hover:text-white transition">Profil</a></li>
                    <li><a href="#kegiatan" class="hover:text-white transition">Kegiatan</a></li>
                    <li><a href="#caka" class="hover:text-white transition">Struktur Organisasi</a></li>
                    <li><a href="#kontak" class="hover:text-white transition">Kontak</a></li>
                </ul>
            </div>

            <!-- INFORMASI -->
            <div>
                <h4 class="text-sm uppercase tracking-widest text-[#C5A059] mb-5">
                    Informasi
                </h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li>📍 Banjar Kutuh Kaja, Petulu, Ubud</li>
                    <li>📧 sttcandrasedana@gmail.com</li>
                    <li>📞 +62 8xx-xxxx-xxxx</li>
                </ul>

                <!-- SOSIAL MEDIA -->
                <div class="flex justify-center md:justify-start gap-6 mt-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-[#C5A059] transition">Instagram</a>
                    <a href="#" class="hover:text-[#C5A059] transition">YouTube</a>
                    <a href="#" class="hover:text-[#C5A059] transition">WhatsApp</a>
                </div>
            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="mt-12 pt-4 pb-2 border-t border-white/5 text-center">
            <p class="text-gray-500 text-xs tracking-widest m-0">
                © 2024 STT Candra Sedana · All Rights Reserved
            </p>
        </div>

    </div>
</footer>

<!-- ================= SCRIPT ================= -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
AOS.init({
    duration: 1200,
    once: true
});

new Swiper(".mySwiper", {
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
</script>

</section>

</body>
</html>
