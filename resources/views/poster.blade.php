@extends('layouts.app')
@section('content')
<x-item-info :film="$film" />
<div class="grid grid-cols-6 gap-8 my-6">
    @foreach($film['posters'] as $item)
<div class="poster rounded-md"><a  href="{{$item['link']}}"><img src="{{$item['link']}}" class="img-fluid rounded z-depth-1" width="600" height="900" alt="The Godfather poster (600x900)"></a></div>
@endforeach
</div>


@endsection