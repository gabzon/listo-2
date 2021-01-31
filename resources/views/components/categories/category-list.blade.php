<section id="filters" class="mb-6">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
        <div class="col-span-6 md:col-span-3">
            @include('shared.search',['action' => 'categories.index'])
        </div>
        <div class="col-span-6 md:col-span-2">

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
                                icon
                            </th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="hidden md:table-cell px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                @includeIf('icons.'. $category->icon )
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <a href="{{ route('categories.show', $category->id) }}"
                                    class="inline-flex items-center">
                                    <span class="ml-2">{{ $category->name }}</span>
                                </a>
                            </td>
                            <td
                                class="hidden md:table-cell px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                {{ Str::limit($category->description, 60) }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="bg-white py-3 px-4 border-t">
                    {{ $categories->appends([ 'search' => request()->query('search') ])->links() }}
                </div>

            </div>
        </div>
    </div>
</div>