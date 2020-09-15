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
            <a href="#">Пацієнту</a>
            <a href="#" class="link-blog">Прийом у лікаря</a>
            <hr class="hr-header">
        </div>
        <div class="blog-section main-content">
            <div class="row blog-article_padding">
                <div class="width-40">
                    <div class="blog-title">
                        <h1>Гостра респіраторна вірусна інфекція</h1>
                    </div>
                    <div class="blog-time">
                        <p class="blog-gray">
                            <i aria-hidden="true" class="fa fa-calendar"></i>
                            8 листопада 2019 р.
                        </p>
                    </div>

                    <img class="lazy blog__main-image mobile" data-lazy="/img/blog/article-image.png" alt="Article">

                    <div class="background blog-header mobile-hide">
                        <div class="background-one"></div>
                        <div class="background-two"></div>
                    </div>

                    <ul class="menu-mb">
                        <li class="blog-li">
                            <a class="blog" href="#disease">Що за хвороба?</a>
                        </li>
                        <li class="blog-li">
                            <a class="blog" href="#symptoms">Симптоми</a>
                        </li>
                        <li class="blog-li">
                            <a class="blog" href="#treatment">Лікування</a>
                        </li>
                        <li class="blog-li">
                            <a class="blog" href="#error">Помилки в лікуванні</a>
                        </li>
                    </ul>
                    <button class="btn share" href="#">
                        Поділитися
                        <img data-lazy="/img/blog/share.png" class="lazy" alt="share">
                    </button>
                </div>
                <div class="width-60 blog__main-image-container">
                    <img class="lazy blog__main-image desktop" data-lazy="/img/blog/article-image.png" alt="Article">
                </div>
            </div>
        </div>
        <!-- <div class="blog-body block-description">
            <div class="row">
                <div id="disease" class="description">
                    <h3>
                        Що за хвороба?
                    </h3>
                    <p>
                        Клінічний підрозділ, що об’єднує зусилля команди фахівців і пропонує діагностику та лікування повного спектру захворювань стравоходу, шлунку, кишківника, печінки, підшлункової залози, жовчного міхура, прямої кишки.
                    </p>
                </div>
                <div class="width-50 mb-1 destop-hide">
                    <img class="lazy blog-stock inherit" data-lazy="/img/blog/stock.png" alt="disease">
                </div>
                <div class="width-50">
                    <div id="symptoms" class="description">
                        <h3>
                            Симптоми
                        </h3>
                        <p>
                            Исследование может быть выполнено в любое время суток, но строго через 6 часов после обычного приема пищи, жидкости и лекарств.
                        </p>
                        <div class="content">
                        <ul >
                            <li>
                                <p>
                                    Перед процедурой Вам будет предложено заполнить Информационное соглашение, внимательно прочитайте его и убедитесь, что Вы задали все интересующие Вас вопросы врачу-эндоскописту.
                                </p>
                            </li>
                            <li>
                                <p>
                                    После проведения гастроскопии начинать прием пищи можно не ранее чем через 2 часа после процедуры. Есть нужно небольшими порциями (200- 300г). Употреблять можно вареную, запеченную или тушеную пищу.
                                </p>
                            </li>
                        </ul>
                        </div>
                        <div class="blog-dowload mb">
                            <a class="btn-dowload" href="#" download="#">
                                <img class="lazy dowload" data-lazy="/img/blog/dowload.png" alt="dowload">
                                Детальний перелік симптомів
                            </a>
                        </div>
                    </div>
                </div>
                <div class="width-50 mb-1 mobile-hide">
                    <img class="lazy blog-stock" data-lazy="/img/blog/stock.png" alt="disease">
                </div>


                <div id="treatment" class="description">
                    <h3>
                        Лікування
                    </h3>
                    <p>
                        Перед процедурой Вам будет предложено заполнить Информационное соглашение, внимательно прочитайте его и убедитесь, что Вы задали все интересующие Вас вопросы врачу-эндоскописту.
                        При желании пациента либо по медицинским показаниям процедуру можно выполнить в состоянии медикаментозного сна, обеспечивающего полный комфорт пациенту во время проведения процедуры и больше возможностей для тщательного исследования слизистой желудка, двенадцатиперстной кишки врачом-эндоскопистом.
                    </p>
                    <div class="blog-dowload mb">
                        <a class="btn-dowload" href="#" download="#">
                            <img class="lazy dowload" data-lazy="/img/blog/dowload.png" alt="dowload">
                            Детальний інструкція з лікування
                        </a>
                    </div>
                </div>

                <div id="error" class="description">
                    <h3>
                        Помилки в лікуванні
                    </h3>
                    <div class="content">
                    <ul >
                        <li>
                            <p>
                                <strong>Для проведения гастроскопии в состоянии медикаментозного сна</strong> необходимо пройти консультацию анестезиолога. С собой на консультацию необходимо принести результаты анализов (общий анализ крови, глюкоза крови) и электрокардиограмму.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong> После проведения гастроскопии начинать прием</strong> пищи можно не ранее чем через 2 часа после процедуры. Есть нужно небольшими порциями (200- 300г). Употреблять можно вареную, запеченную или тушеную пищу.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong> После проведения гастроскопии</strong> в состоянии медикаментозного сна нельзя садиться за руль.
                            </p>
                        </li>
                    </ul>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="blog-body">
            <div>
                <div id="lorem-ipsum" class="description flex-container">
                    <div class="left-content">
                        <h3>
                            Lorem Ipsum
                        </h3>
                        <div class="content">
                            <p><strong>Lorem Ipsum</strong><span>&nbsp;</span>- это текст-"рыба", часто используемый в печати и
                                вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В
                                то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem
                                Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять
                                веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация
                                листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы
                                электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
                        </div>
                        <div class="blog-dowload mb">
                            <a class="btn-dowload" href="" download="#">
                                <img class="lazy dowload fade" data-lazy="/img/blog/dowload.png" alt="dowload"
                                    src="/img/blog/dowload.png">
                                Lorem Ipsum
                            </a>
                        </div>
                    </div>

                    <div class="picture">
						<img src="https://oberig-dev.vis-design.com.ua/storage/editor/fotos/452x452/036e1048a3e344a8f0fccf6b00b6326d_1591265141.png" title="Lorem Ipsum" alt="Lorem Ipsum">
					</div>

                </div>
                <div class="description" id="lorem-ipsum3" style="
        width: 100%;
        ">
                    <h3>
                        Lorem Ipsum3
                    </h3>
                    <div class="content">
                        <ul>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                        </ul>
                    </div>


                </div>
                <div class="description" id="lorem-ipsum4">
                    <h3>
                        Lorem Ipsum4
                    </h3>
                    <div class="content">
                        <ol>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                        </ol>
                        <p><br></p>
                        <p>sadasdas</p>
                        <p>asdasdasd</p>
                        <p>asdasd</p>
                    </div>

                    <div class="picture">
                        <img src="Image source not readable" title="Lorem Ipsum4" alt="Lorem Ipsum4">
                    </div>

                </div>
                <div id="lorem-ipsum22">
                    <h3>
                        Lorem Ipsum22
                    </h3>
                    <div class="content">
                        <ol>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                        </ol>
                        <p><br></p>
                        <p>sadasdas</p>
                        <p>asdasdasd</p>
                        <p>asdasd</p>
                    </div>

                    <div class="picture">
                        <img src="Image source not readable" title="Lorem Ipsum22" alt="Lorem Ipsum22">
                    </div>

                </div>
            </div>
        </div>
        <div class="blog-section">
            <div class="row">
                <div class="width-100 avtor-articles">
                    <p><strong>
                            Автор(ка) статті
                        </strong>
                    </p>
                </div>
                <div class="width-100 mb-1">
                    <p>
                        <strong>
                            Кривоконь Марія Олександрівна
                        </strong>
                    </p>
                </div>
                <div class="width-100 avtor-articles">
                    <p>Менеджер по образовательному направлению и коммуникациям</p>
                </div>
                <div class="width-30">
                    <img class="lazy avtor-widht" data-lazy="/img/blog/avtor.png" alt="avtor">
                </div>
                <div class="width-70 avtor-comment">
                    <img class="lazy avtor-img" data-lazy="/img/blog/left.png" alt="comment">
                    <p class="avtor-p">
                        Перед процедурой Вам будет предложено заполнить Информационное соглашение, внимательно прочитайте его и убедитесь, что Вы задали все интересующие Вас вопросы врачу-эндоскописту. Перед процедурой Вам будет предложено заполнить Информационное соглашение, внимательно прочитайте его.
                        <br>
                        <img class="lazy avtor-img-bottom" data-lazy="/img/blog/left.png" alt="comment">
                    </p>
                </div>
            </div>
        </div>
        <div class="blog-body">
            <div class="row tag">
                <h3 class="width-100 mb-2">Теги</h3>
                <a class="btn btn-tag" href="#">Грип</a>
                <a class="btn btn-tag" href="#">ГРВІ (застуда)</a>
                <a class="btn btn-tag" href="#">Депресія</a>
                <a class="btn btn-tag" href="#">Інсульт</a>
            </div>
        </div>
        <div class="blog-section pd-15">
            <h3>Коментарі (12)</h3>
            <div class="block collapse first show">
                <div class="block__content">
                    <div class="strong">
                        Андрій
                    </div>
                    <div class="green strong">
                        <p>20 сiчня 2014 року</p>
                    </div>
                    <p>По рекомендації дочки сьогодні був на прийомі в Галини Анатоліівни із серйозною проблемою, з якою борюся вже довгий час. Був приємно вражений уважним підходом і детальним розпитуванням про свій стан. Отримав відповіді на всі свої запитання. Дякую за підхід і професійно гарне ставлення.</p>
                </div>
            </div>
            <div class="block collapse second ">
                <div class="block__content">
                    <div class="strong">
                        Андрій
                    </div>
                    <div class="green strong">
                        <p>20 сiчня 2014 року</p>
                    </div>
                    <p>По рекомендації дочки сьогодні був на прийомі в Галини Анатоліівни із серйозною проблемою, з якою борюся вже довгий час. Був приємно вражений уважним підходом і детальним розпитуванням про свій стан. Отримав відповіді на всі свої запитання. Дякую за підхід і професійно гарне ставлення.</p>
                </div>
            </div>

            <div class="collapse-hr">
                <a class="btn-collapse pt-1" data-toggle="collapse" data-target=".collapse.second" data-text="Collapse">
                    Показати всі коментарі
                <span class="arrow-down"></span>
                </a>
                <hr class="hr-header">
            </div>
            <div class="collapse-center mobile-hide">
                <a class="btn-collapse btn btn-coment"  data-toggle="collapse" data-target=".collapse.add-coment" data-text="Collapse">Додати коментар</a>
            </div>
            <div class="block collapse add-coment">
                <div class="block__content">

                    <div class="strong center">
                        Додати коментар
                    </div>
                    <form class="form-coment" action="#">
                        <div>
                            <input class="input-name" type="text" placeholder="Ім’я"></input>
                        </div>
                        <div>
                            <textarea class="input-textarea" name="" id="" rows="4" placeholder="Коментар"></textarea>
                        </div>
                        <button class="btn btn-coment center" type="submit">Отправить форму</button>
                    </form>
                </div>
            </div>


        </div>
        <div class="blog-article" id="blog-article-2">
        <div class="background mobile-hide">
                    <div class="background-one"></div>
                    <div class="background-two"></div>
                </div>
            <articles link_all="#" title="Вас також можуть зацікавити інші статті розділу" background="white" />
        </div>
        <div class="blog-section mobile-hide">
            <div class="blog-section footer">
                <p class="blog-footer ">Медичний центр «Універсальна клініка «Оберіг» (ТОВ «КАПИТАЛ») – один з найбільших приватних інвестиційних проектів в галузі охорони здоров’я України, реалізований у XXI сторіччі. Розпочавши роботу в травні 2008 року, заклад ствердився як сучасна недержавна багатопрофільна лікарня, де мають змогу отримувати амбулаторну і стаціонарну медичну допомогу високої якості громадяни України та пацієнти з усього світу. ...
                <a href="/" class="footer-link">Детальніше</a>
                </p>
            </div>
        </div>
    </div>

    @stop

    @section('scripts')

    <script src="{{ mix('/js/main-page-all.js') }}"></script>

    @stop
