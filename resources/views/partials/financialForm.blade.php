<div x-show="tabs==='financial'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" >
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300">Financial</h1>

        <div  class="mt-6">
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">English:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
            tinymce.init({
                selector: '#financialEN',
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
                        toolbar: 'fullscreen preview bold italic underline strikethrough  fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                        menu: {
                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                        },
                        menubar: ' file edit view insert format tools table help',

                        setup: function(editor) {
                            editor.on('change', function(e) {
                                 @this.set('financialEN', editor.getContent());
                           });
                       }
            });">
                <textarea rows="20" id="financialEN" name="financialEN"  wire:model.defer='financialEN' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Indonesia:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#financialID',
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
                            toolbar: 'fullscreen preview bold italic underline strikethrough  fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                            menu: {
                            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                            },
                            menubar: ' file edit view insert format tools table help',
                            setup: function(editor) {
                                editor.on('change', function(e) {
                                     @this.set('financialID', editor.getContent());
                               });
                           }
                });">
                <textarea  rows="20" id="financialID" name="financialID"  wire:model.defer='financialID' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Japan:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
                tinymce.init({
                    selector: '#financialJP',
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
                            toolbar: 'fullscreen preview bold italic underline strikethrough  fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                            menu: {
                            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                            },
                            menubar: ' file edit view insert format tools table help',
                            setup: function(editor) {
                                editor.on('change', function(e) {
                                     @this.set('financialJP', editor.getContent());
                               });
                           }

                });">
                <textarea  rows="20" id="financialJP" name="financialJP"  wire:model.defer='financialJP' required></textarea>
            </div>
        </div>
    </div>
</div>
