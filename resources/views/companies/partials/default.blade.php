<div class="mb-6">
    <label for="name">Name</label>
    <input id="name" type="text" name="name" placeholder="ex: Super Travel" value="{{ $agency->name ?? old('name') }}">
</div>

<div class="mb-6">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="10"
        rows="3">{{ $agency->description ?? old('description') }}</textarea>
</div>

<div class="flex flex-wrap -mx-3">
    <div class="mb-6 w-full md:w-1/3 px-3">
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="{{ $agency->email ?? old('email') }}">
    </div>

    <div class="mb-6 w-full md:w-1/3 px-3">
        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone" value="{{ $agency->phone ?? old('phone') }}">
    </div>

    <div class="mb-6 w-full md:w-1/3 px-3">
        <label for="website">Website</label>
        <input id="website" type="text" name="website" value="{{ $agency->website ?? old('website') }}">
    </div>
</div>