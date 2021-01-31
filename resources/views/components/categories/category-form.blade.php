<div class="mt-5 mb-10">
    <form action="{{ isset($category) ?  route($route, $category->id) : route($route) }}" method="POST">
        @csrf
        @method($method)

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:pt-5">
            <label for="name" class="lw-form-label">Name</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="name" name="name" class="lw-form-input @error('name') field-error @enderror"
                        value="{{ $category->name ?? old('name')}}" type="text">
                    @error('name')
                    <p class="italic text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="icon" class="lw-form-label">Icon</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="icon" name="icon" class="lw-form-input @error('icon') field-error @enderror"
                        value="{{ $category->icon ?? old('shortname')}}" type="text">
                    @error('icon')
                    <p class="italic text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="description" class="lw-form-label">Description</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <textarea name="description" id="description" cols="30" rows="3"
                        class="lw-form-input">{{ $category->description ?? old('description')}}</textarea>
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="image" class="lw-form-label">Image</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="image" name="image" type="text" class="lw-form-input"
                        value="{{ $category->image ?? old('image')}}" placeholder="">
                </div>
            </div>
        </div>


        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <div></div>
            <div class="inline-flex items-center">
                <button type="submit" class="lw-form-btn-save flex justify-center">
                    @include($icon)
                    <span class="ml-2">{{ $button }}</span>
                </button>
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center ml-3 py-2 px-3 bg-gray-300 rounded-md hover:bg-gray-400">
                    @include('icons.x')
                    <span class="ml-2">Cancel</span>
                </a>
            </div>
        </div>

    </form>
</div>