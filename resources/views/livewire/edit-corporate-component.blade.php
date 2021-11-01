<div class="">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 ">
        <div class="max-w-6xl mx-auto px-6  flex justify-between  py-16">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Corporates Profile</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storeCorporate'  wire:click='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Submit
                </button>
                <button wire:loading wire:target='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 md:px-8  py-8 min-h-screen">
    <div class="grid grid-cols-12 gap-x-4" x-data="{ tabs: 'overview' }">
        <div class= "sm:col-span-3 col-span-12" >
            <div class="overflow-x-auto scrollbar-hide whitespace-nowrap  sm:col-span-3 sm:space-y-1  space-y-0 sm:space-x-0  space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                {{-- tabs overview --}}
                <div @click="tabs='overview'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'overview' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-black' : tabs === 'overview' }"
                    >Overview</a>
                </div>
                {{-- tabs area --}}
                <div @click="tabs='area'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'area' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'area' }"
                    >Area</a>
                </div>
                {{-- tabs ownership --}}
                <div @click="tabs='ownership'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'ownership' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'ownership' }"
                    >Ownership</a>
                </div>
                {{-- tabs financial --}}
                <div @click="tabs='financial'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'financial' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'financial' }"
                    >Financial</a>
                </div>
                {{-- tabs buyer --}}
                <div @click="tabs='buyer'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'buyer' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'buyer' }"
                    >Buyer</a>
                </div>
                {{-- tabs performance --}}
                <div @click="tabs='performance'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'performance' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'perforamance' }"
                    >Performance</a>
                </div>
            </div>
            <div class="mt-8 w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6 ">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Media uploader</h1>
                <p class="text-newgray-700 dark:text-gray-500  italic text-xs mb-4">upload and get url</p>
                <div class="flex items-center justify-center px-2 py-2 border border-dashed border-gray-400 rounded">
                    <label class="cursor-pointer">
                        <p wire:loading.remove wire:target="mediafile" class="text-xs text-center text-gray-400 ">Clik to upload</p>
                        <input type='file' class="hidden" wire:model='mediafile' accept="" />
                        <p wire:loading wire:target="mediafile" class="text-xs text-center text-gray-400">Uploding. . . . . </p>
                    </label>
                </div>

                    @if ($urlfiles)
                        <p class="text-newgray-700 dark:text-gray-500  italic text-xs mt-6">file url:</p>
                        @foreach ($urlfiles as $key => $value)
                            <a class="break-all inline-flex justify-between  mr-4 mt-2 bg-gray-200 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded py-2 px-2 focus:outline-none items-center"> {{ $value }}</a>
                        @endforeach
                    @endif
            </div>
        </div>
        <div class="sm:col-span-9 col-span-12 " >
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Corporate Name</h1>
                <input id="btnStore" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='corporatename' placeholder="Name. . . ">
            </div>
            {{-- overview --}}
            @include('partials.overviewFormEdit')

            {{-- area --}}
            @include('partials.areaForm')

            {{-- ownership --}}
            @include('partials.ownershipForm')

            {{-- financial --}}
            @include('partials.financialForm')

            {{-- buyer --}}
            @include('partials.buyerForm')

            {{-- performance --}}
            @include('partials.performanceForm')
        </div>
    </div>
    </div>
</div>
