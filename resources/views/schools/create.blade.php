@extends('layouts.sidebar')


@section('title')
اضافة مؤسسة جديدة
@endsection

@section('header')
    / المؤسسات / اضافة مؤسسة جديدة
@endsection

@section('content')

<div class="bg-white rounded-xl border px-8 py-4">
   
    <div class="flex items-center border-b pb-4 justify-between mb-6">
        <h1 class="font-bold text-xl">اضافة مؤسسة جديدة</h1>
    </div>

    <form action="{{ route('schools.store') }}" method="post">
        @csrf
        <div class="grid md:grid-cols-2 gap-x-20 gap-y-8 pb-10 pt-4">
            
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">اسم المؤسسة</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-3 outline-none shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
                </div>
                @error('name')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">رمز المؤسسة</label>
                <div class="mt-2">
                    <input type="text" name="code" id="code" value="{{ old('code') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-3 outline-none shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
                </div>
                @error('code')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">كلمة المرور</label>
                <div class="mt-2">
                    <input type="password" name="password" id="password" required autocomplete="new-password" class="block w-full rounded-md border-0 px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('password')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">تاكيد كلمة المرور</label>
                <div class="mt-2">
                    <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('password_confirmation')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="commune" class="block text-sm font-medium leading-6 text-gray-900">الجماعة الترابية</label>
                <div class="mt-2">
                    <input type="text" name="commune" id="commune" value="{{ old('commune') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
                </div>
                @error('commune')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">رقم الهاتف ( اختياري )</label>
                <div class="mt-2">
                    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
                </div>
                @error('phone')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>


        </div>

        <div class="flex items-center gap-x-2 justify-end py-4 border-t"> 
            <x-button-primary>
                اضافة مؤسسة جديدة
            </x-button-primary>
            <a href="{{ route('schools.index') }}" class="bg-accent-color hover:hover-accent-color active:hover-accent-color rounded-lg text-xs text-white px-4 py-2.5 font-bold">
                الغاء
            </a>
        </div>

    </form>
</div>
    
@endsection