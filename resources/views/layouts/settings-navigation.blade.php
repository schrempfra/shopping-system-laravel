<nav class="space-y-1">

    <a href="{{ route('settings.profile') }}"
        class="bg-sky-50 border-sky-500 text-sky-700 hover:bg-sky-50 hover:text-sky-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-sky-500 group-hover:text-sky-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" x-state:on="Current"
            x-state:off="Default"
            x-state-description="Current: &quot;text-sky-500 group-hover:text-sky-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;"
            x-description="Heroicon name: outline/user-circle" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
            </path>
        </svg>
        <span class="truncate">
            Profil
        </span>
    </a>

    <a href="{{ route('settings.password') }}"
        class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
            x-state-description="undefined: &quot;text-sky-500 group-hover:text-sky-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
            x-description="Heroicon name: outline/key" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
            </path>
        </svg>
        <span class="truncate">
            Password
        </span>
    </a>

    <a href="{{ route('settings.orders') }}"
        class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
            <line x1="3" y1="6" x2="3" y2="19" />
            <line x1="12" y1="6" x2="12" y2="19" />
            <line x1="21" y1="6" x2="21" y2="19" />
        </svg>
        <span class="truncate">
            Bestellungen
        </span>
    </a>

    <a href="{{ route('settings.wines') }}"
        class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
        </svg>

        <span class="truncate">
            Weine
        </span>
    </a>

    {{-- <a href="#"
        class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
        x-state-description="undefined: &quot;bg-sky-50 border-sky-500 text-sky-700 hover:bg-sky-50 hover:text-sky-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
            x-state-description="undefined: &quot;text-sky-500 group-hover:text-sky-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
            x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
            </path>
        </svg>
        <span class="truncate">
            Notifications
        </span>
    </a> --}}


</nav>
