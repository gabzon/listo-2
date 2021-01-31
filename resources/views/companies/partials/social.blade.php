<div x-data="{ open: false }">
    <button @click="open = !open" type="button">
        <span x-show="!open" class="inline-flex my-5">@include('icons.add') Add Social accounts</span>
        <span x-show="open" class="inline-flex my-5">@include('icons.x') Close</span>
    </button>

    <div x-show="open">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/3 px-3">
                <label for="facebook">facebook</label>
                <input id="facebook" type="text" name="facebook" value="{{ $agency->facebook ?? old('facebook') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="twitter">twitter</label>
                <input id="twitter" type="text" name="twitter" value="{{ $agency->twitter ?? old('twitter') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="instagram">instagram</label>
                <input id="instagram" type="text" name="instagram" value="{{ $agency->instagram ?? old('instagram') }}">
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/3 px-3">
                <label for="linkedin">linkedin</label>
                <input id="linkedin" type="text" name="linkedin" value="{{ $agency->linkedin ?? old('linkedin') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="snapchat">snapchat</label>
                <input id="snapchat" type="text" name="snapchat" value="{{ $agency->snapchat ?? old('snapchat') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="blog">blog</label>
                <input id="blog" type="text" name="blog" value="{{ $agency->blog ?? old('blog') }}">
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/3 px-3">
                <label for="skype">skype</label>
                <input id="skype" type="text" name="skype" value="{{ $agency->skype ?? old('skype') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="pinterest">pinterest</label>
                <input id="pinterest" type="text" name="pinterest" value="{{ $agency->pinterest ?? old('pinterest') }}">
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label for="youtube">youtube</label>
                <input id="youtube" type="text" name="youtube" value="{{ $agency->youtube ?? old('youtube') }}">
            </div>
        </div>
    </div>
</div>