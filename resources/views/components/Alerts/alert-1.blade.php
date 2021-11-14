@props([
    'type' => 'success',
    'title' => 'Unnamed Alert',
    'alphName' => false
])
@php
    $class = 'flex fixed top-5 right-0 left-0 w-1/4 transform transition duration-300 items-center p-4 text-white rounded-r ';

    if ($type === 'success') {
        $class.='bg-green-600';
    }
    if ($type === 'error') {
        $class.='bg-orange-600';
    }
    if ($type === 'info') {
        $class.='bg-blue-600';
    }
    if ($type === 'danger') {
        $class.='bg-red-600';
    }
@endphp
<div
    x-transition.enter.duration.300ms.origin.left
    x-transition.leave.duration.300ms.origin.left
    :class="{{ $alphName }} ? '-translate-x-0' : '-translate-x-full'"
    {{$attributes->merge(['class' => $class])}}>
    @if ($type === 'success')
        <i class="gg-check-o"></i>
    @elseif ($type === 'error')
        <i class="gg-danger"></i>
    @elseif ($type === 'info')
        <i class="gg-info"></i>
    @elseif ($type === 'danger')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
            <path fill-rule="evenodd"
                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                  clip-rule="evenodd"/>
        </svg>
    @endif

    <p class="ml-3 font-bold">{{$title}}</p>
</div>
