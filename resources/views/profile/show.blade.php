<x-app-layout>
    <x-slot name="title">{{ _('Profile') }}</x-slot>
    <x-slot name="header">
        <x-layout.header>
            <div class="flex-1 min-w-0">
                <!-- Profile -->
                <div class="flex items-center">
                    <img class="hidden h-15 w-15 rounded-full sm:block" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}">
                    <div>
                        <div class="flex items-center">
                            <img class="h-15 w-15 rounded-full sm:hidden" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}">
                            <h1 class="ml-3 text-2xl font-bold leading-7 text-cool-gray-900 sm:leading-9 sm:truncate">
                                Hi, {{ auth()->user()->name }}
                            </h1>
                        </div>
                        <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                            <dt class="sr-only">Company</dt>
                            <dd
                                class="flex items-center text-sm leading-5 text-cool-gray-500 font-medium capitalize sm:mr-6">
                                <!-- Heroicon name: office-building -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-cool-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                        clip-rule="evenodd" />
                                </svg>
                                Duke street studio
                            </dd>
                            <dt class="sr-only">Account status</dt>
                            <dd
                                class="mt-3 flex items-center text-sm leading-5 text-cool-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                <!-- Heroicon name: check-circle -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Verified account
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                {{-- <span class="shadow-sm rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-cool-gray-800 active:bg-cool-gray-50 transition duration-150 ease-in-out">
                        Add money
                    </button>
                </span>
                <span class="shadow-sm rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:shadow-outline-teal focus:border-teal-700 active:bg-teal-700 transition duration-150 ease-in-out">
                        Send money
                    </button>
                </span> --}}
            </div>
        </x-layout.header>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('profile.update-profile-information-form')

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>
            @endif


            <x-jet-section-border />
            <div class="mt-10 sm:mt-0">
                <livewire:profile.user-info :user="Auth::user()" />
            </div>

            <x-jet-section-border />
            <div class="mt-10 sm:mt-0">
                <livewire:profile.user-contact-info :user="Auth::user()" />
            </div>

            <x-jet-section-border />
            <div class="mt-10 sm:mt-0">
                <livewire:profile.user-address-info uid="{{ Auth::user()->id }}" />
            </div>




            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>
            @endif

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>