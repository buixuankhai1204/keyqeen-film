@extends('layouts.app')
@section('content')

<x-item-info :film="$film"/>
<div class="divInfo py-8">
    <div class="flex ">
        <div class="mr-14 w-2/5 film-avatar cursor-not-allowed">
            <img src="{{$film['image']}}" alt="Tenet (2020)" width="256" height="352">
        </div>
        <div class="ml-14 film-info  w-full text-left">
            <div class="name-film font-bold text-3xl border-b border-gray-500 py-2">{{$film['fullTitle']}}</div>
            <div class="plot text-justify font-extralight my-3">
                <p>{{$film['plot']}}</p>
            </div>
            <div class="country-rate w-full flex py-4">
                <div class="w-3/5 flex justify-between px-4 items-center">
                @foreach($film['countryList']  as $key)
                <?php $film_img="https://imdb-api.com/img/flags/".$key['key'].".png"; ?>
                    <div class="w-1/3"><img src="{{Str::replaceFirst(' ', '_', $film_img)}}" alt="UK" width="80" height="40"></div>
                    @endforeach
                </div>
                <div class="w-3/4 flex justify-between">
                    <div class="w-1/2 flex items-center"><span><img src="https://imdb-api.com/img/icons/IMDb.png" alt="UK" width="52" height="52" data-toggle="tooltip" data-placement="top" title="" data-original-title="UK"></span><strong class="mb-1 ml-4 font-bold text-2xl">{{$film['imDbRating']}}</strong>/10</div>
                    <div class="w-1/2 flex items-center text-2xl font-bold"><span class="mr-4"><img src="https://imdb-api.com/img/icons/Metacritic.png" width="52" height="52" alt="Metacritic"></span>{{$film['metacriticRating']}}%</div>
                </div>
            </div>
            <div class="flex">
                <div class="p-0 m-0 w-2/5">
                    <div class="creator border-l border-b border-t border-gray-300 border-collapse">
                        <div class="block py-4 text-center text-white bg-black">CREATORS</div>
                        <ul>
                        @foreach($film['directorList'] as $item)
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4">Director
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4 font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a>
                                </div>
                            </li>
                            @endforeach
                            @foreach($film['writerList'] as $item)
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4">Writer
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4 font-bold"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="p-0 m-0 w-3/5">
                    <div class="INFORMATION border border-gray-300">
                        <div class="block py-4 text-center text-white bg-black">INFORMATION</div>
                        <ul>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Release Date
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['releaseDate']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Runtime
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">2{{$film['runtimeStr']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Genre
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['genres']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Content Rating
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['contentRating']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Awards
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['awards']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Company
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['companies']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Country
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['countries']}}
                                </div>
                            </li>
                            <li class="flex">
                                <div class=" py-2 w-2/5 px-2 py-4 font-bold">Language
                                </div>
                                <div class=" py-2 w-3/5 px-2 py-4">{{$film['languages']}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">CAST</div>
    <div class="grid grid-cols-6 gap-4">
    @foreach($film['actorList'] as $item)
        <div class="film-item border border-gray-300">
            <div class="caster-img flex items-center ml-5"><a href="{{url('name',$item['id'])}}"><img src="{{$item['image']}}" alt="Juhan Ulfsak" class="rounded mt-2 mb-1" width="128" height="176"></a></div>
            <div class="caster-name w-full text-center font-bold py-1"><a href="{{url('name',$item['id'])}}">{{$item['name']}}</a></div>
            <div class="caster-job w-full text-center">{{$item['asCharacter']}}</div>
        </div>
        @endforeach
    </div>
    <div class="cast block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">STORYLINE</div>
    <div class="text-film text-justify opacity-60">
        <?php echo htmlspecialchars_decode($film['wikipedia']['plotFull']['html']) ?>
    </div>
<div class="similar-film mb-16">

    <div class="similars block py-4 my-6 text-center rounded-md text-white font-bold" style="background-color: #373a3c;">SIMILARS</div>
    <div class="grid grid-cols-12 gap-2">
    @foreach($film['similars'] as $item)
        <div class="film-similar border border-gray-300">

            <div class="caster-img flex items-center ml-3"><a href="{{url('title',$item['id'])}}"><img src="{{$item['image']}}" alt="Inception" class="rounded mt-2 mb-1" width="64" height="88"></a></div>
            <div class="caster-name w-full text-center font-bold py-1 text-xs"><a href="">{{$item['fullTitle']}}</a></div>
        </div>
    @endforeach    
    </div>
</div>


@endsection