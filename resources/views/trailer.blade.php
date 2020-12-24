@extends('layouts.app')
@section('content')

<x-item-info :film="$film" />
<div class="    ">
    <iframe height="500" style="border:0" allow="autoplay; encrypted-media" class="responsive-iframe w-full my-8" src="{{'https://youtube.com/embed/'.$film['videoId']}}" allowfullscreen>
    </iframe>
</div>
@endsection