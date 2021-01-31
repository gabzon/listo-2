<section id="filters" class="mb-6">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
        <div class="col-span-6 md:col-span-3">
            @include('shared.search',['action' => 'countries.index'])
        </div>
        <div class="col-span-6 md:col-span-2">
            {{-- <select id="region" name="region" wire:model="region"
                class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                <option default disabled selected value>Choose a region</option>
                <option value="Asia">Asia</option>
                <option value="Africa">Africa</option>
                <option value="Oceania">Oceania</option>
                <option value="Europe">Europe</option>
                <option value="Polar">Polar</option>
                <option value="Americas">Americas</option>
            </select> --}}
        </div>
        <div class="col-span-6 md:col-span-1">

        </div>
    </div>
</section>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Region
                            </th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Subregion
                            </th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Domain
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($countries as $country)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <a href="{{ route('countries.show', $country->id) }}" class="inline-flex items-center">
                                    <img src="{{ $country->flag }}" alt="{{ $country->name }}" class="w-8">
                                    <span class="ml-2">{{ $country->name }}</span>
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $country->region }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $country->subregion }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ $country->alpha_2_code }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a href="{{ route('countries.edit', $country) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="bg-white py-3 px-4 border-t">
                    {{ $countries->appends([ 'search' => request()->query('search') ])->links() }}
                </div>

            </div>
        </div>
    </div>
</div>