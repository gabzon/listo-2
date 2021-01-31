<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Social media</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="updateCompanySocialForm">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                        <div>
                            @if (session()->has('updated'))
                            <x-layout.alert type="success">{{ session()->get('updated') }}</x-layout.alert>
                            @endif
                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            {{-- {{ $company->name }} --}}
                            <div class="col-span-6">
                                <label for="facebook" class="lw-form-label">Facebook</label>
                                <input id="facebook" class="lw-form-input" wire:model="facebook">
                            </div>

                            <div class="col-span-6">
                                <label for="twitter" class="lw-form-label">Twitter</label>
                                <input id="twitter" class="lw-form-input" wire:model="twitter">
                            </div>

                            <div class="col-span-6">
                                <label for="instagram" class="lw-form-label">Instagram</label>
                                <input id="instagram" class="lw-form-input" wire:model="instagram">
                            </div>

                            <div class="col-span-6">
                                <label for="youtube" class="lw-form-label">Youtube</label>
                                <input id="youtube" class="lw-form-input" wire:model="youtube">
                            </div>

                            <div class="col-span-6">
                                <label for="linkedin" class="lw-form-label">Linkedin</label>
                                <input id="linkedin" class="lw-form-input" wire:model="linkedin">
                            </div>

                            <div class="col-span-6">
                                <label for="snapchat" class="lw-form-label">Snapchat</label>
                                <input id="snapchat" class="lw-form-input" wire:model="snapchat">
                            </div>

                            <div class="col-span-6">
                                <label for="blog" class="lw-form-label">Blog</label>
                                <input id="blog" class="lw-form-input" wire:model="blog">
                            </div>

                            <div class="col-span-6">
                                <label for="skype" class="lw-form-label">Skype</label>
                                <input id="skype" class="lw-form-input" wire:model="skype">
                            </div>

                            <div class="col-span-6">
                                <label for="pinterest" class="lw-form-label">Pinterest</label>
                                <input id="pinterest" class="lw-form-input" wire:model="pinterest">
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