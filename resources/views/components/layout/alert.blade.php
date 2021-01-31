<div {{ $attributes->merge(['class'=> "{$styles[$type]} rounded-md p-4 mb-5"])}} x-data="{ open: true }" x-show="open">
    <div class="flex">
        <div class="flex-shrink-0">
            @include('icons.' . $type)
        </div>
        <div class="ml-3">
            <p class="text-sm leading-5 font-medium text-green-800">
                {{ $slot }}
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button aria-label="Dismiss" type="button" @click="open = false"
                    class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                    <!-- Heroicon name: x -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>


{{-- <div class="mt-20">
    <!--Header Alert-->
    <div class="alert-banner w-full">
        <label
            class="close cursor-pointer flex items-center justify-between w-full py-4 px-3 bg-green-400 rounded text-white font-bold"
            title="close" for="banneralert">
            
            <button>
                @include('icons.x')
            </button>
        </label>
    </div>
</div> --}}