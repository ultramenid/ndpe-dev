<div x-data="{lang:'english'}" class="max-w-6xl mx-auto px-6 md:px-8 min-h-screen">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 py-16 mb-6">
        <div class="max-w-6xl mx-auto px-6  flex justify-between ">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Page About</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storeAbout'  wire:click='storeAbout' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Save
                </button>
                <button wire:loading wire:target='storeAbout' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div  class="overflow-x-auto scrollbar-hide whitespace-nowrap   subpixel-antialiased flex mb-6 justify-end">
        {{-- tabs english --}}
        <div @click="lang='english'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : lang === 'english' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-black' : lang === 'english' }"
            >English</a>
        </div>
        {{-- lang indonesia --}}
        <div @click="lang='indonesia'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : lang === 'indonesia' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-bold' : lang === 'indonesia' }"
            >Indonesia</a>
        </div>
        {{-- lang japan --}}
        <div @click="lang='japan'" class="hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
        :class="{ 'border-b-2 border-newgray-900 dark:border-gray-300' : lang === 'japan' }"
        >
            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
            :class="{ 'font-bold' : lang === 'japan' }"
            >Japan</a>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-x-4" x-data="{ tabs: 'theplatform' }">
        <div class= "sm:col-span-3 col-span-12" >
            <div class="overflow-x-auto  scrollbar-hide whitespace-nowrap  sm:col-span-3  sm:space-x-0  space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                {{-- tabs overview --}}
                <div @click="tabs='theplatform'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'theplatform' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-black' : tabs === 'theplatform' }"
                    >The Platform</a>
                </div>
                {{-- tabs ownership --}}
                <div @click="tabs='ownership'" class=" mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'ownership' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'ownership' }"
                    >Ownership</a>
                </div>
                {{-- tabs editorial --}}
                <div @click="tabs='editorial'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'editorial' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'editorial' }"
                    >Editorial</a>
                </div>
                {{-- tabs content --}}
                <div @click="tabs='content'" class=" mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'content' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'content' }"
                    >Content</a>
                </div>
                {{-- tabs timeline --}}
                <div @click="tabs='timeline'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'timeline' }"
                >
                    <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                    :class="{ 'font-bold' : tabs === 'timeline' }"
                    >Timeline</a>
                </div>

            </div>
        </div>
        <div class="sm:col-span-9 col-span-12 " >
            {{-- the platform --}}
            <div x-show="tabs==='theplatform'" x-cloak style="display: none !important">
                <div x-show="lang==='english'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#theplatformEN',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('theplatformEN', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="theplatformEN" name="theplatformEN"  wire:model.defer='theplatformEN' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#theplatformID',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('theplatformID', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="theplatformID" name="theplatformID"  wire:model.defer='theplatformID' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='japan'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#theplatformJP',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('theplatformJP', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="theplatformJP" name="theplatformJP"  wire:model.defer='theplatformJP' required></textarea>
                        </div>
                    </div>
                </div>

            </div>
            {{-- ownership--}}
            <div x-show="tabs==='ownership'" x-cloak style="display: none !important">
                <div x-show="lang==='english'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#ownershipEN',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('ownershipEN', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="ownershipEN" name="ownershipEN"  wire:model.defer='ownershipEN' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#ownershipID',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('ownershipID', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="ownershipID" name="ownershipID"  wire:model.defer='ownershipID' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='japan'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#ownershipJP',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('ownershipJP', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="ownershipJP" name="ownershipJP"  wire:model.defer='ownershipJP' required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- editorial--}}
            <div x-show="tabs==='editorial'" x-cloak style="display: none !important">
                <div x-show="lang==='english'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#editorialEN',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('editorialEN', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="editorialEN" name="editorialEN"  wire:model.defer='editorialEN' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#editorialID',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('editorialID', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="editorialID" name="editorialID"  wire:model.defer='editorialID' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='japan'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#editorialJP',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('editorialJP', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="editorialJP" name="editorialJP"  wire:model.defer='editorialJP' required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- content--}}
            <div x-show="tabs==='content'" x-cloak style="display: none !important">
                <div x-show="lang==='english'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#contentEN',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('contentEN', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="contentEN" name="contentEN"  wire:model.defer='contentEN' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#contentID',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('contentID', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="contentID" name="contentID"  wire:model.defer='contentID' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='japan'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#contentJP',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('contentJP', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="contentJP" name="contentJP"  wire:model.defer='contentJP' required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- timeline--}}
            <div x-show="tabs==='timeline'" x-cloak style="display: none !important">
                <div x-show="lang==='english'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#timelineEN',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('timelineEN', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="timelineEN" name="timelineEN"  wire:model.defer='timelineEN' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#timelineID',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('timelineID', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="timelineID" name="timelineID"  wire:model.defer='timelineID' required></textarea>
                        </div>
                    </div>
                </div>
                <div x-show="lang==='japan'" x-cloak style="display: none !important">
                    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                        <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                        <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                            wire:ignore
                            x-init="
                            tinymce.init({
                                selector: '#timelineJP',
                                mobile: {
                                        menubar: 'file edit view insert format',
                                },
                                height : 500,
                                skin: 'snow',
                                icons : 'thin',
                                height : '100vh',
                                content_style: 'body { 	color: white; background-color: #22361b; }',
                                plugins: [
                                        'advlist autolink textcolor link image lists charmap print preview hr anchor pagebreak',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'table emoticons template paste help'
                                        ],
                                        toolbar: 'fullscreen preview| fontselect fontsizeselect formatselect  bold italic forecolor|bullist numlist alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist outdent indent | link image | print  media  | ' +
                                        ' backcolor emoticons |undo redo  help',
                                        menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                        },
                                        menubar: ' file edit view insert format tools table help',

                                        setup: function(editor) {
                                            editor.on('change', function(e) {
                                                @this.set('timelineJP', editor.getContent());
                                        });
                                    }
                            });">
                            <textarea rows="20" id="timelineJP" name="timelineJP"  wire:model.defer='timelineJP' required></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
