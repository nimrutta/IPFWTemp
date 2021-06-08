@extends('layouts.base')

@section('title','iPF Softwares | A Full-Fledged Software Development House')

@section('description','We are a passionate team of software engineers, innovators & designers focused on developing digital solutions that drive human behavior and engagement by using custom website design, development & strategies and mobile solutions, with the aim of helping businesses in Africa stand out in the digital world.')

@section('styles')
{{-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('css/Slider.css')}}" />
<style>
    #gallery img {
        object-fit: contain;
        height: inherit;
        min-width: unset;
        margin: 0 4px;
    }

    #gallery .Slider .SlideItem:not(.current) {
        opacity: 1;
    }

    #gallery .Slider .SlideScroller {
        align-items: flex-end;
    }

    #gallery .SlideMovers {
        position: relative;
        left: 0;
        right: 0;
        margin-top: 2.5rem;
        margin-right: 10rem;
        justify-content: flex-end;
    }

    #gallery .SlideMovers button {
        border: 1px solid #ddd;
        margin: 0 10px;
        border-radius: 0;
    }
</style>
@endsection

@section('content')
@include('about.banner')
@include('about.culture')
@include('about.values')
@include('about.way')
@endsection

@section('scripts')
<script src="{{asset('js/Slider.js')}}"></script>
<script>
    new Slider("#gallery > div");
</script>

@endsection
