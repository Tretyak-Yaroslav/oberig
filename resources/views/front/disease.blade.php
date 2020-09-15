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
            <a href="#">Гастроцентр</a>
            <a href="#">Гастрит</a>
            <hr class="hr-header">
        </div>

        <div class="blog-section">
            <div class="about-btn blog">
                <h1>Гастрит</h1>
            </div>
            <div class="background mobile-hide">
                <div class="background-one"></div>
                <div class="background-two"></div>
            </div>
            <div class="container disease">
                <div class="row">
                    <div class="disease-header">
                        <h2>Гастрит - про хворобу</h2>
                    </div>
                    <div class="disease-description">
                        <p>Клінічний підрозділ, що об’єднує зусилля команди фахівців і пропонує діагностику та лікування повного спектру захворювань стравоходу, шлунку, кишківника, печінки, підшлункової залози, жовчного міхура, прямої кишки.</p>
                    </div>
                    <div class="width-9">
                        <img data-lazy="/img/disease/01.png" class="lazy disease-description_img" alt="01">
                    </div>
                    <div class="width-86">
                        <div class="disease-mb">
                            <p> <strong>Первое.</strong> Исследование может быть выполнено в любое время суток (с утра, после обеда, вечером), но строго через 6 часов после обычного приема пищи и жидкости, а также лекарственных препаратов.</p>
                        </div>
                    </div>
                </div>
                <div class="row disease-mt">
                    <div class="width-9">
                        <img data-lazy="/img/disease/02.png" class="lazy lazy disease-description_img" alt="02">
                    </div>
                    <div class="width-86">
                        <div class="disease-mb">
                            <p> <strong>Второе.</strong> Накануне исследования рекомендуется легкий ужин за 2 часа перед сном. В целом, воздержаться от приема еды и питья жидкости необходимо не менее чем за 6 часов до исследования.</p>
                        </div>
                    </div>
                </div>
                <div class="row disease-mt">
                    <div class="width-9">
                        <img data-lazy="/img/disease/03.png" class="lazy lazy disease-description_img" alt="03">
                    </div>
                    <div class="width-86">
                        <div class="disease-mb">
                            <p> <strong>Третье.</strong>Если Вы принимаете регулярно медикаментозные препараты. В том случае если Вы планируете выполнять исследование без анестезии (т.е. Вас не будет консультировать анестезиолог клиники), ОБЯЗАТЕЛЬНО уточните у Вашего лечащего врача, как и в какой дозировке принимать необходимые Вам лекарства в день проведения исследования.</p>
                        </div>
                    </div>
                </div>
                <div class="disease-border">
                    <p class="disease-width_p">
                        <stong> Абсолютных противопоказаний к проведению исследования нет. </stong> <br>
                        Клінічний підрозділ, що об’єднує зусилля команди фахівців і пропонує діагностику та лікування повного спектру захворювань стравоходу, шлунку, кишківника, печінки, підшлункової залози, жовчного міхура, прямої кишки.
                    </p>
                </div>
                <div class="disease-description_li">
                    <ul>
                        <li>
                            <strong>
                                Перед процедурой Вам будет предложено заполнить
                            </strong>
                            Информационное соглашение, внимательно прочитайте его и убедитесь, что Вы задали все интересующие Вас вопросы врачу-эндоскописту.
                        </li>
                        <li>
                            <strong>
                                При желании пациента либо по медицинским
                            </strong>
                            показаниям процедуру можно выполнить в состоянии медикаментозного сна, обеспечивающего полный комфорт пациенту во время проведения процедуры и больше возможностей для тщательного исследования слизистой желудка, двенадцатиперстной кишки врачом-эндоскопистом.
                        </li>
                        <li>
                            <strong>
                                Для проведения гастроскопии в состоянии медикаментозного сна
                            </strong>
                            необходимо пройти консультацию анестезиолога. С собой на консультацию необходимо принести результаты анализов (общий анализ крови, глюкоза крови) и электрокардиограмму.
                        </li>
                        <li>
                            <strong>
                                После проведения гастроскопии начинать прием
                            </strong>
                            пищи можно не ранее чем через 2 часа после процедуры. Есть нужно небольшими порциями (200- 300г). Употреблять можно вареную, запеченную или тушеную пищу.
                        </li>
                        <li>
                            <strong>После проведения гастроскопии</strong>
                            в состоянии медикаментозного сна нельзя садиться за руль.
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <div class="blog-body">
            <div class="avtor-comment">
                <p>
                    <strong class="green"> Правило отмены визита:</strong>
                </p>
                <p class="disease-p disease-position">
                    <img class="lazy avtor-img disease-left fade" data-lazy="/img/blog/left.png" alt="comment" src="/img/blog/left.png">
                    Если Вы, будучи записаны на эндоскопические исследования/операцию, за 48 часов подтвердили свой визит оператору call-центра и не явились в клинику для проведения манипуляции – тогда Вам следует оплатить услугу "Пропущенный визит к врачу-эндоскописту (за 1 час)", стоимостью 825 грн. или 1 650 грн. (за 2 часа) при следующем визите. Данная услуга компенсирует стоимость времени врача и медсестры, а также готовность медицинского инструментария.
                    <br>
                    <img class="lazy avtor-img-bottom fade" data-lazy="/img/blog/left.png" alt="comment" src="/img/blog/left.png">
                </p>
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
