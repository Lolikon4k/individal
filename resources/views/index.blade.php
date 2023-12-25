@extends('layouts.app')
@section('content')
    <div class="filters">

        <div class="filter__adaptive-wrapp" style="display: block;">
            <div class="filters__wrap flex  flex-wrap justify-around gap-30">
                <a href="/" class="m-4 hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-1 px-5 text-base font-semibold text-white outline-none">Все</a>
                @foreach ($janrs as $item_janrs)
                <a href="/indexFilter/{{$item_janrs ->id}}" class="my-10 hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-1 px-5 text-base font-semibold text-white outline-none">{{$item_janrs -> title}}</a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- MAIN -->
    <main class="main__content" id="search-module">


        <!-- PRIMOGEMES -->
        <div class="section__title section__title-primogemes">
            <span>Книги</span>
        </div>

        <div class="section__item section-primogemes">
            @foreach ($books as $item)
                <a href="/moreBook/{{ $item->id }}" class="section-item-box section-farm__item">
                    <div class="section-farm__item-image flex text-center justify-center">
                        <img class="lozad" alt="farm-item__images"
                            src="{{ asset('/_img/imageBook/' . $item->imageBook) }}">
                    </div>

                    <div class="farm__item-bottom">
                        <div class="account-rand__item-title">{{ $item->name }}</div>
                        <div class="farm__item-price">
                            <div class="farm__item-price-now">
                                <span class="costFilter">
                                    {{ $item->cost }} <span class="sc-rubl">₽</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="pagination flex justify-center my-5">
            {{ $books->links() }}
        </div>

    </main>
@endsection('content')
