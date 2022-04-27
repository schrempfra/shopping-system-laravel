<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shopping</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @livewireStyles


    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-slate-200">

    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="py-8">
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
