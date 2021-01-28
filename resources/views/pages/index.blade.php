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
            <header>
                <div class="header__logo logo">
                    Вельяминов Г.М.
                </div>

                <div class="header__nav nav">
                    <div class="nav__item">
                        <div class="nav__link nav__link_active">
                            <a href="#">Главная</a>
                        </div>
                    </div>
                    <div class="nav__item">
                        <div class="nav__link nav__link_active">
                            <a href="#">Информация</a>
                        </div>
                    </div>
                    <div class="nav__item">
                        <div class="nav__link nav__link_active">
                            <a href="#">Работы</a>
                        </div>
                    </div>
                    <div class="nav__item">
                        <div class="nav__link nav__link_active">
                            <a href="#">Контакты</a>
                        </div>
                    </div>
                    <div class="nav__item">
                        <div class="nav__link nav-local">
                            <a href="#" class="nav-local__ru">Ru</a>
                            <span>/</span>
                            <a href="#" class="nav-local__en">En</a>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </body>
</html>
