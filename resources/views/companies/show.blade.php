<x-app-layout>
    <x-slot name="title"></x-slot>

    <article>
        <header class="pt-16 pb-10 text-center">
            <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate">
                {{ $agency->name }}
            </h2>
            <div class="flex justify-center mt-2 mb-6 text-gray-700">
                @if ($agency->founded)
                <span class="mx-3 inline-flex">@include('icons.birthday') {{ $agency->founded }}</span>
                @endif
                @if ($agency->employees)
                <span class="mx-3 inline-flex">@include('icons.worker') {{ $agency->employees }} employees</span>
                @endif
                @if ($agency->defunct)
                <span class="mx-3 inline-flex text-red-700 font-bold">@include('icons.x')
                    {{ $agency->defunct }}</span>
                @endif
            </div>
        </header>


        <div class="mb-10 w-full md:w-1/2 mx-auto">
            @if ($agency->facebook || $agency->instagram || $agency->twitter || $agency->youtube)
            <div class="flex justify-center mb-10">
                <a href="{{ $agency->facebook }}" class="{{ isset($agency->facebook) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.facebook', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->instagram }}" class="{{ isset($agency->instagram) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.instagram', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->twitter }}" class="{{ isset($agency->twitter) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.twitter', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->snapchat }}" class="{{ isset($agency->snapchat) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.snapchat', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->youtube }}" class="{{ isset($agency->youtube) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.youtube', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->pinterest }}" class="{{ isset($agency->pinterest) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.pinterest', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->skype }}" class="{{ isset($agency->skype) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.skype', ['style'=>'h-6 w-6'])
                </a>
                <a href="{{ $agency->linkedin }}" class="{{ isset($agency->linkedin) ? 'mx-1' : 'hidden'}}">
                    @include('icons.social.linkedin', ['style'=>'h-6 w-6'])
                </a>
            </div>
            @endif

            <section class="{{isset($agency->description) ? 'my-10 text-center' : ''}}">
                {{ $agency->description }}
            </section>


            <div class="flex justify-center my-10">
                <div class="{{ isset($agency->email) ? 'mx-3' : 'hidden'}}">
                    <a href="mailto:{{ $agency->email }}" class="inline-flex hover:text-pink-800 hover:underline">
                        @include('icons.email-circled', ['style'=>'h-6 w-6 mr-2'])
                        {{ $agency->email }}
                    </a>
                </div>
                <div class="{{ isset($agency->phone) ? 'mx-3' : 'hidden'}}">
                    <a href="tel:{{ $agency->phone }}" class="inline-flex hover:text-pink-800 hover:underline">
                        @include('icons.phone-circled', ['style'=>'h-6 w-6 mr-2'])
                        {{ $agency->phone }}
                    </a>
                </div>
                <div class="{{ isset($agency->website) ? 'mx-3' : 'hidden'}}">
                    <a href="{{ $agency->website }}" target="_blank"
                        class="inline-flex hover:text-pink-800 hover:underline">
                        @include('icons.website', ['style'=>'h-6 w-6 mr-2'])
                        Website
                    </a>
                </div>
            </div>

            {{-- <h3 class="font-bold text-gray-800 text-lg mb-3 text-center">Specializations</h3>
            <div class="flex justify-center">
                <table>
                    <thead>
                        <tr>
                            <th width="120" class="text-left text-gray-800">Categories</th>
                            <th class="text-left text-gray-800">Countries</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td valign="top">
                                @foreach ($agency->categories as $cat)
                                {{ $cat->name }} <br>
            @endforeach
            </td>
            <td>
                @foreach ($agency->countries as $country)
                {{ $country->name }} <br>
                @endforeach
            </td>
            </tr>
            </tbody>
            </table>
        </div> --}}

        @isset($agency->street)
        <section id="agency-address" class="my-10 flex justify-center">
            <table>
                <tr>
                    <td class="inline-flex" width="120">@include('icons.home')<strong>Address:</strong></td>
                    <td>{{ $agency->street }} {{$agency->street_number}}</td>
                </tr>
                @if ($agency->address_info)
                <tr>
                    <td></td>
                    <td>{{ $agency->address_info }}</td>
                </tr>
                @endif
                <tr>
                    <td></td>
                    <td>{{ $agency->postal_code }}, {{ $agency->location }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ $agency->state }}, {{ $agency->country }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>@include('icons.pinpoint', ['style'=>'inline h-5 w-5 align-top']) {{ $agency->lat }},
                        {{ $agency->lng }}
                    </td>
                </tr>
            </table>
        </section>
        @endisset


        <section id="agency-info" class="my-10 flex justify-center">
            <table>
                @isset($agency->status)
                <tr>
                    <td><strong>Status</strong></td>
                    <td>{{ $agency->status }}</td>
                </tr>
                @endisset

                @isset($agency->type)
                <tr>
                    <td><strong>Type:</strong></td>
                    <td>{{ $agency->type }}</td>
                </tr>
                @endisset

                @isset($agency->blog)
                <tr>
                    <td><strong>Blog:</strong></td>
                    <td>{{ $agency->blog }}</td>
                </tr>
                @endisset
                <tr>
                    <td><strong>Branches:</strong></td>
                    <td>{{ $agency->has_branches === 1 ? 'yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td><strong>Insurance:</strong></td>
                    <td>{{ $agency->has_insurance === 1 ? 'yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td><strong>Newsletter</strong></td>
                    <td>{{ $agency->has_newsletter === 1 ? 'yes' : 'No' }}</td>
                </tr>
            </table>
            <br>
        </section>
        </div>

        <div class="my-20 flex justify-center">
            @if ($agency->trashed())
            <a href="" class="lw-btn-default">
                @include('icons.restore') Restore
            </a>
            @else
            <a href=" {{ route('companies.edit', $agency->id) }}" class="lw-btn-default">
                @include('icons.edit')
                Edit
            </a>
            @endif

            @include('shared.delete', ['model'=> $agency, 'action'=>'companies.destroy'])
        </div>

    </article>
</x-app-layout>