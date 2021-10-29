<div class="fixed z-20 inset-x-0 top-0 flex flex-col items-center justify-center px-4 py-6 pointer-events-none sm:p-6 sm:justify-start space-y-2"  >
    @forelse ($notification as $key => $value)
        <div class="max-w-sm w-full bg-black dark:bg-white shadow-lg rounded-lg pointer-events-auto" >
            <div class="rounded-lg shadow-sm overflow-hidden ">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            @if ($value['type'] == 'error')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @elseif ($value['type'] == 'success')
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @endif
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm leading-5 font-medium text-gray-100 dark:text-gray-900">{{$value['message']}}</p>

                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button class="inline-flex text-gray-100 dark:text-gray-400 focus:outline-none  transition ease-in-out duration-150" x-on:click="$wire.closeToast({{$key}})" >
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
    <a></a>
    @endforelse
</div>
