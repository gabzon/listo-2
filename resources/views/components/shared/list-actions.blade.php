<div x-data="{ showActions: false }">
    <div class="relative flex justify-end items-center">
        <button id="project-options-menu-0" aria-has-popup="true" type="button" @click="showActions = true"
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
        <div class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg" x-show="showActions"
            @click.away="showActions = false">
            <div class="z-10 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                aria-labelledby="project-options-menu-0">
                <div class="py-1">
                    <a href="{{ route($route.'.show', $model) }}"
                        class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">
                        @include('icons.view', [ 'style'=>'h-5 w-5 mr-3 text-gray-400 group-hover:text-gray-500
                        group-focus:text-gray-500'])
                        View
                    </a>
                    <a href="{{ route($route.'.edit', $model) }}"
                        class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">
                        <!-- Heroicon name: pencil-alt -->
                        @include('icons.edit', [ 'style'=>'h-4 w-4 mr-3 text-gray-400 group-hover:text-gray-500
                        group-focus:text-gray-500'])
                        Edit
                    </a>
                </div>
                <div class="border-t border-gray-100"></div>
                <div class="py-1">

                    {{-- this needs to be inside a form --}}
                    create a component for adding the modal window
                    <a href="{{ route($route.'.destroy', $model) }}"
                        class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">

                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>