<div class="text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-300 pb-16">
    @foreach ($wines as $wine)
        <x-wine-card :wine="$wine" />
    @endforeach
</div> <!-- end popular-wines -->
