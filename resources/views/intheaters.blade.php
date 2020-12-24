@extends('layouts.app')
@section('content')

<div class="card my-2 mb-6 w-full h-32 rounded-md flex items-center">
    <div class="text-white block w-full text-center text-5xl font-bold">New Movies: In Theaters</div>
</div>
<div class="item ">
    <div class="flex justify-between my-2 text-white bg-green-300 py-4">
        <p class="ml-4 font-bold">#</p>
        <p class="font-bold">TITLE</p>
    </div>
    <ul class="list-item">
        @foreach($film['items'] as $film)
        <x-item-in-theaters :film="$film" />
        @endforeach
    </ul>

</div>

@endsection