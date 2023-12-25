@extends('layouts.app')
@section('content')
    <div class="h-full p-8">
        <div class="bg-[#2E213F] rounded-lg shadow-xl pb-8">

            <div class="w-full h-[250px] bg-cover	bg-center"
                style="background-image: url('_img/bannerUser/{{ Auth::user()->banner }}')">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="_img/avatarUser/{{ Auth::user()->image }}" class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl text-white">{{ Auth::user()->login }}</p>
                    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
                </div>
                <p class="text-white">{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
            </div>
            <div class="flex-1 flex flex-col flex-wrap items-center lg:items-center justify-center px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                    <a href="/profile"
                        class="flex items-center bg-[#22182E] hover:bg-[#F69C33] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                            </path>
                        </svg>
                        <span>Профиль</span>
                    </a>
                    <a href="/settingsProfile"
                        class="flex items-center bg-[#22182E] hover:bg-[#F69C33] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: white;transform: ;msFilter:;">
                            <path
                                d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                            </path>
                            <path
                                d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                            </path>
                        </svg>
                        <span>Настройки профиля</span>
                    </a>
                    <a href="/profileBuy"
                        class="flex items-center bg-[#F69C33] hover:bg-[#22182E] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: white;transform: ;msFilter:;">
                            <path
                                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                            </path>
                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                            <circle cx="17.5" cy="19.5" r="1.5"></circle>
                        </svg>
                        <span>Мои покупки</span>
                    </a>
                    <a href="/logout"
                        class="flex items-center bg-[#22182E] hover:bg-[#F69C33] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: white;transform: ;msFilter:;">
                            <path d="m13 16 5-4-5-4v3H4v2h9z"></path>
                            <path
                                d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                            </path>
                        </svg>
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                        Название
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                        Дата покупки
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                        Цена
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                        Скачать
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookInfo as $item)
                                <tr class="border-b transition duration-300 ease-in-out">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{$item->name}}</td>
                                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                        {{$item->created_at}}
                                    </td>
                                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                        {{$item->cost}}
                                    </td>
                                    <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                                        <a href="/downloadBook/{{$item->id}}" class="btn-product-download">Скачать <span class="flare"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
