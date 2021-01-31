@extends('layouts.app')

@section('content')
<header class="py-8">
    <h2 class="text-2xl font-bold leading-7 sm:text-3xl sm:leading-9 sm:truncate">
        Trashed agencies
    </h2>
</header>


@include('shared.search',['action' => 'agencies.index'])


<div class="text-right mb-2">
    <a href="{{route('agencies.create')}}" class="kirby-btn">
        @include('icons.add') Add Agency
    </a>
</div>

<div id="enquiry-list" class="mb-16">
    <ul class="data-list">
        @forelse ($agencies as $agency)
        <li class="flex flex-wrap items-center">
            <div class="w-1/3">
                <a href="{{ route('trashed_agencies.show_trashed', $agency->id )}}"
                    class="flex justify-between inline-flex">
                    <strong>{{$agency->name}}</strong>
                </a>
            </div>
            <div class="w-1/3">
                {{$agency->city}}, {{$agency->country}}
            </div>
            <div class="w-1/3 text-right">
                <form action="{{ route('restored_agency', $agency->id )}}" method="POST" class="inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="inline-flex kirby-btn">
                        @include('icons.restore') Restore
                    </button>
                </form>

                <a href="{{ route('trashed_agencies.show_trashed', $agency->id )}}" class="inline-flex kirby-btn">
                    @include('icons.view') View
                </a>

                @include('shared.delete', ['model'=> $agency, 'action'=>'agencies.destroy'])
            </div>
        </li>
        @empty

        <li>No Agencies found!</li>

        @endforelse
    </ul>

    {{-- {{ $agencies->appends([ 'search' => request()->query('search') ])->links() }} --}}



</div>
@endsection