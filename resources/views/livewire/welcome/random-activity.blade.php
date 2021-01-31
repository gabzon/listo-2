<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12 z-0">

    <div class="relative py-3 sm:max-w-7xl sm:mx-auto mx-3">
        <div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
            <div class="max-w-7xl mx-auto" x-data="{ isOn: false, on:false }">

                <section>
                    <div class="flex justify-center items-center mb-3">
                        <button @click="isOn = !isOn" type="button" aria-pressed="isOn.toString()"
                            :class="{'bg-indigo-600': isOn, 'bg-gray-200': !isOn }"
                            class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">Use setting</span>

                            <span aria-hidden="true" :class="{'translate-x-5': isOn, 'translate-x-0': !isOn }"
                                class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                        </button>
                        <span class="ml-3" id="toggleLabel">
                            <span class="text-sm font-medium text-gray-900">Display full List of activities</span>
                        </span>
                    </div>

                    <div x-show="!isOn" class="flex justify-center">
                        <h1 class="text-5xl font-bold my-8">

                            @if (!$activity->isEmpty())
                            {{ $activity->random()->name }}
                            @else
                            Not results
                            @endif
                            {{-- @foreach ($activity as $item)
                            {{ $item->name}}
                            @endforeach --}}
                        </h1>
                    </div>

                    <div x-show="isOn">
                        <x-activity-list :activities="$activities" />
                    </div>
                </section>

                <section id="filters" x-show="on" class="grid grid-cols-6 gap-5">
                    <fieldset class="col-span-6 sm:col-span-2 md:col-span-1 py-4 text-base text-gray-600">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Pricing</legend>
                        </div>
                        <div class="mt-1 space-y-1">
                            <select wire:model="free"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Not relevant</option>
                                <option value="true">Free</option>

                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="col-span-6 sm:col-span-2 md:col-span-1 py-4 text-base text-gray-600">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Location</legend>
                        </div>
                        <div class="mt-1 space-y-1">
                            <select wire:model="location"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Not relevant</option>
                                <option value="indoor">Indoor</option>
                                <option value="outdoor">Outdoor</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="col-span-6 sm:col-span-2 md:col-span-1 py-4 text-base text-gray-600">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Season</legend>
                        </div>
                        <div class="mt-1 space-y-1">
                            <select wire:model="season"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Not relevant</option>
                                <option value="winter">Winter</option>
                                <option value="spring">Spring</option>
                                <option value="summer">Summer</option>
                                <option value="fall">Fall</option>
                            </select>
                        </div>
                    </fieldset>

                    <fieldset class="col-span-6 sm:col-span-2 md:col-span-1 py-4 text-base text-gray-600">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Companions</legend>
                        </div>
                        <div class="mt-1 space-y-1">
                            <select wire:model="companion"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Not relevant</option>
                                <option value="alone">Alone</option>
                                <option value="partner">Partner</option>
                                <option value="family">Family (Children)</option>
                                <option value="friends">Friends</option>
                            </select>
                        </div>
                    </fieldset>

                    <fieldset class="col-span-6 sm:col-span-2 py-4 text-base text-gray-600">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Category</legend>
                        </div>
                        <div class="mt-1 space-y-1">
                            <select wire:model="category"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Not relevant</option>
                                @foreach (\App\Models\Category::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                </section>
                <section id="controls">

                </section>
                <div>

                    <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                        <div class="flex justify-between items-center">
                            <button wire:click="another" x-show="!isOn"
                                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 mr-1">
                                Another
                            </button>
                            <button @click="on = !on"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-400 bg-transparent hover:bg-gray-50 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="fill-current w-5 h5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>