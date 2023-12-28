@props(['number'])

<div class="bg-second-color w-[150px] text-center font-bold text-xs px-4 py-2 rounded-lg text-primary-color">
    {{$number}} {{ $slot }}
</div>