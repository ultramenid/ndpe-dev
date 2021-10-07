@extends('layouts.indexLayout')

@section('content')
@include('partials.header')
    <section class="relative">
        <div class="min-h-screen bg-update-ndpe py-6" style="
        background-image: url({{ asset('assets/img-bg2.jpeg') }});
        background-repeat: no-repat;
        background-size: cover;
        background-color: transparent;
        background-blend-mode:multiply;">
            @include('partials.nav')
            <div class="max-w-4xl mx-auto relative px-6 sm:mt-32 mt-22 text-gray-300 z-20">
                <h1 class="sm:text-6xl text-3xl font-notoserif text-center">NDPE Performance</h1>
            </div>
            <div class="max-w-6xl mx-auto relative px-6 py-12 text-gray-300 z-20">
                <div class="bg-brown-ndpe  px-4 py-6 overflow-x-auto">
                    <div class="w-full">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="text-ndpe text-left text-xl">
                                        <th class="px-2">Company Name</th>
                                        <th class="px-2 text-center">Deforestation</th>
                                        <th class="px-2 text-center">Biodiversity Loss</th>
                                        <th class="px-2 text-center">Peatland Destruction</th>
                                        <th class="px-2 text-center">Social Conflict</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 mb-2">
                                        <td class="bg-brown-ndpe border border-green-ndpe  text-ndpe  font-bold text-xl py-4 px-2"">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/Djarum-Logo.png') }}" alt="" class="h-10">
                                                </div>
                                                <p>Djarum</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe">
                                            <div class="flex items-center space-x-1  justify-center">
                                                <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4  border border-green-ndpe "><div class="flex  items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/MusimMas.png') }}" alt="" class="h-8 w-12">
                                                </div>
                                                <p>Musim Mas</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/Korindo-Logo.png') }}" alt="" class="h-10">
                                                </div>
                                                <p>Korindo</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-yellow-400  border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/Wilmar-Logo.png') }}" alt="" class="h-8 w-12">
                                                </div>
                                                <p>Wilmar</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/RGE-Logo.png') }}" alt="" class="h-12">
                                                </div>
                                                <p>Royal Golden Eagle</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/Salim-Logo.png') }}" alt="" class="h-8">
                                                </div>
                                                <p>Salim</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
                                            <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                    <tr class="h-4">
                                        <td></td>
                                    </tr>
                                    <tr class="text-left text-gray-300 ">
                                        <td class="bg-brown-ndpe  text-ndpe  font-bold text-xl py-4 px-2 border border-green-ndpe">
                                            <div class="flex flex-row items-center space-x-2">
                                                <div class="w-4/12 flex justify-center">
                                                    <img src="{{ asset('assets/corporate/Sinarmas-Logo.png') }}" alt="" class="h-10">
                                                </div>
                                                <p>Sinarmas</p>
                                            </div>
                                        </td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                        <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                <div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                                <div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto relative px-6 py-12 text-gray-300 z-20">
                <div class="flex justify-between space-x-20" x-data="{ methods : 'method' }">
                    <div class="w-5/12 flex flex-col space-y-4 ">
                        <div class="border-b border-gray-300">
                            <a
                            :class="{ 'font-black' : methods === 'method' }"
                            class="text-2xl cursor-pointer" @click="methods = 'method' ">METODE</a>
                        </div>
                        <div class="border-b border-gray-300">
                            <a
                            :class="{ 'font-black' : methods === 'pengukuran' }"
                            class="text-2xl cursor-pointer" @click="methods = 'pengukuran' ">PENGUKURAN</a>
                        </div>
                    </div>
                    <div class="w-7/12">
                        <div class="flex flex-col space-y-4" x-show=" methods ==='method'" x-cloak style="display: none !important">
                            <p class="leading-relaxed text-gray-300">
                                Method AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.Dusaes mi, sitatiust hicidia veria quodi inus pelibeatium expersperum nulluptatur? Quis aut ut venihilignia quiam, sum laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui opta que.</p>
                            <p class="leading-relaxed text-gray-300">
                                AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.Dusaes mi, sitatiust hicidia veria quodi inus pelibeatium expersperum nulluptatur? Quis aut ut venihilignia quiam, sum laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui
                            opta que.laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui opta que
                            </p>
                        </div>
                        <div class="flex flex-col space-y-4" x-show=" methods ==='pengukuran'" x-cloak style="display: none !important">
                            <p class="leading-relaxed text-gray-300">
                                Pengukuran AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.Dusaes mi, sitatiust hicidia veria quodi inus pelibeatium expersperum nulluptatur? Quis aut ut venihilignia quiam, sum laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui opta que.
                            </p>
                            <p class="leading-relaxed text-gray-300">
                                AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.Dusaes mi, sitatiust hicidia veria quodi inus pelibeatium expersperum nulluptatur? Quis aut ut venihilignia quiam, sum laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui
                                opta que.laut pe cum quamet quatur, cum faciet lam, volo maiore omnimi, quid molorepratem dolupta sitios nulpa doluptatium volorum veleseq uissum fugia ex et aut qui opta que
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
