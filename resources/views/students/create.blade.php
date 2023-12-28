@extends('layouts.sidebar')

@section('title')
اضافة تلميذ جديد
@endsection

@section('header')
/ بطاقة التلميذ / اضافة تلميذ جديد
@endsection

@section('content')

<div class="bg-white rounded-xl border px-8 py-4">

    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="flex items-center border-b pb-4 justify-between mb-6">
            <h1 class="font-bold text-xl">اضافة تلميذ جديد</h1>
        </div>
        
        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-20 gap-y-8 pb-10 pt-4">
            
            <div>
                <label for="arName" class="block text-sm font-medium leading-6 text-gray-900">الاسم الكامل ( بالعربية )</label>
                <div class="my-2">
                    <input type="text" required name="arName" id="arName" value="{{ old('arName') }}" class="block w-full rounded-md border-0 px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('arName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="frName" class="block text-sm font-medium leading-6 text-gray-900">الاسم الكامل ( بالفرنسية )</label>
                <div class="my-2">
                    <input type="text" required name="frName" id="frName" value="{{ old('frName') }}" class="block w-full rounded-md border-0 px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('frName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">رقم التسجيل بالمؤسسة</label>
                <div class="my-2">
                    <input type="text" required name="code" id="code" value="{{ old('code') }}" class="block w-full rounded-md border-0 py-1.5 px-3 outline-none text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('code')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="dateInscription" class="block text-sm font-medium leading-6 text-gray-900">تاريخ التسجيل</label>
                <div class="my-2">
                    <input type="date" required name="dateInscription" id="dateInscription" value="{{ old('dateInscription') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('dateInscription')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="placeBirth" class="block text-sm font-medium leading-6 text-gray-900">مكان الازدياد</label>
                <div class="my-2">
                    <input type="text" required name="placeBirth" id="placeBirth" value="{{ old('placeBirth') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('placeBirth')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="dateBirth" class="block text-sm font-medium leading-6 text-gray-900">تاريخ الازدياد</label>
                <div class="my-2">
                    <input type="date" required name="dateBirth" id="dateBirth" value="{{ old('dateBirth') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('dateBirth')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="fatherName" class="block text-sm font-medium leading-6 text-gray-900">اسم الاب ( بالعربية )</label>
                <div class="my-2">
                    <input type="text" required name="fatherName" id="fatherName" value="{{ old('fatherName') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('fatherName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="frFatherName" class="block text-sm font-medium leading-6 text-gray-900">اسم الاب ( بالفرنسية )</label>
                <div class="my-2">
                    <input type="text" required name="frFatherName" id="frFatherName" value="{{ old('frFatherName') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('frFatherName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="motherName" class="block text-sm font-medium leading-6 text-gray-900">اسم الام ( بالعربية )</label>
                <div class="my-2">
                    <input type="text" required name="motherName" id="motherName" value="{{ old('motherName') }}" class="block w-full px-3 outline-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('motherName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <div>
                <label for="frMotherName" class="block text-sm font-medium leading-6 text-gray-900">اسم الام ( بالفرنسية )</label>
                <div class="my-2">
                    <input type="text" required name="frMotherName" id="frMotherName" value="{{ old('frMotherName') }}" class="block w-full rounded-md px-3 border-0 py-1.5 outline-none text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('frMotherName')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <fieldset class="flex items-center justify-between">
                <label class="text-sm font-semibold leading-6 text-gray-900">التمدرس</label>
                <div class="flex items-center gap-x-4">
                    <div class="flex items-center gap-x-3">
                        <input id="studing1" name="studing" type="radio" value="1" class="h-4 w-4 border-gray-300 text-primary-color focus:ring-primary-color">
                        <label for="studing1" class="block text-sm font-medium leading-6 text-gray-900">يتابع دراسته (ها)</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="studing2" name="studing" type="radio" value="0" class="h-4 w-4 border-gray-300 text-primary-color focus:ring-primary-color">
                        <label for="studing2" class="block text-sm font-medium leading-6 text-gray-900">انقطع عن الدراسة</label>
                    </div>
                </div>
                @error('studing')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </fieldset>

            <div>
                <label for="dateStuding" class="block text-sm font-medium leading-6 text-gray-900">بتاريخ</label>
                <div class="my-2">
                    <input type="date" required name="dateStuding" value="{{ old('dateStuding') }}" id="dateStuding" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                </div>
                @error('dateStuding')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>

            <fieldset class="flex items-center justify-between">
                <label class="text-sm font-semibold leading-6 text-gray-900">الجنس</label>
                <div class="flex items-center gap-x-8">
                    <div class="flex items-center gap-x-3">
                        <input id="male" name="sex" type="radio" value="ذكر" class="h-4 w-4 border-gray-300 text-primary-color focus:ring-primary-color">
                        <label for="male" class="block text-sm font-medium leading-6 text-gray-900">ذكر</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="female" name="sex" type="radio" value="انثى" class="h-4 w-4 border-gray-300 text-primary-color focus:ring-primary-color">
                        <label for="female" class="block text-sm font-medium leading-6 text-gray-900">انثى</label>
                    </div>
                </div>
                @error('sex')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </fieldset>

            <div class="gap-y-3">
                <label for="level" class="block text-sm font-medium leading-6 text-gray-900">اخر مستوى دراسي</label>
                <div class="mt-2">
                  <select id="level" name="level" autocomplete="level" class="block rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset bg-white focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6 w-full">
                    <option value="المستوى الاول">المستوى الاول</option>
                    <option value="المستوى الثاني">المستوى الثاني</option>
                    <option value="المستوى الثالت">المستوى الثالت</option>
                    <option value="المستوى الرابع">المستوى الرابع</option>
                    <option value="المستوى الخامس">المستوى الخامس</option>
                    <option value="المستوى السادس">المستوى السادس</option>
                  </select>
                </div>
                @error('level')
                    <x-danger-badge>{{ $message }}</x-danger-badge>
                @enderror
            </div>
        </div>

        <div class="flex items-center gap-x-2 justify-end py-4 border-t"> 
            <x-button-primary>
                اضافة تلميذ جديد
            </x-button-primary>
            <a href="{{ route('students.index') }}" class="bg-accent-color hover:hover-accent-color active:hover-accent-color rounded-lg text-xs text-white px-4 py-2.5 font-bold">
                الغاء
            </a>
        </div>
    </form> 
</div>
    
@endsection