<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('_css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- leque meta start -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Лучшие книги по дешевой цене | BookSell</title>
    <meta name="title" content="Купить Книгу, лучшие книги | BookSell">
    <meta name="description"
        content="Хотите купить электронную книгу? Наш магазин предлагает широкий выбор электронных книг. Заходите и выбирайте в магазине BookSell!">
    <meta name="keywords" content="купить книгу, электронные книги, книги онлайн">
    <meta name="document-state" content="dynamic">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Купить Книгу | BookSell">
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Купить Книгу | BookSell">
    <meta property="og:description"
        content="Хотите купить электронную книгу? Наш магазин предлагает широкий выбор электронных книг. Заходите и выбирайте в магазине BookSell!">
    <link itemprop="logo" href="">
    <!-- end leque meta -->
    <meta property="og:locale" content="ru_RU">
    <meta http-equiv="content-language" content="ru-RU">

</head>


<body id="body" class="body mainPage">
    <div class="wrapper">
        {{-- HEADER --}}
        <header class="header__wrap">
            <div class="wrapper">
                <!-- LEFT -->

                <div class="header__left">
                    <div class="wrapper">
                        <!-- Logo -->
                        <div class="header__logo">
                            <a href="/" class="logoText">
                                BookSell
                            </a>
                        </div>


                    </div>
                </div>
                <!-- NAVIGATION -->
                <div class="header__nav">
                    <nav class="header__nav-list">
                        <ul class="nav__list">
                            <li class="list--reviews">
                                <a href="/" class="header__nav-list-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Главная</a>
                            </li>
                            <li class="list--reviews">
                                <a href="/aboutUs" class="header__nav-list-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                        viewBox="0 0 18 17" fill="none">
                                        <path
                                            d="M17.6094 7.70411C17.9637 7.36373 18.0887 6.86417 17.9359 6.39978C17.7827 5.9354 17.3837 5.6039 16.8936 5.53355L12.5353 4.90927C12.3496 4.88262 12.1893 4.76786 12.1064 4.60193L10.1579 0.709192C9.9391 0.27181 9.49505 0 9.00018 0C8.50567 0 8.06163 0.27181 7.84284 0.709192L5.89401 4.60229C5.81111 4.76821 5.65036 4.88298 5.46474 4.90963L1.10644 5.5339C0.616618 5.6039 0.217263 5.93575 0.0640814 6.40014C-0.0887402 6.86452 0.0363285 7.36408 0.390629 7.70447L3.54402 10.7345C3.67846 10.8639 3.74009 11.05 3.70837 11.232L2.96445 15.5106C2.89849 15.8872 2.99869 16.2535 3.24594 16.5424C3.63016 16.9925 4.30092 17.1297 4.83723 16.8518L8.7349 14.8316C8.89782 14.7474 9.1029 14.7481 9.26546 14.8316L13.1635 16.8518C13.3531 16.9503 13.5553 17 13.764 17C14.1449 17 14.5061 16.833 14.7544 16.5424C15.002 16.2535 15.1019 15.8865 15.0359 15.5106L14.2916 11.232C14.2599 11.0497 14.3215 10.8639 14.456 10.7345L17.6094 7.70411Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    О нас</a>
                            </li>

                            <li class="list--howBuyAccount">
                                <a href="/howToBuy" class="header__nav-list-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                        viewBox="0 0 16 17" fill="none">
                                        <path
                                            d="M2.75862 13.2812H15.1724C15.6303 13.2812 16 12.9253 16 12.4844V0.796875C16 0.355938 15.6303 0 15.1724 0H2.75862C1.23586 0 0 1.19 0 2.65625V14.3438C0 15.81 1.23586 17 2.75862 17H15.1724C15.6303 17 16 16.6441 16 16.2031C16 15.7622 15.6303 15.4062 15.1724 15.4062H2.75862C2.15172 15.4062 1.65517 14.9281 1.65517 14.3438C1.65517 13.7594 2.15172 13.2812 2.75862 13.2812ZM8.58483 10.6569C8.43034 10.8056 8.21517 10.8906 8 10.8906C7.78483 10.8906 7.56965 10.8056 7.41517 10.6569C7.26069 10.5081 7.17241 10.3062 7.17241 10.0938C7.17241 9.88656 7.26069 9.67938 7.41517 9.53063C7.72414 9.23313 8.27586 9.23313 8.58483 9.53063C8.73931 9.67938 8.82759 9.88656 8.82759 10.0938C8.82759 10.3062 8.73931 10.5081 8.58483 10.6569ZM6.40552 2.94844C6.96828 2.49688 7.7131 2.30562 8.44138 2.42781C9.44552 2.59781 10.2676 3.38937 10.4441 4.35625C10.6262 5.37094 10.1297 6.38031 9.19724 6.87437C8.97104 6.99656 8.82759 7.2675 8.82759 7.57563V7.70312C8.82759 8.14406 8.45793 8.5 8 8.5C7.54207 8.5 7.17241 8.14406 7.17241 7.70312V7.57563C7.17241 6.68313 7.64138 5.88094 8.39724 5.4825C8.64 5.355 8.88828 5.05219 8.81103 4.6325C8.75586 4.31906 8.48 4.05344 8.16 4.00031C7.90069 3.9525 7.65793 4.01625 7.47035 4.17031C7.28276 4.32438 7.17241 4.5475 7.17241 4.78125C7.17241 5.22219 6.80276 5.57812 6.34483 5.57812C5.8869 5.57812 5.51724 5.22219 5.51724 4.78125C5.51724 4.07469 5.84276 3.40531 6.40552 2.94844Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Как купить книгу</a>
                            </li>
                            <li class="list--agreement">
                                <a href="/agreement" class="header__nav-list-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 17 17" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.94792 0H10.0938C11.1704 0 12.0417 0.87125 12.0417 1.94792V5.38333C11.985 5.39042 11.9354 5.40458 11.8858 5.42583L9.86708 6.11292C9.76083 5.85083 9.50583 5.66667 9.20833 5.66667H2.83333C2.44375 5.66667 2.125 5.98542 2.125 6.375C2.125 6.76458 2.44375 7.08333 2.83333 7.08333H7.49417C7.04792 7.44458 6.76458 7.99708 6.73625 8.59917C6.63 8.53542 6.50958 8.5 6.375 8.5H2.83333C2.44375 8.5 2.125 8.81875 2.125 9.20833C2.125 9.59792 2.44375 9.91667 2.83333 9.91667H6.375C6.5025 9.91667 6.62292 9.88125 6.72917 9.8175V11.5458C6.72917 12.8208 7.12583 13.9329 7.72083 14.875H1.94792C0.87125 14.875 0 14.0037 0 12.9271V1.94792C0 0.87125 0.87125 0 1.94792 0ZM2.83333 4.25H5.66667C6.05625 4.25 6.375 3.93125 6.375 3.54167C6.375 3.15208 6.05625 2.83333 5.66667 2.83333H2.83333C2.44375 2.83333 2.125 3.15208 2.125 3.54167C2.125 3.93125 2.44375 4.25 2.83333 4.25Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.801 6.76671L16.5198 8.03179C16.8073 8.12954 17 8.39871 17 8.70258V11.5487C17 15.1378 13.0199 16.8711 12.8506 16.9433C12.762 16.9816 12.6671 17 12.5729 17C12.4787 17 12.3838 16.9816 12.2945 16.944C12.1253 16.8718 8.14512 15.1378 8.14512 11.5487V8.70258C8.14512 8.39942 8.3385 8.12954 8.62537 8.03179L12.3441 6.76671C12.4922 6.71642 12.653 6.71642 12.801 6.76671ZM12.9625 13.5292L15.0875 10.6958C15.3227 10.3828 15.2589 9.93862 14.9451 9.70417C14.6328 9.469 14.1886 9.53346 13.9542 9.84583L12.3193 12.0261L11.48 11.1867C11.203 10.9097 10.7553 10.9097 10.4784 11.1867C10.2014 11.4637 10.2014 11.9113 10.4784 12.1883L11.895 13.605C12.0282 13.7388 12.2081 13.8125 12.3958 13.8125C12.4121 13.8125 12.4291 13.8118 12.4461 13.8104C12.6515 13.7962 12.8392 13.6935 12.9625 13.5292Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Соглашение</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- RIGHT -->
                <div class="header__right">

                    <!-- DESKTOP -->
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1)
                            <a class="header__mybuy-btn mx-5" href="/admin">Админ Панель</a>
                        @endif
                        <a class="header__mybuy-btn" href="/profile">Профиль</a>
                    @else
                        <a class="header__mybuy-btn" href="/login">
                            Вход </a>
                    @endif
                    <!-- MOBILE -->
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1)
                            <a class="header__mybuy-btn__adaptive mx-5" href="/admin">Админ Панель</a>
                        @endif
                        <a href="/profile" class="header__mybuy-btn__adaptive">
                            Профиль</a>
                    @else
                        <a href="/login" class="header__mybuy-btn__adaptive">
                            Вход</a>
                    @endif


                    <div class="header__cart">
                        <button class="header__cart-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="21"
                                viewBox="0 0 25 21" fill="none">
                                <path
                                    d="M0 2.1C0 0.940212 0.932742 0 2.08333 0H22.9167C24.0673 0 25 0.940212 25 2.1C25 3.25979 24.0673 4.2 22.9167 4.2H2.08333C0.932739 4.2 0 3.25979 0 2.1Z"
                                    fill="#533E6A"></path>
                                <path
                                    d="M0 10.5C0 9.34021 0.932742 8.4 2.08333 8.4H14.5833C15.7339 8.4 16.6667 9.34021 16.6667 10.5C16.6667 11.6598 15.7339 12.6 14.5833 12.6H2.08333C0.932739 12.6 0 11.6598 0 10.5Z"
                                    fill="#533E6A"></path>
                                <path
                                    d="M2.08333 16.8C0.932742 16.8 0 17.7402 0 18.9C0 20.0598 0.932739 21 2.08333 21H22.9167C24.0673 21 25 20.0598 25 18.9C25 17.7402 24.0673 16.8 22.9167 16.8H2.08333Z"
                                    fill="#533E6A"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- ADAPTIVE ASIDE NAVIGATION -->
                <div class="aside">
                    <div class="aside__content">
                        <div class="aside__content-top">
                            <div class="aside__content-top-logo">
                                <a href="/" class="logoText">
                                    BookSell
                                </a>
                            </div>
                            <button class="aside__close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 25 25" fill="none">
                                    <rect width="25" height="25" rx="5" fill="#2E213F"></rect>
                                    <path
                                        d="M16.149 17.6886C16.343 17.8834 16.605 17.9931 16.8783 17.9943C17.1655 18.0246 17.4523 17.933 17.6702 17.7413C17.6869 17.7255 17.703 17.7092 17.7187 17.6923C18.112 17.2673 18.0902 16.6002 17.6702 16.2024L13.9709 12.482L17.6702 8.73971C17.9979 8.33082 17.9772 7.74 17.6216 7.35561C17.2285 6.93054 16.5691 6.90843 16.149 7.30619L12.4975 11.0002L8.77208 7.25346C8.38202 6.91551 7.80672 6.91551 7.41663 7.25346C6.97957 7.63212 6.92868 8.29753 7.30296 8.73968L11.0175 12.4974L7.30299 16.2551C6.899 16.6662 6.899 17.3302 7.30299 17.7413C7.50783 17.9195 7.77306 18.0102 8.04275 17.9943C8.30891 18.0074 8.56988 17.9169 8.77208 17.7413L12.4866 13.9836L16.149 17.6886Z"
                                        fill="#A185BF"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="aside__content-nav">
                            <ul class="nav__list">
                                <li class="list--reviews">
                                    <a href="/" class="header__nav-list-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                        Главная</a>
                                </li>
                                <li class="list--reviews">
                                    <a href="/aboutUs" class="header__nav-list-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                            viewBox="0 0 18 17" fill="none">
                                            <path
                                                d="M17.6094 7.70411C17.9637 7.36373 18.0887 6.86417 17.9359 6.39978C17.7827 5.9354 17.3837 5.6039 16.8936 5.53355L12.5353 4.90927C12.3496 4.88262 12.1893 4.76786 12.1064 4.60193L10.1579 0.709192C9.9391 0.27181 9.49505 0 9.00018 0C8.50567 0 8.06163 0.27181 7.84284 0.709192L5.89401 4.60229C5.81111 4.76821 5.65036 4.88298 5.46474 4.90963L1.10644 5.5339C0.616618 5.6039 0.217263 5.93575 0.0640814 6.40014C-0.0887402 6.86452 0.0363285 7.36408 0.390629 7.70447L3.54402 10.7345C3.67846 10.8639 3.74009 11.05 3.70837 11.232L2.96445 15.5106C2.89849 15.8872 2.99869 16.2535 3.24594 16.5424C3.63016 16.9925 4.30092 17.1297 4.83723 16.8518L8.7349 14.8316C8.89782 14.7474 9.1029 14.7481 9.26546 14.8316L13.1635 16.8518C13.3531 16.9503 13.5553 17 13.764 17C14.1449 17 14.5061 16.833 14.7544 16.5424C15.002 16.2535 15.1019 15.8865 15.0359 15.5106L14.2916 11.232C14.2599 11.0497 14.3215 10.8639 14.456 10.7345L17.6094 7.70411Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        О нас</a>
                                </li>

                                <li class="list--howBuyAccount">
                                    <a href="/howToBuy" class="header__nav-list-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <path
                                                d="M2.75862 13.2812H15.1724C15.6303 13.2812 16 12.9253 16 12.4844V0.796875C16 0.355938 15.6303 0 15.1724 0H2.75862C1.23586 0 0 1.19 0 2.65625V14.3438C0 15.81 1.23586 17 2.75862 17H15.1724C15.6303 17 16 16.6441 16 16.2031C16 15.7622 15.6303 15.4062 15.1724 15.4062H2.75862C2.15172 15.4062 1.65517 14.9281 1.65517 14.3438C1.65517 13.7594 2.15172 13.2812 2.75862 13.2812ZM8.58483 10.6569C8.43034 10.8056 8.21517 10.8906 8 10.8906C7.78483 10.8906 7.56965 10.8056 7.41517 10.6569C7.26069 10.5081 7.17241 10.3062 7.17241 10.0938C7.17241 9.88656 7.26069 9.67938 7.41517 9.53063C7.72414 9.23313 8.27586 9.23313 8.58483 9.53063C8.73931 9.67938 8.82759 9.88656 8.82759 10.0938C8.82759 10.3062 8.73931 10.5081 8.58483 10.6569ZM6.40552 2.94844C6.96828 2.49688 7.7131 2.30562 8.44138 2.42781C9.44552 2.59781 10.2676 3.38937 10.4441 4.35625C10.6262 5.37094 10.1297 6.38031 9.19724 6.87437C8.97104 6.99656 8.82759 7.2675 8.82759 7.57563V7.70312C8.82759 8.14406 8.45793 8.5 8 8.5C7.54207 8.5 7.17241 8.14406 7.17241 7.70312V7.57563C7.17241 6.68313 7.64138 5.88094 8.39724 5.4825C8.64 5.355 8.88828 5.05219 8.81103 4.6325C8.75586 4.31906 8.48 4.05344 8.16 4.00031C7.90069 3.9525 7.65793 4.01625 7.47035 4.17031C7.28276 4.32438 7.17241 4.5475 7.17241 4.78125C7.17241 5.22219 6.80276 5.57812 6.34483 5.57812C5.8869 5.57812 5.51724 5.22219 5.51724 4.78125C5.51724 4.07469 5.84276 3.40531 6.40552 2.94844Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Как купить книгу</a>
                                </li>
                                <li class="list--agreement">
                                    <a href="/agreement" class="header__nav-list-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 17 17" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.94792 0H10.0938C11.1704 0 12.0417 0.87125 12.0417 1.94792V5.38333C11.985 5.39042 11.9354 5.40458 11.8858 5.42583L9.86708 6.11292C9.76083 5.85083 9.50583 5.66667 9.20833 5.66667H2.83333C2.44375 5.66667 2.125 5.98542 2.125 6.375C2.125 6.76458 2.44375 7.08333 2.83333 7.08333H7.49417C7.04792 7.44458 6.76458 7.99708 6.73625 8.59917C6.63 8.53542 6.50958 8.5 6.375 8.5H2.83333C2.44375 8.5 2.125 8.81875 2.125 9.20833C2.125 9.59792 2.44375 9.91667 2.83333 9.91667H6.375C6.5025 9.91667 6.62292 9.88125 6.72917 9.8175V11.5458C6.72917 12.8208 7.12583 13.9329 7.72083 14.875H1.94792C0.87125 14.875 0 14.0037 0 12.9271V1.94792C0 0.87125 0.87125 0 1.94792 0ZM2.83333 4.25H5.66667C6.05625 4.25 6.375 3.93125 6.375 3.54167C6.375 3.15208 6.05625 2.83333 5.66667 2.83333H2.83333C2.44375 2.83333 2.125 3.15208 2.125 3.54167C2.125 3.93125 2.44375 4.25 2.83333 4.25Z"
                                                fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.801 6.76671L16.5198 8.03179C16.8073 8.12954 17 8.39871 17 8.70258V11.5487C17 15.1378 13.0199 16.8711 12.8506 16.9433C12.762 16.9816 12.6671 17 12.5729 17C12.4787 17 12.3838 16.9816 12.2945 16.944C12.1253 16.8718 8.14512 15.1378 8.14512 11.5487V8.70258C8.14512 8.39942 8.3385 8.12954 8.62537 8.03179L12.3441 6.76671C12.4922 6.71642 12.653 6.71642 12.801 6.76671ZM12.9625 13.5292L15.0875 10.6958C15.3227 10.3828 15.2589 9.93862 14.9451 9.70417C14.6328 9.469 14.1886 9.53346 13.9542 9.84583L12.3193 12.0261L11.48 11.1867C11.203 10.9097 10.7553 10.9097 10.4784 11.1867C10.2014 11.4637 10.2014 11.9113 10.4784 12.1883L11.895 13.605C12.0282 13.7388 12.2081 13.8125 12.3958 13.8125C12.4121 13.8125 12.4291 13.8118 12.4461 13.8104C12.6515 13.7962 12.8392 13.6935 12.9625 13.5292Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Соглашение</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MIN MOBILE MY BUY -->
            <!-- MOBILE -->
            @if (Auth::check())
                @if (Auth::user()->role_id == 1)
                    <a class="header__mybuy-btn__adaptive-min mx-5" href="/admin">Админ Панель</a>
                @endif
                <a href="/profile" class="header__mybuy-btn__adaptive-min">
                    Профиль </a>
            @else
                <a href="/login" class="header__mybuy-btn__adaptive-min">
                    Вход </a>
            @endif

        </header>
        <main>
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="footer__wrap">
            <div class="wrapper">
                <div class="footer__top">
                    <div class="footer__top-left">
                        <div class="footer__logo">
                            <a href="/" class="logoText">
                                BookSell
                            </a>
                        </div>

                        <nav class="footer__navigation">
                            <ul>
                                <li><a href="/">Главная</a></li>
                                <li><a href="/aboutUs">О нас</a></li>
                                <li><a href="/howToBuy">Как купить книгу</a></li>
                                <li><a href="/agreement">Соглашение</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer-top-right">
                        <div class="footer-t-r-box">
                            <span>
                                Хочешь купить книгу, но слишком дорого? Тогда вам точно сюда! Вы сможете приобрести
                                книги по самым выгодным ценам!
                            </span>
                        </div>
                        <div class="footer__bottom">
                            <ul>
                                <li>© 2018-2023 BookSell</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__bottom-adaptive">

                        <p>
                            Хочешь купить книгу, но слишком дорого? Тогда вам точно сюда! Вы сможете приобрести книгу
                            по самым выгодным ценам!
                        </p>

                        <div class="copyright">
                            <span>© 2018-2023 BookSell</span>
                            <span> <a class="leque" target="_blank" href="https://lequeshop.com/">Lequeshop.com -
                                    Система по созданию магазинов</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="{{ asset('_script/jquery-3.7.1.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="{{ asset('_script/script.js') }}"></script>

</body>

</html>
