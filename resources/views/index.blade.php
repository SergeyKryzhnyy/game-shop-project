@extends('layouts.app')

@section('header')
@parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    @if ($result['status'] == 'main')
        <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="products-columns">
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">The Witcher 3: Wild Hunt</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Overwatch</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-2.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Deus Ex: Mankind Divided</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-3.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">World of WarCraft</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-4.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Call of Duty: Black ops II</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-5.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Batman</a></div>
                    <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-6.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
            </div>
        </div>
        <div class="content-footer__container">
            <ul class="page-nav">
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>

        </div>
    </div>
    @endif

    @if ($result['status'] == 'news')
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Новости</div>
                </div>

            </div>
            <div class="content-main__container">
                <div class="news-list__container">
                    <div class="news-list__item">
                        <div class="news-list__item__thumbnail"><img src="img/news/ps_vr.jpg"></div>
                        <div class="news-list__item__content">
                            <div class="news-list__item__content__news-title">О новых играх в режиме VR</div>
                            <div class="news-list__item__content__news-date">04.12.2016</div>
                            <div class="news-list__item__content__news-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="news-list__item__content__news-btn-wrap"><a href="#" class="btn btn-brown">Подробнее</a></div>
                    </div>
                    <div class="news-list__item">
                        <div class="news-list__item__thumbnail"><img src="img/news/ps4-pro_01.jpg"></div>
                        <div class="news-list__item__content">
                            <div class="news-list__item__content__news-title">О новой PS4 Pro</div>
                            <div class="news-list__item__content__news-date">04.12.2016</div>
                            <div class="news-list__item__content__news-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="news-list__item__content__news-btn-wrap"><a href="#" class="btn btn-brown">Подробнее</a></div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($result['status'] == 'about')
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">О магазине</div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="news-block content-text"><img src="img/cover/game-3.jpg" alt="Image" class="alignleft img-news">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    </p>
                    <p>
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        exercitation ullamco laboris nisi ut aliquip
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    </p>
                </div>
            </div>
        </div>
    @endif

    @if ($result['status'] == 'order')
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="cart-product-list">
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img src="img/cover/game-1.jpg" class="cart-product__item__product-photo__image"></div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content"><a href="#">The Witcher 3</a></div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">14.12.2016</div>
                        </div>
                        <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
                    </div>
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img src="img/cover/game-2.jpg" class="cart-product__item__product-photo__image"></div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content"><a href="#">OverWatch</a></div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">14.12.2016</div>
                        </div>
                        <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
                    </div>
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img src="img/cover/game-3.jpg" class="cart-product__item__product-photo__image"></div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content"><a href="#">DeusEx</a></div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">14.12.2016</div>
                        </div>
                        <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
                    </div>
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img src="img/cover/game-4.jpg" class="cart-product__item__product-photo__image"></div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content"><a href="#">World Of Warcraft</a></div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">14.12.2016</div>
                        </div>
                        <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span></div>
                    </div>
                </div>
            </div>
            <div class="content-footer__container">
                <ul class="page-nav">
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                    <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    @endif

    @if ($result['status'] == 'login')
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Авторизация</div>
            </div>
        </div>
     <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

    @endif

    @if ($result['status'] == 'RegisterForm')
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Регистрация</div>
            </div>
        </div>

                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </x-slot>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>



    @endif

@endsection


@section('footer')
    @parent
@endsection
