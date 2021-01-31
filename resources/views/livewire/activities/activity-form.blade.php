<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    Decide which communications you'd like to receive and how.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'add' ? 'createActivity' : 'updateActivity' }}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                        @if (session()->has('created') || session()->has('updated'))
                        <x-layout.alert type="success">
                            {{ session()->get('created') }}
                            {{ session()->get('updated') }}
                        </x-layout.alert>
                        @endif

                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="lw-form-label">Name</label>
                                <input wire:model="name" id="name" class="lw-form-input">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="description" class="block text-sm leading-5 font-medium text-gray-700">
                                Description
                            </label>
                            <div class="rounded-md shadow-sm">
                                <textarea wire:model="description" id="description" rows="3"
                                    class="lw-form-textarea"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brief description for this activity
                            </p>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <label for="icon" class="lw-form-label">icon</label>
                                <input wire:model="icon" text="icon" class="lw-form-input">
                            </div>
                        </div>



                        {{-- <div class="mt-6">
                            <label for="image" class="lw-form-label">
                                Image
                            </label>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block h-15 w-15 overflow-hidden">
                                    <svg class="h-full w-full text-gray-400" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M11 3v2h-4v-2h4zm3 6l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm-7.5 1c.828 0 1.5-.671 1.5-1.5 0-.828-.672-1.5-1.5-1.5s-1.5.672-1.5 1.5c0 .829.672 1.5 1.5 1.5zm10.5 9h-4v2h4v-2zm-6 2v-2h-4v2h4zm2-18v2h4v-2h-4zm6 0v2h3v3h2v-5h-5zm-17 2h3v-2h-5v5h2v-3zm20 14h-3v2h5v-5h-2v3zm0-5h2v-4h-2v4zm-20-4h-2v4h2v-4zm3 9h-3v-3h-2v5h5v-2z" />
                                    </svg>
                                </span>
                                <span class="ml-5 rounded-md">
                                    <input type="file" id="image" wire:model="image">
                                </span>
                            </div>
                        </div> --}}



                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="context" class="lw-form-label">Context</label>
                                <input wire:model="context" id="context" class="lw-form-input">
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="season" class="lw-form-label">Season</label>
                                <input wire:model="season" id="season" class="lw-form-input">
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <fieldset class="mt-6">
                                    <legend class="text-base leading-6 font-medium text-gray-900">Possibilities</legend>
                                    <p class="text-sm leading-5 text-gray-500">Select all possible options</p>
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <input wire:model="is_indoor" type="checkbox"
                                                class="form-checkbox lw-form-checkbox">
                                            <label for="is_indoor" class="ml-3">
                                                <span class="lw-form-label">Indoor</span>
                                            </label>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <input wire:model="is_outdoor" type="checkbox"
                                                class="form-checkbox lw-form-checkbox">
                                            <label for="push_email" class="ml-3">
                                                <span class="lw-form-label">Outdoor</span>
                                            </label>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <input wire:model="is_paid" type="checkbox"
                                                class="form-checkbox lw-form-checkbox">
                                            <label for="is_paid" class="ml-3 lw-form-lab">Paid</label>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <input id="is_free" wire:model="is_free" type="checkbox"
                                                class="form-checkbox lw-form-checkbox">
                                            <label for="is_free" class="ml-3 lw-form-label">Free</label>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <input id="training" wire:model="training" type="checkbox"
                                                class="form-checkbox lw-form-checkbox">
                                            <label for="lw-form-label" class="lw-form-label ml-3">Training</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="companion" class="lw-form-label">Companion</label>
                                <input wire:model="companion" id="companion" class="lw-form-input">
                            </div>
                        </div>


                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="day_period" class="lw-form-label">Daytime</label>
                                <input wire:model="day_period" id="day_period" class="lw-form-input">
                            </div>
                        </div>

                    </div>


                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="lw-form-btn-save">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- $table->string('name');
$table->text('description')->nullable();

$table->string('icon')->nullable();
$table->string('image')->nullable();
$table->string('season')->nullable();
$table->string('context')->nullable();

$table->boolean('is_indoor')->nullable();
$table->boolean('is_outdoor')->nullable();
$table->boolean('is_paid')->nullable();
$table->boolean('is_free')->nullable();
$table->boolean('training')->nullable();

$table->string('companion')->nullable();
$table->string('day_period')->nullable(); --}}