@props(['type', 'secondary' => false])
<button type="{{ $type }}"
    class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 transition-all duration-300  rounded-md 
            bg-[#1DA1F2]
             shadow-[#1DA1F2]/40 
            text-white 
            hover:bg-sky-600">
    {{ $slot }}
</button>