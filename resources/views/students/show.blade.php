@extends('layouts.sidebar')


@section('title')
معلومات التلميذ 
@endsection


@section('header')
/ بطاقة التلميذ / معلومات التلميذ
@endsection

@section('content')

<div class="bg-white p-8 rounded-xl border">
    <div class="flex items-center border-b pb-4 justify-between mb-6">
      <h1 class="font-bold text-xl">معلومات التلميذ </h1>

    </div>

    @php
      if($student['studing'] == "0") $studing = "انقطع عن الدراسة";
      if($student['studing'] == "1") $studing = "يتابع دراسته (ها)";
    @endphp
    
    <div class="grid md:grid-cols-2 gap-x-20 gap-y-8 pb-10">
      <x-input-display title='الاسم الكامل ( بالعربية )' :item="$student['arName']"/>
      <x-input-display title="الاسم الكامل ( بالفرنسية )" :item="$student['frName']"/>
      <x-input-display title="رقم التسجيل بالمؤسسة" :item="$student['code']"/>
      <x-input-display title="تاريخ التسجيل" :item="$student['dateInscription']"/>
      <x-input-display title="مكان الازدياد" :item="$student['placeBirth']"/>
      <x-input-display title="تاريخ الازدياد" :item="$student['dateBirth']"/>
      <x-input-display title="اسم الاب ( بالعربية )" :item="$student['fatherName']"/>
      <x-input-display title="( بالفرنسية ) اسم الاب" :item="$student['frFatherName']"/>
      <x-input-display title="اسم الام ( بالعربية )" :item="$student['motherName']"/>
      <x-input-display title="اسم الام ( بالفرنسية )" :item="$student['frMotherName']"/>
      <x-input-display title="التمدرس" :item="$studing"/>
      <x-input-display title="بتاريخ" :item="$student['dateStuding']"/>
      <x-input-display title="الجنس" :item="$student['sex']"/>
      <x-input-display title="المستوى الدراسي" :item="$student['level']"/>
    </div>

    <div class="flex items-center gap-x-2 justify-center py-4 border-t"> 
      <a target="_blak" href="{{ route('students.certificate',$student) }}" class="bg-primary-color text-white px-4 py-1.5 rounded-md">
        <i class="fa-solid fa-print ml-2 text-sm"></i>
        <span class="text-xs font-bold">طباعة الشهادة المدرسية</span>
      </a>
    </div>

</div>

    
@endsection


