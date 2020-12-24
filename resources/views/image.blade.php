@extends('layouts.app')
@section('content')
<x-item-info :film="$film" />
<div class="grid grid-cols-4 gap-8 my-6">
    @foreach($film['items'] as $item)
    <div class="poster rounded-md w-full text-center">
        <a href="{{$item['image']}}"><img src="{{$item['image']}}" style="width:300px; height:200px" class="rounded z-depth-1" alt=""></a>
        <a href="" class="opacity-50">{{$item['title']}}</a>
    </div>
    @endforeach


    @endsection