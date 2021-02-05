<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ $content['logo'] ?? ""}}</title>
</head>
<body>
<div id="app" class="app">
    <header class="header">
        <div class="header__container container">
            <div class="header__logo logo">
                {{ $content['logo'] ?? ""}}
            </div>

            <div class="header__burger burger">
                <div class="burger__item"></div>
                <div class="burger__item"></div>
                <div class="burger__item"></div>
            </div>

            <div class="header__nav nav">
                <div class="nav__item">
                    <a href="#" data-to="home"
                       class="link_to nav__link nav__link_active">{{ $content['menu_home'] ?? ""}}</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="info" class="link_to nav__link">{{ $content['menu_info'] ?? ""}}</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="work" class="link_to nav__link">{{ $content['menu_work'] ?? ""}}</a>
                </div>
                <div class="nav__item">
                    <a href="#" data-to="contacts" class="link_to nav__link">{{ $content['menu_contacts'] ?? ""}}</a>
                </div>
                <div class="nav__item">
                    <div class="nav-local">
                        <a href="#" class="nav-local__link nav__link nav__link_active">Ru</a>
                        <span>/</span>
                        <a href="/en" class="nav-local__link nav__link">En</a>
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
                        {{ $content['home_title'] ?? ""}}
                    </h1>
                    <h2 class="about__sub-title">
                        {{ $content['home_sub_title'] ?? ""}}
                    </h2>

                    <p class="about__description">
                        {{ $content['home_description'] ?? ""}}
                    </p>
                </div>
            </div>

            <div class="about__arrow arrow arrow_down-white"></div>
        </div>

        <div id="info" class="information">
            <div class="information__text container">
                <h2 class="information__title title">
                    {{ $content['information_title'] ?? ""}}
                </h2>

                <p class="information__description">
                    {{ $content['information_description'] ?? ""}}
                </p>
            </div>

            <div class="information__arrow arrow arrow_down-white"></div>
        </div>

        <div id="work" class="list-works">
            <div class="list-works__text container">
                <h2 class="list-works__title title">
                    {{ $content['works_title'] ?? ""}}
                </h2>

                <div class="list-works__slider slider">
                    <div class="owl-carousel">
                        @foreach($works as $chunk)
                            <ul class="slider__item">
                                @foreach($chunk as $work)
                                    <li>
                                        <div class="slider__title">
                                            <a href="{{ Storage::disk('public')->url($work->link) }}" target="_blank"
                                               class="link">{{ $work->name }}</a>
                                        </div>
                                        <div class="slider__description">
                                            {{ $work->description }}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="contacts" class="footer">
        <div class="footer__container container">
            <div class="footer__copyright">
                © {{ $content['copyright'] ?? ""}}
            </div>

            <div class="footer__name">
                {{ $content['name'] ?? ""}}
            </div>
            <div class="footer__contacts">
                <a href="tel:{{ $content['phone'] ?? ""}}" class="footer__phone">{{ $content['phone'] ?? ""}}</a>
                <a href="mailto:{{ $content['email'] ?? ""}}" class="footer__mail">{{ $content['email'] ?? ""}}</a>
            </div>
        </div>
    </footer>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
