{{-- resources/views/components/snow-flakes.blade.php --}}
<div class="snow absolute inset-0 pointer-events-none overflow-hidden z-1">
    {{-- Kita gunakan loop untuk membuat banyak titik dengan durasi dan posisi acak --}}
    @for ($i = 0; $i < 30; $i++)
        @php
            $left = rand(0, 100); // Posisi horizontal acak 0-100%
            $duration = rand(8, 15); // Kecepatan jatuh acak 8-15 detik
            $delay = rand(0, 5); // Delay awal acak agar tidak jatuh bersamaan
        @endphp
        <span style="left: {{ $left }}%; animation-duration: {{ $duration }}s; animation-delay: {{ $delay }}s;"></span>
    @endfor
</div>

<style>
    .snow span {
        position: absolute;
        top: -10px;
        z-index: -1;
        width: 4px;
        height: 4px;
        background: #C5A059; /* Warna Emas sesuai tema STT */
        border-radius: 50%;
        opacity: 0.9;
        animation: snowFall linear infinite;
    }

    @keyframes snowFall {
        0% {
            transform: translateY(-10px);
            opacity: 0;
        }
        10% {
            opacity: 0.9;
        }
        100% {
            transform: translateY(120vh);
            opacity: 0;
        }
    }
</style>