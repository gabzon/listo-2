<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Company</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'add' ? 'createCompany' : 'updateCompanyDefault' }}">
                <div class="shadow sm:rounded-md sm:overflow-hidden">

                    <div class="px-4 py-5 bg-white sm:p-6">


                        @if (session()->has('created') || session()->has('updated'))
                        <x-layout.alert type="success">
                            {{ session()->get('created') }}
                            {{ session()->get('updated') }}
                        </x-layout.alert>
                        @endif


                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" class="lw-form-label">Name</label>
                                <input id="name" type="text" class="lw-form-input" wire:model="name">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="description" class="lw-form-lable">Description</label>
                            <div class="rounded-md shadow-sm">
                                <textarea id="description" name="description" rows="3" class="lw-form-textarea"
                                    wire:model="description"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brief description for your profile. URLs are hyperlinked.
                            </p>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="lw-form-label">Email</label>
                                <input id="email" type="email" class="lw-form-input" wire:model="email">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="lw-form-label">Phone</label>
                                <input id="phone" type="tel" class="lw-form-input" wire:model="phone">
                            </div>
                        </div>


                        <div class="mt-6 grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="website" class="lw-form-label">Website</label>
                                <input id="website" type="url" wire:model="website" class="lw-form-input">
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6 items-center ">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="location"
                                    class="block text-sm leading-5 font-medium text-gray-700">Type</label>
                                <select id="location" wire:modal="type"
                                    class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                    <option value="Travel Agency" selected>Travel Agency</option>
                                    <option value="Tour Operator">Tour Operator</option>
                                    <option value="Transportation">Tour operator</option>
                                    <option value="Accommodations">Hotels</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="mt-4 flex items-center">
                                    <input id="is_active" name="is_active" type="checkbox" wire:model="is_active">
                                    <label for="is_active" class="ml-3 lw-form-label">Is active?</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="founded" class="lw-form-label">Founded</label>
                                <input id="founded" type="date" wire:model="founded" class="lw-form-input">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="defunct" class="lw-form-label">Defunct</label>
                                <input id="defunct" type="date" wire:model="defunct" class="lw-form-input">
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="logo" class="lw-form-label">Logo</label>
                                <input id="logo" type="file" wire:model="logo" class="">
                            </div>
                        </div>

                        <fieldset class="mt-6">
                            <legend class="text-base leading-6 font-medium text-gray-900">Company investments</legend>
                            <div class="mt-4">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="has_insurance" type="checkbox" wire:model="has_insurance"
                                            class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                    </div>
                                    <div class="ml-3 text-sm leading-5">
                                        <label for="comments" class="font-medium text-gray-700">Has Insurance?</label>
                                        <p class="text-gray-500">
                                            Check if they have travel insurance for them or their clients
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="has_newsletter" type="checkbox" wire:model="has_newsletter"
                                                class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="has_newsletter" class="lw-form-label">Has newsletter?</label>
                                            <p class="text-gray-500">Check if they have a regular newsletter or
                                                marketing strategy
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="has_branches" type="checkbox" wire:model="has_branches"
                                                class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="has_branches" class="lw-form-label">Has Branches?</label>
                                            <p class="text-gray-500">Get notified when a candidate accepts or rejects an
                                                offer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="mt-6 grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-1">
                                <label for="employees" class="lw-form-label">Number of employees</label>
                                <input id="employees" type="number" wire:model="employees" class="lw-form-input">
                            </div>
                        </div>

                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit" class="lw-form-btn-save">
                                Save
                            </button>
                        </span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>