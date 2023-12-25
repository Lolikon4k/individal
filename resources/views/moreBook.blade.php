@extends('layouts.app')
@section('content')
    <main class="product" itemscope="" itemtype="http://schema.org/Product">
        <div class="product-top">
            <a href="/" class="btn-product-back" style="margin: 40px 0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                    <path
                        d="M7.50695 15.6275C7.77343 15.8766 8.11138 16 8.44822 16C8.82052 16 9.19116 15.8498 9.46429 15.5532C9.98451 14.9881 9.95126 14.1046 9.3906 13.5802L4.91509 9.39617H18.615C19.3801 9.39617 20 8.77125 20 8.00001C20 7.22878 19.3801 6.60386 18.615 6.60386H4.98637L9.57066 2.43269C10.1385 1.91611 10.1834 1.03318 9.67093 0.460759C9.15847 -0.111666 8.28257 -0.156901 7.7147 0.359677L0.457098 6.96351C0.168456 7.22598 0.00280537 7.59904 3.51225e-05 7.99052C-0.00273512 8.38256 0.158484 8.75729 0.443248 9.02367L7.50695 15.6275Z"
                        fill="#533E6A"></path>
                </svg>
                <span>Назад</span>
            </a>
        </div>

        <section class="product-wrapper">
            <h1 itemprop="name">{{ $bookInfo->name }}</h1>
            <div class="product-wrapper-section">
                <div class="product-wrapper-left ">
                    <img itemprop="image" src="{{ asset('_img/imageBook/' . $bookInfo->imageBook) }}"
                        alt="dori-sale-farm-wanderer">
                </div>
                <div style="display: none;" itemprop="aggregateRating" itemscope=""
                    itemtype="http://schema.org/AggregateRating">
                    Рейтинг <span itemprop="ratingValue">5</span>/5
                    голосов <span itemprop="reviewCount">15</span>
                </div>
                <div class="product-wrapper-center">
                    <ul class="product-list">
                        <li>
                            <span class="product-list-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M7.04 1.28V5.76C7.04 6.09948 6.90514 6.42505 6.6651 6.6651C6.42505 6.90514 6.09948 7.04 5.76 7.04H1.28C0.940523 7.04 0.61495 6.90514 0.374903 6.6651C0.134857 6.42505 0 6.09948 0 5.76V1.28C0 0.940523 0.134857 0.61495 0.374903 0.374903C0.61495 0.134857 0.940523 0 1.28 0H5.76C6.09948 0 6.42505 0.134857 6.6651 0.374903C6.90514 0.61495 7.04 0.940523 7.04 1.28ZM14.72 0H10.24C9.90052 0 9.57495 0.134857 9.3349 0.374903C9.09486 0.61495 8.96 0.940523 8.96 1.28V5.76C8.96 6.09948 9.09486 6.42505 9.3349 6.6651C9.57495 6.90514 9.90052 7.04 10.24 7.04H14.72C15.0595 7.04 15.385 6.90514 15.6251 6.6651C15.8651 6.42505 16 6.09948 16 5.76V1.28C16 0.940523 15.8651 0.61495 15.6251 0.374903C15.385 0.134857 15.0595 0 14.72 0ZM5.76 8.96H1.28C0.940523 8.96 0.61495 9.09486 0.374903 9.3349C0.134857 9.57495 0 9.90052 0 10.24V14.72C0 15.0595 0.134857 15.385 0.374903 15.6251C0.61495 15.8651 0.940523 16 1.28 16H5.76C6.09948 16 6.42505 15.8651 6.6651 15.6251C6.90514 15.385 7.04 15.0595 7.04 14.72V10.24C7.04 9.90052 6.90514 9.57495 6.6651 9.3349C6.42505 9.09486 6.09948 8.96 5.76 8.96ZM12.48 8.96C11.7838 8.96 11.1033 9.16644 10.5244 9.55323C9.94553 9.94001 9.49436 10.4898 9.22794 11.133C8.96152 11.7761 8.89182 12.4839 9.02764 13.1667C9.16346 13.8495 9.4987 14.4767 9.99098 14.969C10.4833 15.4613 11.1105 15.7965 11.7933 15.9324C12.4761 16.0682 13.1838 15.9985 13.827 15.7321C14.4702 15.4656 15.02 15.0145 15.4068 14.4356C15.7936 13.8567 16 13.1762 16 12.48C16 11.5464 15.6291 10.6511 14.969 9.99098C14.3089 9.33085 13.4136 8.96 12.48 8.96Z"
                                        fill="#A185BF"></path>
                                </svg>
                                <span>Жанр:</span>
                            </span>
                            <span class="product-list-left">{{ $genreTitles }}</span>
                        </li>
                        <li>
                            <span class="product-list-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"
                                        fill="#A185BF">
                                    </path>
                                </svg>
                                <span>Издательство:</span>
                            </span>
                            <span class="product-list-left"> {{ $bookInfo->publisher->title }} </span>
                        </li>
                        <li>
                            <span class="product-list-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                                    <path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                                    </path>
                                    <path
                                        d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"
                                        fill="#A185BF">
                                    </path>
                                </svg>
                                <span>Год издания:</span>
                            </span>
                            <span class="product-list-left"> {{ $bookInfo->YearPublishing }} </span>
                        </li>
                        <li>
                            <span class="product-list-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z"
                                        fill="#A185BF">
                                    </path>
                                    <path
                                        d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"
                                        fill="#A185BF">
                                    </path>
                                    <path
                                        d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"
                                        fill="#A185BF">
                                    </path>
                                </svg>
                                <span>Количество страниц:</span>
                            </span>
                            <span class="product-list-left"> {{ $bookInfo->contPages }} </span>
                        </li>
                    </ul>

                    <span class="productDescription" itemprop="description">Описание книги</span>
                    </p>
                    {{ $bookInfo->description }}
                    </p>
                    @if (Auth::user()->role_id == 1)
                        <a href="/redactBook/{{ $bookInfo->id }}" class="btn-product-download my-4">Редактировать <span
                                class="flare"></span></a>

                        <a href="/deleteBook/{{ $bookInfo->id }}" class="btn-product-download my-4">Удалить <span
                                class="flare"></span></a>
                    @endif

                </div>
                <div class="product-wrapper-right" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                    <time itemprop="priceValidUntil" datetime="2023-12-20"></time>


                    <div class="product-wrapper-right-content">

                        @if (!$isBought)
                            <div class="product-price-now-section">
                                <span class="product-price-now" itemprop="price" content="599"> {{ $bookInfo->cost }}
                                </span>
                                <span class="price--sc" itemprop="priceCurrency" content="RUB">₽</span>
                            </div>
                        @endif

                        @if ($isBought)
                            <a href="/downloadBook/{{ $bookInfo->id }}" class="btn-product-download">Скачать <span
                                    class="flare"></span></a>
                        @else
                            <a class="btn-product-buy">Купить <span class="flare"></span></a>
                        @endif
                    </div>
                </div>

            </div>
        </section>

        <div class="popup-pay-fade"></div>
        <div class="popup-section" style="display: none;">
            <div class="popup-pay">
                <div class="popup-pay-top">
                    <a class="popup-pay-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M16.6345 19.4339C16.9873 19.7879 17.4636 19.9875 17.9606 19.9896C18.4828 20.0447 19.0042 19.8782 19.4003 19.5297C19.4307 19.5009 19.4601 19.4712 19.4885 19.4405C20.2036 18.6678 20.1641 17.455 19.4003 16.7316L12.6744 9.96728L19.4003 3.16311C19.9962 2.41967 19.9585 1.34546 19.3121 0.64657C18.5972 -0.126285 17.3984 -0.166486 16.6345 0.5567L9.99543 7.27301L3.22196 0.460835C2.51277 -0.153612 1.46676 -0.153612 0.757509 0.460835C-0.0371501 1.14931 -0.129667 2.35914 0.550827 3.16305L7.30446 9.9953L0.55089 16.8275C-0.18363 17.575 -0.18363 18.7822 0.55089 19.5297C0.923328 19.8536 1.40556 20.0185 1.89591 19.9896C2.37983 20.0135 2.85433 19.8489 3.22196 19.5297L9.97558 12.6975L16.6345 19.4339Z"
                                fill="#533E6A"></path>
                        </svg></a>
                </div>

                <div class="popup-pay-body">
                    <div>
                        <h2 class="center-block">Выберите способ оплаты</h2>
                        <table class="table-leque">
                            <tbody class="formcomposer">
                                <tr>
                                    <td>Наименование</td>
                                    <td>
                                        <span>
                                            {{ $bookInfo->name }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>
                                        <span class="text-center">
                                            {{ $bookInfo->cost }}
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pay-body-method">
                        <button class="type-pay" data-value="all">Все</button>
                        @foreach ($type_pays as $item_type)
                            <button class="type-pay" data-value="{{ $item_type->id }}">{{ $item_type->title }}</button>
                        @endforeach
                    </div>
                    <div class="pay-body-listPay">
                        <ul class="payment__list methods-list">
                            @foreach ($method_pays as $item_methods)
                                <a href="/buyBook/{{ $bookInfo->id }}/{{ $item_methods->id }}"
                                    class="modal__payments-item" data-value_methods="{{ $item_methods->id }}"
                                    data-typepay="{{ $item_methods->id_typePay }}">
                                    <button type="button" class="modal__payments-item_btn">
                                        <span class="modal__payments-item-labels">
                                            <img src="{{ asset('_img/methodPays/' . $item_methods->imgPay) }}"
                                                alt="{{ $item_methods->title }}">
                                        </span>
                                    </button>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.querySelectorAll('.type-pay').forEach(button => {
            button.addEventListener('click', function() {
                const typePayId = this.getAttribute('data-value');
                document.querySelectorAll('.methods-list a').forEach(method => {
                    if (typePayId === 'all' || method.getAttribute('data-typepay') === typePayId) {
                        method.style.display = 'block';
                    } else {
                        method.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection('content')
