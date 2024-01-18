@props(['link','path','active'])

<li>
    <!-- Current: "bg-gray-50 text-primary-color", Default: "text-gray-700 hover:text-primary-color hover:bg-gray-50" -->
    <a href="{{ $path }}" class="flex items-end hover:text-white hover:bg-gray-800 duration-300 {{ $active ? 'text-white-color bg-gray-800' : 'text-gray-400' }}  group gap-x-4 rounded-md p-2 text-xs leading-6 font-bold">
        {{ $slot }}
        {{ $link }}
    </a>
</li>    
