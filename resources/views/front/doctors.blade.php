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
            <div class="">
                <div class="about-btn blog mobile-hide ">
                    <h3>Лікарі клініки</h3>
                </div>
                <div class="background mobile-hide">
                    <div class="background-one"></div>
                    <div class="background-two"></div>
                </div>
                <div class="doctors">
                    <form class="doctors-input">
                        <div class="input">
                            <input type="radio" id="baby" name="doctors" value="doctors" checked>
                            <label for="baby">Дитячий лiкар</label>
                        </div>

                        <div class="input">
                            <input type="radio" id="adult" name="doctors" value="doctors">
                            <label for="adult">Дорослий лiкар</label>
                        </div>

                        <select id="specialty" name="specialty">
                            <option value="specialty" selected>Гастроентеролог</option>
                            <option value="other">other</option>
                        </select>
                    </form>
                </div>
                <div class="doctors-body">
                    <div class="container">
                        <div class="row-section">
                            <div class="col-4 doctors-overflow mr-none">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Pariu.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Парий <br> Валентин Дмитриевич</p>
                                    </div>
                                    <div class="doctors-position">
                                        <ul class="doctors-description">
                                            <li>
                                                Медицинский директор
                                            </li>
                                            <li>
                                                13 років мединого стажу
                                            </li>
                                            <li>
                                                Кандидат медицинских наук
                                            </li>
                                            <li>
                                                Член асоціації лікарів
                                            </li>
                                        </ul>
                                        <div class="mb-1">
                                            <a href="#" class="btn btn-green center">Детальніше</a>
                                        </div>
                                        <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow mr-none">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Golybovska.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Голубовская <br>
                                            Елена Павловна</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-кардиолог
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow mr-none">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Syvorkina.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Суворкина <br>
                                            Ирина Васильевна</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-пульмонолог, терапевт
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row-section">
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Pariu.png" alt="">
                                </div>
                                <div class="doctors-text">

                                    <div class="doctors-name">
                                        <p>Гаврылив

                                            <br> Ирина Романовна</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-невролог
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center ">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Golybovska.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Котляров

                                            <br>
                                            Алексей Игоревич</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-хирург
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Syvorkina.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Суворкина <br>
                                            Ирина Васильевна</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-невролог
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="container">
                        <div class="row-section">
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Pariu.png" alt="">
                                </div>
                                <div class="doctors-text">

                                    <div class="doctors-name">
                                        <p>Бинецкий
                                            <br>Евгений Анатольевич</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач анестезиолог детский
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center ">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Golybovska.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Щур
                                            <br>
                                            Светлана Николаевна</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Медицинская сестра
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Syvorkina.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Антонюк
                                            <br>
                                            Елена Ярославовна
                                        </p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-терапевт
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row-section">
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Pariu.png" alt="">
                                </div>
                                <div class="doctors-text">

                                    <div class="doctors-name">
                                        <p>Парий<br>
                                            Валентин Дмитриевич</p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Медицинский директор
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center ">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Golybovska.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Голубовская

                                            <br>
                                            Елена Павловна
                                        </p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-кардиолог
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                            <div class="col-4 doctors-overflow">
                                <div class="doctors-img">
                                    <img class="lazy" data-lazy="/img/doctors/Syvorkina.png" alt="">
                                </div>
                                <div class="doctors-text">
                                    <div class="doctors-name">
                                        <p>Суворкина
                                            <br>
                                            Ирина Васильевна
                                        </p>
                                    </div>
                                    <ul class="doctors-description">
                                        <li>
                                            Врач-пульмонолог, терапевт
                                        </li>
                                        <li>
                                            13 років мединого стажу
                                        </li>
                                        <li>
                                            Кандидат медицинских наук
                                        </li>
                                        <li>
                                            Член асоціації лікарів
                                        </li>
                                    </ul>
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-green center mb-1">Детальніше</a>
                                    </div>
                                    <a href="#" class="btn btn-green center">Записатися на прийом</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
    </div>
    @stop
    @section('scripts')
    <script src="{{ mix('/js/main-page-all.js') }}"></script>
    @stop
