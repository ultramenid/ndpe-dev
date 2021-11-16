<div x-show="tabs==='overview'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Highlight</h1>
        <div class="flex justify-between space-x-4">
            <label class="w-full">
                <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">value 1:</h2>
                <input type="number" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='value1' >
            </label>
            <label class="w-full">
                <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">value 2:</h2>
                <input type="number" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='value2' >
            </label>
        </div>
    </div>
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-6">Image </h1>
        <div class="flex items-center justify-center px-2 py-2 border border-dashed border-gray-400 rounded">
            <label class="cursor-pointer">
                @if (! $photo )
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                @else
                    <img src="{{$photo->temporaryUrl()}}" alt="" class=" mx-auto w-full rounded ">
                @endif
                <input type='file' class="hidden" wire:model='photo' accept="image/*" />
                <p wire:loading.remove wire:target="photo" class="text-xs text-center text-gray-400 mt-2">Clik to upload image</p>
                <p wire:loading wire:target="photo" class="text-xs text-center text-gray-400">Uploding. . . . . </p>
            </label>
        </div>
    </div>
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6 " x-data="{open:false}">
        <div class="flex justify-between cursor-pointer " @click="open=!open">
            <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 ">Corporate Description </h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-newbg-newgray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
        </div>
        <div x-show="open" x-cloak style="display: none !important" class="mt-6">

            <div x-data="{count:0}" class="mb-6">
                <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">English:</h2>
                <textarea maxlength="350" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='descEN' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                  </div>
            </div>
            <div x-data="{count:0}" class="mb-6">
                <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">Indonesia:</h2>
                <textarea maxlength="350" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='descID' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                  </div>
            </div>
            <div x-data="{count:0}" class="mb-6">
                <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">Japan:</h2>
                <textarea maxlength="350" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='descJP' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                  </div>
            </div>
        </div>
    </div>

    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{open:false}">
        <div class="flex justify-between cursor-pointer" @click="open=!open">
            <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300">Overview</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-newbg-newgray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
        </div>
        <div x-show="open" x-cloak style="display: none !important" class="mt-6">
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">English:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
            tinymce.init({
                selector: '#overviewEN',
                mobile: {
                        menubar: 'file edit view insert format',
                },
                height : 500,
                relative_urls : false,
                            remove_script_host : false,
                            convert_urls : true,
                content_style: 'body { 	color: #F3F4F6; background-color: #22361b; }',
                plugins: [
                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                        'table emoticons template paste help'
                        ],
                        toolbar: 'fullscreen preview bold italic underline forecolor backcolor |bullist numlist alignleft aligncenter alignright alignjustify outdent indent|  fontselect fontsizeselect formatselect   | ' +
                                        ' | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                        menu: {
                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                        },
                        menubar: ' file edit view insert format tools table help',

                        setup: function(editor) {
                            editor.on('change', function(e) {
                                 @this.set('overviewEN', editor.getContent());
                           });
                       }
            });">
                <textarea rows="20" id="overviewEN" name="overviewEN"  wire:model.defer='overviewEN' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Indonesia:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#overviewID',
                    mobile: {
                            menubar: 'file edit view insert format',
                    },
                    height : 500,

                    relative_urls : false,
                            remove_script_host : false,
                            convert_urls : true,
                    content_style: 'body { 	color: #F3F4F6; background-color: #22361b; }',
                    plugins: [
                            'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                            'table emoticons template paste help'
                            ],
                            toolbar: 'fullscreen preview bold italic underline forecolor backcolor |bullist numlist alignleft aligncenter alignright alignjustify outdent indent|  fontselect fontsizeselect formatselect   | ' +
                                        ' | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                            menu: {
                            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                            },
                            menubar: ' file edit view insert format tools table help',
                            setup: function(editor) {
                                editor.on('change', function(e) {
                                     @this.set('overviewID', editor.getContent());
                               });
                           }
                });">
                <textarea  rows="20" id="overviewID" name="overviewID"  wire:model.defer='overviewID' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Japan:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#overviewJP',
                    mobile: {
                            menubar: 'file edit view insert format',
                    },
                    height : 500,

                    relative_urls : false,
                            remove_script_host : false,
                            convert_urls : true,
                    content_style: 'body { 	color: #F3F4F6; background-color: #22361b; }',
                    plugins: [
                            'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                            'table emoticons template paste help'
                            ],
                            toolbar: 'fullscreen preview bold italic underline forecolor backcolor |bullist numlist alignleft aligncenter alignright alignjustify outdent indent|  fontselect fontsizeselect formatselect   | ' +
                                        ' | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                            menu: {
                            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                            },
                            menubar: ' file edit view insert format tools table help',
                            setup: function(editor) {
                                editor.on('change', function(e) {
                                     @this.set('overviewJP', editor.getContent());
                               });
                           }

                });">
                <textarea  rows="20" id="overviewJP" name="overviewJP"  wire:model.defer='overviewJP' required></textarea>
            </div>
        </div>
    </div>
</div>
