<div x-show="tabs==='map'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image </h1>
        <div class="flex items-center justify-center px-2 py-2 border border-dashed border-gray-400 rounded">
            <label class="cursor-pointer">
                @if (! $photomap )
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                @else
                    <img src="{{$photomap->temporaryUrl()}}" alt="" class=" mx-auto w-full rounded ">
                @endif
                <input type='file' class="hidden" wire:model='photomap' accept="image/*" />
                <p wire:loading.remove wire:target="photomap" class="text-xs text-center text-gray-400 mt-2">Clik to upload image</p>
                <p wire:loading wire:target="photomap" class="text-xs text-center text-gray-400">Uploding. . . . . </p>
            </label>
        </div>
    </div>
</div>
