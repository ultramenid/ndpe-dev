<div class="border-b border-gray-300 dark:border-opacity-20 sticky top-0 z-10 ">
    <div class="max-w-6xl mx-auto px-6 " >
        <nav class="-mb-px flex space-x-6 text-sm leading-5 overflow-x-auto scrollbar-hide text-gray-500">
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'dashboard' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/dashboard')}}" class=" px-0.5  @if($nav == 'dashboard' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Dashboard</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'groups' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/groups')}}" class=" px-0.5  @if($nav == 'groups' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Groups</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'updates' )border-b-2  dark:border-gray-300 border-newgray-900 @endif ">
                <a href="{{url('/cms/updates')}}" class=" px-0.5  @if($nav == 'updates' )   text-newgray-900 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer" >Updates</a>
            </div>
            <div class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-3 px-2 rounded @if($nav == 'settings' )border-b-2  dark:border-gray-300 border-newgray-900 @endif">
                <a href="{{url('/cms/settings')}}" class=" px-0.5 py-3  @if($nav == 'settings' )  text-newgray-900:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Settings</a>
            </div>
        </nav>
    </div>
</div>
