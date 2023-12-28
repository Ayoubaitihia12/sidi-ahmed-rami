@extends('layouts.sidebar')

@section('title')
المؤسسات 
@endsection

@section('header')
    / المؤسسات
@endsection

@section('content')

<div class="flex mb-8 items-center justify-between bg-white font-bold rounded-xl border px-8 py-4">
    <a href="{{ route('schools.create') }}" class="bg-primary-color px-4 py-2.5 rounded-md text-xs text-white">
        <span>اضافة مؤسسة جديدة</span>
    </a>
    <x-second-badge :number="$schoolNumbers">
        مؤسسة
    </x-second-badge>
</div>

<div class="justify-between bg-white rounded-xl border border-t-0 overflow-hidden">
    
    <x-school-list :schools="$schools"></x-school-list>

</div>


    
@endsection