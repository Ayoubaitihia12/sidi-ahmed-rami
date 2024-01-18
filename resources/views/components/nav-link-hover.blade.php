@props(['active'])

<ul class="group relative">

    <div class="z-40 block cursor-pointer w-full text-left py-2 text-sm text-gray-400 focus:outline-none">
        <span class="flex items-center justify-between">
            <div class="w-full flex items-center justify-between text-gray-700 hover:text-primary-color hover:bg-gray-50 duration-300 group gap-x-4 rounded-md p-2 text-sm leading-6 font-bold">
                <span class="flex items-end gap-x-4">
                    <i class="fa-solid fa-user-group text-lg"></i>
                    بطاقة التلميذ   
                </span>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </span>
    </div>

    <div class="z-50 hidden w-[300px] group-hover:block space-y-2 absolute top-[100%] translate-y-[50%] bg-white border rounded-md">
        <a href="{{ route('students.create') }}" class="font-bold {{ Request::routeIs('students.create') ? 'bg-gray-800 text-white-color' : 'text-gray-700' }} hover:bg-gray-800 hover:text-white-color duration-300 text-sm px-2 pr-12 block py-3">
            اضافة تلميذ جديد
        </a>
        <a href="{{ route('students.index') }}" class="font-bold {{ Request::routeIs('students.index') ? 'bg-gray-800 text-white-color' : 'text-gray-700' }} hover:bg-gray-800 hover:text-white-color duration-300 px-2 pr-12 rounded-md text-sm block py-3">
            لائحة التلاميذ
        </a>
        <a href="{{ route('students.search') }}" class="font-bold {{ Request::routeIs('students.search') ? 'bg-gray-800 text-white-color' : 'text-gray-700' }} hover:bg-gray-800 hover:text-white-color duration-300 pr-12 text-sm block px-2 py-3">
            بحث فردي
        </a>
    </div>
</ul>

<script>
</script>

