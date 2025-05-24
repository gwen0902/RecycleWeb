<x-layout>
        <div class="max-w-5xl mx-auto py-12 px-4">
        
            <!-- Artikel 1 -->
            <article class="bg-white rounded-2xl  p-6 flex flex-col ">
                <img src="{{ asset('img/' . $post['image']) }}" alt="Hutan" class="rounded-xl mb-4 h-80 w-full object-cover">
                <h2 class="text-2xl font-bold text-green-800 mb-2">{{ $post['title'] }}</h2>
                <div class="blog-content text-gray-600 mb-4">
                    {!! $post['content'] !!}
                </div>            

                <span class="text-gray-400 text-sm mt-4 font-light">{{ $post['author'] }}  &bull; {{ $post['created_at']->format('j M Y') }}</span>
                <a href="/blog/" class="text-green-700 mt-8 font-semibold hover:underline">&laquo; Back</a>


            </article>

        </div>

</x-layout>