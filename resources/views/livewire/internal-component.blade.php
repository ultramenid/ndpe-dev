<div class="px-2">
    <div x-data="{ open: @entangle('deleter') }">
        @include('partials.deleterModal')
    </div>
    <livewire:toastr />

    <div class="flex justify-between mb-6">
        <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Updates</h1>

        <a href="{{ url('/cms/addinternal') }}" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            Add
        </a>
    </div>

    <div class="text-left lg:w-1/4 w-full">
        <label class="text-gray-600 dark:text-gray-300 mr-2 text-sm" >Search </label>
        <input placeholder="" type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.debounce.300ms="search">
    </div>
    <div class="flex flex-col py-5">
        <div class="-my-2  sm:-mx-6 lg:-mx-8 ">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 ">
                <div class="shadow  border-b border-gray-200 dark:border-gray-800 sm:rounded-lg dark:bg-opacity-10  dark:text-white " >
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-800 rounded-lg  ">
                    <thead >
                        <tr >
                            <th wire:click='sortingField("titleEN")' class="px-6 py-4 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sm:w-4/12 w-11/12">
                               <div class="flex space-x-1">
                                   <a>Title</a>
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="px-4 py-3 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider  sm:w-3/12 w-0">
                                <a class="hidden sm:block">Tags</a>
                            </th>
                            <th class="px-4 py-3 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider  sm:w-2/12 w-0">
                                <a class="hidden sm:block">Images</a>
                            </th>
                            <th wire:click='sortingField("isActive")' class="cursor-pointer px-4 py-3 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider  sm:w-2/12 w-0">
                                <div class="flex space-x-1">
                                    <a class="hidden sm:block">Status</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                     </svg>
                                 </div>
                            </th>
                            <th class=" text-right bg-gray-50 dark:bg-opacity-10  dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">

                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-opacity-20 dark:text-white divide-y divide-gray-200 dark:divide-gray-900">
                        @forelse ($internalnews as $item)
                        <tr>
                            <td class="px-6 py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300">
                                <a href="{{ url('/cms/internal/'.$item->id) }}">{{ $item->titleEN }}</a>
                            </td>

                            <td class="px-2 py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300">
                                <a>@php
                                   $tags = (explode(",",$item->tags))
                                @endphp
                                @foreach ($tags as $key => $value)
                                    <a class="break-all sm:inline-flex hidden justify-between  bg-gray-200 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded mt-1 py-2 px-2 focus:outline-none items-center"> {{ $value }}</a>
                                @endforeach
                            </td>
                            <td class="px-2 py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300  ">
                                <div class="w-24 h-24 items-center flex ">
                                    <img src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="" class="sm:block hidden bg-cover bg-center">
                                </div>

                            </td>
                            <td class=" py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300">
                                
                                    @if( $item->isActive == 1)
                                        <a class="break-all sm:inline-flex hidden justify-between  bg-gray-200 dark:bg-newgray-700 text-green-800 rounded mt-1 py-2 px-2 focus:outline-none items-center">Published</a>
                                    @else
                                        <a class="break-all sm:inline-flex hidden justify-between  bg-gray-200 dark:bg-newgray-700 text-red-800 rounded mt-1 py-2 px-2 focus:outline-none items-center">Unpublish</a>
                                    @endif
                            </td>
                            <td colspan="2" class=" break-words text-sm text-gray-500 dark:text-gray-300 px-6">
                                <div class="relative flex justify-end" x-data="{ open: false }">

                                    <button class=" focus:outline-none" @click="open = true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </button>

                                    <ul
                                        class="absolute mt-6  right-0 bg-white rounded-lg shadow-lg block w-24 z-10"
                                        x-show.transition="open"
                                        @click.away="open = false"
                                        x-cloak style="display: none !important">
                                        <a data-turbolinks="false" href="{{ url('/cms/internal/'.$item->id) }}"><li class="block hover:bg-gray-200 cursor-pointer py-1 mt-2 px-4 dark:text-gray-500" @click.away="open = false">Edit</li></a>
                                        <li class="block hover:bg-gray-200 cursor-pointer  py-1 mb-2 px-4 dark:text-gray-500"  wire:click="delete({{ $item->id }})" @click.away="open = false">Delete</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="whitespace-nowrap text-sm text-gray-500 px-6 py-3">
                                No data found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($internalnews)
    {{ $internalnews->links('livewire.pagination') }}
    @endif
</div>
