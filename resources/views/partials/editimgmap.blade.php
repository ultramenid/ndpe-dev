<div x-show="tabs==='map'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image </h1>
        <div class="flex items-center justify-center px-2 py-2 border border-dashed border-gray-400 rounded">
            <label class="cursor-pointer">
                @if (! $imgmap )
                    <img src="{{ asset('/storage/files/photos/'.$uphotomap) }}" alt="" class=" mx-auto w-full rounded ">
                @else
                    <img src="{{$imgmap->temporaryUrl()}}" alt="" class=" mx-auto w-full rounded ">
                @endif
                <input type='file' class="hidden" wire:model='imgmap' accept="image/*" />
                <p wire:loading.remove wire:target="imgmap" class="text-xs text-center text-gray-400 mt-2">Clik to upload image</p>
                <p wire:loading wire:target="imgmap" class="text-xs text-center text-gray-400">Uploding. . . . . </p>
            </label>
        </div>
    </div>
</div>
