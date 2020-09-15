@extends('layouts.default')

@section('seo_tags')
    @include('partials.seo')
@stop

@section('main')
    <div class="main-container">
        <div class="content-container">

            @include('partials.breadcrumbs', ['page' => $page])

            <div class="blog-section doctor-description">
                <div class="about-btn blog">
                    <h1>{{ $page->t('full_name') }}</h1>
                </div>
                <div class="background mobile-hide">
                    <div class="background-one"></div>
                    <div class="background-two"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="width-24">
                            <div class="doctor-description dispaly-selector">
                                <div class="blog-article" id="blog-article-5">
                                    <articles link_all="#" background="grey" display="none" :articles='[{id:1, specialty: "Спеціальність", description: "Ендоскопія, гастроскопія, колоноскопія", experience: "13 років медичного стажу", achievement: "Доктор наук, член асоціації гематологів", img:"https://oberig-dev.vis-design.com.ua/img/doctors/Gavruluv.png"}]' />
                                </div>
                                <div class="custom-nav">
                                    <div class="custom-nav__prev"><img src="/img/icons/slider-prev.svg" alt="Prev"></div>
                                    <div class="custom-nav__next"><img src="/img/icons/slider-next.svg" alt="Next"></div>
                                    <div class="custom-nav__line">
                                        <div class="progress" style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-green center display">Записатися на прийом</a>
                            <button class="btn share" href="#">
                                Поділитися
                                <img data-lazy="/img/blog/share.png" class="lazy fade" alt="share" src="/img/blog/share.png">
                            </button>
                            <div class="left-menu_social">
                                <div class="left-menu_social-wrap fw">
                                    <a href="#" target="_blank" class="left-menu_social-item green">
                                        <img data-lazy="/img/icons/share.svg" alt="share" class="lazy fade">
                                    </a>
                                    <a href="#" target="_blank" class="left-menu_social-item">
                                        <img data-lazy="/img/icons/telegram.svg" alt="telegram" class="lazy fade">
                                    </a>
                                    <a href="#" target="_blank" class="left-menu_social-item">
                                        <img data-lazy="/img/icons/viber.svg" alt="viber" class="lazy fade">
                                    </a>
                                    <a href="#" target="_blank" class="left-menu_social-item">
                                        <img data-lazy="/img/icons/whatsapp.svg" alt="whatsapp" class="lazy fade">
                                    </a>
                                    <a href="#" target="_blank" class="left-menu_social-item">
                                        <img data-lazy="/img/icons/messenger.svg" alt="messenger" class="lazy fade">
                                    </a>
                                    <a href="#" target="_blank" class="left-menu_social-item">
                                        <img data-lazy="/img/icons/fb.svg" alt="facebook" class="lazy fade">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="width-76">
                            <!-- tabs -->
                            <div class="doctor-description">
                                <div class="tabs">
                                    <ul class="tab-header">
                                        @foreach($page->info as $info)
                                        <li class="tab-header__item tab-trigger {{$loop->index == 0 ? 'active': ''}}" data-tab="{{$info->id}}-tab">{{$info->t('title')}}</li>
                                        @endforeach
                                    </ul>

                                    <ul class="tab-content">
                                        @foreach($page->info as $info)
                                        <li class="tab-content__item tab-content {{$loop->index == 0 ? 'active': ''}}" data-tab="{{$info->id}}-tab">
                                            <div class="details-width">
                                                {!! $info->t('description') !!}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @include('doctors.partials.articles')

            @include('doctors.partials.reviews')

            @include('partials.seo_text')

        </div>
    </div>

@stop

