<div x-show="tabs==='buyer'" x-cloak style="display: none !important">
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6" >
        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300">Buyer</h1>

        <div  class="mt-6">
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic">English:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
            tinymce.init({
                selector: '#buyerEN',
                height : 500,
                height : '70vh',
                relative_urls : false,
                    remove_script_host : false,
                    convert_urls : true,
                    content_style: 'body { 	color: white; background-color: #22361b; }',
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
                        file_picker_callback : function(callback, value, meta) {
                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                            var cmsURL = '/cms/' + 'ndpe-filemanager?editor=' + meta.fieldname;
                            if (meta.filetype == 'image') {
                                cmsURL = cmsURL + '&type=Images';
                            } else {
                                cmsURL = cmsURL + '&type=Files';
                            }
                            tinyMCE.activeEditor.windowManager.openUrl({
                                url : cmsURL,
                                title : 'Filemanager',
                                width : x * 0.8,
                                height : y * 0.8,
                                resizable : 'yes',
                                close_previous : 'no',
                                onMessage: (api, message) => {
                                callback(message.content);
                                }
                            });
                        },
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                @this.set('buyerEN', editor.getContent());
                        });
                    }
            });">
                <textarea rows="20" id="buyerEN" name="buyerEN"  wire:model.defer='buyerEN' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Indonesia:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
            tinymce.init({
                selector: '#buyerID',
                height : 500,
                height : '70vh',
                relative_urls : false,
                    remove_script_host : false,
                    convert_urls : true,
                    content_style: 'body { 	color: white; background-color: #22361b; }',
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
                        file_picker_callback : function(callback, value, meta) {
                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                            var cmsURL = '/cms/' + 'ndpe-filemanager?editor=' + meta.fieldname;
                            if (meta.filetype == 'image') {
                                cmsURL = cmsURL + '&type=Images';
                            } else {
                                cmsURL = cmsURL + '&type=Files';
                            }
                            tinyMCE.activeEditor.windowManager.openUrl({
                                url : cmsURL,
                                title : 'Filemanager',
                                width : x * 0.8,
                                height : y * 0.8,
                                resizable : 'yes',
                                close_previous : 'no',
                                onMessage: (api, message) => {
                                callback(message.content);
                                }
                            });
                        },
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                @this.set('buyerID', editor.getContent());
                        });
                    }
            });">
                <textarea  rows="20" id="buyerID" name="buyerID"  wire:model.defer='buyerID' required></textarea>
            </div>
            <h2 class="text-newbg-newgray-900 dark:text-gray-300 italic mt-4">Japan:</h2>
            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
            wire:ignore
            x-init="
            tinymce.init({
                selector: '#buyerJP',
                height : 500,
                height : '70vh',
                relative_urls : false,
                    remove_script_host : false,
                    convert_urls : true,
                    content_style: 'body { 	color: white; background-color: #22361b; }',
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
                        file_picker_callback : function(callback, value, meta) {
                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                            var cmsURL = '/cms/' + 'ndpe-filemanager?editor=' + meta.fieldname;
                            if (meta.filetype == 'image') {
                                cmsURL = cmsURL + '&type=Images';
                            } else {
                                cmsURL = cmsURL + '&type=Files';
                            }
                            tinyMCE.activeEditor.windowManager.openUrl({
                                url : cmsURL,
                                title : 'Filemanager',
                                width : x * 0.8,
                                height : y * 0.8,
                                resizable : 'yes',
                                close_previous : 'no',
                                onMessage: (api, message) => {
                                callback(message.content);
                                }
                            });
                        },
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                @this.set('buyerJP', editor.getContent());
                        });
                    }
            });">
                <textarea  rows="20" id="buyerJP" name="buyerJP"  wire:model.defer='buyerJP' required></textarea>
            </div>
        </div>
    </div>
</div>
