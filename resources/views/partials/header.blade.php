<div class="bg-green-ndpe h-10 sm:block hidden"></div>
<div class="bg-green-ndpe px-6 py-2 h-10 sticky top-0 z-30 sm:hidden block " x-data="{ sidebar:false }">
    <div>
        <svg
        @click="sidebar = true"
        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
    </div>
    <div class="fixed w-3/4 h-screen z-50 bg-green-ndpe  inset-0 overflow-y-auto " x-show="sidebar"
            x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.outside="open = false"
            x-cloak style="display: none !important">
                <button class="absolute px-6 py-2 focus:outline-none text-gray-300" @click="sidebar = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </button>

                <div class="mt-12 space-y-3">

                </div>
            </div>
</div>
