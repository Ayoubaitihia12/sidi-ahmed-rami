@extends('layouts.sidebar')

@section('title')
الصفحة الرئيسية
@endsection

@section('content')
    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4">
        <x-statistic-box title="عدد المؤسسات" bgColor="bg-blue-400" :numbers="$schools">
            <i class="fa-solid fa-school text-white text-4xl"></i>
        </x-statistic-box>
    </div>
@endsection