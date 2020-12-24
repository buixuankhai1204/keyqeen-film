@extends('layouts.app')
@section('content')
<x-item-info :film="$film" />
<div class="divfullCast py-4">

    <div class="cast block py-4 mt-6 text-center rounded-md text-white font-bold" style="background-color: #33b5e5;">CREATORS</div>
    <ul class="list-creators">
        @forelse($film['directors']['items'] as $item)
        <li class=" py-4 px-2 flex">
            <div class="w-3/5 name font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>
            <div class="w-2/5 job">director</div>
        </li>
        @empty


        <p>Lorem ipsum dolor sit amet.</p>
        @endforelse
        @forelse($film['writers']['items'] as $item)
        <li class=" py-4 px-2 flex">
            <div class="w-3/5 name font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>
            <div class="w-2/5 job">writter</div>
        </li> @empty
        <p>Lorem ipsum dolor sit amet.</p>
        @endforelse
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CAST</div>
    <div class="cast flex justify-around py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">
        <div class="">Name</div>
        <div>As Character</div>
    </div>
    <ul>
        @forelse($film['actors'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-ava w-1/6"><a href="{{url('name',$item['id'])}}"><img class="img-fluid rounded z-depth-1" src="{{$item['image']}}" alt="Tim Robbins" width="64" height="88"></a></div>
            <div class="person-name w-3/5 font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>
            <div class="as-characters w-2/6">{{$item['asCharacter']}}</div>

        </li>
        @empty
        <p>Lorem ipsum dolor sit amet.</p>
        @endforelse
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">OTHERS</div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">PRODUCED BY</div>

    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][0]['items']))
        @foreach($film['others'][0]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>

    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">MUSIC BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
        @if(isset($film['others'][1]['items']))
        @foreach($film['others'][1]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CINEMATOGRAPHY BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][2]['items']))
        @foreach($film['others'][2]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">FILM EDITING BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">

    @if(isset($film['others'][3]['items']))
        @foreach($film['others'][3]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CASTING BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][4]['items']))
        @foreach($film['others'][4]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">PRODUCTION DESIGN BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][5]['items']))
        @foreach($film['others'][5]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">ART DIRECTION BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][6]['items']))
        @foreach($film['others'][6]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SET DECORATION BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][7]['items']))
        @foreach($film['others'][7]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">COSTUME DESIGN BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][8]['items']))
        @foreach($film['others'][8]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">MAKEUP DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][9]['items']))
        @foreach($film['others'][9]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>

    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">PRODUCTION MANAGEMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][10]['items']))
        @foreach($film['others'][10]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SECOND UNIT DIRECTOR OR ASSISTANT DIRECTOR</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][11]['items']))
        @forelse($film['others'][11]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>
        @empty
        <p>Lorem ipsum dolor sit amet.</p>
        @endforelse
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">ART DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][12]['items']))
        @foreach($film['others'][12]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SOUND DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][13]['items']))
        @foreach($film['others'][13]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SPECIAL EFFECTS BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
        @if(isset($film['others'][14]['items']))
        @foreach($film['others'][14]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">STUNTS</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][15]['items']))
        @foreach($film['others'][15]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">VISUAL EFFECTS BY</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][16]['items']))
        @foreach($film['others'][16]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">STUNTS</div>
    <div class="list-item-fullcast flex justify-between px-2 py-4 grid grid-cols-2">
    @if(isset($film['others'][17]['items']))
        @foreach($film['others'][17]['items'] as $item)

        <div class="font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>

        <div>(music by)</div>

        @endforeach
        @endif
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CAMERA AND ELECTRICAL DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][18]['items']))
        @foreach($film['others'][18]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CASTING DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][19]['items']))
        @foreach($film['others'][19]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">COSTUME AND WARDROBE DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][20]['items']))
        @foreach($film['others'][20]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">EDITORIAL DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][21]['items']))
        @foreach($film['others'][21]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">LOCATION MANAGEMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][22]['items']))
        @foreach($film['others'][22]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">MUSIC DEPARTMENT
    </div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][23]['items']))
        @foreach($film['others'][23]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SCRIPT AND CONTINUITY DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][24]['items']))
        @foreach($film['others'][24]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">TRANSPORTATION DEPARTMENT</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][25]['items']))
        @foreach($film['others'][25]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">OTHER CREW</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][26]['items']))
        @foreach($film['others'][26]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">THANKS</div>
    <ul class="flex grid grid-cols-2" style=" background-color: rgba(0, 0, 0, .05);">
        @if(isset($film['others'][27]['items']))
        @foreach($film['others'][27]['items'] as $item)
        <li class="flex justify-between py-2 px-1 items-center">
            <div class="person-name w-3/5 font-bold py-2 px-1 border-b border-gray-400">{{$item['name']}}</div>
            <div class="as-characters w-2/6 text-right pr-8">{{$item['description']}}</div>

        </li>

        @endforeach
        @endif
    </ul>

</div>


@endsection