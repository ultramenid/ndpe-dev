@extends('layouts.indexLayout')

@section('content')
@include('partials.header')
    <div class="h-min-screen bg-update-ndpe py-6">
        @include('partials.nav')
        <div class="max-w-6xl mx-auto relative px-6 py-6">
            <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4 sm:mt-12 sm-6">
                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595436986_5f186fba23a5a.gif" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center " >

                    <p class="text-2xl  text-gray-200 font-notoserif cursor-pointer hover:underline pt-2">Analisis citra: Deforestasi dalam konsesi Djarum Grup di Kaltim</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-gray-200 cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col ">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595501900_5f196d4c899ab.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center ">

                    <p class="text-2xl text-gray-200 font-notoserif cursor-pointer hover:underline pt-2">Deforestasi di Muara Sungai Landak, konsesi terhubung APP</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-gray-200 cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>

                <div class="col-span-1 flex flex-col">
                    <a href="{{ url('/article') }}"><img loading="lazy" src="https://pasopati.id/uploads/artikel/1595585064_5f1ab228b5098.jpeg" alt="" class="cursor-pointer h-52 w-96 bg-cover bg-center">

                    <p class="text-2xl text-gray-200 font-notoserif cursor-pointer hover:underline pt-2">Kebijakan land-swap: Setengah hati lindungi gambut & hutan alam</p>
                    <div class="flex flex-wrap mt-auto pt-3">
                        <a class="font-bold text-gray-200 cursor-pointer">Read More</a>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-ndpe-profile min-h-screen">
        <div class="max-w-6xl mx-auto relative px-6 py-6">




            <div class="mt-4">
                <a class="text-gray-300 text-sm">October 2021</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/the-understory/brands-and-banks-continue-to-fuel-fires-despite-the-climate-crisis/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Brands and banks continue to fuel fires despite the climate crisis</a>
                        <p class="text-sm mt-4 text-gray-300">New research exposes their business partners’ legacy of forest fires</p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/the-understory/brands-and-banks-continue-to-fuel-fires-despite-the-climate-crisis/" class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2021/09/RAN-FWOA-2021-Social-Share-2to1A.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">September 2021</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/indigenous-community-demands-brands-and-banks-stop-business-with-rogue-palm-oil-company/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Indigenous community demands brands & banks stop business with rogue palm oil company
                        </a>
                        <p class="mt-4 text-sm text-gray-300">A new video tells the story of the Indigenous community of Bunin, in the Leuser Ecosystem, as they defend their forest against development</p>
                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/indigenous-community-demands-brands-and-banks-stop-business-with-rogue-palm-oil-company/
                            " class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover " src="https://www.ran.org/wp-content/uploads/2021/09/RAN_ATM_5D3_210624_RIF_0558-1-1536x1024.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">August 2021</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/olympic-sponsor-nissin-foods-exposed-for-driving-deforestation-in-leuser-ecosystem/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Olympic Sponsor Nissin Foods Exposed for Driving Deforestation in Leuser Ecosystem</a>
                        <p class="text-sm mt-4 text-gray-300">New video implores Nissin Foods to take action now!
                        </p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/olympic-sponsor-nissin-foods-exposed-for-driving-deforestation-in-leuser-ecosystem/" class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2021/08/LDF_RAN_20160814_029-1536x1103.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">June 2021</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/indonesian-forestry-titan-royal-golden-eagle-remains-a-major-roadblock-to-progress-in-saving-leuser-ecosystem/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">RGE remains a major roadblock to progress in saving Leuser Ecosystem</a>
                        <p class="mt-4 text-sm text-gray-300">RGE has failed to adhere to no-deforestation commitments, creating liability for global brands and banks still doing business with the rogue company</p>
                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/indonesian-forestry-titan-royal-golden-eagle-remains-a-major-roadblock-to-progress-in-saving-leuser-ecosystem/
                            " class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2021/06/A14I3153-1536x1146.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">May 2021</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/group-links-global-brands-and-financiers-to-deforestation-in-the-leuser/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">RGE  links global brands & financiers to deforestation In the Leuser Ecosystem</a>
                        <p class="text-sm mt-4 text-gray-300">RGE palm oil arm APICAL caught sourcing from notorious forest destroyer</p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/group-links-global-brands-and-financiers-to-deforestation-in-the-leuser/
                            " class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2020/09/PTTrucksAtMill.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>


            <div class="mt-4">
                <a class="text-gray-300 text-sm">November 2020</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/kfs-scorecard/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">The need for Free, Prior and Informed Consent</a>
                        <p class="text-sm mt-4 text-gray-300">An evaluation of the policies and standard operating procedures of ten major corporate groups involved in forest-risk commodity supply chains in Southeast Asia</p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/kfs-scorecard/
                            " class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="{{ asset('assets/img-2020.png') }}" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>


            <div class="mt-4">
                <a class="text-gray-300 text-sm">October 2020</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/palm-oil-giant-suspends-pt-dpl/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Palm oil giant suspends PT Dua Perkasa Lestari</a>
                        <p class="text-sm mt-4 text-gray-300">Golden Agri Resources needs to engage PT DPL to ensure remedy is secured for Pante Cermin community
                        </p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/palm-oil-giant-suspends-pt-dpl/" class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2020/08/7_DPL_FightingCommunity-1.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">October 2020</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/major-brands-and-banks-complicit/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Major brands and banks complicit in the production of conflict palm oil on stolen community lands in Indonesia</a>
                        <p class="text-sm mt-4 text-gray-300">Nestlé, Mars, Mondelēz, Unilever and Dutch bank ABN AMRO found in violation of their own policies against human rights abuses
                        </p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/major-brands-and-banks-complicit/" class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2020/08/10_TruckArrivingPTBSPMill-1.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">March 2020</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-gray-200 sm:w-9/12 w-full">
                        <a href="https://www.ran.org/wp-content/uploads/2020/03/RAN_Keep_Forests_Standing_vWEB.pdf" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">Keep Forests Standing - Exposing brands and banks driving deforestation</a>
                        <p class="mt-4 text-gray-300">We all depend on forests. Brands and banks failing to stop deforestation and respect rights.</p>
                        <div class="flex mt-2 space-x-2">
                            <a href="https://www.ran.org/wp-content/uploads/2020/03/RAN_Keep_Forests_Standing_vWEB.pdf
                            " class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2020/03/548A9073-blg.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>

            <div class="mt-4">
                <a class="text-gray-300 text-sm">September 2019</a>
                <div class="flex justify-between space-x-6">
                    <div class="text-white sm:w-9/12 w-full">
                        <a href="https://www.ran.org/leuser-watch/the-last-of-the-leuser-lowlands/" class="sm:text-2xl text-2xl font-notoserif cursor-pointer hover:underline">The Last of the Leuser Lowlands</a>
                        <p class="text-sm mt-4 text-gray-300">Field investigation exposes big brands buying illegal palm oil from the Singkil-Bengkung peatlands
                        </p>

                        <div class="flex mt-4 space-x-2">
                            <a href="https://www.ran.org/leuser-watch/the-last-of-the-leuser-lowlands/" class="cursor-pointer text-gray-300 hover:underline text-sm">Rainforest Action Network</a>
                            <div class="border-r border-green-ndpe-2"></div>
                            <div class="flex justify-between space-x-2 text-sm">
                                <a class="cursor-pointer text-ndpe underline">#SMG</a>
                                <a class="cursor-pointer text-ndpe underline">#APP</a>
                                <a class="cursor-pointer text-ndpe underline">#Pulp & paper</a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden w-3/12 ">
                        <img class="h-40 w-72 object-cover" src="https://www.ran.org/wp-content/uploads/2019/09/CPO_Cycle_Destruction.jpg" alt="">
                    </div>
                </div>
                <div class="border-b border-white mt-4"></div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
