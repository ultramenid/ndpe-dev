@extends('layouts.indexLayout')

@section('content')
@include('partials.header')
<div class="bg-green-ndpe h-10 sm:block hidden"></div>
    <div class="h-min-screen bg-article-ndpe py-6">
        @include('partials.navArticle')

        <div class="max-w-6xl mx-auto relative px-6 sm:mt-28 mt-6">
            <h1 class="sm:text-5xl text-4xl text-ndpe text-center  font-notoserif">Djarum It velitiam a volumque aut veles maximen nusam quis auditium</h1>

            <img class="text-center mt-12" src="https://images.unsplash.com/photo-1585252155261-cff31944d781?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1974&q=80" alt="">

            <div class="max-w-4xl mx-auto relative mt-12">
                <div class="flex flex-row justify-between space-x-20">
                    <div class="w-8/12 text-xl font-light">
                        <p>AboutVolo est, tet voluptament aliqui dentin re plitis pa quaspictem quossit, andiat. Pa parum quis sin nonsequi tor as alis et, similique nem qui nobit ipsumque ad milluptae pa sitae labore, ne vid ent id quam sunt.</p>
                        <p class="mt-4">
                            Eriorehente vid earum esendant expera quate volorest asim fugia pro mo que paritem harum, incienis nemqui quos esequi dem rehenihicia doluptaturis dolorae por ametus dolupti doluptati conseque veraept assinvelesed maxima dollupt aspiciusam es et iduntem est, il et volent mosam aut lab ipiet quis si aciur aut dolore doluptas exces comni ut aliquam, quuntist, nonsequae nonsed maximil laccusam exerum .
                        </p>
                        <p class="mt-4">
                            Dam quat prate cor alibusa perit, solor autemo volo estorerum rerenimi, si sequis aut utat et et voluptaquam am derum volenit enimil eatecerum quo berovidicia impost ad quidi cus. Uptatem. Et ligendi catesti del explaut dolum aspera aut etadi omniat qui ant.Lum hit essit, alibusant. Consendani cum quiassequat faceaque iunt.
                        </p>
                        <p class="mt-4">
                            Doluptint. Unt officab oriosti onseque dit eum qui tet fugitas essusam quas maxime est quame maximol orepudissunt mil est, ommo vel inveritatem assinct otatiate num exerchi llenienimus
                        </p>
                        <p class="mt-4">
                            It lant omnis ne cuptatur rendia volo veliciam volupta dolum ut que suntisi molenduciis eturem volor sum quiatem rehent ut fuga. Et officatquis il mod mo blabore ipsum natenihitis et milluptatius et, susdaeped ex eos et aut omnis undae
                            et officienim reperia plit ma quisquo volorerum, velibus ciistec eperum quam es quassunt que nam dollaciam hillori atemolorepta cullendi dignistibus.
                        </p>
                        <p class="mt-4">
                            Iquiam, omnis est, optus. Biti ius ex expel ium comnisciis des duciet officiu sdandi cone voluptenducidolupta quodit velique prori re velent antus everfernatur mint
                        </p>
                    </div>
                    <div class="w-4/12 flex flex-col space-y-4">
                        <div class="border-b-2 border-green-ndpe">
                            <a class="text-ndpe text-2xl font-bold">RELATED ARTICLES</a>
                        </div>

                        <div class="border-b border-green-ndpe">
                            <a class="cursor-pointer hover:underline text-xl font-notoserif leading-none">
                                Cetak sawah di gambut Kalteng potensial hadirkan petaka baru
                            </a>
                        </div>
                        <div class="border-b border-green-ndpe">
                            <a class="cursor-pointer hover:underline text-xl font-notoserif leading-none">
                                Industri pulp perparah risiko kebakaran hutan dan lahan gambut
                            </a>
                        </div>
                        <div class="border-b border-green-ndpe">
                            <a class="cursor-pointer hover:underline text-xl font-notoserif leading-none">
                                2018, APP dan APRIL masih terima kayu kontroversial Djarum Grup
                            </a>
                        </div>
                        <div class="border-b border-green-ndpe">
                            <a class="cursor-pointer hover:underline text-xl font-notoserif leading-none">
                                Pengakuan APP: Terhubung dengan perusahaan bermasalah
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl mx-auto relative mt-12">
                <div class="border-b-2 border-ndpe mb-6">
                    <a class="text-ndpe text-2xl font-bold">EXPLORE MORE</a>
                </div>
                <div class=" grid sm:grid-cols-3 grid-cols-1 gap-4">
                    <div class="col-span-1 flex flex-col">
                        <a href="{{ url('/article') }}"><img loading="lazy" src="https://images.unsplash.com/photo-1599225745499-60e0488b3d5c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=450&q=80" alt="" class="cursor-pointer ">

                        <p class="text-2xl  text-ndpe font-notoserif cursor-pointer hover:underline">Gajah di pelupuk mata tidak terlihat, semut di seberang lautan terlihat</p>
                        <div class="flex flex-wrap mt-auto pt-3">
                            <a class="font-bold" style="color: #277a28">Explore More</a>
                        </div>
                        </a>
                    </div>

                    <div class="col-span-1 flex flex-col">
                        <a href="{{ url('/article') }}"><img loading="lazy" src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZmFjdG9yeSUyMHNtb2tlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=450&q=60" alt="" class="cursor-pointer">

                        <p class="text-2xl text-ndpe font-notoserif cursor-pointer hover:underline">Djarum It velitiam a volumque aut veles maximen empore nusam quis auditium</p>
                        <div class="flex flex-wrap mt-auto pt-3">
                            <a class="font-bold" style="color: #277a28">Explore More</a>
                        </div>
                        </a>
                    </div>

                    <div class="col-span-1 flex flex-col">
                        <a href="{{ url('/article') }}"><img loading="lazy" src="https://images.unsplash.com/photo-1543470373-e055b73a8f29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=450&q=80" alt="" class="cursor-pointer">

                        <p class="text-2xl text-ndpe font-notoserif cursor-pointer hover:underline">NASA Deteksi Es Mencair di Greenland, Sinyal Memburuknya Perubahan Iklim</p>
                        <div class="flex flex-wrap mt-auto pt-3">
                            <a class="font-bold" style="color: #277a28">Explore More</a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
