<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | تسجيل الدخول</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
       
        <div class="grid min-h-[100vh] lg:grid-cols-2 items-center w-full">
            
            <div class="flex flex-col items-center justify-center">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">تسجيل الدخول إلى حسابك</h2>
                </div>
            
                <div class="sm:mx-auto w-[90%] sm:max-w-[600px]">
                    
                    <div class="bg-white px-6 rounded-lg py-12 sm:px-12">
                        
                        <form class="space-y-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div>
                                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">اسم المستخدم</label>
                                <div class="mt-2">
                                <input id="code" name="code" type="text" value="{{ old('code') }}" autocomplete="code" required class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                                </div>
                                <x-input-error :messages="$errors->get('code')" class="mt-2" />
                            </div>
                
                            <div>
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">كلمة المرور</label>
                                <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md px-3 outline-none border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                
                            <div class="pt-4 flex items-center justify-between">
                                <div class="flex items-center gap-x-2">
                                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-color focus:ring-primary-color">
                                    <label for="remember_me" class="ml-3 block text-sm leading-6 text-gray-900">حفظ بيانات الدخول</label>
                                </div>
                    
                                <div class="text-sm leading-6">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="font-semibold text-primary-color">استرجاع كلمة المرور</a>
                                    @endif  
                                </div>
                            </div>
                
                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md bg-primary-color px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-color">تسجيل الدخول</button>
                            </div>
                        </form>
        
                    </div>
                </div>
            </div>

            <div class="bg-second-color lg:flex hidden h-full items-center justify-center">
                <img class="w-[80%]" src="{{ asset('img/login-bg-02_Mesa de trabajo 1.png') }}" alt="">
            </div>

        </div>

    </body>
</html>



    
  
