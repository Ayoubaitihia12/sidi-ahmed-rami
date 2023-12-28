<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارشيف | الشهادة المدرسية</title>

    @vite('resources/css/app.css')

    <style>
        /* body{
            direction: rtl;
        } */
        ul li{
            list-style-type: none;
        }
    </style>
</head>
<body>
    
    <div class="flex items-center justify-center w-[100vw] h-[100vh]">
        <div class="w-[800px]" id="school-certificate">
            <x-school-certificate :user="$user" :student="$student" />   
        </div>
    </div>
    


    <script>
        function printDiv() {
            var contentToPrint = document.getElementById('school-certificate');
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>شهادة مدرسية</title></head><body>');
            printWindow.document.write(contentToPrint.innerHTML);
            printWindow.document.write('</body>شهادة مدرسية</html>');
            printWindow.document.close();
            printWindow.print();
        }

        window.onload = function() {
            printDiv();
        };

        setTimeout(function() {
            window.close();
        }, 1000);


    </script>


</body>
</html>