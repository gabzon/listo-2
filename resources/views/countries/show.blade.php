<x-app-layout>
    <x-slot name="title"></x-slot>
    <header class="py-6 text-center">
        <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate">
            {{ $country->name }}
        </h2>
        <div class="text-center my-6">
            <img src="{{ $country->flag }}" class="w-full md:w-1/3 block mx-auto" alt="{{ $country->name }}">
        </div>
    </header>

    <div class="flex justify-center mb-4">
        <div class="w-full md:w-1/3">
            <table class="w-full">
                <tr>
                    <td><strong>Capital:</strong></td>
                    <td>{{ $country->capital }}</td>
                </tr>
                <tr>
                    <td><strong>World Region:</strong></td>
                    <td>{{ $country->region }}</td>
                </tr>
                <tr>
                    <td><strong>Subregion:</strong></td>
                    <td>{{$country->subregion}}</td>
                </tr>
                <tr>
                    <td><strong>Domain:</strong></td>
                    <td>{{$country->domain}}</td>
                </tr>
                <tr>
                    <td><strong>Alpha2Code:</strong></td>
                    <td>{{$country->alpha_2_Code}}</td>
                </tr>
                <tr>
                    <td><strong>Alpha3Code:</strong></td>
                    <td>{{$country->alpha_3_Code}}</td>
                </tr>
                <tr>
                    <td><strong>Currency code:</strong></td>
                    <td>{{$country->currency_code}}</td>
                </tr>
                <tr>
                    <td><strong>Currency name:</strong></td>
                    <td>{{$country->currency_name}}</td>
                </tr>
                <tr>
                    <td><strong>Currency symbol:</strong></td>
                    <td>{{$country->currency_symbol}}</td>
                </tr>
                <tr>
                    <td><strong>Phone code:</strong></td>
                    <td>{{$country->phone_code}}</td>
                </tr>
                <tr>
                    <td><strong>Slug:</strong></td>
                    <td>{{$country->slug}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="my-10 flex justify-center">
        <a href="{{ route('countries.edit', $country->id) }}" class="lw-form-btn-save">
            @include('icons.edit')
            Edit
        </a>
        @include('shared.delete', ['model'=> $country, 'action'=>'countries.destroy'])
    </div>
</x-app-layout>