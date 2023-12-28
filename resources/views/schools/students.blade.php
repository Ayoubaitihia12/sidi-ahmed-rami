@extends('layouts.sidebar')


@section('title')
لائحة التلاميذ 
@endsection

@section('header')
  / الادارة / {{$school['name']}}
@endsection

@section('content')

  
  <form method="get">
    <div class="bg-white mb-4 p-4 border grid md:grid-cols-5 gap-y-4 items-end gap-x-6 rounded-xl">
      
      <div class="flex flex-col md:col-span-2 items-start gap-x-4">
        <label for="code" class="block text-sm font-medium leading-6 text-gray-900">رقم التسجيل</label>
        <div class="mt-2 w-full">
          <input type="text" name="code" id="code" value="{{ $code }}" autocomplete="family-name" class="block w-full rounded-md border-0 px-3 outline-none py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
        </div>
      </div> 

      <div class="flex flex-col items-start gap-x-3 md:col-span-2">
            <label for="level" class="block text-sm font-medium leading-6 text-gray-900">اخر مستوى دراسي</label>
            <div class="mt-2 w-full">
              <select id="level" name="level" autocomplete="country-name" class="block w-full rounded-md border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset bg-white focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6">
                <option {{ request('level') == 'all' ? 'selected' : '' }} value="all">جميع المستويات</option>
                <option {{ request('level') == 'المستوى الاول' ? 'selected' : '' }} value="المستوى الاول">المستوى الاول</option>
                <option {{ request('level') == 'المستوى الثاني' ? 'selected' : '' }} value="المستوى الثاني">المستوى الثاني</option>
                <option {{ request('level') == 'المستوى الثالت' ? 'selected' : '' }} value="المستوى الثالت">المستوى الثالت</option>
                <option {{ request('level') == 'المستوى الرابع' ? 'selected' : '' }} value="المستوى الرابع">المستوى الرابع</option>
                <option {{ request('level') == 'المستوى الخامس' ? 'selected' : '' }} value="المستوى الخامس">المستوى الخامس</option>
                <option {{ request('level') == 'المستوى السادس' ? 'selected' : '' }} value="المستوى السادس">المستوى السادس</option>
              </select>
            </div>
      </div>
        
      <button type="submit" class="bg-accent-color px-4 rounded-xl py-1.5">
        بحث
      </button>

        {{-- <x-search-button/> --}}

    </div>
  </form>
    
    
    <div class="bg-white p-4 border rounded-xl">
        <x-table-student pagination={{ true }} :students="$students"/>
    </div>
    
@endsection
