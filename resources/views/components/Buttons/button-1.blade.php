@props([
    'type' => 'submit',
    'spinner' => false,
    'title' => false,
])

<button {{$attributes->merge(['class' => "
                        w-full
                        block
                        rounded-lg
                        duration-300
                        px-4
                        py-3
                        mt-6
                        dark:text-gray-300
                "])}}

        type="{{$type}}">

    <div class="flex items-center justify-center gap-5">
            <div class="flex justify-center items-center">
                {{$spinner}}
            </div>

        <div class="flex justify-center items-center">
            {{$title}}
        </div>

    </div>
</button>
