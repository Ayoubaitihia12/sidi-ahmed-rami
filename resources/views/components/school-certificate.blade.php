@props(['user','student','num_certificate'])

<div style="border: 1px solid #e2e8f0; border-radius: 0.375rem; padding: 1.5rem; padding-bottom: 4rem; margin-top: 0.5rem;">

    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); align-items: center; font-size: 0.875rem; column-gap: 1rem;">

        <div>
            <p style="font-weight: 600;text-align:right">الاكاديمية الجهوية للتربية و التكوين</p>
            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); column-gap: 0.5rem;">
                <ul style="font-weight: 300;line-height: 1.5;text-align: right">
                    <li style="list-style-type: none;">سوس - ماسة</li>
                    <li style="list-style-type: none;">عمالة : اكادير اداوتنان</li>
                </ul>
                <ul style="font-weight: 500;line-height: 1.5;text-align: right">
                    <li style="font-weight: 600;list-style-type: none;">: لجهة</li>
                    <li style="font-weight: 600;list-style-type: none;">: المديرية الاقليمية</li>
                </ul>
            </div>

        </div>

        <img src="{{ asset('img/gev-logo.webp') }}" style="width: 7.5rem; margin-left: auto; margin-right: auto;" alt="">

        <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); column-gap: 0.5rem;">
            <ul style="font-weight: 300;line-height: 1.5;text-align: right">
                <li style="list-style-type: none;">{{ $user['commune'] ? $user['commune'] : '---------------' }}</li>
                <li style="list-style-type: none;">{{ $user['name'] ? $user['name'] : '------------------' }}</li>
                <li style="list-style-type: none;">{{ $user['phone'] ? $user['phone'] : '---------------' }}</li>
            </ul>
            <ul style="font-weight: 500;line-height: 1.5;text-align: right">
                <li style="font-weight: 600;list-style-type: none;">: الجماعة</li>
                <li style="font-weight: 600;list-style-type: none;">: المؤسسة</li>
                <li style="font-weight: 600;list-style-type: none;">: الهاتف</li>
            </ul>
        </div>

    </div>

    <div style="border-width: 2px; margin-top: 1.5rem; border: 2px solid #000000; padding-left: 0.25rem; padding-right: 0.25rem; padding-top: 0.5rem; padding-bottom: 0.5rem;">
        <h3 style="text-align: center; font-weight: 600; font-size: 0.875rem;">شهادة مدرسية رقم : {{ $user['certificate_number'] }}</h3>
    </div>

    @php
    if($student['studing'] == "0") $studing = "انقطع عن الدراسة";
    if($student['studing'] == "1") $studing = "يتابع دراسته (ها)";
    @endphp

    <div style="width: 100%; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); margin-top: 2.5rem; align-items: center; font-size: 0.875rem;">


        <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); column-gap: 0.5rem;text-align: right">
            <ul style="font-weight: 300;line-height: 1.5;">
                <li style="font-weight: 600;list-style-type: none;">Nom et Prenom :</li>
                <li style="list-style-type: none;">{{ $student["dateBirth"] }}</li>
            </ul>
            <ul style="font-weight: 500;line-height: 1.5;">
                <li style="list-style-type: none;">{{ $student["frName"] }}</li>
                <li style="font-weight: 600;list-style-type: none;">: بتاريخ</li>
            </ul>
        </div>

        <div style="text-align: right">
            <span style="font-weight: 600">ت/يشهد الموقع (ة) اسفله</span>
            <div style="margin-top: 1.5rem; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); column-gap: 0.5rem;">
                <ul style="font-weight: 300; margin-bottom: 0.5rem;line-height: 1.5;">
                    <li style="list-style-type: none;">{{ $student["arName"] }}</li>
                    <li style="list-style-type: none;">{{ $student["placeBirth"] }}</li>
                    <li style="list-style-type: none;">{{ $student["code"] }}</li>
                </ul>
                <ul style="font-weight: 500; margin-bottom: 0.5rem;line-height: 1.5;">
                    <li style="font-weight: 600;list-style-type: none;">ان التلميذ (ة) الاسم و النسب</li>
                    <li style="font-weight: 600;list-style-type: none;">المولود (ة) في</li>
                    <li style="font-weight: 600;list-style-type: none;">رقم التسجيل</li>
                </ul>
            </div>

        </div>

    </div>

    <div style="font-size: 0.875rem; margin-top: 2.5rem; margin-bottom: 1rem;">
        <p style="font-weight: 600;text-align: right;margin-bottom:17px">{{ $studing }} بهذه المؤسسة بالمستوى: <span style="font-weight: 300;">{{ $student['level'] }} بتاريخ {{ $student['dateStuding'] }}</span></p>

        <p style="text-align: right;font-weight:600">ملاحظات: <span style="font-weight: 300;">سلمت له (ها) هذه الشهادة من اجل الادلاء بها لغرض اداري</span></p>

        <p style="text-align: left;">حرر ب ....................................................  في {{ date('Y/m/d') }}</p>

        <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem;">
            <p>خاتم و توقيع رئيس المؤسسة</p>
            <p>خاتم و توقيع الحارس العام / الناطر المسؤول عن المعلومات الواردة في الشهادة</p>
        </div>
    </div>


</div>
