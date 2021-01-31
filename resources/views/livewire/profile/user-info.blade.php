<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">User info</h3>
            <p class="mt-1 text-sm leading-5 text-gray-600">
                This information will be displayed publicly so be careful what you share.
            </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="updateUserInfo">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white sm:p-6">


                    <div>
                        @if (session()->has('success'))
                        <x-layout.alert type="success">{{ session('success') }}</x-layout.alert>
                        @endif
                    </div>


                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="username" class="lw-form-label">
                                Username
                            </label>
                            <input id="username" type="text" class="lw-form-input" wire:model="username">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="about" class="block text-sm leading-5 font-medium text-gray-700">
                            About
                        </label>
                        <div class="rounded-md shadow-sm">
                            <textarea id="about" rows="3" class="lw-form-textarea" placeholder="Personal biography..."
                                wire:model="biography"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Brief description for your profile. URLs are hyperlinked.
                        </p>
                    </div>



                    <div class="mt-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-1">
                                <label for="birthday" class="lw-form-label">
                                    Birthday
                                </label>
                                <input id="birthday" type="date" class="lw-form-input" wire:model="birthday">
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="profession" class="lw-form-label">
                                    Profession
                                </label>
                                <input id="profession" type="text" class="lw-form-input" wire:model="profession">
                            </div>
                        </div>
                    </div>


                    <div class="mt-6">
                        <h3 class="text-base leading-6 font-medium text-gray-700">Gender</h3>
                        <div class="mt-4 flex items-center">
                            <input id="gender" name="gender" type="radio" value="male" wire:model="gender"
                                {{ $user->gender == 'male' ? 'checked':''}}>
                            <label for="gender" class="ml-3 lw-form-label">Male</label>
                        </div>
                        <div class="mt-4 flex items-center">
                            <input id="gender" name="gender" type="radio" value="female" wire:model="gender"
                                {{ $user->gender == 'female' ? 'checked':''}}>
                            <label for="gender" class="ml-3 lw-form-label">Female</label>
                        </div>
                    </div>

                    <div class="mt-6 ">
                        <h3 class="text-base leading-6 font-medium text-gray-700">Nationalities</h3>
                        <div x-data="{ pass2: false, pass3: false, pass4: false }" class="mt-4 mb-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="passport1" class="lw-form-label">{{ __('Passport') }}</label>
                                    <input id="passport1" name="passport1" type="text" class="lw-form-input"
                                        list="countries" value="{{ $user->passport1 ?? old('passport1')}}"
                                        wire:model="passport1">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="passport1_expiry" class="lw-form-label">{{ __('Expiry date') }}</label>
                                    <input id="passport1_expiry" name="passport1_expiry" type="date"
                                        class="lw-form-input" wire:model="passport1_expiry"
                                        value="{{ $user->passport1_expiry ?? old('passport1_expiry')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                    <br>
                                    <button @click="pass2 = true" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.add')</button>
                                </div>
                            </div>

                            <div x-show="pass2" class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="passport2" class="lw-form-label">{{ __('Passport 2') }}</label>
                                    <input id="passport2" name="passport2" type="text" class="lw-form-input"
                                        wire:model="passport2" list="countries"
                                        value="{{ $user->passport2 ?? old('passport2')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="passport2_expiry">{{ __('Expiry date') }}</label>
                                    <input id="passport2_expiry" name="passport2_expiry" type="date"
                                        class="lw-form-input" wire:model="passport2_expiry"
                                        value="{{ $user->passport2_expiry ?? old('passport2_expiry')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                    <br>
                                    <button @click="pass3 = true" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.add')</button>
                                    <button @click="pass2 = false" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.minus-circle')</button>
                                </div>
                            </div>

                            <div x-show="pass3" class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="passport3" class="lw-form-label">{{ __('Passport 3') }}</label>
                                    <input id="passport3" name="passport3" type="text" class="lw-form-input"
                                        wire:model="passport3" list="countries"
                                        value="{{ $user->passport3 ?? old('passport3')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="passport3_expiry">{{ __('Expiry date') }}</label>
                                    <input id="passport3_expiry" name="passport3_expiry" type="date"
                                        class="lw-form-input" wire:model="passport3_expiry"
                                        value="{{ $user->passport3_expiry ?? old('passport3_expiry')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                    <br>
                                    <button @click="pass4 = true" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.add')</button>
                                    <button @click="pass3 = false" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.minus-circle')</button>
                                </div>
                            </div>

                            <div x-show="pass4" class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="passport4" class="lw-form-label">{{ __('Passport 4') }}</label>
                                    <input id="passport4" name="passport4" type="text" class="lw-form-input"
                                        wire:model="passport4" list="countries"
                                        value="{{ $user->passport4 ?? old('passport4')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="passport4_expiry" class="lw-form-label">{{ __('Expiry date') }}</label>
                                    <input id="passport4_expiry" name="passport4_expiry" type="date"
                                        class="lw-form-input" wire:model="passport4_expiry"
                                        value="{{ $user->passport4_expiry ?? old('passport4_expiry')}}">
                                </div>
                                <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                    <br>
                                    <button @click="pass4 = false" type="button"
                                        class="mt-3 hover:text-pink-800">@include('icons.minus-circle')</button>
                                </div>
                            </div>
                        </div>


                        <datalist id="countries">
                            <option value="Brazil">Brazil</option>
                            <option value="France">France</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Canada">Canada</option>
                        </datalist>
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