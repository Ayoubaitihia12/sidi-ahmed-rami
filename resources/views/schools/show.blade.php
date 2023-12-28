@extends('layouts.sidebar')


@section('title')
معلومات المؤسسة
@endsection


@section('header')
    / الادارة /   {{ $school['name'] }}
@endsection

@section('content')

<div class="bg-white p-8 rounded-xl border">
    <div class="flex items-center border-b pb-4 justify-between mb-6">
      <h1 class="font-bold text-xl">معلومات المؤسسة </h1>
    </div>
    
    <div class="grid md:grid-cols-2 gap-x-20 gap-y-8 pb-10">
      <x-input-display title='اسم المؤسسة' :item="$school['name']"/>
      <x-input-display title="رمز المؤسسة" :item="$school['code']"/>
      <x-input-display title="الجماعة" :item="$school['commune']"/>
      <x-input-display title="رقم الهاتف" :item="$school['phone']"/>

    </div>

    {{-- <div class="flex items-center gap-x-2 justify-end py-4 border-t"> 
      <x-button-primary>
        شهادة مدرسية  
      </x-button-primary>
      <x-second-button>
          الغاء
      </x-second-button>
  </div> --}}

</div>



@endsection