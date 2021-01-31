<section>
    <div class="mb-3 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
        <div class="mt-1 relative border rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <!-- Heroicon name: mail -->
                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="search" wire:model="search"
                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                placeholder="Search...">
        </div>
    </div>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pricing
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Location
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Season
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Companion
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    {{-- <span class="sr-only">Edit</span> --}}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($activities as $activity)
                            <tr>
                                <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $activity->name }}
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $activity->displayPricing }}
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $activity->displayLocation }}
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                    <div class="inline-flex items-center">
                                        @if (in_array('winter',$activity->seasonArray))
                                        <span class="mr-1">@include('icons.winter')</span>
                                        @endif
                                        @if (in_array('spring',$activity->seasonArray))
                                        <span class="mr-1">@include('icons.flower')</span>
                                        @endif
                                        @if (in_array('summer',$activity->seasonArray))
                                        <span class="mr-1">@include('icons.sun')</span>
                                        @endif
                                        @if (in_array('fall',$activity->seasonArray))
                                        <span class="mr-1">@include('icons.leaf')</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                                    <div class="inline-flex items-center">
                                        @if (in_array('alone', $activity->CompanionArray))
                                        <span class="mr-1">@include('icons.person')</span>
                                        @endif
                                        @if (in_array('partner',$activity->CompanionArray))
                                        <span class="mr-1">@include('icons.heart')</span>
                                        @endif
                                        @if (in_array('friends',$activity->CompanionArray))
                                        <span class="mr-1">@include('icons.handshake')</span>
                                        @endif
                                        @if (in_array('family',$activity->CompanionArray))
                                        <span class="mr-1">@include('icons.family')</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                                    <x-shared.list-actions :model="$activity" route="activities" />
                                </td>
                            </tr>

                            @empty
                            <tr class="bg-white">
                                <td></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="my-3 px-4">
                    {{ $activities->links() }}
                </div>
            </div>
        </div>
    </div>
</section>