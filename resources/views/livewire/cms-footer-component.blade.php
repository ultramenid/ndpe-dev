<div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6" x-data="{ tabs: 'english' }">
    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold  mt-6 mb-2 text-newbg-newgray-900 dark:text-gray-300">Footer</h1>
        <div class="mt-6 mb-2">
            <button wire:loading.remove wire:target='storeFooter'  wire:click='storeFooter' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                Submit
            </button>
            <button wire:loading wire:target='storeFooter' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
    </div>
    </div>
    <p class=" mb-6 text-sm font-light text-newbg-newgray-900 dark:text-gray-300">
        Text to be displayed
    </p>
    <div  class="overflow-x-auto scrollbar-hide whitespace-nowrap   subpixel-antialiased flex justify-end">
        {{-- tabs english --}}
        <div @click="tabs='english'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : tabs === 'english' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-black' : tabs === 'english' }"
            >English</a>
        </div>
        {{-- tabs indonesia --}}
        <div @click="tabs='indonesia'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : tabs === 'indonesia' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-bold' : tabs === 'indonesia' }"
            >Indonesia</a>
        </div>
        {{-- tabs japan --}}
        <div @click="tabs='japan'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : tabs === 'japan' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-bold' : tabs === 'japan' }"
            >Japan</a>
        </div>
    </div>
    <div class="w-full  rounded mt-2 mb-6" x-data="{count:0}" x-show="tabs==='english'" style="display: none !important;">
        <textarea maxlength="650" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='textEN' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
        <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
            <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
          </div>
    </div>
    <div class="w-full  rounded mt-2 mb-6" x-data="{count:0}" x-show="tabs==='indonesia'" style="display: none !important;">
        <textarea maxlength="650" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='textID' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
        <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
            <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
          </div>
    </div>
    <div class="w-full  rounded mt-2 mb-6" x-data="{count:0}" x-show="tabs==='japan'" style="display: none !important;">
        <textarea maxlength="650" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='textJP' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
        <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
            <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
          </div>
    </div>

</div>
