@props([
    'title' => 'Unnamed',
    'value' => false,
])

<option {{$attributes->merge()}} @if($value !== false) value="{{$value}} @endif">{{$title}}</option>
