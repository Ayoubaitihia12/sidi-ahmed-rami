@props(['title','item'])
<div>
    <label class="block text-sm font-medium leading-6 text-gray-900">{{ $title }}</label>
    <div class="mt-2">
      <span class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">{{ $item }}</span>
    </div>
  </div>