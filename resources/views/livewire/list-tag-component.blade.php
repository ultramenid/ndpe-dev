<div>
    @foreach ($tags as $item)
            <div class="sm:mt-4 mt-0">
                <a class="text-gray-300 text-sm">{{ \Carbon\Carbon::parse($item->publishdate)->format('F, Y')}}</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="{{$item->sourceurl}}" target="_blank" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">{{$item->title}}</a>
                        <p class="text-sm mt-4 text-gray-300">{{$item->description}}</p>

                        <div class="flex mt-4 sm:flex-row flex-col sm:space-x-2 space-x-0 space-y-1 sm:space-y-0 sm:items-center">
                            <a href="{{$item->sourceurl}}" target="_blank" class="cursor-pointer text-gray-300 hover:underline text-sm text-left">{{$item->sourcename}}</a>
                            <div class="border-r border-green-ndpe-2 h-6 sm:block hidden"></div>
                            <div class="flex flex-wrap  justify-between sm:space-x-2 space-x-0 space-y-1 sm:space-y-0 text-sm">
                                @php
                                $tagsList= (explode(",",$item->tags))
                            @endphp
                            @foreach ($tagsList as $tag)
                                <a href="{{ route('tags', [app()->getLocale(),  $tag]) }}"  class="cursor-pointer text-white px-2 py-2 underline bg-green-ndpe">{{$tag}}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="{{ asset('/storage/files/photos/'.$item->img) }}" alt="{{$item->title}}">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>
    @endforeach
            @if ($tags->hasMorePages())
            <div class="text-center mt-12">
                <button class="bg-border-ndpe text-white py-2 px-4" wire:click="getMore" wire:loading.remove>
                    Load More
                </button>
                <button wire:loading wire:target='getMore'>
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
            @endif
</div>
