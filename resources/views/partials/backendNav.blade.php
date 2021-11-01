<div class="border-b border-gray-300 dark:border-opacity-20 sticky top-0 z-10 ">
    <div class="max-w-6xl mx-auto px-6 "  x-data="{ pages: false }">
        <nav class="-mb-px flex space-x-6 text-sm leading-5 overflow-x-auto scrollbar-hide text-gray-500">
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'dashboard' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/dashboard')}}" class=" px-0.5  @if($nav == 'dashboard' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Dashboard</a>
            </div>


            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'groups' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/groups')}}" class=" px-0.5  @if($nav == 'groups' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Groups</a>
            </div>

            <div @click="pages = ! pages" @click.away="pages=false" class=" cursor-pointer flex-col flex hover:bg-gray-200 dark:hover:bg-newgray-700 py-3  rounded @if($nav == 'updates' )border-b-2  dark:border-gray-300 border-newgray-900 @endif " x-data="{pages:false}">
                <a   class="px-2 hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer inline-flex   items-center" >Updates
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class=" flex flex-col space-y-3 sm:w-1/6 w-2/6  rounded sm:absolute relative sm:mt-10 mt-2 z-20 bg-gray-200 dark:bg-newgray-700  px-4 py-2" x-show="pages" x-cloak style="display: none !important">
                    <a  href="{{url('/cms/internal')}}" class="hover:text-newgray-900 dark:hover:text-gray-300">Internal</a>
                    <a class="hover:text-newgray-900 dark:hover:text-gray-300">External</a>
                </div>
            </div>

            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'settings' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/settings')}}" class=" px-0.5 py-3  @if($nav == 'settings' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Settings</a>
            </div>

        </nav>
    </div>
</div>
