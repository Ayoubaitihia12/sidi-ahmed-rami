@props(['title','numbers','bgColor'])

<div class="flex group border {{ $bgColor }} px-8 py-6 rounded-xl items-center justify-between">
    
    <div class="flex flex-col items-start gap-y-1">
        <h1 class="text-2xl font-bold text-white">{{ $numbers }}</h1>
        <h1 class="text-sm font-bold text-white">{{ $title }}</h1>
    </div>

    <div class="flex group-hover:scale-110 duration-150 opacity-70 rounded-xl items-center justify-center">
        {{ $slot }}
    </div>

</div>
