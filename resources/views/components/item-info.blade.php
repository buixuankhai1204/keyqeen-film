<div class="card my-2 mb-6 w-full h-32 rounded-md disabled-card">
    <div class="text-white block w-full text-center text-3xl font-bold pt-8">@if(isset($film['fullTitle']))
    {{$film['fullTitle']}}
    @endif</div>
    <div class="text-white block w-full text-center text-xlmt-2">@if(isset($film['type']))
        {{$film['type']}}
        @endif
    </div>
</div>
<div class="flex items-center justify-between py-2  py-2 border-b border-gray-400">
    <div class="infomation btn-rectangle btn-pink m-2 disabled flex items-center font-semibold rounded-md  text-white ">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon mb-2 fa-film"></i></p><a class="" href="{{url('title',$film['imDbId'])}}">INFORMATION</a>
        </div>
    </div>
    <div class="infomation btn-square m-2 btn-default disabled flex items-center px-0 font-semibold rounded-md">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon mb-2 fa-users"></i></p><a class="" href="{{url('fullcast',$film['imDbId'])}}">FULL CASTS</a>
        </div>
    </div>
    <div class="infomation btn-square m-2 btn-default disabled flex items-center px-0 font-semibold rounded-md">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon mb-2 fa-file-image"></i></p><a class="" href="{{url('poster',$film['imDbId'])}}">POSTER</a>
        </div>
    </div>
    <div class="infomation btn-square m-2 btn-default disabled flex items-center px-0 font-semibold rounded-md">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon mb-2 fa-image"></i></p><a class="" href="{{url('images',$film['imDbId'])}}">IMAGES</a>
        </div>
    </div>
    <div class="infomation btn-square m-2 btn-default disabled flex items-center px-0 font-semibold rounded-md">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon mb-2 fa-play-circle"></i></p><a class="" href="{{url('trailer',$film['imDbId'])}}">TRALER</a>
        </div>
    </div>
    <div class="infomation btn-square m-2 btn-default disabled flex items-center px-0 font-semibold rounded-md  text-white">
        <div class="center w-full text-center">
            <p class=""><i class="fas icon fa-comment-alt"></i></p><a class="" href="{{url('report',$film['imDbId'])}}">REPORT</a>
        </div>
    </div>
</div>