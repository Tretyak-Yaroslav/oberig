@extends('front.layouts.default')

@section('styles')
<link rel="stylesheet" href="{{ mix('/css/sass-builds/styles.css') }}">
@stop

@section('main')
<div class="main-container">
    <div class="content-container mobile-reverse">
        <div class="breadcrumbs">

            <a class="active" href="#">
                <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
                <i class="fa fa-caret-left" aria-hidden="true"></i>
                Назад
            </a>
            <a href="#">Головна</a>
            <a href="#">Про клініку</a>
            <hr class="hr-header">

        </div>
        <div class="about-section about-content">
            <div class="about-text">
                <h1 class="green">Універсальна клініка «Оберіг»</h1>
                <p class="about">«Універсальна клініка «Оберіг» має чітко сформульовану місію, якої дотримуються усі працівники клініки і принципи роботи, уособлені та втілені у нашому девізі – розумна медична допомога, для всіх і кожного.</p>

            </div>


            <!-- tabs -->
            <div class="tabs">
                <ul class="tab-header">
                    <li class="tab-header__item tab-trigger active" data-tab="first-tab">Легенда</li>
                    <li class="tab-header__item tab-trigger" data-tab="two-tab">Бачення</li>
                    <li class="tab-header__item tab-trigger" data-tab="three-tab">Освіта</li>
                    <li class="tab-header__item tab-trigger" data-tab="four-tab">Рівність</li>
                    <li class="tab-header__item tab-trigger" data-tab="five-tab">Конкуренція</li>
                    <li class="tab-header__item tab-trigger" data-tab="six-tab">Вартість лікування</li>
                </ul>

                <ul class="tab-content">
                    <li class="tab-content__item tab-content active" data-tab="first-tab">
                        <div class="details-width">
                            <p> <span>Медичний центр «Універсальна клініка «Оберіг» </span>– один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі.</p>
                            <p> Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу.</p>
                            <p> В травні 2019 року МЦ «Універсальна клініка «Оберіг» за результатами державної акредитації підтвердив вищу категорію закладу з надання медичної допомоги за всіма напрямками, передбаченими ліцензією МОЗ України на здійснення медичної практики.</p>
                            <img class="lazy img-fluid" data-lazy="/img/about/IOR_8854 1.png" alt="Медичний центр">
                        </div>
                    </li>
                    <li class="tab-content__item tab-content" data-tab="two-tab">
                    <div class="details-width">
                        Lorem 2
                    </div>
                    </li>
                    <li class="tab-content__item tab-content" data-tab="three-tab">
                    <div class="details-width">
                        Lorem 3
                    </div>
                    </li>
                    <li class="tab-content__item tab-content" data-tab="four-tab">
                    <div class="details-width">
                        Lorem 1
                    </div>
                    </li>
                    <li class="tab-content__item tab-content" data-tab="five-tab">
                    <div class="details-width">
                        Lorem 2
                    </div>
                    </li>
                    <li class="tab-content__item tab-content" data-tab="six-tab">
                    <div class="details-width">
                        Lorem 3
                    </div>
                    </li>
                </ul>
            </div>

            <p class="blog-footer mobile-hide">Медичний центр «Універсальна клініка «Оберіг» (ТОВ «КАПИТАЛ») – один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі. Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу. ...
                <a href="/" class="footer-link">Детальніше</a>
            </p>
            <a href="#" class="btn btn-coment center width-100 destop-hide mt-1">Усі матеріали</a>
        </div>
    </div>
</div>

@stop

@section('scripts')

<script src="{{ mix('/js/main-page-all.js') }}"></script>

@stop
