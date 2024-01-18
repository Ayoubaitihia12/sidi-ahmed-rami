<!DOCTYPE html>
<html lang="ar" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ارشيف | الشهادة المدرسية</title>

    {{-- <script src="path/to/jspdf.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <style>

        *{
            padding: 0;
            margin: 0;
        }

        body{
            font-size: 14px;
        }

        .certificate{
            margin: 20px;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 30px;
        }

        .bold{
            font-weight: 600;
        }

        .certificate-header{
            display: flex;
            align-items: start;
            justify-content: space-between;
        }
        .logo{
            width: 100px
        }

        .certificate-title{
            margin-top: 20px; 
            border: 2px solid black;
            padding: 10px;
            text-align: center;
        }

        .certificate-body{
            padding: 30px 0;
        }

        .certificate-body-info{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .certificate-body-date{
            margin-top: 40px;
        }

        .left{
            text-align: left;
        }

        .signature{
            margin-top: 30px; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left:40px; 
        }

        .line{
            width: 100%;
            /* height: 2px; */
            border-top: 2px dotted black; 
        }
    </style>
</head>
<body>

    @php
    if($student['studing'] == "0") $studing = "انقطع عن الدراسة";
    if($student['studing'] == "1") $studing = "يتابع دراسته (ها)";
    @endphp

    <div id="content">

    <div class="certificate">

        <div class="certificate-header">
            
            <table class="">
                <tbody>
                  <tr>
                    <td class="bold">الجماعة :</th>
                    <td class="">{{ $user['commune'] ? $user['commune'] : '---------------' }}</td>
                  </tr>
                  <tr>
                    <td class="bold">المؤسسة :</th>
                    <td class="">{{ $user['name'] ? $user['name'] : '------------------' }}</td>
                  </tr>
                  <tr>
                    <td class="bold">الهاتف :</th>
                    <td class="">{{ $user['phone'] ? $user['phone'] : '---------------' }}</td>
                  </tr>
                </tbody>
            </table>

            <img src="{{ asset('img/gev-logo.webp') }}" class="logo" alt="">

            <table class="">
                <tbody>
                    <tr>
                        <td class="bold">الاكاديمية الجهوية للتربية و التكوين</th>
                        <td class=""></td>
                      </tr>
                    <tr>
                        <td class="bold">لجهة :</th>
                        <td class="">سوس-ماسة</td>
                    </tr>
                    <tr>
                        <td class="bold">المديرية الاقليمية :</th>
                        <td class="">عمالة: اكادير ادوتنان</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="certificate-title">
            <p class="bold">شهادة مدرسية رقم : {{ $user['certificate_number'] }} {{ date('Y') }} / </p>
        </div>

        <div class="certificate-body">
            <p class="bold">ت/يشهد الموقع (ة) اسفله</p>

            <div class="certificate-body-info">
                <table class="">
                    <tbody>
                      <tr>
                        <td class="bold">ان التلميذ (ة) الاسم و النسب :</th>
                        <td class="">{{ $student["arName"] }}</td>
                      </tr>
                      <tr>
                        <td class="bold">المولود (ة) في :</th>
                        <td class="">{{ $student["placeBirth"] }}</td>
                      </tr>
                      <tr>
                        <td class="bold">رقم التسجيل :</th>
                        <td class="">{{ $student["code"] }}</td>
                      </tr>
                    </tbody>
                </table>
                <table class="">
                    <tbody>
                      <tr>
                        <td>{{ $student["frName"] }}</th>
                        <td class="bold">: Nom et Prenom</td>
                      </tr>
                      <tr>
                        <td class="bold">بتاريخ :</th>
                        <td class="">{{ $student["dateBirth"] }}</td>
                      </tr>
                    </tbody>
                </table>
            </div>

            <div class="certificate-body-date">
                <p><span class="bold">{{ $studing }} بهذه المؤسسة بالمستوى: <span style="font-weight: 300;">{{ $student['level'] }} بتاريخ {{ $student['dateStuding'] }}</p>
                <p style="margin-top: 15px"><span class="bold">ملاحظات :</span>  سلمت له (ها) هذه الشهادة من اجل االدالء بها لغرض اداري</p>

                <p class="left">حرر ب ....................................................  في {{ date('Y/m/d') }}</p>

                <div class="signature">
                    <p>خاتم و توقيع الحارس العام / الناطر المسؤول عن المعلومات الواردة في الشهادة</p>
                    <p>خاتم و توقيع رئيس المؤسسة</p>
                </div>
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div class="certificate">

        <div class="certificate-header">
            
            <table class="">
                <tbody>
                  <tr>
                    <td class="bold">الجماعة :</th>
                    <td class="">{{ $user['commune'] ? $user['commune'] : '---------------' }}</td>
                  </tr>
                  <tr>
                    <td class="bold">المؤسسة :</th>
                    <td class="">{{ $user['name'] ? $user['name'] : '------------------' }}</td>
                  </tr>
                  <tr>
                    <td class="bold">الهاتف :</th>
                    <td class="">{{ $user['phone'] ? $user['phone'] : '---------------' }}</td>
                  </tr>
                </tbody>
            </table>

            <img src="{{ asset('img/gev-logo.webp') }}" class="logo" alt="">

            <table class="">
                <tbody>
                    <tr>
                        <td class="bold">الاكاديمية الجهوية للتربية و التكوين</th>
                        <td class=""></td>
                      </tr>
                    <tr>
                        <td class="bold">لجهة :</th>
                        <td class="">سوس-ماسة</td>
                    </tr>
                    <tr>
                        <td class="bold">المديرية الاقليمية :</th>
                        <td class="">عمالة: اكادير ادوتنان</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="certificate-title">
            <p class="bold">شهادة مدرسية رقم : {{ $user['certificate_number'] }} {{ date('Y') }} / </p>
        </div>

        <div class="certificate-body">
            <p class="bold">ت/يشهد الموقع (ة) اسفله</p>

            <div class="certificate-body-info">
                <table class="">
                    <tbody>
                      <tr>
                        <td class="bold">ان التلميذ : (ة) الاسم و النسب</th>
                        <td class="">{{ $student["arName"] }}</td>
                      </tr>
                      <tr>
                        <td class="bold">المولود (ة) في :</th>
                        <td class="">{{ $student["placeBirth"] }}</td>
                      </tr>
                      <tr>
                        <td class="bold">رقم التسجيل :</th>
                        <td class="">{{ $student["code"] }}</td>
                      </tr>
                    </tbody>
                </table>
                <table class="">
                    <tbody>
                      <tr>
                        <td>{{ $student["frName"] }}</th>
                        <td class="bold">: Nom et Prenom</td>
                      </tr>
                      <tr>
                        <td class="bold">بتاريخ :</th>
                        <td class="">{{ $student["dateBirth"] }}</td>
                      </tr>
                    </tbody>
                </table>
            </div>

            <div class="certificate-body-date">
                <p><span class="bold">{{ $studing }} بهذه المؤسسة بالمستوى: <span style="font-weight: 300;">{{ $student['level'] }} بتاريخ {{ $student['dateStuding'] }}</p>
                <p style="margin-top: 15px"><span class="bold">ملاحظات :</span>  سلمت له (ها) هذه الشهادة من اجل االدالء بها لغرض اداري</p>

                <p class="left">حرر ب ....................................................  في {{ date('Y/m/d') }}</p>

                <div class="signature">
                    <p>خاتم و توقيع الحارس العام / الناطر المسؤول عن المعلومات الواردة في الشهادة</p>
                    <p>خاتم و توقيع رئيس المؤسسة</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<script>
    
    // windows.onload = function(){
        const content = document.getElementById('content');
        html2pdf().from(content).save();

        setTimeout(() => {
            window.close();
        }, 1000);

    // };



</script>
</html>