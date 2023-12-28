@extends('layouts.sidebar')

@section('title')
الصفحة الرئيسية
@endsection


@section('content')

    <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
        <x-statistic-box title="عدد التلاميذ الاجمالي" bgColor="bg-blue-400" :numbers="$students">
            <i class="fa-solid fa-user-group text-white text-4xl"></i>
        </x-statistic-box>
        <x-statistic-box title="عدد التلاميذ المسجلين" bgColor="bg-green-400" :numbers="$registerStudents">
            <i class="fa-solid fa-user-group text-white text-4xl"></i>
            {{-- <i class="fa-solid fa-users "></i> --}}
        </x-statistic-box>
        <x-statistic-box title="عدد التلاميذ الغير مسجلين" bgColor="bg-red-400" :numbers="$inregisterStudents">
            {{-- <i class="fa-solid fa-user-group text-white text-4xl"></i> --}}
            <i class="fa-solid fa-users-slash text-white text-4xl"></i>
        </x-statistic-box>
    </div>
@endsection