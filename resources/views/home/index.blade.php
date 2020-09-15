@extends('layouts.default')

@section('seo_tags')
    @include('partials.seo')
@stop

@section('main')
    <div class="main-container">
        <div class="content-container mobile-reverse">
            <div class="wrapper stretch fw">
                <div id="vue-slider">
                    <slider/>
                </div>
                @include('home.partials.right-menu')
            </div>
            @include('partials.search')
        </div>
    </div>
    <div class="main-container">
        <div class="content-container">
            @include('home.partials.map')
        </div>
    </div>
@stop

@section('scripts')
    <script async defer type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9wG-ZpeJNw8GB6kDqhZcLfNpPLGBDEF4&callback=initMap"></script>
@stop

