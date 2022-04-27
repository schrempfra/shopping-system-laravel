@extends('auth.settings.settings')
@section('content')
    <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
        <!-- Profile section -->
        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Profil</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Diese Informationen werden öffentlich geteilt.
                </p>
            </div>

            <div class="mt-6 flex flex-col lg:flex-row">
                <div class="flex-grow space-y-6">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">
                            Benutzername
                        </label>
                        <div class="mt-1 rounded-md shadow-sm flex">
                            <span
                                class="bg-gray-50 border border-r-0 border-gray-300 rounded-l-md px-3 inline-flex items-center text-gray-500 sm:text-sm">
                                workcation.com/
                            </span>
                            <input type="text" name="username" id="username" autocomplete="username"
                                class="focus:ring-sky-500 focus:border-sky-500 flex-grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
                                value="deblewis">
                        </div>
                    </div>

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                    <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                        Photo
                    </p>
                    <div class="mt-1 lg:hidden">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12"
                                aria-hidden="true">
                                <img class="rounded-full h-full w-full"
                                    src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80"
                                    alt="">
                            </div>
                            <div class="ml-5 rounded-md shadow-sm">
                                <div
                                    class="group relative border border-gray-300 rounded-md py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">
                                    <label for="mobile-user-photo"
                                        class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                        <span>Change</span>
                                        <span class="sr-only"> user photo</span>
                                    </label>
                                    <input id="mobile-user-photo" name="user-photo" type="file"
                                        class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden relative rounded-full overflow-hidden lg:block">
                        <img class="relative rounded-full w-40 h-40"
                            src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80"
                            alt="">
                        <label for="desktop-user-photo"
                            class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                            <span>Change</span>
                            <span class="sr-only"> user photo</span>
                            <input type="file" id="desktop-user-photo" name="user-photo"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                        </label>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-12 gap-6">
                <div class="col-span-12 sm:col-span-6">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First
                        name</label>
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                </div>

                <div class="col-span-12 sm:col-span-6">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                </div>

                <div class="col-span-12">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                    <input type="text" name="url" id="url"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                </div>

                <div class="col-span-12 sm:col-span-6">
                    <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                    <input type="text" name="company" id="company" autocomplete="organization"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm">
                </div>
            </div>
        </div>

        <!-- Privacy section -->
        <div class="pt-6 divide-y divide-gray-200">
            <div class="px-4 sm:px-6">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                    </p>
                </div>
                <ul role="list" class="mt-2 divide-y divide-gray-200">
                    <li class="py-4 flex items-center justify-between" x-data="{ on: true }">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                Available to hire
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
                            </p>
                        </div>
                        <button type="button"
                            class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 bg-teal-500"
                            role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-1-label"
                            aria-describedby="privacy-option-1-description" :aria-checked="on.toString()" @click="on = !on">
                            <span aria-hidden="true"
                                class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                        </button>
                    </li>
                    <li class="py-4 flex items-center justify-between" x-data="{ on: false }">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                Make account private
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.
                            </p>
                        </div>
                        <button type="button"
                            class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                            role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-2-label"
                            aria-describedby="privacy-option-2-description" :aria-checked="on.toString()" @click="on = !on">
                            <span aria-hidden="true"
                                class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
                                x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                        </button>
                    </li>
                    <li class="py-4 flex items-center justify-between" x-data="{ on: true }">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                Allow commenting
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                Integer amet, nunc hendrerit adipiscing nam. Elementum ame
                            </p>
                        </div>
                        <button type="button"
                            class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 bg-teal-500"
                            role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-3-label"
                            aria-describedby="privacy-option-3-description" :aria-checked="on.toString()" @click="on = !on">
                            <span aria-hidden="true"
                                class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                        </button>
                    </li>
                    <li class="py-4 flex items-center justify-between" x-data="{ on: true }">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">
                                Allow mentions
                            </p>
                            <p class="text-sm text-gray-500" id="privacy-option-4-description">
                                Adipiscing est venenatis enim molestie commodo eu gravid
                            </p>
                        </div>
                        <button type="button"
                            class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 bg-teal-500"
                            role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-4-label"
                            aria-describedby="privacy-option-4-description" :aria-checked="on.toString()" @click="on = !on">
                            <span aria-hidden="true"
                                class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="submit"
                    class="ml-5 bg-sky-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    Speichern
                </button>
            </div>
        </div>
    </form>
@endsection