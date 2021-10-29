<div class="relative" x-data="{ isProfileMenuOpen: false}">
    <button
      title="Profile"
      @click="isProfileMenuOpen = !isProfileMenuOpen"
      @click.away="isProfileMenuOpen = false"
      @keydown.escape="isProfileMenuOpen = false"
      aria-label="Account"
      aria-haspopup="true"
      class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
    >
      <img
        class="object-cover w-8 h-8 rounded-full"
        src="{{asset('assets/minecraft.png')}}"
        alt=""
        aria-hidden="true"
      />
    </button>
    <template x-if="isProfileMenuOpen">
      <ul
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-0"
        x-transition:leave-end="opacity-100"
        class="z-20 absolute right-0 w-36 p-2 mt-2 space-y-2 text-gray-600 bg-gray-300 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300  dark:bg-black"
        aria-label="submenu"
      >
        <li class="flex">
          <a
            class="inline-flex items-center w-full px-2 py-1 text-sm  transition-colors duration-150 rounded-md hover:bg-gray-200 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
            href="{{url('/cms/settings')}}"
          >
            <svg
              class="w-4 h-4 mr-3"
              aria-hidden="true"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
              ></path>
              <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>Settings</span>
          </a>
        </li>
        <li class="flex">
          <a
            class="inline-flex items-center w-full px-2 py-1 text-sm  transition-colors duration-150 rounded-md hover:bg-gray-200 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
            href="{{url('/cms/page/logout')}}"
          >
            <svg
              class="w-4 h-4 mr-3"
              aria-hidden="true"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
              ></path>
            </svg>
            <span>Log out</span>
          </a>
        </li>
      </ul>
    </template>
</div>
