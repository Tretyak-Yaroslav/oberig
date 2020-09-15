
@extends('layouts.default')

@section('seo_tags')
    @include('partials.seo')
@stop

@section('main')
<div class="main-container">
    <div class="content-container">
        @include('partials.breadcrumbs', ['page' => $page])

        @include('partials.search')

        <div class="blog-section">
            <div class="">
                <div class="about-btn blog mobile-hide ">
                    <h1>{{$page->t('title')}}</h1>
                </div>

                <div class="background mobile-hide">
                    <div class="background-one"></div>
                    <div class="background-two"></div>
                </div>

                <div class="doctors">
                    <form class="doctors-input">
                        @foreach($types as $type)
                            <div class="input">
                                <input type="radio" id="type{{$type->id}}" name="doctor" value="$type->id"
                                       @if ($loop->index == 0)
                                        checked
                                       @endif
                                >
                                <label for="type{{$type->id}}">{{$type->t('title')}}</label>
                            </div>
                        @endforeach
                        <select id="specialty" name="specialty">
                                <option value="">{{__t('Выбрать специальность')}}</option>
                            @foreach($specialties as $specialty)
                                <option value="{{$specialty->id}}" selected>{{$specialty->t('title')}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="doctors-body">
                    <div class="container">
                        <div class="row-section">
                            @foreach($doctors as $doctor)
                                <div class="col-4 doctors-overflow mr-none">
                                    <div class="doctors-img">
                                        <a href="{{$doctor->getUrl()}}"><img class="lazy" data-lazy="{{$doctor->getImgPath(280, 280) }}" alt=""></a>
                                    </div>
                                    <div class="doctors-text">
                                        <div class="doctors-name">
                                            <p><a href="{{$doctor->getUrl()}}">{{ $doctor->t('full_name')}}</a></p>
                                        </div>
                                        <div class="doctors-position">
                                            <div class="doctors-description">
                                                {!! $doctor->t('short_description') !!}
                                            </div>
                                            <div class="mb-1">
                                                <a href="{{$doctor->getUrl()}}" class="btn btn-green center">{{__t('Детальніше')}}</a>
                                            </div>
                                            <a href="#" class="btn btn-green center">{{__t('Записатися на прийом')}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ $doctors->appends(request()->all())->render() }}
            </div>
        </div>

        @include('partials.callback')

    </div>
@stop


