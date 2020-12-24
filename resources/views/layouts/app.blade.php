<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/fontawaesome copy/css/all.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
            background: #efefef url(https://imdb-api.com/img/bg.png) repeat;
            font-weight: 300;
            position: relative;
        }
    </style>
</head>

<body>
    <header class="text-white  block  h-50  bg-gray-900 m-0" x-data="{issearchVisiable:false}">
        <form action="http://localhost/keyqeen-film/" method="POST">
            @csrf
            <div class="w-full z-10 h-32 absolute top-14 text-black font-semibold" style="background-color:#2e2e2e " x-show="issearchVisiable" @click.away="issearchVisiable=false">
                <div class="container mx-auto">
                    <div class="input-group w-full flex">
                        <div class="input-group-prepend">
                            <select name="option" id="SearchType" class=" py-4 my-8">
                                <option value="1">Title</option>
                                <option value="2">Movies</option>
                                <option value="4">Series</option>
                                <option value="8">Name</option>
                                <option value="16">Episode</option>
                                <option value="32">Company</option>
                                <option value="64">keywords</option>
                                <option value="128">All</option>
                            </select>
                        </div>
                        <div class="search flex container my-8">
                            <input type="text" name="result" placeholder="Search by Title or IMDb Id" class="w-full py-4">
                            <button type="submit" name="submit" value="Submit" class="bg-blue-300"><span><i class="fas fa-search cursor-pointer"></i></span>Search</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>

        <div class="container mx-auto flex justify-between">
            <div class="title-header flex">
                <div class="name-app mr-4 font-bold py-4">IMDb-API</div>
                <div x-data="{isdropdownVisiable:false}" @click="isdropdownVisiable=true" class=" title-header mr-4 py-4 px-3 hover:bg-white cursor-pointer hover:text-black relative">infomation <span> <i class="fas fa-caret-down"></i></span>
                    <ul x-show="isdropdownVisiable" @click.away="isdropdownVisiable=false" class="absolute left-0 w-56 shadow-lg rounded-md bg-white z-10" style="top: 56px; color:black">
                        <li class="border-b border-gray-300 px-2 py-4"><a href=""> Film Rating System</a></li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href="{{route('top-250-movies')}}">Top 250 Movies</a></li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href="{{route('top-250-series')}}">Top 250 Series TVs</a></li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href="{{route('PopularMovies')}}">Most Popular Movies</a></li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href="{{route('PopularTvs')}}">Most Popular TVs</a></li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href=""></a>New Movies: In Theaters</li>
                        <li class="border-b border-gray-300 px-2 py-4"><a href=""></a>New Movies: Coming Soon</li>
                    </ul>
                </div>
                <div class="title-header mr-4 py-4 px-3 hover:bg-white cursor-pointer hover:text-black">download</div>
                <div class="title-header mr-4 py-4 px-3 hover:bg-white cursor-pointer hover:text-black">contact</div>
                <div class="title-header mr-4 py-4 px-3 hover:bg-white cursor-pointer hover:text-black">pricing</div>
                <div class="title-header mr-4 py-4 px-3 hover:bg-white cursor-pointer hover:text-black">API</div>
            </div>
            <div class="info-user flex justify-between text-right">
                <div class="search py-4 mr-4 cursor-pointer"><i class="fas fa-search cursor-pointer" @click="issearchVisiable=true"></i></div>
                <div class=" register py-4 mr-4 cursor-pointer"><span><i class="fas fa-user-plus cursor-pointer"></i></span> Register</div>
                <div class="login py-4 mr-4 cursor-pointer"><span><i class="fas fa-sign-in-alt cursor-pointer"></i></span> Login</div>

            </div>
        </div>

    </header>
    <main class="container mx-auto">
        @yield('content')
    </main>
    <footer class="bg-gray-800">
        <div class="container mx-auto flex text-white py-6">
            <div class="navigation  flex-initial mr-10">
                <div class="title border-b border-blue-500 my-6 font-bold">NAVIGATION</div>
                <ul>
                    <li>Home</li>
                    <li>Contact</li>
                    <li>Pricing</li>
                    <li>Register</li>
                    <li>Login</li>
                </ul>
            </div>
            <div class="tools  flex-initial  mr-10">
                <div class="title border-b border-blue-500  my-6  font-bold">TOOLS</div>
                <ul>
                    <li>API</li>
                    <li>Client App</li>
                    <li>SmsPlan.ir</li>
                </ul>
            </div>
            <div class="randomtitles flex-initial  mr-10">
                <div class="title border-b border-blue-500  my-6  font-bold">RANDOM TITLES
                </div>
                <div class="random-text">Ronnie Coleman: The Unbelievable!! (2001) | Iron Will (1994) | Instructions Not Included (2013) | A Safe Place (1971) | Waiting for August (2014) | Kelly Adams | Nancy Sprow</div>

            </div>
            <div class="logo  flex-initial  mr-10">

                <img src="https://www.webwiki.com/etc/rating/widget/1321154584/imdb-api-com-rating-round-150.png" alt="Reviews of imdb-api.com">
                <div class="block my-6 mx-auto">
                    <div class="flex justify-between items-center">
                        <div class="contact-logo mr-1"><i class="fab fa-facebook-f"></i></div>
                        <div class="contact-logo mr-1"><i class="fab fa-twitter"></i></div>
                        <div class="contact-logo mr-1"><i class="fab fa-instagram"></i></div>
                        <div class="contact-logo mr-1"><i class="fab fa-skype"></i></div>

                    </div>
                </div>
            </div>

    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>