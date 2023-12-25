@extends('layouts.app')
@section('content')
    <section class="section__title">
        <h2>
            Как купить аккаунт </h2>
    </section>
    <main class="howToBuy">
        <section class="section__title">&nbsp;</section>

        <div class="replacement--screen-wrap">
            <div class="replacement--screen-href"><img alt=""
                    src="https://dori.sale/source/custom/css/dori/_img/blank/howToBuy/tovar.svg"> <span>1. Выбираем
                    интересующий вас товар на главной странице сайта и нажимаем</span></div>

            <div class="how-works__separator">
                <div class="how-works__separator-item"><img alt="next-arrow" class="how-works__arrow-image"
                        src="https://dori.sale/source/custom/css/dori/_img/blank/next-arrow.svg"></div>
            </div>

            <div class="replacement--screen-auth"><img alt=""
                    src="https://dori.sale/source/custom/css/dori/_img/blank/howToBuy/buy.svg"> <span>2. На странице
                    выбранного вами товара нажимаем на кнопку «Купить товар»</span></div>

            <div class="how-works__separator">
                <div class="how-works__separator-item"><img alt="next-arrow" class="how-works__arrow-image"
                        src="https://dori.sale/source/custom/css/dori/_img/blank/next-arrow.svg"></div>
            </div>

            <div class="replacement--screen-mail"><img alt=""
                    src="https://dori.sale/source/custom/css/dori/_img/blank/howToBuy/mail.svg"> <span>3. В открывшемся окне
                    укажите информацию</span></div>
        </div>

        <div class="list--agreement">
            <ol>
                <li>Выбираем интересующий вас товар на главной странице сайта и нажимаем на ячейку с товаром</li>
                <li>На странице выбранного вами товара нажимаем на кнопку «Купить товар»</li>
                <li>В открывшемся окне вам нужно указать:
                    <ul>
                        <li>Количество товара</li>
                        <li>Ввести ваш E-Mail на который придет купленный вами товар ( ВНИМАТЕЛЬНО ПРОВЕРЯЙТЕ НАПИСАНИЕ
                            ПОЧТЫ )</li>
                        <li>Выберите способ оплаты</li>
                    </ul>
                </li>
                <li>После оплаты вы получаете свой купленный товар на указанную вами электронную почту при покупке</li>
                <li>Также купленный товар можно будет посмотреть в вашем профиле</li>

            </ol>
        </div>
    </main>
@endsection('content')
