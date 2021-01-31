<div class="mt-5 flex-1 flex flex-col overflow-y-auto">

    <div class="overflow-y-auto">
        <nav class="px-4 space-y-1">

            <a href="{{ route('dashboard') }}"
                class="group lw-nav-links {{ Request::is('dashboard') ? 'lw-nav-active' : '' }}">
                @include('icons.dashboard')
                <span class="ml-4">Dashboard</span>
            </a>

            <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: clock -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                History
            </a>

            <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: scale -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
                Balances
            </a>

            {{-- <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: credit-card -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                Cards
            </a> --}}

            {{-- <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: user-group -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Recipients
            </a> --}}

            <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: document-report -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Reports
            </a>
        </nav>
    </div>

    <hr class="h-px mt-3 bg-gray-300 border-none">

    <div class="mt-3 flex-1 h-0 overflow-y-auto">
        <nav class="px-4 space-y-1">

            <a href="{{ route('users.index') }}"
                class="group lw-nav-links {{ Request::is('users') ? 'lw-nav-active' : '' }} ">
                @include('icons.users')
                <span class="ml-4">Users</span>
            </a>

            <a href="{{ route('activities.index') }}"
                class="group lw-nav-links {{ Request::is('activities') ? 'lw-nav-active' : '' }}">
                @include('icons.activity')
                <span class="ml-4">Activities</span>
            </a>

            <a href="{{ route('countries.index') }}"
                class="group lw-nav-links {{ Request::is('countries') ? 'lw-nav-active' : '' }}">
                @include('icons.world')
                <span class="ml-4">Countries</span>
            </a>

            <a href="{{ route('categories.index') }}"
                class="group lw-nav-links {{ Request::is('categories') ? 'lw-nav-active' : '' }}">
                @include('icons.tags')
                <span class="ml-4">Categories</span>
            </a>

            <a href="{{ route('companies.index') }}"
                class="group lw-nav-links {{ Request::is('companies') ? 'lw-nav-active' : '' }}">
                @include('icons.buildings')
                <span class="ml-2">Companies</span>
            </a>

            <a href="{{ route('enquiries.index') }}" class="group lw-nav-links">
                @include('icons.enquiry')
                <span class="ml-4">Enquiries</span>
            </a>

            <a href="{{ route('orders.index') }}" class="group lw-nav-links">
                @include('icons.orders')
                <span class="ml-4">Orders</span>
            </a>

            <a href="{{ route('roles.index') }}" class="group lw-nav-links">
                @include('icons.keys')
                <span class="ml-4">Roles & Permissions</span>
            </a>

            <a href="{{ route('to-dos.index') }}" class="group lw-nav-links">
                @include('icons.todos')
                <span class="ml-4">To-dos</span>
            </a>
        </nav>
    </div>

    <hr class="h-px mt-3 bg-gray-300 border-none">

    <div class="overflow-y-auto">
        <nav class="px-4 space-y-1 mt-4">
            <a href="#" class="group lw-nav-links">
                @include('icons.settings')
                <span class="ml-4">Settings</span>
            </a>


            <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: question-mark-circle -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
            </a>

            <a href="#" class="group lw-nav-links">
                <!-- Heroicon name: shield-check -->
                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-200 transition ease-in-out duration-150"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Privacy
            </a>
        </nav>
    </div>
</div>