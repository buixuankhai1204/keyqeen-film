@extends('layouts.app')
@section('content')

<div class="card my-2 mb-6 w-full h-32 rounded-md flex items-center">
    <div class="text-white block w-full text-center text-5xl font-bold">New Movies: Coming Soon</div>
</div>
<div class="item ">
    <div class="flex justify-between my-2 text-white bg-green-300 py-4">
        <p class="ml-4 font-bold">RANK</p>
        <p class="font-bold">TITLE</p>
    </div>
    <ul class="list-item">
    @php $temp=0 @endphp
        @foreach($film['items'] as $film)
    @php $temp++ @endphp
        <x-item-comingson :film="$film" />
        @endforeach
    </ul>

</div>

@endsection