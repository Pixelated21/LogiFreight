@props([
    'close' => true,
    'alphName' => false,
])
<section
        x-show="{{$alphName}}"
         x-transition.enter.duration.300ms.origin.bottom
         x-transition.out.duration.1000ms.origin.top.opacity
         class="bg-white dark:bg-gray-900 text-center justify-center  overflow-y-auto flex items-center z-50 inset-0 fixed">
    <div
        {{$attributes->merge(['class' => 'px-4 mx-auto py-5 my-auto  h-full w-full lg:w-full sm:px-6 lg:px-6'])}}>
        <div class="grid grid-cols-1 h-full gap-x-16 gap-y-8 lg:grid-cols-1">

            <div class="p-8 text-center dark:bg-gray-800 bg-gray-200 rounded-lg shadow-lg h-full lg:p-12  lg:col-span-3">
                @if ($close)
                    <button @click.prevent="{{$alphName}}  = false" type="button" class="absolute top-2 right-2 md:top-8 md:right-9">
                        <i class=" rounded sm:text-gray-500 hover:text-red-600 duration-300 fad fa-window-close fa-2x"></i>
                    </button>
                @endif

                <div>
                    {{$slot}}
                </div>
            </div>

        </div>

    </div>
</section>
    <style>



        ::-webkit-scrollbar {
            background-clip: padding-box;
            height: 3px; /* Remove scrollbar space */
            background: #161d2d; /* Optional: just make scrollbar invisible */
        }

        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
            /*background: #ff0073;*/
            background: #d2d6dc;
            width: 2px;

        }

    </style>
