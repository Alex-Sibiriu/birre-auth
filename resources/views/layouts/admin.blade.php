<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous'/>

    <title>birre | admin</title>
    @vite(['resources/js/app.js'])

</head>
<body>

@include('layouts.partials.header')
<div class="wrapper d-flex ">

    {{-- @include('layouts.partials.aside') --}}
    <div class="aside ">
        <nav>
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i>home</a></li>
                <li><a href="#"><i class="fa-solid fa-beer-mug-empty"></i>Beers</a></li>
                <li><a href="#"><i class="fa-solid fa-plus"></i>Nuova Birra</a></li>
                <li><a href="#"><i class="fa-solid fa-list"></i>Categories</a></li>

            </ul>
        </nav>
    </div>
    <div class="content">

        @yield('content')
    </div>
</div>

</body>
</html>
