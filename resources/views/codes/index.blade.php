@extends('master')

@section('body')

@include('partials.__hero')
@include('partials.__search')

    {{-- <h2>Gigs Count: {{ count($gigs) }}</h2> --}}
    {{-- @if(!count($gigs))
        <p>No Gigs</p>
    @endif --}}
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @foreach ($codes as $code)
        <x-listing-card :code="$code" />
    @endforeach

</div>


<div class="mt-6 p-4">
    {{$codes->links()}}
</div>

@endsection

