<div class="flex items-center justify-between border-t pb-4 px-8 py-4">
    
    <div class="flex flex-col gap-y-3">
        
        <h1 class="font-bold text-md">{{ $school['name'] }}</h1>
        
        @if($school['commune'])
        <h3 class="flex items-center gap-x-1 text-gray-700">
            <span class="text-xs font-bold w-[16px] h-[16px] flex items-center justify-center rounded-full bg-black">
                <i class="fa-solid fa-location-arrow text-[8px] text-white"></i>
            </span>
            <span class="font-bold text-xs">{{ $school['commune'] }}</span>
        </h3>
        @endif

    </div>


    <div class="flex items-center gap-x-1">
        <a href="{{ route('schools.edit',$school) }}" class="w-[32px] h-[32px] relative group flex items-center rounded-xl text-xs justify-center bg-primary-color">
            <i class="fa-solid fa-pencil text-md text-white"></i>
            <span class="absolute text-center group-hover:block hidden top-9 z-10 px-3 py-1 text-[10px] font-medium text-white duration-300 bg-gray-900 rounded-md shadow-sm dark:bg-gray-700">
                تعديل 
            </span>
        </a>
        <a href="{{ route('schools.show',$school) }}" class="w-[32px] h-[32px] relative group flex items-center rounded-xl text-xs justify-center bg-accent-color">
            <i class="fa-solid fa-eye text-md text-white"></i>
            <span class="absolute text-center group-hover:block hidden top-9 z-10 px-3 py-1 text-[10px] font-medium text-white duration-300 bg-gray-900 rounded-md shadow-sm dark:bg-gray-700">
                التفاصيل 
            </span>
        </a>
        <a href="{{ route('schools.students',$school) }}" class="w-[32px] h-[32px] relative group flex items-center rounded-xl text-xs justify-center bg-green-600">
            <i class="fa-solid fa-list text-md text-white"></i>
            <span class="absolute text-center group-hover:block hidden top-9 z-10 px-3 py-1 text-[10px] font-medium text-white duration-300 bg-gray-900 rounded-md shadow-sm dark:bg-gray-700">
                التلاميذ
            </span>
        </a>

    </div>

</div>