@extends('layouts.default')

@section('seo_tags')
    @include('partials.seo')
@stop

@section('main')
    <section class="main-content">
        @include('partials.breadcrumbs')
        <section class="page-header">
            <div class="section-header">
                <div class="container text-center">
                    <h1 class="section-title">{{$page->t('title')}}</h1>
                </div>
            </div>
            <div class="page-description">
                @if($page->description)
                    {!! $page->t('description') !!}
                @endif
            </div>
        </section>
        <section class="section content-block">
            <div class="section-body">
                <div class="container">
                    <div class="content-partners">
                        <div class="col-inline-xs-12 top catalog-content">
                            @foreach($partners as $partnersRow)
                                <div class="row-inline catalog-row">
                                    @foreach($partnersRow as $partner)
                                        <div class="col-inline-xs-2 top partner-column">
                                            <div class="partner-item">
                                                <figure class="partner-item-image">
                                                    <a href="{{$partner->getUrl()}}">{!! $partner->getImg("280", "200") !!}</a>
                                                </figure>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
