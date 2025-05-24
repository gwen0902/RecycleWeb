<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-bold text-green-700 mb-4 text-center">Contact Us</h1>
        <p class="text-gray-600 mb-8 text-center text-lg">
            Punya ide, saran, atau pertanyaan? Tim kami siap bantu dan berkolaborasi untuk menciptakan lingkungan yang lebih baik.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 items-stretch">
            <!-- Form Kontak -->
            <div class="bg-white p-8 rounded-lg shadow flex flex-col justify-center h-full">
                <h2 class="text-2xl font-bold mb-4 text-green-700">Hubungi Kami</h2>
                @if(session('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 mb-1" for="name">Nama</label>
                        <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1" for="email">Email</label>
                        <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                    </div>
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition">Kirim</button>
                </form>
            </div>
            <!-- Info Kontak + Maps -->
            <div class="flex flex-col h-full">
                <div class="bg-white p-8 rounded-lg shadow flex flex-col justify-center mb-6">
  <h2 class="text-2xl font-bold mb-4 text-green-700">Contact Information</h2>
  <div class="space-y-4">
    <div class="flex items-center">
      <img src="https://img.icons8.com/ios-filled/50/007906/marker.png" alt="address" class="w-6 h-6 mr-3" />
      <span class="text-gray-700">Jl. Contoh Alamat No. 123, Pontianak, Kalimantan Barat</span>
    </div>
    <div class="flex items-center">
      <img src="https://img.icons8.com/ios-filled/50/007906/new-post.png" alt="email" class="w-6 h-6 mr-3" />
      <span class="text-gray-700">contact@recycle.com</span>
    </div>
    <div class="flex items-center">
      <img src="https://img.icons8.com/ios-filled/50/007906/phone.png" alt="phone" class="w-6 h-6 mr-3" />
      <span class="text-gray-700">+62 812-3456-7890</span>
    </div>
    <div class="flex items-center">
      <img src="https://img.icons8.com/ios-filled/50/007906/clock.png" alt="hours" class="w-6 h-6 mr-3" />
      <span class="text-gray-700">Senin - Jumat, 08.00 - 17.00</span>
    </div>
  </div>

  <!-- Social Media Links -->
    <p class="text-lg font-semibold mt-6 text-green-700 text-center">Follow Us</p>
  <div class="mt-4 flex justify-center space-x-6">
    <a href="#" class="transition hover:scale-110">
      <img src="https://img.icons8.com/ios-filled/50/007906/whatsapp.png" alt="WhatsApp" class="w-6 h-6" />
    </a>
    <a href="#" class="transition hover:scale-110">
      <img src="https://img.icons8.com/ios-filled/50/007906/instagram-new.png" alt="Instagram" class="w-6 h-6" />
    </a>
    <a href="#" class="transition hover:scale-110">
      <img src="https://img.icons8.com/ios-filled/50/007906/youtube-play.png" alt="YouTube" class="w-6 h-6" />
    </a>
  </div>
</div>

                <div class="rounded-lg overflow-hidden shadow flex-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.544433918887!2d109.28221090777545!3d-0.020925998647522537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58c16b5202b7%3A0xcf320126f1250a91!2sPontianak%20Barat%2C%20Pontianak%2C%20West%20Kalimantan!5e0!3m2!1sen!2sid!4v1747906346918!5m2!1sen!2sid" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>