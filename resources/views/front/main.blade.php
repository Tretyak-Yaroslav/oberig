@extends('front.layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/sass-builds/styles.css') }}">
@stop

@section('main')
    <div class="main-container">
        <div class="content-container mobile-reverse">
            <div class="wrapper stretch fw">
                <div id="vue-slider">
                    <slider/>
                </div>
                @include('front.main.right-menu')
            </div>
            @include('front.layouts.templates.search')
        </div>
    </div>
    <div class="main-container">
        <div class="content-container">
           @include('front.layouts.templates.map')
        </div>
    </div>



@stop

@section('scripts')

    <script src="{{ mix('/js/main-page-all.js') }}"></script>

    <script async defer type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9wG-ZpeJNw8GB6kDqhZcLfNpPLGBDEF4&callback=initMap"></script>

@stop

