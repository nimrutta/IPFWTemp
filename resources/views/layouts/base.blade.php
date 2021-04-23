<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="iPF Softwares" >
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="F33FZlGb_5RlXGBWwcN7Kh3it2IzBR5hjtct6n7gjBg" />
    
    <meta name="description" content="@yield('description')" />
    <title>@yield('title')</title>

    <meta property="og:url"                content="http://www.ipfsoftwares.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="iPF Softwares | A Full-Fledged Software Development House " />
    <meta property="og:description"        content="We're a passionate team of software engineers, innovators & designers focused on developing digital solutions that drive human behavior and engagement by using custom website design, development & strategies and mobile solutions, with the aim of helping businesses in Africa stand out in the digital world." />
    <meta property="og:image"              content="{{asset('img/sociallogo.jpg')}}" />
    <meta property="og:app_id"             content="322119618197953" />

    <link href="{{asset('favicon.png')}}" rel="shortcut icon" type="image/png" sizes="16x16">
    <link  href="{{asset('css/app.css')}}" rel="stylesheet" />

    @yield('styles')

    <meta name="detectify-verification" content="58b6894723479673bd8809e48cd416b2" />

    @isset($current_page)
    @else
        @php
            $current_page = "home";
        @endphp
    @endisset
</head>
    <body>
        @include('_partials._navigation',['index_bg'=>'white','index_page'=>'home'])

        @yield('content')

        {{-- @include('_partials._footer') --}}

        @yield('scripts')
    </body>
</html>