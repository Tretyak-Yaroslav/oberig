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
            <a href="#">Лікарі клініки</a>
            <hr class="hr-header">
        </div>
    </div>

</div>

<div class="main-container">
    <div class="content-container">
        <div class="blog-section">
            <div class="about-btn blog">
                <h3>Відгуки про лікаря</h3>
            </div>
            <div class="background mobile-hide">
                <div class="background-one"></div>
                <div class="background-two"></div>
            </div>
            <div class="block collapse first show reviews-height">
                <div class="block__content">
                    <div class="strong">
                        Андрій
                    </div>
                    <div class="green strong">
                        <p class="reviews-time">20 сiчня 2014 року</p>
                    </div>
                    <p>По рекомендації дочки сьогодні був на прийомі в Галини Анатоліівни із серйозною проблемою, з якою борюся вже довгий час. Був приємно вражений уважним підходом і детальним розпитуванням про свій стан. Отримав відповіді на всі свої запитання. Дякую за підхід і професійно гарне ставлення.</p>
                    <a class="reviews-answer destop-hide" href="/">Відповісти</a>
                </div>
            </div>
            <div class="block collapse first show reviews-height">
                <div class="block__content">
                    <div class="strong">
                        Олександр
                    </div>
                    <div class="green strong">
                        <p class="reviews-time">11 квітня 2019 року</p>
                    </div>
                    <p>Хочу сказати велике спасибі Галині Анатоліївні, за її професіоналізм і самовіддачу в роботі з пацієнтом. До Галини Анатоліївни звернувся 02.03.2019 р., з серйозним діагнозом, лікування якого підлягає дуже серйозними медикаментами, а саме гормонами, які не дають 100% гарантії одужання. Проаналізувавши всі мої обстеження протягом багатьох років, динаміку аналізів, прийом мною медикаментів, які мені призначали різні лікарі за останні 3-4 роки, мій стан здоров'я, уважно вислухавши мене, підібрала мені правильну терапію і дозування ліків (виключила глюкокортикоїди і цитостатики, які викликають серйозні побічні ефекти). Призначені препарати значно поліпшили стан мого здоров'я вже в перші дні прийому ліків - вважаю це верхом професіоналізму!!! За це їй величезне спасибі. Подальше лікування буду продовжувати тільки у Галини Анатоліївни.</p>
                    <a class="reviews-answer destop-hide" href="/">Відповісти</a>
                    <div class="destop-hide reviews-clinic">
                    <div>
                    <img class="lazy" data-lazy="/img/icons/clinik.png" alt="">
                    <div class="strong">
                    Відповідь клініки
                    </div>
                    <div class="green strong">
                        <p class="reviews-time">11 квітня 2019 року</p>
                    </div>
                    </div>
                    <p>Дякуємо, що обрали Універсальну клініку “Оберіг”. Будьте здорові, хай щастить!</p>
                    <a class="reviews-answer destop-hide" href="/">Відповісти</a>
                </div>
                </div>
            </div>

            <div class="block collapse second show reviews-height">
                <div class="block__content">
                    <div class="strong">
                        Юрій
                    </div>
                    <div class="green strong">
                        <p class="reviews-time">11 червня 2019 року</p>
                    </div>
                    <p>По рекомендації дочки сьогодні був на прийомі в Галини Анатоліівни із серйозною проблемою, з якою борюся вже довгий час. Був приємно вражений уважним підходом і детальним розпитуванням про свій стан. Отримав відповіді на всі свої запитання. Дякую за підхід і професійно гарне ставлення.</p>
                </div>
            </div>

            <div class="block collapse second show reviews-height">
                <div class="block__content">
                    <div class="strong">
                        Олександр
                    </div>
                    <div class="green strong">
                        <p class="reviews-time">11 квітня 2019 року</p>
                    </div>
                    <p>Хочу сказати велике спасибі Галині Анатоліївні, за її професіоналізм і самовіддачу в роботі з пацієнтом. До Галини Анатоліївни звернувся 02.03.2019 р., з серйозним діагнозом, лікування якого підлягає дуже серйозними медикаментами, а саме гормонами, які не дають 100% гарантії одужання. Проаналізувавши всі мої обстеження протягом багатьох років, динаміку аналізів, прийом мною медикаментів, які мені призначали різні лікарі за останні 3-4 роки, мій стан здоров'я, уважно вислухавши мене, підібрала мені правильну терапію і дозування ліків (виключила глюкокортикоїди і цитостатики, які викликають серйозні побічні ефекти). Призначені препарати значно поліпшили стан мого здоров'я вже в перші дні прийому ліків - вважаю це верхом професіоналізму!!! За це їй величезне спасибі. Подальше лікування буду продовжувати тільки у Галини Анатоліївни.</p>
                </div>
            </div>


        </div>
        <div class="blog-body show">
                <div class="block__content reviews-background">

                    <div class="strong center reviews-add">
                        Залишити відгук
                    </div>
                    <form class="form-coment" action="#">
                        <div>
                            <input class="input-name" type="text" placeholder="Ім’я"></input>
                        </div>
                        <input class="input-email" type="email" name="" id="" placeholder="E-mail">
                        <div>
                            <textarea class="input-textarea" name="" id="" rows="4" placeholder="Відгук"></textarea>
                        </div>
                        <button class="btn btn-coment center" type="submit">Відправити</button>
                    </form>
                </div>
            </div>

            <div class="blog-section footer mobile-hide">
                <p class="blog-footer blog-body">Медичний центр «Універсальна клініка «Оберіг» (ТОВ «КАПИТАЛ») – один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі. Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу. ...
                    <a href="/" class="footer-link">Детальніше</a>
                </p>
            </div>
    </div>
</div>
@stop
@section('scripts')
<script src="{{ mix('/js/main-page-all.js') }}"></script>
@stop
