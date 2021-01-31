<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Business address</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="updateCompanyAddressInfo">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">


                        @if (session()->has('updated'))
                        <x-layout.alert type="success">
                            {{ session()->get('updated') }}
                        </x-layout.alert>
                        @endif


                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="lw-form-label">Country</label>
                                <select id="country" class="form-select lw-form-select" wire:model="country">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>

                            <div class="col-span-6">
                                <label for="street_address" class="lw-form-label">Street address</label>
                                <input id="street_address" class="lw-form-input" wire:model="street_address">
                            </div>

                            <div class="col-span-6">
                                <label for="address_info" class="lw-form-label">Address info</label>
                                <input id="address_info" class="lw-form-input" wire:model="address_info">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city" class="lw-form-label">City</label>
                                <input id="city" class="lw-form-input" wire:model="city">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="state" class="lw-form-label">State / Province</label>
                                <input id="state" class="lw-form-input" wire:model="state">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal_code" class="lw-form-label">ZIP / Postal</label>
                                <input id="postal_code" class="lw-form-input" wire:model="postal_code">
                            </div>

                            <input id="lat" type="hidden" wire:model="lat">
                            <input id="lat" type="hidden" wire:model="lng">

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="lw-btn-default">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>