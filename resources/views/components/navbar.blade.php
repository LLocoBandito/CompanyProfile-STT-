<div x-data="{ open: false }" @keydown.window.escape="open = false">
    <header class="fixed top-0 w-full z-[60] px-4 py-4">
        <nav class="max-w-7xl mx-auto bg-white/90 backdrop-blur-md rounded-full px-8 py-3 flex justify-between items-center text-black shadow-2xl transition-all duration-300" 
             :class="open ? 'opacity-0 pointer-events-none' : 'opacity-100'">
            
            <div class="flex items-center space-x-6">
                <button @click="open = true" class="text-xl font-light hover:text-[#C5A059] transition flex items-center group">
                    <span class="mr-2">☰</span>
                    <span class="hidden md:block text-[10px] font-black uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-all">Menu</span>
                </button>
                
                <div class="hidden md:flex space-x-6 text-[11px] font-black tracking-[0.2em] uppercase">
                    <a href="{{ url('/') }}#profil" class="hover:text-[#C5A059] transition">Profil</a>
                    <a href="{{ url('/') }}#kegiatan" class="hover:text-[#C5A059] transition">Kegiatan</a>
                </div>
            </div>

            <a href="{{ url('/') }}" class="absolute left-1/2 -translate-x-1/2 text-lg font-bold tracking-[0.4em] uppercase hidden lg:block">
                CANDRA<span class="text-[#C5A059]">SEDANA</span>
            </a>

            <div class="flex items-center space-x-4">
                <a href="#" class="bg-[#C5A059] text-white px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest hover:bg-[#8C6A3E] transition shadow-lg">
                    Kontak Kami
                </a>
                <a href="#" class="text-[11px] font-bold hidden sm:block uppercase tracking-widest">Sign In</a>
            </div>
        </nav>
    </header>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[100] bg-white text-black overflow-hidden"
         style="display: none;">
        
        <div class="flex justify-between items-center px-10 py-8">
            <button @click="open = false" class="group flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full border border-black flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all duration-300">
                    <span class="text-xl">✕</span>
                </div>
                <span class="text-[10px] font-black uppercase tracking-[0.3em]">Tutup</span>
            </button>
            
            <div class="text-lg font-bold tracking-[0.4em] uppercase">
                CANDRA<span class="text-[#C5A059]">SEDANA</span>
            </div>
            
            <div class="w-20"></div> </div>

        <div class="grid grid-cols-1 md:grid-cols-12 h-full px-10 md:px-20 pt-10">
            <div class="md:col-span-4 flex flex-col space-y-6">
                <nav class="flex flex-col space-y-4">
                    <a href="{{ url('/') }}" @click="open = false" class="text-3xl md:text-4xl font-bold hover:translate-x-3 transition-transform duration-300 flex items-center group">
                        <span class="w-0 group-hover:w-8 h-[2px] bg-[#C5A059] transition-all mr-0 group-hover:mr-4"></span>
                        Beranda
                    </a>
                    <a href="{{ url('/tentang') }}" @click="open = false" class="text-3xl md:text-4xl font-bold hover:translate-x-3 transition-transform duration-300 flex items-center group">
                        <span class="w-0 group-hover:w-8 h-[2px] bg-[#C5A059] transition-all mr-0 group-hover:mr-4"></span>
                        Tentang Kami
                    </a>
                    <a href="{{ url('/') }}#kegiatan" @click="open = false" class="text-3xl md:text-4xl font-bold hover:translate-x-3 transition-transform duration-300 flex items-center group">
                        <span class="w-0 group-hover:w-8 h-[2px] bg-[#C5A059] transition-all mr-0 group-hover:mr-4"></span>
                        Kegiatan
                    </a>
                    <a href="{{ url('/') }}#caka" @click="open = false" class="text-3xl md:text-4xl font-bold hover:translate-x-3 transition-transform duration-300 flex items-center group">
                        <span class="w-0 group-hover:w-8 h-[2px] bg-[#C5A059] transition-all mr-0 group-hover:mr-4"></span>
                        Tahun Caka
                    </a>
                </nav>

                <div class="pt-10 border-t border-gray-100 flex flex-col space-y-4">
                    <a href="#" class="text-sm font-bold tracking-widest uppercase hover:text-[#C5A059] transition">Dukungan</a>
                    <a href="#" class="text-sm font-bold tracking-widest uppercase hover:text-[#C5A059] transition">Keanggotaan</a>
                </div>
            </div>

            <div class="hidden md:flex md:col-span-8 pl-20 space-x-6 pb-40">
                <div class="flex-1 group cursor-pointer overflow-hidden rounded-2xl relative">
                    <img src="https://images.unsplash.com/photo-1571235478473-86866299d13e?q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-8">
                        <h4 class="text-white text-2xl font-bold mb-2">Ngayah & Tradisi</h4>
                        <p class="text-white/70 text-sm">Lihat bagaimana kami melestarikan budaya leluhur.</p>
                    </div>
                </div>
                <div class="flex-1 group cursor-pointer overflow-hidden rounded-2xl relative">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-8">
                        <h4 class="text-white text-2xl font-bold mb-2">Kutuh Kaja FC</h4>
                        <p class="text-white/70 text-sm">Energi pemuda dalam semangat olahraga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>