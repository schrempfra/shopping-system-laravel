<div class="recently-viewed-container space-y-12 mt-8">
    @forelse ($recentlyViewed as $wine)
        <div class="wine bg-white rounded-lg shadow-sm flex px-6 py-6">
            <div class="relative flex-none">
                <a href="{{ route('wines.show', $wine->slug) }}">
                    <img src="https://picsum.photos/id/{{ $wine->id }}/200/300" alt="wine cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div id="review_{{ $wine->slug }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full text-xs" style="right: -20px; bottom: -20px">
                    
                </div>
            </div>
            <div class="ml-6 lg:ml-12">
                <a href="{{ route('wines.show', $wine->slug) }}" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{ $wine->title }}</a>
                <div class="text-gray-400 mt-1">
                    {{ $wine->type }}
                </div>
                <p class="mt-6 text-gray-400 hidden lg:block">
                    {{ $wine->description }}
                </p>
            </div>
        </div> <!-- end wine -->
    @endforeach
</div>
