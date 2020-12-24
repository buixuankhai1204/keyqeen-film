<li class="item-film flex my-2">
    <p class="mx-6 relative top-16">*</p>
    <div class="info-film">
        <div class="flex">
            <div class="img-film mr-6">
                <a href="{{url('title',$film['id'])}}">
                    <img class="img-fluid rounded z-depth-1 w-32" src="{{$film['image']}}" alt="The Shawshank Redemption" width="128" height="176">
                </a>
            </div>
            <div class="info-detail film items-center ml-6 mt-6 text-justify w-5/6">
                
                <a href="{{url('title',$film['id'])}}"><div class="name-film font-bold block">{{$film['fullTitle']}}</div></a>
                <div class="more-info">
                   <p class="my-3"> <strong class="font-semibold">{{$film['runtimeStr']}} | Director: </strong><span class="font-light">{{$film['directors']}}</span><strong class="font-semibold"> Star: </strong><span class="font-light">{{$film['stars']}}</span><strong class="font-semibold"> Genres: </strong> <span class="font-light">{{$film['genres']}}</span></p>
                   <p> {{$film['plot']}}</p>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</li>