@extends('layouts.sidebar')


@section('title')
بحث فردي 
@endsection

@section('header')
/ بطاقة التلميذ /  بحث فردي 
@endsection

@section('content')

    <form method="get" action="{{ route('students.search') }}">
    <div class="bg-white mb-4 p-4 border grid sm:grid-cols-5 grid-cols-1 gap-y-4 items-end gap-x-6 rounded-xl">
        
        <div class="flex flex-col sm:col-span-2 items-start gap-x-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">الاسم الكامل :</label>
            <div class="mt-2 w-full">
              <input type="text" name="name" id="name" value="{{ $name }}" autocomplete="family-name" class="block rounded-md border-0  w-full px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="flex flex-col sm:col-span-2 items-start gap-x-4">
            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">تاريخ الازدياد   :</label>
            <div class="mt-2 w-full">
              <input type="date" name="date" value={{ request('date') }} id="date" autocomplete="family-name" class="block w-full rounded-md border-0 px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
            </div>
        </div>

        <button type="submit" class="bg-accent-color px-4 rounded-xl py-1.5">
            بحث
        </button>

        

    </div>
    </form>


    <div class="bg-white p-4 border rounded-xl">
        <x-table-student pagination={{false}} :students="$students"/>
    </div>
    
@endsection


