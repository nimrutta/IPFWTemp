
@extends('layouts.base')

@section('title','iPF Softwares | A Full-Fledged Software Development House')

@section('description','We are a passionate team of software engineers, innovators & designers focused on developing digital solutions that drive human behavior and engagement by using custom website design, development & strategies and mobile solutions, with the aim of helping businesses in Africa stand out in the digital world.')

@section('styles')
    {{-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> --}}
@endsection

@section('content')
    @include('home.banner')
    @include('home.case-studies')
    @include('home.about-us')
    @include('home.our-services')
    @include('home.blogs1')
    @include('home.take-action')
    @include('home.footer1')
    {{-- @include('home.footer') --}}
    {{-- @include('home.webservices')
    @include('home.mobileservices')
    @include('home.dmservice')
    @include('home.clients')
    @include('home.testimonial')
    @include('home.blogs') --}}
@endsection

@section('scripts')
    
@endsection
