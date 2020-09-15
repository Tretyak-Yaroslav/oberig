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
            <a href="#">Контакти</a>
            <hr class="hr-header">
        </div>
    </div>
</div>
<div class="main-container contact">
    <div class="content-container">
        @include('front.layouts.templates.map')
    </div>
</div>
<div class="main-container">
    <div class="content-container">
        <div class="blog-body">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="about-btn blog contact-padding ">
                            <h3>Контакти</h3>
                        </div>
                        <div class="contact-position background mobile-hide">
                            <div class="background-one"></div>
                            <div class="background-two"></div>
                        </div>
                        <div class="contact-addresses">
                            Адреса:
                        </div>
                        <div class="contact-street">
                            03057, Україна, м. Київ, вул. Зоологічна, 3, корпус «Г»
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="contact-addresses contact-row">
                            Телефон:
                        </div>
                        <div class="contact-phone">
                            <a href="tel:+380445213003">+38 (044) 521-30-03</a>
                        </div>
                        <div class="contact-phone">
                            <a href="tel:+380995213003">+38 (099) 521-30-03</a>
                        </div>
                        <div class="contact-phone">
                            <a href="tel:+380735213003">+38 (073) 521-30-03</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="map_info-btn contact-btn__map">
                            <button class="btn btn-red">
                                <p class="size white"><i aria-hidden="true" class="fa fa-asterisk fa-lg"></i></p>
                                <span>3003 невідкладна допомога</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="blog-section contact">
            <div class="contact-route">
                <p class="contact-route__p"><strong>Ви можете дістатися до нас наступними маршрутами:</strong></p>
                <ul>
                    <li>Маршрутне таксі від станції метро «Берестейська» (їхати по вул. Дегтярівській до вул. Зоологічна)</li>
                    <li>Маршрутне таксі від станції метро «Лук'янівська» (їхати по вул. Дегтярівській до вул. Зоологічна)</li>
                    <li>Маршрутне таксі від станції метро «Політехнічний інститут» (їхати по проспекту Перемоги до вул. Зоологічна)</li>
                </ul>
            </div>

        </div>
        <div class="row-section form-padding">
            <div class="col-md-6 none">
                <div class="doctors-form department_question">
                    <div class="department_text doctors-footer">
                        <h3>Залишились питання? </h3>
                        <h3 class="department_color"> Радо відповімо вам! </h3>
                        <p class="department_phone"> Телефонуйте </p>
                        <p> на <span class="department_color">+38 (044) 521-30-03</span>
                        </p>
                        <p> або пишіть нам
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 none">
                <div class="form-padding_mobile">
                    <form action="#" class="form-background">
                        <div class="center">
                            <h3 class="mb-47 mt-47 form-text">Зворотній зв'язок</h3>
                        </div>
                        <div class="form-name">
                            <input class="input-name" type="text" name="name" id="" placeholder="Ім’я">
                        </div>
                        <div class="form-tel">
                            <input class="input-tel" type="tel" name="telephone" id="" placeholder="Контактний телефон">
                        </div>
                        <div class="form-email">
                            <input class="input-email" type="email" name="email" id="" placeholder="E-mail">
                        </div>
                        <div class="form-checkbox">
                            <input type="checkbox" name="checkbox" id="">
                            <label class="input-checkbox" for="checkbox">Я згоден/згодна з умовами передачі інформації</label>
                        </div>
                        <button class="btn btn-coment center mt-47 mobile-width" type="submit">Відправити</button>
                    </form>
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

<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9wG-ZpeJNw8GB6kDqhZcLfNpPLGBDEF4&callback=initMap"></script>

@stop
