<x-layout>
    <div class="container mx-auto px-4 py-10">
  <!-- Tabs -->
  <div class="flex space-x-4 mb-8">
    <button id="tabSampah" class="tab-button bg-green-600 text-white px-4 py-2 rounded-lg font-semibold">Jual Sampahmu</button>
    <button id="tabMerch" class="tab-button bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-semibold">Merchandise</button>
  </div>

  <!-- Content Area -->
  <div id="contentSampah" class="tab-content">
    <h2 class="text-2xl font-bold mb-2">Jenis Sampah yang Bisa Kamu Setor</h2>
    <p class="mb-4 text-gray-600">Cek harga sampah per kategori dan setor untuk dapat uang.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Plastik</h3>
        <p class="text-sm text-gray-600">Harga: Rp 1.000/kg</p>
      </div>
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Kardus</h3>
        <p class="text-sm text-gray-600">Harga: Rp 1.200/kg</p>
      </div>
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Botol Kaca</h3>
        <p class="text-sm text-gray-600">Harga: Rp 800/kg</p>
      </div>
    </div>
  </div>

  <div id="contentMerch" class="tab-content hidden">
    <h2 class="text-2xl font-bold mb-2">Recycle Merchandise</h2>
    <p class="mb-4 text-gray-600">Beli produk ramah lingkungan dari kami untuk dukung gerakan recycle!</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Tote Bag Daur Ulang</h3>
        <p class="text-sm text-gray-600">Rp 50.000 / 500 Poin</p>
      </div>
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Tumbler Eco</h3>
        <p class="text-sm text-gray-600">Rp 75.000 / 750 Poin</p>
      </div>
      <div class="border rounded-xl p-4 shadow-sm">
        <h3 class="font-semibold text-lg">Kaos Recycle</h3>
        <p class="text-sm text-gray-600">Rp 100.000 / 1.000 Poin</p>
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
    tabSampah.classList.add('bg-green-600', 'text-white');
    tabMerch.classList.remove('bg-green-600', 'text-white');
    tabMerch.classList.add('bg-gray-200', 'text-gray-800');

    contentSampah.classList.remove('hidden');
    contentMerch.classList.add('hidden');
  });

  tabMerch.addEventListener('click', () => {
    tabMerch.classList.add('bg-green-600', 'text-white');
    tabSampah.classList.remove('bg-green-600', 'text-white');
    tabSampah.classList.add('bg-gray-200', 'text-gray-800');

    contentMerch.classList.remove('hidden');
    contentSampah.classList.add('hidden');
  });
</script>

</x-layout>