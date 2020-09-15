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
            <a href="#">Лікарі</a>
            <a href="#">Владислав О.Я.</a>
            <hr class="hr-header">
        </div>

        <div class="blog-section doctor-description">
            <div class="about-btn blog">
                <h1>Яковенко <br>
                    Владислав Олександрович </h1>
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
                                    <li class="tab-header__item tab-trigger active" data-tab="first-tab">Освіта</li>
                                    <li class="tab-header__item tab-trigger" data-tab="two-tab">Професійні інтереси</li>
                                    <li class="tab-header__item tab-trigger" data-tab="three-tab">Найкраще навчання</li>
                                    <li class="tab-header__item tab-trigger" data-tab="four-tab">Чому медицина</li>
                                    <li class="tab-header__item tab-trigger" data-tab="five-tab">Публікації</li>
                                </ul>

                                <ul class="tab-content">
                                    <li class="tab-content__item tab-content active" data-tab="first-tab">
                                        <div class="details-width">
                                            <ul>
                                                <ol>
                                                    Медична справа в Одеському державному медичному університеті.
                                                </ol>
                                                <ol>
                                                    Спеціалізація «хірургія», «ендоскопія», «ультразвукова діагностика» в Українській військово-медичній академії.
                                                </ol>
                                                <ol>
                                                    Стажуванняя в університеті Кітазато (м. Сагаміхара, Токіо) за сучасними технологіями діагностичної та інтервенційної ендоскопії.
                                                </ol>
                                                <ol>
                                                    Регулярні стажування в клініках Швейцарії (Hirslanden, Цюріх), Німеччини (Гамбург, Гановер, Дюссельдорф).
                                                </ol>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="tab-content__item tab-content" data-tab="two-tab">
                                        <div class="details-width">
                                            <ul>
                                                <ol>
                                                    Ендоскопічна діагностика раннього раку шлунка,
                                                </ol>
                                                <ol>
                                                    Ендоскопічна ультразвукова діагностика
                                                </ol>
                                                <ol>
                                                    Володіє унікальними методами ендоскопічної діагностики, зокрема методом дослідження в вузькополосному спектрі (NBI), ендоскопії з високим збільшенням, ендоскопічної ультрасонографії (ЕСГ), тонкоголкової аспіраційної пункційної біопсії (ТАПБ) під контролем ЕСГ.
                                                    Активний член Європейської асоціації ендоскопії шлунково-кишкового тракту (ESGE), міжнародного співтовариства по ендоскопічного ультразвуку (EGEUS), Всесвітньої ендоскопічної організації (WEO), Російської асоціації спеціалістів по ендоскопічному ультразвуку (RASEUS), Російської гастроентерологічної асоціації (RGA), Російської ендоскопічної спільноти (РОЭНДО), Асоціації лікарів-ендоскопістів України, Товариства хірургів м. Києва і Київської області.
                                                </ol>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="tab-content__item tab-content" data-tab="three-tab">
                                        <div class="details-width">
                                            <ul>
                                                <ol>
                                                    “Я є автором більше 200 наукових праць (монографія, наукові та науково-популярні статті, методичні рекомендації МОЗ України, нововведення МОЗ України), в тому числі 45 патентів. Вхожу в колегію редакційних наукових консультантів журналу «Therapia. Український медичний вісник». Виступаю в якості організатора і тренера, доповідача і учасника численних міжнародних майстер-класів, тренінгів і симпозіумів з питань ендоскопічної діагностики та інтервенційної ендоскопії (Україна, Грузія, Росія, Білорусь, Японія, Німеччина, Швейцарія, Швеція, Нідерланди).”
                                                </ol>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="tab-content__item tab-content" data-tab="four-tab">
                                        <div class="details-width">
                                            <ul>
                                                <ol>
                                                    “Я є автором більше 200 наукових праць (монографія, наукові та науково-популярні статті, методичні рекомендації МОЗ України, нововведення МОЗ України), в тому числі 45 патентів. Вхожу в колегію редакційних наукових консультантів журналу «Therapia. Український медичний вісник». Виступаю в якості організатора і тренера, доповідача і учасника численних міжнародних майстер-класів, тренінгів і симпозіумів з питань ендоскопічної діагностики та інтервенційної ендоскопії (Україна, Грузія, Росія, Білорусь, Японія, Німеччина, Швейцарія, Швеція, Нідерланди).”
                                                </ol>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="tab-content__item tab-content" data-tab="five-tab">
                                        <div class="details-width">
                                            <div class="content">
                                                <ul>
                                                    <ol>
                                                        VATS vs Thoracotomy for thoracic and lumbar spine fractures in multiple trauma. Linchevskyy O., Panfiorov S. (oral presentation) 12th European Congress of Trauma and Emergency Surgery, 12 – 15 May 2012, Basel, Switzerland
                                                    </ol>
                                                    <ol>
                                                        Major airways trauma: are we in hurry? O.Linchevskyy, A.Makarov, V. Getman, M. Bagirov, P. Sokur, V. Sokolov. Abstract book P. 214. 20th European Conference on General Thoracic Surgery, 10-13 June 2012, Essen, Germany.
                                                    </ol>
                                                    <ol>
                                                        Surgical management of flail chest in multiple trauma patients. Linchevskyy O., Getman V., Makarov A., Masnikov D (oral presentation) 12th European Congress of Trauma and Emergency Surgery, 27-30 Apr. 2011, Milan, Italy
                                                    </ol>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="blog-article" id="blog-article-4">
            <articles link_all="#" title="Матеріали з Владиславом Яковенком" background="white" />
        </div>
        <div class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="width-26">
                        <div class="about-btn blog mobile-hide ">
                            <h3>Відгуки про лікаря</h3>
                        </div>
                        <div class="background mobile-hide">
                            <div class="background-one"></div>
                            <div class="background-two"></div>
                        </div>
                        <div class="mt-1">
                            <a href="#" class="btn btn-response center">Відгуки про лікаря</a>
                        </div>
                        <div class="mt-1">
                            <a href="#" class="btn btn-response center">Залишити відгук</a>
                        </div>

                    </div>
                    <div class="width-74">
                        <div class="blog-article blog-footer_doctor" id="blog-article-6">
                            <articles
                            link_all="#"
                            background="grey"
                            :articles='[{id: 1, name: "Андрій", data: "20 сiчня 2014 року", response: "По рекомендації дочки сьогодні був на прийомі в Галини Анатоліівни із серйозною проблемою,  з якою борюся вже довгий час. Був приємно вражений уважним підходом і детальним розпитуванням про свій стан. Отримав відповіді на всі свої запитання. Дякую за підхід і професійно гарне ставлення."}]' />

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="blog-section">
            <p class="blog-footer mobile-hide">Медичний центр «Універсальна клініка «Оберіг» (ТОВ «КАПИТАЛ») – один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі. Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу. ...
                <a href="/" class="footer-link">Детальніше</a>
            </p>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="{{ mix('/js/main-page-all.js') }}"></script>
@stop
