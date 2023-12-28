@props(['link','path','active'])

<li>
    <!-- Current: "bg-gray-50 text-primary-color", Default: "text-gray-700 hover:text-primary-color hover:bg-gray-50" -->
    <a href="{{ $path }}" class="flex items-end hover:text-primary-color hover:bg-gray-50 duration-300 {{ $active ? 'text-primary-color bg-gray-50' : 'text-gray-700' }}  group gap-x-4 rounded-md p-2 text-sm leading-6 font-bold">
        {{ $slot }}
        {{ $link }}
    </a>
</li>    
