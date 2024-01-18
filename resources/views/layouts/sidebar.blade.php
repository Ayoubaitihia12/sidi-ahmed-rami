<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

        <style>
            body{
                font-family: 'Cairo', sans-serif;
            }
        </style>
        
    </head>
    <body class="antialiased">
        
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        
        <div id="backdrop" class="fixed hidden inset-0 bg-gray-900/80"></div>
    
        <div id="navbar" class="fixed -right-[100%] max-w-xs w-full inset-0 duration-700 flex">
           
            <div class="relative mr-0 flex shadow-md w-full max-w-xs flex-1">
    
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div style="background-color: #111827" class="flex grow flex-col gap-y-5 overflow-y-autopx-6 pb-4 px-2">
                <div class="flex gap-y-3 border-b flex-col py-6 pt-10 items-center gap-x-4 shrink-0">
                    <div class="w-[60px] h-[60px] rounded-full overflow-hidden">
                        <img src="{{ asset('img/profile.png') }}" class="w-full h-full object-cover" alt="">
                    </div>
                    <h1 class="font-bold text-sm text-gray-300">{{ auth()->user()->name }}</h1>
                </div>
                <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                    <ul role="list" class="-mx-2 space-y-1">
                        @if(auth()->user()->isSchool())
                        <x-nav-link link="الصفحة الرئيسية" path="{{ route('school_home') }}" :active="Request::routeIs('school_home')">
                            <i class="fa-solid fa-house text-lg"></i>
                        </x-nav-link> 
                        @endif
                        @if(auth()->user()->isAdmin())
                        <x-nav-link link="الصفحة الرئيسية" path="{{ route('admin_home') }}" :active="Request::routeIs('admin_home')">
                            <i class="fa-solid fa-house text-lg"></i>
                        </x-nav-link> 
                        @endif
                        @if(auth()->user()->isSchool())
                        <ul>
                            <div onclick="open_nav()" class="submenu-toggle z-40 block cursor-pointer w-full text-left py-2 text-sm text-gray-400 focus:outline-none">
                                <span class="flex items-center justify-between">
                                    <div class="w-full flex items-center justify-between text-gray-400 hover:text-white hover:bg-gray-800 duration-300 group gap-x-4 rounded-md p-2 text-xs leading-6 font-bold">
                                        <span class="flex items-end gap-x-4">
                                            <i class="fa-solid fa-user-group text-lg"></i>
                                            بطاقة التلميذ   
                                        </span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                        
                            <!-- Submenu content -->
                            <div class="submenu-content space-y-2 hidden">
                                <a href="{{ route('students.create') }}" class="font-bold {{ Request::routeIs('students.create') ? 'text-white-color bg-gray-800' : 'text-gray-400' }} hover:text-white hover:bg-gray-800 duration-300 text-xs px-2 pr-12 block py-3">
                                    اضافة تلميذ جديد
                                </a>
                                <a href="{{ route('students.index') }}" class="font-bold {{ Request::routeIs('students.index') ? 'text-white-color bg-gray-800' : 'text-gray-400' }} hover:text-white hover:bg-gray-800 duration-300 px-2 pr-12 rounded-md text-xs block py-3">
                                    لائحة التلاميذ
                                </a>
                                <a href="{{ route('students.search') }}" class="font-bold {{ Request::routeIs('students.search') ? 'text-white-color bg-gray-800' : 'text-gray-400' }} hover:text-white hover:bg-gray-800 duration-300 pr-12 text-xs block px-2 py-3">
                                    بحث فردي
                                </a>
                            </div>
                        </ul>
                        
                        @endif   
                        @if(auth()->user()->isAdmin())
                        <x-nav-link link="الادارة" path="{{ route('schools.index') }}" :active="Request::routeIs('schools.*')">
                            <i class="fa-solid fa-school text-lg"></i>
                        </x-nav-link>
                        @endif                  
                    </ul>
                    </li>  
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </div>
    
        <!-- Static sidebar for desktop -->
        <div class="hidden border-x shadow-sm lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div style="background-color: #111827" class="flex text-white grow flex-col gap-y-5 overflow-x-none overflow-y-auto border-r border-gray-200 px-6 pb-4">
                
                <div class="flex gap-y-3 border-b border-gray-600 flex-col py-6 pt-10 items-center gap-x-4 shrink-0">
                    <div class="w-[70px] h-[70px] rounded-full overflow-hidden">
                        <img src="{{ asset('img/profile.png') }}" class="w-full h-full object-cover" alt="">
                    </div>
                    <h1 class="font-bold text-sm text-gray-300">{{ auth()->user()->name }}</h1>
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="z-20 flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                @if(auth()->user()->isSchool())
                                <x-nav-link link="الصفحة الرئيسية" path="{{ route('school_home') }}" :active="Request::routeIs('school_home')">
                                    <i class="fa-solid fa-house text-lg"></i>
                                </x-nav-link> 
                                @endif
                                @if(auth()->user()->isAdmin())
                                <x-nav-link link="الصفحة الرئيسية" path="{{ route('admin_home') }}" :active="Request::routeIs('admin_home')">
                                    <i class="fa-solid fa-house text-lg"></i>
                                </x-nav-link> 
                                @endif
                                @if(auth()->user()->isSchool())
                                {{-- <ul class="z-50">
                                    <div onclick="open_nav1()" class="submenu-toggle1 z-40 block cursor-pointer w-full text-left py-2 text-xs text-gray-400 focus:outline-none">
                                        <span class="flex items-center justify-between">
                                            <div class="w-full flex items-center justify-between text-gray-400 hover:text-white-color hover:bg-gray-800 duration-300 group gap-x-4 rounded-md p-2 text-xs leading-6 font-bold">
                                                <span class="flex items-end gap-x-4">
                                                    <i class="fa-solid fa-user-group text-lg"></i>
                                                    بطاقة التلميذ   
                                                </span>
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </span>
                                    </div>
                                
                                    <!-- Submenu content -->
                                    <div class="submenu-content1 space-y-2">
                                        <a href="{{ route('students.create') }}" class="font-bold {{ Request::routeIs('students.create') ? 'bg-gray-800 text-white-color' : 'text-gray-400' }} hover:bg-gray-800 hover:text-white-color duration-300 text-xs px-2 pr-12 rounded-md block py-3">
                                            اضافة تلميذ جديد
                                        </a>
                                        <a href="{{ route('students.index') }}" class="font-bold {{ Request::routeIs('students.index') ? 'bg-gray-800 text-white-color' : 'text-gray-400' }} hover:bg-gray-800 hover:text-white-color duration-300 px-2 pr-12 rounded-md text-xs block py-3">
                                            لائحة التلاميذ
                                        </a>
                                        <a href="{{ route('students.search') }}" class="font-bold {{ Request::routeIs('students.search') ? 'bg-gray-800 text-white-color' : 'text-gray-400' }} hover:bg-gray-800 hover:text-white-color duration-300 pr-12 rounded-md text-xs block px-2 py-3">
                                            بحث فردي
                                        </a>
                                    </div>
                                </ul>                                 --}}

                                <x-nav-link link="اضافة تلميذ جديد" path="{{ route('students.create') }}" :active="Request::routeIs('students.create')">
                                    <i class="fa-solid fa-user-plus text-lg"></i>
                                </x-nav-link>
                                
                                <x-nav-link link="لائحة التلاميذ" path="{{ route('students.index') }}" :active="Request::routeIs('students.index')">
                                    <i class="fa-solid fa-user-group text-lg"></i>
                                </x-nav-link>

                                <x-nav-link link="بحث فردي" path="{{ route('students.search') }}" :active="Request::routeIs('students.search')">
                                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                                </x-nav-link>
                                
                                @endif   
                                @if(auth()->user()->isAdmin())
                                <x-nav-link link="الادارة" path="{{ route('schools.index') }}" :active="Request::routeIs('schools.*')">
                                    <i class="fa-solid fa-school text-lg"></i>
                                </x-nav-link>
                                @endif                  
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    
        <div class="lg:pr-72 bg-gray-50">           
            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8 min-h-screen">
                <!-- Your content -->
                <x-header>
                    @yield('header')
                </x-header>
                @if(session()->has('success'))
                    <x-success-alert>{{session('success')}}</x-success-alert> 
                @endif
                @if(session()->has('success'))
                    <x-danger-badge>{{session('error')}}</x-danger-badge> 
                @endif
                <div class="pt-8">
                    @yield('content')
                </div>
                </div>
            </main>
        </div>
    </div>
  

    </body>

    <script>

        const backdrop = document.getElementById('backdrop');
        const navbar = document.getElementById('navbar');
        const menu_bar = document.getElementById('menu-bar');

        backdrop.addEventListener('click',()=>{

            navbar.classList.add('-right-[100%]');
            backdrop.classList.add('hidden');
        })

        menu_bar.addEventListener('click',()=>{

            navbar.classList.remove('-right-[100%]');
            backdrop.classList.remove('hidden');
        })

        const submenu_content = document.querySelector('.submenu-content');

        const open_nav = ()=>{
            submenu_content.classList.toggle('hidden');
        }

        const submenu_content1 = document.querySelector('.submenu-content');

        const open_nav1 = ()=>{
            submenu_content.classList.toggle('hidden');
        }




    </script>
</html>
