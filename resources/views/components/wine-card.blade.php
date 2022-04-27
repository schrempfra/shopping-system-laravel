<div class="wine mt-8">
    <div class="relative inline-block">
        <a href="{{ route('wines.show', $wine->slug) }}">
            <img src="https://picsum.photos/id/{{ $wine->id }}/200/300" alt="wine cover"
                class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
    </div>
    <a href="{{ route('wines.show', $wine->slug) }}"
        class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $wine->title }}</a>
    <div class="text-gray-400 mt-1">
        {{ $wine->type }}
    </div>
</div>
