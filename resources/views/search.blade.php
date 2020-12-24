@extends('layouts.app')
@section('content')
<div class="card my-2 mb-6 w-full h-32 rounded-md disabled-card">
    <div class="text-white block w-full text-center text-3xl font-bold pt-8">@if(isset($film['name']))
        {{$film['name']}}
        @endif</div>

</div>
<ul class="list-item">
    @foreach($film['results'] as $film)
    <li class="item-film flex justify-between my-2">
        <div class="info-film w-4/5">
            <div class="flex">
                <div class="img-film">
                    <a href="{{url('title',$film['id'])}}">
                        @if($film['image']=='')
                        <img src="https://via.placeholder.com/121x176" alt="">
                        @else
                        <img class="img-fluid rounded z-depth-1 h-44" src="{{$film['image']}}" alt="The Shawshank Redemption" width="128">
                        @endif

                    </a>
                </div>
                <div class="info-detail film items-center ml-6 relative top-16">

                    <a href="{{url('title',$film['id'])}}">
                        <div class="name-film font-bold">{{$film['title']}}</div>
                    </a>
                    <div class="description block">{{$film['description']}}</div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>


@endsection