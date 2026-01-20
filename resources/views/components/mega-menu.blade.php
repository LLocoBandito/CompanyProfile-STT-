<style>
.nav-btn {
    width: 100%;
    text-align: left;
    padding: 12px 24px;
    border-radius: 9999px;
    font-size: 1.125rem;
    background: transparent;
    color: #9ca3af;
    transition: 0.3s;
}

.nav-btn:hover {
    background: rgba(255,255,255,0.05);
    color: white;
}

.nav-btn.active {
    background: #c5a059;
    color: black;
    font-weight: 700;
}

.mega-content {
    animation: fadeUp 0.5s ease;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>


<div id="megaMenu" class="fixed inset-0 z-50 bg-black hidden">

    <!-- HEADER -->
    <div class="px-6 py-6 border-b border-white/10 flex justify-between items-center bg-black/80 backdrop-blur-md">
        <button onclick="toggleMegaMenu()"
                class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-[#C5A059] hover:text-black transition">
            <span class="text-2xl font-light">&times;</span>
        </button>

        <div class="font-bold tracking-[0.4em] text-sm text-white">
            CANDRA<span class="text-[#C5A059]">SEDANA</span>
        </div>

        <div class="w-10"></div>
    </div>

    <!-- CONTENT -->
    <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <!-- NAV -->
                <div class="lg:col-span-3">
                    <nav class="space-y-2">
                        <button data-target="profil" class="nav-btn active">Profil</button>
                        <button data-target="kegiatan" class="nav-btn">Kegiatan</button>
                        <button data-target="struktur" class="nav-btn">Struktur</button>
                        <button data-target="tentang" class="nav-btn">Tentang Kami</button>
                        <button data-target="kontak" class="nav-btn">Hubungi Kami</button>
                    </nav>
                </div>

                <!-- CONTENT AREA -->
                <div class="lg:col-span-9 relative">

                    <!-- PROFIL -->
                    <div id="profil" class="mega-content">
                        <div class="grid lg:grid-cols-2 gap-6">
                            <img src="{{ asset('images/DSC04438.JPG') }}"
                                 class="rounded-2xl object-cover">
                            <div>
                                <h3 class="text-3xl font-bold mb-4">
                                    Profil Candra Sedana
                                </h3>
                                <p class="text-gray-400">
                                    Organisasi adat yang berfokus pada pelestarian budaya,
                                    solidaritas masyarakat, dan kegiatan sosial.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- KEGIATAN -->
                    <div id="kegiatan" class="mega-content hidden">
                        <div class="grid lg:grid-cols-2 gap-6">
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="{{ asset('images/DSC04438.JPG') }}"
                                     class="w-full h-full object-cover opacity-80 hover:scale-110 transition duration-700">
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold mb-4">Kegiatan</h3>
                                <ul class="text-gray-400 space-y-2">
                                    <li>• Gotong Royong</li>
                                    <li>• Upacara Adat</li>
                                    <li>• Kegiatan Sosial</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- STRUKTUR -->
                    <div id="struktur" class="mega-content hidden">
                        <h3 class="text-3xl font-bold mb-6">Struktur Organisasi</h3>
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white/5 p-4 rounded-xl">Ketua</div>
                            <div class="bg-white/5 p-4 rounded-xl">Wakil</div>
                            <div class="bg-white/5 p-4 rounded-xl">Sekretaris</div>
                        </div>
                    </div>

                    <!-- TENTANG -->
                    <div id="tentang" class="mega-content hidden">
                        <h3 class="text-3xl font-bold mb-4">Tentang Kami</h3>
                        <p class="text-gray-400 max-w-xl">
                            Candra Sedana adalah komunitas adat yang menjunjung
                            nilai kebersamaan, budaya, dan keharmonisan.
                        </p>
                    </div>

                    <!-- KONTAK -->
                    <div id="kontak" class="mega-content hidden">
                        <h3 class="text-3xl font-bold mb-4">Hubungi Kami</h3>
                        <p class="text-gray-400">
                            Email: info@candresedana.id<br>
                            Telp: 08xxxxxxxx
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
function toggleMegaMenu() {
    const menu = document.getElementById('megaMenu');
    menu.classList.toggle('hidden');
}

document.addEventListener('DOMContentLoaded', () => {
    const navBtns = document.querySelectorAll('#megaMenu .nav-btn');
    const contents = document.querySelectorAll('#megaMenu .mega-content');

    navBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            navBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            contents.forEach(c => c.classList.add('hidden'));
            document.getElementById(btn.dataset.target)
                .classList.remove('hidden');
        });
    });
});
</script>
