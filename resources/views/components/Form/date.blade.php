@props([
    'title' => false,
    'id' => false,
    'error' => false

])

<div>
    @if ($title)
        <label class="sr-only  text-black" @if($id) for="{{$id}}" @endif >{{$title}}</label>
    @endif


        @php

            $class = 'block
                              w-full
                              px-5
                              py-3
                              text-base text-neutral-600
                              placeholder-gray-300
                              transition
                              duration-500
                              ease-in-out
                              transform
                              rounded-lg
                              bg-gray-50
                              text-gray-400
                              focus:outline-none
                              focus:border-transparent
                              focus:ring-2
                              focus:ring-gray-400
                              focus:ring-offset-gray-900
                              dark:bg-gray-600
                              dark:text-gray-100';

                if ($error) {
                        $class .= '
                               border border-red-300
                                   focus:ring-red-300
                                   focus:ring-offset-2
                                   focus:ring-offset-red-400
    ';
                        }
                    else{
                        $class .= '
                                   border border-gray-200
                                   focus:ring-white
                                   focus:ring-offset-2
                                   focus:ring-offset-gray-300';
                    }
        @endphp

    <input
        {{$attributes->merge(['class' => $class])}}

        @if ($id)
        id="{{$id}}"
        @endif

        type="date"
    />
</div>
