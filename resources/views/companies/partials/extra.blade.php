<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/4 px-3">
        <label for="founded">founded</label>
        <input id="founded" type="date" name="founded" value="{{ $agency->founded ?? old('founded') }}">
    </div>

    <div class="w-full md:w-1/4 px-3">
        <label for="employees">Employees</label>
        <input id="employees" type="number" name="employees" value="{{ $agency->employees ?? old('employees') }}">
    </div>

    <div class="w-full md:w-1/4 px-3">
        <label for="defunct">Defunct</label>
        <input id="defunct" type="date" name="defunct" value="{{ $agency->defunct ?? old('defunct') }}">
    </div>

    <div class="w-full md:w-1/4 px-3">
        <label for="status">status</label>
        <select id="status" name="status">
            @if ($agency ?? '')
            <option value="None" {{ $agency->status === 'None' ? 'selected' : ''}}>None</option>
            <option value="Listo" {{ $agency->status === 'Listo' ? 'selected' : ''}}>Listo</option>
            <option value="Experiensa" {{ $agency->status === 'Experiensa' ? 'selected' : ''}}>Experiensa</option>
            <option value="Listo + Experiensa" {{ $agency->status === 'Listo + Experiensa' ? 'selected' : ''}}>Listo +
                Experiensa
            </option>
            @else
            <option value="None">None</option>
            <option value="Listo">Listo</option>
            <option value="Experiensa">Experiensa</option>
            <option value="Listo + Experiensa">Listo + Experiensa</option>
            @endif
        </select>
    </div>
</div>

<div class="mb-6">
    <label for="type">agency type</label>
    <select id="type" name="type[]" size="4" multiple>
        @if ($agency ?? '')
        <option value="ta" {{ $agency->isType('ta') ? 'selected' : ''}}>Travel Agency</option>
        <option value="to" {{ $agency->isType('to') ? 'selected' : ''}}>Tour Operator</option>
        <option value="incoming" {{ $agency->isType('incoming') ? 'selected' : ''}}>Incoming</option>
        <option value="outgoing" {{ $agency->isType('outgoing') ? 'selected' : ''}}>Outgoing</option>
        @else
        <option value="ta">Travel Agency</option>
        <option value="to">Tour Operator</option>
        <option value="incoming">Incoming</option>
        <option value="outgoing">Outgoing</option>
        @endif
    </select>
</div>

@if ($categories->count() > 0)
<div class="mb-6">
    <label for="categories">Categories</label>
    <select name="categories[]" id="categories" multiple>
        @foreach ($categories as $cat)
        @if ($agency ?? '')
        <option value="{{$cat->id}}" @if($agency->hasCategory($cat->id)) selected @endif>
            {{ $cat->name }}
        </option>
        @else
        <option value="{{$cat->id}}">{{ $cat->name }}</option>
        @endif
        @endforeach
    </select>
</div>
@endif

@if ($countries->count() > 0)
<div class="mb-6">
    <label for="countries">Countries</label>
    <select name="countries[]" id="countries" multiple>
        @foreach ($countries as $country)
        @if ($agengy ?? '')
        <option value="{{$country->id}}" @if($agency->hasCountry($country->id)) selected @endif>
            {{ $country->name }}
        </option>
        @else
        <option value="{{$country->id}}">
            {{ $country->name }}
        </option>
        @endif
        @endforeach
    </select>
</div>
@endif

{{-- 
<div class="inline-flex md:mr-3">
    @if ($user ?? '')
    <input id="call" name="call" type="checkbox" value="1" {{ $user->call || old('call') ? 'checked="checked"' : '' }}>
@else
<input id="call" name="call" type="checkbox" value="1" {{ old('call') ? 'checked="checked"' : '' }}>
@endif
<label for="call" class="pl-2">{{ __('Phone Call') }}</label>
</div> --}}


<div class="mb-5">
    <div class="h-5 my-3"></div>
    <div class="flex flex-wrap">

        <div class="w-full md:w-1/3 mb-3">
            <label for="has_branches">Has branches?</label>
            <label class="switch">
                @if ($agency ?? '')
                <input type="checkbox" id="has_branches" name="has_branches"
                    {{ ($agency->has_branches) ? 'checked="checked"' : '' }}>
                @else
                <input type="checkbox" id="has_branches" name="has_branches">
                @endif
                <span>
                    <strong></strong>
                </span>
            </label>
        </div>

        <div class="w-full md:w-1/3 mb-3">
            <label for="has_branches">Has insurance?</label>
            <label class="switch">
                @if ($agency ?? '')
                <input type="checkbox" id="has_insurance" name="has_insurance"
                    {{ ($agency->has_insurance) ? 'checked="checked"' : '' }}>
                @else
                <input type="checkbox" id="has_insurance" name="has_insurance">
                @endif
                <span>
                    <strong></strong>
                </span>
            </label>
        </div>
        <div class="w-full md:w-1/3 mb-3">
            <label for="has_branches">Has newsletter?</label>
            <label class="switch">
                @if ($agency ?? '')
                <input type="checkbox" id="has_newsletter" name="has_newsletter"
                    {{ ($agency->has_newsletter) ? 'checked="checked"' : '' }}>
                @else
                <input type="checkbox" id="has_newsletter" name="has_newsletter">
                @endif
                <span>
                    <strong></strong>
                </span>
            </label>
        </div>
    </div>

</div>