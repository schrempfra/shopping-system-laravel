<x-app-layout>
    <div class="container mx-auto px-2 sm:px-4 lg:px-8">
        <h2 class="text-gray-900 uppercase tracking-wide font-semibold">Beliebte Weine</h2>
        <livewire:popular-wines>
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-gray-900 uppercase tracking-wide font-semibold">Kürzlich angesehen</h2>
                <livewire:recently-viewed >
            </div>
            <div class="best-rating lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-gray-900 uppercase tracking-wide font-semibold">Beste Bewertung</h2>
                <livewire:best-rating>
            </div> <!-- end best-rated -->
        </div>
    </div> <!-- end container -->
</x-app-layout>