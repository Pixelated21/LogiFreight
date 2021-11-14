@props([
    'title' => false
])
<a {{$attributes->merge(['class' => ' text-sm font-medium cursor-pointer text-gray-500 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300 duration-300 '])}}>{{$title}}</a>
