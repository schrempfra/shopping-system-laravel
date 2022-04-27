<x-app-layout>
    <div class="container mx-auto px-2 sm:px-4 lg:px-8">
        <div class="overflow-hidden">
            <div class="lg:grid lg:grid-cols-12 lg:divide-x">
                <aside class="py-6 lg:col-span-3">
                    @include('layouts.settings-navigation')
                </aside>
                @yield('content')
            </div>
        </div>
    </div>
</x-app-layout>
