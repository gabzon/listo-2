<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Title
            </th>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Status
            </th>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Role
            </th>
            <th class="px-6 py-3 bg-gray-50"></th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($users as $u)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="{{ $u->profile_photo_path ?? $u->profile_photo_url }}"
                            alt="{{ $u->name }}">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">
                            {{ $u->name }}
                        </div>
                        <div class="text-sm leading-5 text-gray-500">
                            {{ $u->email }}
                        </div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm leading-5 text-gray-500">Optimization</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                </span>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                Admin
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                {{-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                <div class="relative flex justify-end items-center" x-data="{ openOptions: false }">
                    <button id="project-options-menu-0" aria-has-popup="true" type="button" @click="openOptions = true"
                        class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition ease-in-out duration-150">
                        <!-- Heroicon name: dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <!--
                      Dropdown panel, show/hide based on dropdown state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div x-show="openOptions" @click.away="openOptions = false"
                        class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg">
                        <x-partials.table-actions model="users" id="{{ $u->id }}" />
                    </div>
                </div>


            </td>
        </tr>
        @endforeach

    </tbody>
</table>