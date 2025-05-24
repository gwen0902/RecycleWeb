<x-layout>
    <!---SECTION SATU--->
    <section class="w-full bg-white flex flex-col md:flex-row items-center justify-between px-4 py-16  mx-auto relative">
        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between w-full max-w-7xl mx-auto px-4 py-6">
            <div class="flex-1 mb-8 md:mb-0">
               <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-700 mb-4 leading-tight">We see 
                <span class="text-green-700">value</span> where others see <span class="text-green-700">trash</span>.
               </h1>
                <p class="text-lg text-gray-600 mb-6">
                Bersama Recycle, buang sampah jadi langkah menuju masa depan.
                </p>
                <a href="/register" class="inline-block bg-green-700 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-green-800 transition">Get Started</a>
            </div>
            <div class="flex-1 flex justify-center items-center">
                <div 
                    x-data="{
                        images: [
                            '/img/phone_mockup_2.png',
                            '/img/phone_mockup_3.png',
                            '/img/phone_mockup_5.png'
                        ],
                        active: 0,
                        start() {
                            setInterval(() => {
                                this.active = (this.active + 1) % this.images.length
                            }, 2500)
                        }
                    }"
                    x-init="start()"
                    class="w-full max-w-[600px] relative"
                >
                    <img 
                        :src="images[active]" 
                        alt="App UI" 
                        class="w-full max-w-[600px] h-auto transition-all duration-700 ease-in-out mx-auto"
                    >
                </div>
            </div>
        </div> 
    </section> 

    <!--- SECTION 2 --->
    <section class="w-full flex flex-col items-center relative overflow-hidden py-16 bg-green-700">
                <!-- SVG Gelombang di bawah -->
            <div class="absolute left-0 right-0 top-0 w-full overflow-hidden leading-none">
                <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-40 md:h-20">
            <path fill="#fff" d="M0,80 C360,0 1080,120 1440,40 L1440,0 L0,0 Z"></path>
                </svg>
            </div>
            <br>
        <h1 class="text-3xl font-bold text-white mb-10 z-10">Kenapa harus recycle?</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 w-full max-w-4xl z-10">
            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col items-center p-6 hover:scale-105 transition">
                <div class="flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-4 shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/2909/2909765.png" alt="Eco-friendly" class="w-12 h-12 object-contain" />
                </div>
                <span class="text-center text-green-900 font-semibold text-base mb-2">Eco-friendly</span>
            </div>
            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col items-center p-6 hover:scale-105 transition">
                <div class="flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-4 shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Dapat Uang & Poin" class="w-12 h-12 object-contain" />
                </div>
                <span class="text-center text-green-900 font-semibold text-base mb-2">Dapat Uang & Poin</span>
            </div>
            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col items-center p-6 hover:scale-105 transition">
                <div class="flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-4 shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Jemput Sampah ke Rumah" class="w-12 h-12 object-contain" />
                </div>
                <span class="text-center text-green-900 font-semibold text-base mb-2">Jemput Sampah ke Rumah</span>
            </div>
            <!-- CARD 4 -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col items-center p-6 hover:scale-105 transition">
                <div class="flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-4 shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Aman & Terpercaya" class="w-12 h-12 object-contain" />
                </div>
                <span class="text-center text-green-900 font-semibold text-base mb-2">Aman & Terpercaya</span>
            </div>
        </div>
            <div class="absolute left-0 right-0 bottom-0 w-full overflow-hidden leading-none">
                <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-40 md:h-20">
                    <path fill="#fff" d="M0,40 C360,120 1080,0 1440,80 L1440,80 L0,80 Z"></path>
                </svg>
            </div>
    </section>

    <!--- SECTION 3 --->
    <section class="w-full flex flex-col items-center relative overflow-hidden py-16 bg-white">
        <h2 class="text-3xl font-bold text-green-700 mb-14 z-10">Cara Kerja Recycle</h2>
        <div class="relative flex flex-col md:flex-row items-center justify-center w-full max-w-5xl z-10">
            <div class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-green-600 z-0" style="transform: translateY(-50%);"></div>
            <!-- STEP 1 -->
            <div class="flex flex-col items-center md:w-1/4 w-full mb-10 md:mb-0 z-10">
                <div class="relative w-25 h-25 flex items-center justify-center mb-10">
                        <svg viewBox="0 0 80 80" class="absolute inset-0 w-full h-full">
                            <path d="M60,12 Q75,30 68,50 Q61,70 40,68 Q19,66 14,48 Q9,30 25,17 Q41,4 60,12Z" fill="#349D2B"/>
                        </svg>
                        <span class="absolute top-1/3 left-1/2 -translate-x-1/2 text-white font-bold text-2xl ">
                            1
                        </span> 
                    </div>
                <span class="font-semibold text-green-700 text-lg mb-1">Kumpulin Sampah</span>
                <span class="text-gray-600 text-center text-sm">Pisahkan dan kumpulkan sampah anorganik di rumahmu.</span>
            </div>
            <!-- STEP 2 -->
            <div class="flex flex-col items-center md:w-1/4 w-full mb-10 md:mb-0 z-10">
                <div class="relative w-25 h-25 flex items-center justify-center mb-10">
                        <svg viewBox="0 0 80 80" class="absolute inset-0 w-full h-full">
                            <path d="M60,12 Q75,30 68,50 Q61,70 40,68 Q19,66 14,48 Q9,30 25,17 Q41,4 60,12Z" fill="#349D2B"/>
                        </svg>
                        <span class="absolute top-1/3 left-1/2 -translate-x-1/2 text-white font-bold text-2xl ">
                            2
                        </span> 
                    </div>
                <span class="font-semibold text-green-700 text-lg mb-1">Ajukan Penjemputan</span>
                <span class="text-gray-600 text-center text-sm">Request penjemputan sampah lewat aplikasi Recycle.</span>
            </div>
            <!-- STEP 3 -->
            <div class="flex flex-col items-center md:w-1/4 w-full mb-10 md:mb-0 z-10">
                <div class="relative w-25 h-25 flex items-center justify-center mb-10">
                        <svg viewBox="0 0 80 80" class="absolute inset-0 w-full h-full">
                            <path d="M60,12 Q75,30 68,50 Q61,70 40,68 Q19,66 14,48 Q9,30 25,17 Q41,4 60,12Z" fill="#349D2B"/>
                        </svg>
                        <span class="absolute top-1/3 left-1/2 -translate-x-1/2 text-white font-bold text-2xl ">
                            3
                        </span> 
                    </div>
                <span class="font-semibold text-green-700 text-lg mb-1">Timbang Sampah</span>
                <span class="text-gray-600 text-center text-sm">Petugas menimbang sampah yang sudah kamu kumpulkan.</span>
            </div>
            <!-- STEP 4 -->
            <div class="flex flex-col items-center md:w-1/4 w-full z-10">
                <div class="relative w-25 h-25 flex items-center justify-center mb-10">
                        <svg viewBox="0 0 80 80" class="absolute inset-0 w-full h-full">
                            <path d="M60,12 Q75,30 68,50 Q61,70 40,68 Q19,66 14,48 Q9,30 25,17 Q41,4 60,12Z" fill="#349D2B"/>
                        </svg>
                        <span class="absolute top-1/3 left-1/2 -translate-x-1/2 text-white font-bold text-2xl ">
                            4
                        </span> 
                    </div>
                <span class="font-semibold text-green-700 text-lg mb-1">Dapat Uang</span>
                <span class="text-gray-600 text-center text-sm">Saldo masuk ke dompet digital kamu secara otomatis.</span>
            </div>
        </div>

    </section>
    
    <!-- SECTION 4 -->
    <section class="w-full flex flex-col items-center relative overflow-hidden py-16" style="background-color: #ecf1ea;">
        <div class="absolute left-0 right-0 top-0 w-full overflow-hidden leading-none">
                <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-40 md:h-20">
            <path fill="#fff" d="M0,80 C360,0 1080,120 1440,40 L1440,0 L0,0 Z"></path>
                </svg>
            </div>
        <br>
        <h2 class="text-3xl font-bold text-green-700 mb-14 z-10">Fitur Utama</h2>
        <div class="w-full max-w-6xl flex flex-col items-center">
            <div class="w-full overflow-x-auto">
                <div class="flex gap-8 min-w-[700px]">
                    <!-- FITUR 1 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/3.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                    <span class="font-bold text-green-800 text-lg mb-2">Maps Penjemputan</span>
                    <span class="text-gray-600 text-center text-sm">Identifikasi jenis sampah secara otomatis dengan kamera.</span>
                    </div>
                    <!-- FITUR 2 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/7.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Maps Penjemputan</span>
                        <span class="text-gray-600 text-center text-sm">Lihat lokasi penjemputan dan pantau status kurir secara real-time.</span>
                    </div>
                    <!-- FITUR 3 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/8.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Dompet Digital</span>
                        <span class="text-gray-600 text-center text-sm">Saldo hasil penjualan sampah langsung masuk ke dompet digital kamu.</span>
                    </div>
                    <!-- FITUR 4 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/9.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Leaderboard Eco Warrior</span>
                        <span class="text-gray-600 text-center text-sm">Bersaing jadi pejuang lingkungan terbaik dan dapatkan reward.</span>
                    </div>
                    <!-- FITUR 5 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/09.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Riwayat Transaksi</span>
                        <span class="text-gray-600 text-center text-sm">Pantau semua aktivitas dan transaksi penjualan sampahmu.</span>
                    </div>
                    <!-- FITUR 6 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/6.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Edukasi Lingkungan</span>
                        <span class="text-gray-600 text-center text-sm">Dapatkan tips dan info menarik seputar pengelolaan sampah.</span>
                    </div>
                    <!-- FITUR 7 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/00.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Tukar Poin</span>
                        <span class="text-gray-600 text-center text-sm">Tukar poin hasil recycle dengan berbagai hadiah menarik.</span>
                    </div>
                    <!-- FITUR 8 -->
                    <div class="flex flex-col items-center flex-shrink-0 w-60">
                    <img src="/img/88.png" alt="Scan Sampah" class="w-[200px] h-[430px] object-contain mb-4 drop-shadow-lg rounded-2xl">   
                        <span class="font-bold text-green-800 text-lg mb-2">Notifikasi</span>
                        <span class="text-gray-600 text-center text-sm">Dapatkan update status penjemputan dan info penting lainnya.</span>
                    </div>
                </div>
            </div>
        </div>
            <div class="absolute left-0 right-0 bottom-0 w-full overflow-hidden leading-none">
                <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-40 md:h-20">
                    <path fill="#fff" d="M0,40 C360,120 1080,0 1440,80 L1440,80 L0,80 Z"></path>
                </svg>
            </div>
    </section>
</x-layout>