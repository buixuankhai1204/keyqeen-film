<?php

use Illuminate\Support\Str;

$converted = Str::substr($film['rankUpDown'], 0, 1);

?>
<li class="item-film flex justify-between my-2">
    <p class="ml-8 relative top-16">{{$film['rank']}}
        @if($converted=="+")
        <span class="text-green-500 block w-4">
            ({{$film['rankUpDown']}})
        </span>
        @elseif($converted=="-")
        <span class="text-red-500 block  w-4">
            ({{$film['rankUpDown']}})
        </span>
        @endif
        <span class="ml-2">
        </span>
    </p>
    <div class=" ml-2 info-film w-4/5">
        <div class="flex">
            <div class="img-film">
            <a href=""><img class="img-fluid rounded z-depth-1" src="{{$film['image']}}" alt="The Shawshank Redemption" width="128" height="176"></a>
            </div>
            <div class="info-detail film items-center ml-6 relative top-16">
                <a href="{{url('title',$film['id'])}}"><div class="name-film font-bold">{{$film['fullTitle']}}</div></a>
               <div class="start-film font-extralight">{{$film['crew']}}
                </div>
            </div>
        </div>
    </div>
    <p class="mr-4  relative top-16"><span><i class="fas fa-star-half" style="color:gold"></i></span> 
    @if($film['imDbRating']=="") {{$film['imDbRating']}}
        @else
    <span class="w-4"></span>
    @endif
    </p>
</li>