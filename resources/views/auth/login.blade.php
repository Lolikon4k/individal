@extends('layouts.app')
@section('content')
    <div class="relative my-[5%] flex items-center justify-center sm:px-6 lg:px-8 relative items-center">
        <div class="absolute opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-[#2E213F] rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-white">
                    С возвращением!
                </h2>
            </div>

            <form class="mt-8 space-y-6" action="/login" method="POST" id="login_form">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Почта</label>
                    <input name="email" type="email"
                        class="w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="" placeholder="mail@gmail.com">
                </div>
                <div class="mt-8 content-center text-center">
                    <label class="text-sm font-bold text-white  tracking-wide">
                        Пароль
                    </label>
                    <input name="password" type="password"
                        class="w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="" placeholder="Enter your password">
                </div>
                <span class="text-danger my-4 error-text email_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

                <button type="submit"
                    class="w-full flex justify-center bg-[#F69C33] text-white p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-[#37cb46] shadow-lg cursor-pointer transition ease-in duration-300">
                    Войти </button>
            </form>
            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                <span>Нет аккаунта?</span>
                <a href="/register"
                    class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Регистрация</a>
            </p>
        </div>
    </div>
@endsection('content')

<script></script>
