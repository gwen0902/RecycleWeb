<x-layout>
        <div class="max-w-5xl mx-auto py-12 px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-green-700 mb-8 text-center">Recycle Talks</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($posts as $post)
            <!-- Artikel 1 -->
            <article class="bg-white rounded-2xl shadow-lg p-6 flex flex-col hover:scale-[1.02] transition">
                <img src="{{ asset('img/' . $post['image']) }}" alt="Hutan" class="rounded-xl mb-4 h-48 w-full object-cover">
                <a href="/blog/{{ $post['id'] }}"><h2 class="text-xl font-semibold text-green-800 mb-2">{{ $post['title'] }}</h2></a>
                <p class="text-gray-600 mb-4">{{ Str::limit (strip_tags ($post['content']), 100) }}</p>
                <a href="/blog/{{ $post['id'] }}" class="text-green-700  font-semibold hover:underline">Baca selengkapnya &raquo;</a>
                <span class="text-gray-400 text-sm mt-4 font-light">{{ $post['author'] }}  &bull; {{ $post['created_at']->format('j M Y') }}</span>
            </article>
            @endforeach

        </div>
        </div>

</x-layout>