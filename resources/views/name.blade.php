@extends('layouts.app')
@section('content')

<x-item-name :name="$name" />

<div class="opacity-50 text-3xl py-4 border-b border-gray-300 w-full">{{$name['role']}}</div>
<div class="flex my-4">
    <div class="img w-1/5">
        <img class="img-fluid rounded" src="{{$name['image']}}" alt="Chris Pine" title="Chris Pine" width="256" height="352">
    </div>
    <div class="info-text w-4/5 ml-10 opacity-70">
        <p>{{$name['summary']}}</p>
        <p class=""><strong class="mr-16 font-bold">Birth date</strong>{{$name['birthDate']}}</p>
        <p class=""><strong class="mr-20 font-bold">Awards</strong>{{$name['awards']}}</p>
        <p class=""><strong class="mr-20 font-bold">Height</strong>{{$name['height']}}</p>
    </div>
</div>
<p class="opacity-50 text-3xl py-4">Activities</p>
<div class="border-t border-gray-300 py-6">
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="actor block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #4285f4 ;">ACTOR <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-actor-active">
            <div class="cast block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #4285f4 ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Actor')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="soundtrack block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #2bbbad;">SOUNDTRACK <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-soundtrack-active">
            <div class="soundtrack block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #2bbbad ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Soundtrack')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="writer block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #a6c  ;">WRITER <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-writer-active">
            <div class="writer block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #a6c ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Writer')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="producer block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #00c851  ;">PRODUCER <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-producer-active">
            <div class="producer block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #00c851 ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Producer')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="director block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #ff3547 ;">DIRECTOR <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-director-active">
            <div class="director block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #ff3547 ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Director')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="thanks block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #3f729b ;">THANKS <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-thanks-active">
            <div class="thanks block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #3f729b ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Thanks')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="self block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #fb3  ;">SELF <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-self-active">
            <div class="self block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #fb3 ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Self')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="div-actor shadow-lg" style="background-color: white!important">
        <div class="archive-footage block py-4 mb-4 rounded-md text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #33b5e5  ;">ARCHIVE FOOTAGE <span class="absolute right-4"> <i class="fas fa-caret-down"></i></span>
        </div>
        <div class="info-actor status-none info-archive-footage-active">
            <div class="archive-footage block py-4 mb-2 mx-4 text-white font-bold px-4 shadow-md relative cursor-pointer" style="background-color: #33b5e5 ;">
                <div class="title-name flex justify-between">
                    <p class="text-white">Role</p>
                    <p class="text-white">Title</p>
                    <p class="text-white">Year</p>
                </div>

            </div>
            @foreach($name['castMovies'] as $item)
            @if($item['role']=='Archive footage')
            <div class=" list-item-name flex justify-between mx-4 py-6 px-4 text-center">
                <div class=""><a href="{{url('name',$item['id'])}}">{{$item['role']}}</a></div>
                <div class="px-4">
                    <a href="{{url('title',$item['id'])}}" class="block font-bold">{{$item['title']}}</a>
                    <a href="{{url('title',$item['id'])}}" class="block">{{$item['description']}}</a>
                </div>
                <div>{{$item['year']}}</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".actor").click(function() {
            $(".info-actor-active").toggle(300);
        });
        $(".soundtrack").click(function() {
            $(".info-soundtrack-active").toggle(300);
        });
        $(".writer").click(function() {
            $(".info-writer-active").toggle(300);
        });
        $(".producer").click(function() {
            $(".info-producer-active").toggle(300);
        });
        $(".director").click(function() {


            $(".info-director-active").toggle(300);
        });
        $(".thanks").click(function() {


            $(".info-thanks-active").toggle(300);
        });
        $(".self").click(function() {


            $(".info-self-active").toggle(300);
        });
        $(".archive-footage").click(function() {


            $(".info-archive-footage-active").toggle(300);
        });


    });
</script>

@endsection