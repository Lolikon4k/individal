@extends('layouts.app')
@section('content')
    <div class="relative my-[5%] flex items-center justify-center sm:px-6 lg:px-8 relative items-center">
        <div class="absolute opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-[#2E213F] rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-white">
                    Добро пожаловать странник!
                </h2>
            </div>

            <form class="mt-8 space-y-6" action="/register" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="relative text-center">
                    <label class="text-sm w-full  font-bold text-white tracking-wide">Имя</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="text" name="name" placeholder="">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">

                    <label class="text-sm font-bold text-white tracking-wide">Фамилия</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="text" name="surname" placeholder="">
                    @error('surname')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Логин</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="text" name="login" placeholder="">
                    @error('login')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Дата рождения</label>
                    <input type="date"
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        name="birthday" placeholder="">
                    @error('birthday')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Номер телефона</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="tel" name="phone" placeholder="">
                    @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">

                    <label class="text-sm font-bold text-white tracking-wide">Почта</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="email" name="email" placeholder="">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Пароль</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="password" name="password" placeholder="">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative text-center">
                    <label class="text-sm font-bold text-white tracking-wide">Повторите пароль</label>
                    <input
                        class=" w-full text-black py-2 px-3 rounded-2xl border-b border-gray-300 focus:text-black focus:outline-none focus:border-indigo-500"
                        type="password" name="confirm_password" placeholder="">
                    @error('confirm_password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <input type="submit"
                        class="w-full flex justify-center bg-[#F69C33] text-white p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-[#37cb46] shadow-lg cursor-pointer transition ease-in duration-300"
                        value="Регистрация">
                </div>

            </form>
            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                <span>Есть аккаунт?</span>
                <a href="/login"
                    class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Войти</a>
            </p>
        </div>
    </div>
@endsection('content')
