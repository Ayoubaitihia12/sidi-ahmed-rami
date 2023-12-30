@extends('layouts.sidebar')

@section('title')
تغيير كلمة السر 
@endsection

@section('header')
    / تغيير كلمة السر 
@endsection

@section('content')

<form action="{{ route('admin.password.change',$school) }}" method="post">
@csrf
  <div class="bg-white mx-auto p-8 rounded-xl border w-full max-w-[600px]">
      
    <div class="flex items-center border-b pb-4 justify-between mb-6">
      <h1 class="font-bold text-xl">تغيير كلمة السر</h1>
    </div>
      
      <div class="flex flex-col gap-y-6">
        
        {{-- <div>
          <label for="oldPassword" class="block text-sm font-medium leading-6 text-gray-900">كلمة السر القديمة</label>
          <div class="mt-2 w-full">
              <input type="password" name="oldPassword" id="oldPassword" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-3 outline-none shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
          </div>
          @error('oldPassword')
              <x-danger-badge>{{ $message }}</x-danger-badge>
          @enderror
        </div> --}}

        <div>
          <label for="newPassword" class="block text-sm font-medium leading-6 text-gray-900">كلمة السر الجديدة</label>
          <div class="mt-2 w-full">
              <input type="password" name="newPassword" id="newPassword" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-3 outline-none shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
          </div>
          @error('newPassword')
              <x-danger-badge>{{ $message }}</x-danger-badge>
          @enderror
        </div>

        <div>
          <label for="ConfirmNewPassword" class="block text-sm font-medium leading-6 text-gray-900">تاكيد كلمة السر الجديدة</label>
          <div class="mt-2 w-full">
              <input type="password" name="newPassword_confirmation" id="ConfirmNewPassword" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-3 outline-none shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-color sm:text-sm sm:leading-6" required>
          </div>
          @error('ConfirmNewPassword')
              <x-danger-badge>{{ $message }}</x-danger-badge>
          @enderror
        </div>

        <div class="flex items-center gap-x-2 justify-end pt-2 border-t"> 
          <x-button-primary>
              تغيير كلمة السر
          </x-button-primary>
          <a href="{{ route('schools.show',$school) }}" class="bg-accent-color hover:hover-accent-color active:hover-accent-color rounded-lg text-xs text-white px-4 py-2.5 font-bold">
              الغاء
          </a>
      </div>

      </div>

  </div>

</form>

    
@endsection