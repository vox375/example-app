@props([
    'breadcrumbs' => [
        [
            'href' => '/',
            'label' => 'TOP'    
        ]
    ]    
])
<nav class="text-black mx-4 my-3" aria-label="Breadcrumb">
    <ol class="list-none p-0 inline-flex">
        @foreach($breadcrumbs as $breadcrumb)
        @if ($loop->last)
        <li>
            <a href="{{ $breadcrumb['href'] }}" class="text-gray-500" aria-current="page">
                {{ $breadcrumb['label'] }}
            </a>
        </li>
        @else
        <li class="flex items-center">
            <a href="{{ $breadcrumb['href'] }}" class="hover:underline">
                {{ $breadcrumb['label'] }}
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
        </li>
        @endif
        @endforeach
    </ol>
</nav>