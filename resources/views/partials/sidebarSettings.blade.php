<li class="px-2 flex sm:flex-col flex-row sm:space-y-4 space-x-4 space-y-0 sm:space-x-0">
    <a href="{{url('/cms/settings')}}" class="  @if ($sidenav == 'general') font-bold px-2 border-l-2  border-newgray-900 dark:border-white dark:text-white  @else  text-gray-400  dark:hover:text-white hover:text-newborder-newgray-900  @endif" >
        General
    </a>
    <a href="{{url('/cms/settingfooter')}}" class="  @if ($sidenav == 'footer') font-bold px-2 border-l-2  border-newgray-900 dark:border-white dark:text-white  @else  text-gray-400  dark:hover:text-white hover:text-newborder-newgray-900  @endif" >
        Footer
    </a>
</li>
