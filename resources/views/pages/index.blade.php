<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel</title>
</head>
<body>
<div id="app" class="app">
    <header class="header">
        <div class="header__container container">
            <div class="header__logo logo">
                Вельяминов Г.М.
            </div>

            <div class="header__burger burger">
                <div class="burger__item"></div>
                <div class="burger__item"></div>
                <div class="burger__item"></div>
            </div>

            <div class="header__nav nav">
                <div class="nav__item">
                    <a href="#" data-to="home" class="link_to nav__link nav__link_active">Главная</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="info" class="link_to nav__link">Информация</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="work" class="link_to nav__link">Работы</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="contacts" class="link_to nav__link">Контакты</a>
                </div>
                <div class="nav__item">
                    <div class="nav-local">
                        <a href="#" class="nav-local__link nav__link nav__link_active">Ru</a>
                        <span>/</span>
                        <a href="#" class="nav-local__link nav__link">En</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">
        <div id="home" class="about">
            <img src="/img/photo.png" class="about__photo" alt="">

            <div class="about__container container">
                <div class="about__text">
                    <h1 class="about__title title">
                        Georgy Michailovich Velyaminov
                    </h1>
                    <h2 class="about__sub-title">
                        The title
                    </h2>

                    <p class="about__description">
                        This is Photoshop's version of Lorem Ipsum.
                        Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum
                    </p>

{{--                    <button class="about__button button">Информация</button>--}}
                </div>
            </div>

            <div class="about__arrow arrow arrow_down-white"></div>
        </div>

        <div id="info" class="information">
            <div class="information__text container">
                <h2 class="information__title title">
                    About Georgiy
                </h2>

                <p class="information__description">
                    TThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec
                    tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris
                    in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed
                    ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat,
                    velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. ornare odio.
                    Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis
                    dapibus condimentum sit amet a augue.
                </p>
            </div>

            <div class="information__arrow arrow arrow_down-white"></div>
        </div>

        <div id="work" class="list-works">
            <div class="list-works__text container">
                <h2 class="list-works__title title">
                    Перечень работ
                </h2>

                <div class="list-works__slider slider">
                    <div class="owl-carousel">
                        <ul class="slider__item">
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                        </ul>

                        <ul class="slider__item">
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                        </ul>

                        <ul class="slider__item">
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                            <li>
                                <div class="slider__title">
                                    Год: 1989
                                </div>
                                <div class="slider__description">
                                    Право международное и национальное
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="contacts"  class="footer">
        <div class="footer__container container">
            <div class="footer__copyright">
                © 2018 Designed by Fedor Velyaminov
            </div>

            <div class="footer__name">
                Вельяминов Г. М:
            </div>
            <div class="footer__contacts">
                <a href="tel:+79098657543" class="footer__phone">+7 909 865 75 43</a>
                <a href="mailto:Velyaminov@mail.ru" class="footer__mail">Velyaminov@mail.ru</a>
            </div>
        </div>
    </footer>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
