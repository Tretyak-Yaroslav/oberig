@extends('front.layouts.default')

@section('styles')
<link rel="stylesheet" href="{{ mix('/css/sass-builds/styles.css') }}">
@stop

@section('main')
<div class="main-container">
    <div class="content-container">
        <div class="breadcrumbs">
            <a class="active" href="#">
                <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
                <i class="fa fa-caret-left" aria-hidden="true"></i>
                Назад
            </a>
            <a href="#">Головна</a>
            <a href="#">Медіаматеріали</a>
            <hr class="hr-header">
        </div>
        <div class="search">
            <div class="search_wrap">
                <div class="search_title">
                    <h3>Пошук</h3>
                </div>
                <div class="search_group fw autocomplete debounced">
                    <div class="search_input autocomplete-input">
                        <input type="text" placeholder="Введіть слово для Вашого запиту. Наприклад, гастрит, гастроскопія, гастроентеролог">
                        <ul class="autocomplete-result-list"></ul>
                    </div>
                    <div class="search_btn">
                        <button class="btn btn-green search-mobile btn-green_padding">Знайти
                            <img data-lazy="/img/icons/search-btn.svg" class="hide lazy fade" alt="search" srcset="" src="/img/icons/search-btn.svg">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-section">
            <div class="about-btn blog">
                <h1>Медіаматеріали</h1>
            </div>
            <div class="background mobile-hide">
                <div class="background-one"></div>
                <div class="background-two"></div>
            </div>
        </div>
        <div class="blog-article" id="blog-article-1">
            <articles
                link_all="#"
                title="Новини"
                background="grey"
                :articles='[{id:1,title:"4 шага навстречу здоровому сну",link: "#",p:"Розділ: Психологія",time:"8 листопада 2019 р.",img:"/img/about/stock.png"}]'/>
        </div>

        <div class="blog-article" id="blog-article-2">
            <articles
                link_all="#"
                title="Статті"
                background="white"/>
        </div>

        <div class="blog-article" id="blog-article-3">
            <articles
                link_all="#"
                title="Хвороби і стани"
                background="grey"/>
        </div>

    <div class="blog-section">
        <p class="blog-footer mobile-hide">Медичний центр «Універсальна клініка «Оберіг» (ТОВ «КАПИТАЛ») – один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі. Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу. ...</p>
    </div>
</div>
</div>
@stop
@section('scripts')
<script src="{{ mix('/js/main-page-all.js') }}"></script>
@stop
