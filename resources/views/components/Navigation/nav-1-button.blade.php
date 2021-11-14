@props([
    'title' => false
])

    <button
        {{$attributes->merge(['class' => 'text-center w-full sm:w-auto inline-flex items-center justify-center text-sm font-medium px-4 py-2.5 text-black hover:text-gray-100 bg-gray-300 hover:bg-blue-600 dark:bg-gray-600 dark:text-gray-100 dark:hover:bg-blue-600 transition duration-300 rounded-lg'])}}>

        @if($title)
            {{$title}}
        @endif
        {{$slot}}
    </button>


@push('styles')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css">
@endpush
