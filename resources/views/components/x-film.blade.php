<li class="item-film flex justify-between my-2">
    <p class="ml-6 relative top-16">{{$film['rank']}}</p>
    <div class="info-film w-4/5">
        <div class="flex">
            <div class="img-film">
                <a href="{{url('title',$film['id'])}}">
                    <img class="img-fluid rounded z-depth-1" src="{{$film['image']}}" alt="The Shawshank Redemption" width="128" height="176">
                </a>
            </div>
            <div class="info-detail film items-center ml-6 relative top-16">
                
                <a href="{{url('title',$film['id'])}}"><div class="name-film font-bold">{{$film['fullTitle']}}</div></a>
                <div class="start-film font-extralight">{{$film['crew']}}
                </div>
            </div>
        </div>
    </div>
    <p class="mr-4  relative top-16"><span><i class="fas fa-star-half" style="color:gold"></i></span> {{$film['imDbRating']}}</p>
</li>