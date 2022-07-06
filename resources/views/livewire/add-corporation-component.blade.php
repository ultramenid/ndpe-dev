<div class="">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 ">
        <div class="max-w-6xl mx-auto px-6  flex justify-between  py-16">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Corporates Profile</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storeCorporate'  wire:click='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Save
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
            <div class="overflow-x-auto  scrollbar-hide whitespace-nowrap  sm:col-span-3  sm:space-x-0  space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                {{-- tabs overview --}}
                <div @click="tabs='overview'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'overview' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-black' : tabs === 'overview' }"
                    >Overview</a>
                </div>
                {{-- tabs area --}}
                <div @click="tabs='area'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'area' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'area' }"
                    >Area</a>
                </div>
                {{-- tabs ownership --}}
                <div @click="tabs='ownership'" class=" mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'ownership' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'ownership' }"
                    >Ownership</a>
                </div>
                {{-- tabs spotlight --}}
                <div @click="tabs='spotlight'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'spotlight' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'spotlight' }"
                    >Spotlight</a>
                </div>
                {{-- tabs buyer --}}
                <div @click="tabs='buyer'" class=" mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'buyer' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'buyer' }"
                    >Buyer</a>
                </div>
                {{-- tabs performance --}}
                <div @click="tabs='performance'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'performance' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'perforamance' }"
                    >Performance</a>
                </div>
                {{-- tabs map --}}
                <div @click="tabs='map'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'map' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'map' }"
                    >Map Image</a>
                </div>

            </div>

        </div>
        <div class="sm:col-span-9 col-span-12 " >
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{count:0}">
                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Corporate Name</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" id="btnStore" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='corporatename' placeholder="Name. . . ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                  </div>
            </div>
            {{-- overview --}}
            @include('partials.overviewForm')

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

            {{-- mapimage --}}
            @include('partials.mapimage')
        </div>
    </div>
    </div>
</div>
