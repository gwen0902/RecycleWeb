<x-layout>
  <div class="container mx-auto px-4 py-10 ">
    <!-- Tabs -->
    <div class="flex justify-center space-x-4 mb-8">
      <button id="tabSampah" class="tab-button bg-green-700 text-white px-4 py-2 rounded-lg font-semibold">Jual Sampahmu</button>
      <button id="tabMerch" class="tab-button bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-semibold">Merchandise</button>
    </div>

  <!-- Content Area -->
    <div id="contentSampah" class="tab-content">
     <h2 class="text-2xl text-green-700 font-bold mb-2 text-center">Kategori Sampah yang Bisa Kamu Setor</h2>
     <p class="mb-10 text-gray-500 text-center">Cek harga sampah per kategori dan setor untuk dapat uang.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
          @foreach($categories as $category)
          <a href="{{ url('/kategori/' . $category->id) }}" class="group bg-white  rounded-2xl shadow-lg p-8 flex flex-col items-center transition hover:shadow-2xl hover:-translate-y-2 duration-300 hover:bg-green-50">
          @if($category->image)
          <img src="{{ asset('img/' . $category->image) }}" alt="{{ $category->name }}" class="w-30 h-30 object-contain rounded-lg mb-4 ">
          @else
          <div class="w-30 h-30 rounded-lg flex items-center justify-center mb-4">
              <span class="text-3xl font-bold text-green-700">{{ strtoupper(substr($category->name,0,1)) }}</span>
          </div>
          @endif
              <h3 class="font-bold text-lg text-green-800 mb-1 text-center group-hover:text-green-900">{{ $category->name }}</h3>
              <span class="text-xs text-gray-400 text-center">Klik untuk lihat jenis sampah</span>
          </a>
          @endforeach
        </div>
    </div>

    <!-- Merchandise Content -->  
    <div id="contentMerch" class="tab-content hidden">
      <h2 class="text-2xl text-green-700 font-bold mb-2 text-center">Recycle Merchandise</h2>
      <p class="mb-8 text-gray-600 text-center">Beli produk ramah lingkungan dari kami untuk dukung gerakan recycle!</p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($merchandises as $merch)
        <div class="rounded-xl p-4 shadow-sm flex flex-col items-center bg-white transition hover:shadow-2xl hover:-translate-y-2 duration-300 hover:bg-green-50">
          @if($merch->image)
            <img src="{{ asset('img/' . $merch->image) }}" alt="{{ $merch->name }}" class="w-40 h-40 object-contain mb-3 rounded-lg shadow-lg">
          @endif
          <h3 class="font-semibold text-lg mb-1">{{ $merch->name }}</h3>
          <h4 class="font-semibold text-green-700 mb-1">
            Rp {{ number_format($merch->price,0,',','.') }}
          </h4>
            <a href="#" class="mt-2 px-4 py-2 bg-green-700 text-white rounded-lg font-semibold hover:bg-green-800 transition">Beli Sekarang</a>

        </div>
        @endforeach
      </div>
    </div>
</div>
</div>

<script>
  const tabSampah = document.getElementById('tabSampah');
  const tabMerch = document.getElementById('tabMerch');
  const contentSampah = document.getElementById('contentSampah');
  const contentMerch = document.getElementById('contentMerch');

  tabSampah.addEventListener('click', () => {
    tabSampah.classList.add('bg-green-700', 'text-white');
    tabMerch.classList.remove('bg-green-700', 'text-white');
    tabMerch.classList.add('bg-gray-200', 'text-gray-800');

    contentSampah.classList.remove('hidden');
    contentMerch.classList.add('hidden');
  });

  tabMerch.addEventListener('click', () => {
    tabMerch.classList.add('bg-green-700', 'text-white');
    tabSampah.classList.remove('bg-green-700', 'text-white');
    tabSampah.classList.add('bg-gray-200', 'text-gray-800');

    contentMerch.classList.remove('hidden');
    contentSampah.classList.add('hidden');
  });
  
</script>

</x-layout>