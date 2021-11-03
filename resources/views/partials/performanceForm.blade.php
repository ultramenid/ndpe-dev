<div x-show="tabs==='performance'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{open:false}">
        <div class="flex justify-between cursor-pointer" @click="open = ! open">
            <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 ">Rating</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-newbg-newgray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
        </div>
        <div x-show="open" x-cloak style="display: none !important" class="mt-6">
            <label class="w-full"  >
                <span class="text-newbg-newgray-900 dark:text-gray-300 italic">Deforestation</span>
                <select wire:model='deforestation' class=" mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option>select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
            <label class="w-full"  >
                <span class="text-newbg-newgray-900 dark:text-gray-300 italic">Biodiversity Loss</span>
                <select wire:model='bioloss' class="mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option>select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
            <label class="w-full"  >
                <span class="text-newbg-newgray-900 dark:text-gray-300 italic">Peatland Destruction</span>
                <select wire:model='peatlanddestruct' class="mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option>select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
            <label class="w-full"  >
                <span class="text-newbg-newgray-900 dark:text-gray-300 italic">Social Conflict</span>
                <select wire:model='socialconflict' class=" mb-6 bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20">
                    <option>select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
        </div>

    </div>

    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" x-data="{open:false}">
        <div class="flex justify-between cursor-pointer" @click="open = ! open">
            <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300">Performance</h1>
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
                selector: '#performanceEN',
                mobile: {
                        menubar: 'file edit view insert format',
                },
                height : 500,
                skin: 'snow',
                icons : 'thin',
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
                                 @this.set('performanceEN', editor.getContent());
                           });
                       }
            });">
                <textarea rows="20" id="performanceEN" name="performanceEN"  wire:model.defer='performanceEN' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Indonesia:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#performanceID',
                    mobile: {
                            menubar: 'file edit view insert format',
                    },
                    height : 500,
                    skin: 'snow',
                    icons : 'thin',
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
                                     @this.set('performanceID', editor.getContent());
                               });
                           }
                });">
                <textarea  rows="20" id="performanceID" name="performanceID"  wire:model.defer='performanceID' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Japan:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#performanceJP',
                    mobile: {
                            menubar: 'file edit view insert format',
                    },
                    height : 500,
                    skin: 'snow',
                    icons : 'thin',
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
                                     @this.set('performanceJP', editor.getContent());
                               });
                           }

                });">
                <textarea  rows="20" id="performanceJP" name="performanceJP"  wire:model.defer='performanceJP' required></textarea>
            </div>
        </div>
    </div>
</div>
