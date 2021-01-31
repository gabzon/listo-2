<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Information</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    Please enter your phone number, your social media information and your contact preferences
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="updateUserContactInfo">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                        <div>
                            @if (session()->has('success'))
                            <x-layout.alert type="success">{{ session('success') }}</x-layout.alert>
                            @endif
                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="mobile" class="lw-form-label">Mobile number</label>
                                <input id="mobile" class="lw-form-input" wire:model="mobile">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="lw-form-label">Phone number</label>
                                <input id="phone" class="lw-form-input" wire:model="phone">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="facebook" class="lw-form-label">Facebook</label>
                                <input id="facebook" class="lw-form-input" wire:model="facebook">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="linkedin" class="lw-form-label">Linkedin</label>
                                <input id="linkedin" class="lw-form-input" wire:model="linkedin">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="instagram" class="lw-form-label">Instagram</label>
                                <input id="instagram" class="lw-form-input" wire:model="instagram">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="youtube" class="lw-form-label">Youtube</label>
                                <input id="youtube" class="lw-form-input" wire:model="youtube">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="tiktok" class="lw-form-label">Tiktok</label>
                                <input id="tiktok" class="lw-form-input" wire:model="tiktok">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="skype" class="lw-form-label">Skype</label>
                                <input id="skype" class="lw-form-input" wire:model="skype">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="snapchat" class="lw-form-label">Snapchat</label>
                                <input id="snapchat" class="lw-form-input" wire:model="snapchat">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="pinterest" class="lw-form-label">Pinterest</label>
                                <input id="pinterest" class="lw-form-input" wire:model="pinterest">
                            </div>
                        </div>



                        <fieldset class="mt-6">
                            <legend class="text-base leading-6 font-medium text-gray-900">Contact preferences</legend>
                            <p class="text-sm leading-5 text-gray-500">
                                Please select all the communication style you use by which you would like to be
                                contacted
                            </p>

                            <div class="mt-4">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="call" type="checkbox" wire:model="call"
                                            class="form-checkbox lw-form-checkbox">
                                    </div>
                                    <div class="ml-3 text-sm leading-5">
                                        <label for="call" class="font-medium text-gray-700">Phone call</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="whatsapp" type="checkbox" wire:model="whatsapp"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="whatsapp" class="font-medium text-gray-700">Whatsapp</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="viber" type="checkbox" wire:model="viber"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="viber" class="font-medium text-gray-700">Viber</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="wechat" type="checkbox" wire:model="wechat"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="wechat" class="font-medium text-gray-700">Wechat</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="telegram" type="checkbox" wire:model="telegram"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="telegram" class="font-medium text-gray-700">Telegram</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="sms" type="checkbox" wire:model="sms"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="sms" class="lw-form-label">SMS</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="fb_messenger" type="checkbox" wire:model="fb_messenger"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="fb_messenger" class="lw-form-label0">
                                                Facebook Messenger
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ig_messages" type="checkbox" wire:model="ig_messages"
                                                class="form-checkbox lw-form-checkbox">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="ig_messages" class="lw-form-label">
                                                with Instagram
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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