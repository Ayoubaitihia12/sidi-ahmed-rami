@extends('layouts.sidebar')


@section('title')
الحساب الشخصي 
@endsection

@section('header')
    / الحساب الشخصي
@endsection

@section('content')

<div class="bg-white p-8 rounded-xl border">
    <div class="flex items-center border-b pb-4 justify-between mb-6">
      <h1 class="font-bold text-xl">المعلومات الشخصية </h1>
    </div>
    
    @if(auth()->user()->isSchool())
    <div class="grid grid-cols-2 gap-x-20 gap-y-8 pb-10">
      <x-input-display title='اسم المؤسسة' :item="$user['name']"/>
      <x-input-display title="رمز المؤسسة" :item="$user['code']"/>
      @if($user['commune'])
      <x-input-display title="الجماعة" :item="$user['commune']"/>
      @endif
      @if($user['phone'])
      <x-input-display title="رقم الهاتف" :item="$user['phone']"/>
      @endif
    </div>
    @endif

    @if(auth()->user()->isAdmin())
    <div class="grid grid-cols-2 gap-x-20 gap-y-8 pb-10">
      <x-input-display title='الاسم الكامل' :item="$user['name']"/>
      <x-input-display title="اسم المستخدم" :item="$user['code']"/>
    </div>
    @endif

</div>


    
@endsection