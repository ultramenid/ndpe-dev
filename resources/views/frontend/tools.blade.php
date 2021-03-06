@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

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

            {{-- performance lg --}}
            <div class="max-w-6xl mx-auto relative px-6 py-12 text-gray-300 z-20 sm:block hidden">
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
                                    @foreach ($corporates as $item)
                                        <tr class="h-4">
                                            <td></td>
                                        </tr>
                                        <tr class="text-left text-gray-300 mb-2">
                                            <td class="bg-brown-ndpe border border-green-ndpe  text-ndpe  font-bold text-xl py-4 px-2"">
                                                <div class="flex flex-row items-center space-x-2">
                                                    <div class="w-4/12 flex justify-center">
                                                        <img src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="" class="h-10">
                                                    </div>
                                                    <p>{{ $item->name}}</p>
                                                </div>
                                            </td>
                                            <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe">
                                                <div class="flex items-center space-x-1  justify-center ">
                                                    @include('partials.rateDeforestation')
                                                </div>
                                            </td>
                                            <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe">
                                                <div class="flex items-center space-x-1 justify-center">
                                                    @include('partials.rateBloss')
                                                </div>
                                            </td>
                                            <td class="bg-green-ndpe py-4 px-2 border border-green-ndpe"><div class="flex items-center space-x-1 justify-center">
                                                    @include('partials.ratePeatland')
                                                </div></td>
                                            <td class="bg-green-ndpe py-4  border border-green-ndpe "><div class="flex  items-center space-x-1 justify-center">
                                                    @include('partials.rateSocial')
                                                </div></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

            {{-- performance sm --}}
            <div class="max-w-6xl mx-auto relative px-6 py-12 text-gray-300 z-20 sm:hidden block"
                x-data="{open: ''}"
                >
                <div class="bg-brown-ndpe  px-4 py-6">
                    @foreach ($corporates as $item)
                    <div @click="open = '{{$item->id}}'" class="bg-brown-ndpe border border-green-ndpe  text-ndpe   py-4 px-2 mt-4">
                        <div class="flex flex-row items-center space-x-1">
                            <div class="w-3/12 flex justify-center">
                                <img src="{{ asset('/storage/thumbnail/'.$item->img) }}" alt="{{$item->name}}" class="h-10">
                            </div>
                            <p class="font-bold text-xl">{{$item->name}}</p>
                        </div>

                        <div x-show="open === '{{$item->id}}'" x-cloak style="display: none !important">
                            <div class="flex flex-col mt-4">
                                <div class="flex flex-row px-2">
                                    <div class="w-3/12 flex justify-center"></div>
                                    <div class="flex flex-col ">
                                        <a>Deforestation</a>
                                        <div class="flex space-x-1">
                                            @include('partials.rateDeforestation')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col mt-4">
                                <div class="flex flex-row px-2">
                                    <div class="w-3/12 flex justify-center"></div>
                                    <div class="flex flex-col ">
                                        <a>Biodiversity Loss</a>
                                        <div class="flex space-x-1">
                                            @include('partials.rateBloss')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4">
                                <div class="flex flex-row px-2">
                                    <div class="w-3/12 flex justify-center"></div>
                                    <div class="flex flex-col ">
                                        <a>Peatland Destruction</a>
                                        <div class="flex space-x-1">
                                            @include('partials.ratePeatland')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4">
                                <div class="flex flex-row px-2">
                                    <div class="w-3/12 flex justify-center"></div>
                                    <div class="flex flex-col ">
                                        <a>Social Conflict</a>
                                        <div class="flex space-x-1">
                                            @include('partials.rateSocial')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>


            <div class="max-w-6xl mx-auto relative px-6 py-12 text-gray-300 z-20">
                <div class="flex sm:flex-row flex-col justify-between sm:space-x-20 space-x-0 sm:space-y-0 space-y-6" x-data="{ methods : 'method' }">
                    <div class="sm:w-5/12 w-full flex flex-col space-y-4 ">
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
                    <div class="sm:w-7/12 w-full">
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
