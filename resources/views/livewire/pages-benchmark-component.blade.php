<div x-data="{lang:'english'}" class="max-w-6xl mx-auto px-6 md:px-8 min-h-screen">
    <livewire:toastr />
    <div class=" border-b border-gray-300 dark:border-opacity-20 py-16 mb-6">
        <div class="max-w-6xl mx-auto flex justify-between ">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Page Benchmark</h1>
            <div class="z-30">
                <button wire:loading.remove wire:target='storeBenchmark'  wire:click='storeBenchmark' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    Save
                </button>
                <button wire:loading wire:target='storeBenchmark' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                    <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- benchmark --}}
    <div  class="overflow-x-auto scrollbar-hide whitespace-nowrap   subpixel-antialiased flex mb-2 justify-end">
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
    <div>
        <div x-show="lang==='english'" x-cloak style="display: none !important">
            <div class="w-full py-2 mb-6">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                    wire:ignore
                    x-init="
                    tinymce.init({
                        selector: '#benchmarkEN',
                        mobile: {
                                menubar: 'file edit view insert format',
                        },
                        height : 500,

                        height : '40vh',
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

                                setup: function(editor) {
                                    editor.on('change', function(e) {
                                        @this.set('benchmarkEN', editor.getContent());
                                });
                            }
                    });">
                    <textarea rows="20" id="benchmarkEN" name="benchmarkEN"  wire:model.defer='benchmarkEN' required></textarea>
                </div>
            </div>
        </div>
        <div x-show="lang==='indonesia'" x-cloak style="display: none !important">
            <div class="w-full py-2 mb-6">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                    wire:ignore
                    x-init="
                    tinymce.init({
                        selector: '#benchmarkID',
                        mobile: {
                                menubar: 'file edit view insert format',
                        },
                        height : 500,

                        height : '40vh',
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

                                setup: function(editor) {
                                    editor.on('change', function(e) {
                                        @this.set('benchmarkID', editor.getContent());
                                });
                            }
                    });">
                    <textarea rows="20" id="benchmarkID" name="benchmarkID"  wire:model.defer='benchmarkID' required></textarea>
                </div>
            </div>
        </div>
        <div x-show="lang==='japan'" x-cloak style="display: none !important">
            <div class="w-full py-2 mb-6">
                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                    wire:ignore
                    x-init="
                    tinymce.init({
                        selector: '#benchmarkJP',
                        mobile: {
                                menubar: 'file edit view insert format',
                        },
                        height : 500,

                        height : '40vh',
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

                                setup: function(editor) {
                                    editor.on('change', function(e) {
                                        @this.set('benchmarkJP', editor.getContent());
                                });
                            }
                    });">
                    <textarea rows="20" id="benchmarkJP" name="benchmarkJP"  wire:model.defer='benchmarkJP' required></textarea>
                </div>
            </div>
        </div>

    </div>

    {{-- recommendation --}}
    <div class="border px-6 py-6 border-gray-300 dark:border-opacity-20" x-data="{ open:false}">
        <div class="flex justify-between items-center cursor-pointer " @click="open = ! open">
            <h1 class="sm:text-4xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Recommendation</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-newbg-newgray-900 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
        </div>
        <div x-show="open" x-cloak style="display: none !important" class="mt-6">
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
            <div class="grid grid-cols-12 gap-x-4" x-data="{ tabs: 'producer' }">
                <div class= "sm:col-span-3 col-span-12" >
                    <div class="overflow-x-auto  scrollbar-hide whitespace-nowrap  sm:col-span-3  sm:space-x-0  space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                        {{-- tabs overview --}}
                        <div @click="tabs='producer'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                        :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'producer' }"
                        >
                            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                            :class="{ 'font-black' : tabs === 'producer' }"
                            >FOR PRODUCER</a>
                        </div>
                        {{-- tabs buyerinvestor --}}
                        <div @click="tabs='buyerinvestor'" class=" mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                        :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'buyerinvestor' }"
                        >
                            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                            :class="{ 'font-bold' : tabs === 'buyerinvestor' }"
                            >BUYER & INVESTOR</a>
                        </div>
                        {{-- tabs individual --}}
                        <div @click="tabs='individual'" class="mb-2 hover:bg-gray-200 dark:hover:bg-newgray-700 py-2 px-2 rounded  cursor-pointer"
                        :class="{ 'border-l-2 border-newgray-900 dark:border-gray-300' : tabs === 'individual' }"
                        >
                            <a  class=" px-0.5  text-newgray-900 dark:text-gray-400 text-sm   hover:text-newgray-900 dark:hover:text-gray-300 "
                            :class="{ 'font-bold' : tabs === 'individual' }"
                            >FOR INDIVIDUAL CONSUMERS</a>
                        </div>


                    </div>
                </div>
                <div class="sm:col-span-9 col-span-12 " >
                    {{-- the platform --}}
                    <div x-show="tabs==='producer'" x-cloak style="display: none !important">
                        <div x-show="lang==='english'" x-cloak style="display: none !important">
                            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                                    wire:ignore
                                    x-init="
                                    tinymce.init({
                                        selector: '#producerEN',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('producerEN', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="producerEN" name="producerEN"  wire:model.defer='producerEN' required></textarea>
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
                                        selector: '#producerID',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('producerID', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="producerID" name="producerID"  wire:model.defer='producerID' required></textarea>
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
                                        selector: '#producerJP',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('producerJP', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="producerJP" name="producerJP"  wire:model.defer='producerJP' required></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- buyerinvestor--}}
                    <div x-show="tabs==='buyerinvestor'" x-cloak style="display: none !important">
                        <div x-show="lang==='english'" x-cloak style="display: none !important">
                            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                                    wire:ignore
                                    x-init="
                                    tinymce.init({
                                        selector: '#buyerinvestorEN',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('buyerinvestorEN', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="buyerinvestorEN" name="buyerinvestorEN"  wire:model.defer='buyerinvestorEN' required></textarea>
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
                                        selector: '#buyerinvestorID',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('buyerinvestorID', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="buyerinvestorID" name="buyerinvestorID"  wire:model.defer='buyerinvestorID' required></textarea>
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
                                        selector: '#buyerinvestorJP',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('buyerinvestorJP', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="buyerinvestorJP" name="buyerinvestorJP"  wire:model.defer='buyerinvestorJP' required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- individual--}}
                    <div x-show="tabs==='individual'" x-cloak style="display: none !important">
                        <div x-show="lang==='english'" x-cloak style="display: none !important">
                            <div class="w-full border border-gray-300 dark:border-opacity-20 rounded px-6 py-6 mb-6">
                                <h1 class="text-2xl font-semibold  text-newbg-newgray-900 dark:text-gray-300 mb-4">Content</h1>
                                <div class="w-full border border-gray-300 dark:border-opacity-20 rounded"
                                    wire:ignore
                                    x-init="
                                    tinymce.init({
                                        selector: '#individualEN',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('individualEN', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="individualEN" name="individualEN"  wire:model.defer='individualEN' required></textarea>
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
                                        selector: '#individualID',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('individualID', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="individualID" name="individualID"  wire:model.defer='individualID' required></textarea>
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
                                        selector: '#individualJP',
                                        mobile: {
                                                menubar: 'file edit view insert format',
                                        },
                                        height : 500,

                                        height : '100vh',
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

                                                setup: function(editor) {
                                                    editor.on('change', function(e) {
                                                        @this.set('individualJP', editor.getContent());
                                                });
                                            }
                                    });">
                                    <textarea rows="20" id="individualJP" name="individualJP"  wire:model.defer='individualJP' required></textarea>
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

                                        height : '100vh',
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

                                        height : '100vh',
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

                                        height : '100vh',
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

                                        height : '100vh',
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

                                        height : '100vh',
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

                                        height : '100vh',
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
    </div>

</div>
