@extends('layouts.indexLayout')


@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
@include('partials.header')
    <section class="relative">
        <div class="min-h-screen bg-update-ndpe py-6" style="
        background-image: url({{ asset('assets/new-bg.jpg') }});
        background-repeat: no-repat;
        background-size: cover;
        background-color: transparent;
        background-blend-mode:multiply;">
            @include('partials.nav')

            <div class="max-w-6xl mx-auto px-6 py-28 text-gray-300 z-20"
            x-data="{ tabs: 'theplatform' }"
            >
                <h1 class="text-5xl font-notoserif font-light">NDPE Transparency Platform</h1>
                <div class="flex sm:flex-row flex-col justify-between sm:space-x-12 space-x-0 sm:space-y-0 space-y-6 mt-12">
                    <div class="sm:w-5/12 w-full flex flex-col space-y-4">
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'theplatform' }" @click=" tabs = 'theplatform' " class="text-2xl font-light cursor-pointer">THE PLATFORM</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'ownership' }" @click=" tabs = 'ownership'"   class="text-2xl font-light cursor-pointer">OWNERSHIP</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'editorial' }" @click=" tabs = 'editorial' "  class="text-2xl font-light cursor-pointer">EDITORIAL</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'content' }" @click=" tabs = 'content' "  class="text-2xl font-light cursor-pointer">CONTENT</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : tabs === 'timeline' }" @click=" tabs = 'timeline'"  class="text-2xl font-light cursor-pointer">TIMELINE</a>
                        </div>
                    </div>
                    <div class="sm:w-7/12 w-full">
                        <div class="flex flex-col space-y-6" x-show="tabs === 'theplatform' ">
                            <p class="leading-relaxed">{{__('This website is developed and managed by Auriga, in collaboration with A, B, C and with support from those who have been working for nature conservation and better livelihoods of people in Indonesia for a long time.')}}</p>
                            <p class="leading-relaxed">
                                {{__('2020 deforestation and conversion free (DCF) promises by many global companies were not met because key deforestation drivers - pulp & paper and palm oil companies - continue their business as usual in Indonesia. We urge global commodity industries to cut ties with the drivers of')}} <a class="text-red-500">{{__('deforestation')}}</a> , <a class="text-red-500">{{__('climate change')}}</a> ,<a class="text-red-500"> {{__('human rights violation')}} </a>{{__('and')}} <a class="text-red-500">{{__('biodiversity loss')}}</a>.
                            </p>
                            <p class="leading-relaxed">
                                {{__('We hope that this website will become a go-to tool for global buyers and investors to get up-to-date information on the latest issues and understand the performance of')}} <a href="{{ url('tools') }}" class="text-red-500">{{__('seven key corporate groups')}}</a> {{__('producing and trading commodities against the')}} <a href="{{ url('call') }}" class="text-red-500">{{__('benchmark')}}</a>  {{__('set up by NGOs so they can take informed decisions to implement their responsible commodity sourcing policies.')}}
                            </p>
                            <p class="leading-relaxed">
                                {{__('We want to stress one thing - we are not boycotting Indonesia. We want to protect Indonesia from destruction caused by global commodity demand and individual profit making.')}}
                            </p>
                        </div>
                        <div x-show=" tabs === 'ownership'"  x-cloak style="display: none !important" class="flex flex-col space-y-6">
                            <p class="leading-relaxed">
                                {{__('The platform will be managed by Auriga Nusantara, that developed and maintains various coalitions with many NGOs to publish joint reports and write joint letters on pressing topics. The coalitions keeps the participation flexible and open to allow NGOs decide to join or not join in any specific publication or letter. The coalition is also open for new members who work on the same topics to join.')}}
                            </p>
                            <p class="leading-relaxed">
                                {{__('So far, NGOs that already consulted in developing the platform are Greenpeace, Forest People Program, Rainforest Action Network, Greenpeace, WWF, EPN, HAKI, Eyes on the Forest. It is planned to expand the NGO list, particularly one that operate in companies’ concession area.')}}
                            </p>
                        </div>
                        <div x-show="tabs === 'editorial' " x-cloak style="display: none !important" class="flex flex-col space-y-6" >
                            <p class="leading-relaxed">
                                {{__('There will be two types of information published on the platform: (1) contents published only on the platform including joint publications, and (2) contents published by each NGO but posted at the platform.')}}
                            </p>
                            <p class="leading-relaxed">
                                {{__('For (1), Auriga will set up an editorial team consisting of members representing participating organizations to peer review the new contents to ensure accuracy and alignment of the writing/language and substance. The contents can be drafted by any of the participating organisations and submitted for the peer review. For (2), each NGO submits the published contents to Auriga (who) to post them at the right section(s).')}}
                            </p>
                        </div>
                        <div x-show="tabs === 'content' "  x-cloak style="display: none !important" class="flex flex-col " >
                            <p class="leading-relaxed">
                                {{__('For the 4th week of Oct launch: The website will have the following contents:')}}
                            </p>
                            <ul class="list-decimal px-8">
                                <li class="">{{__('Joint NGO recommendations [The draft is ready, to be finalized by the editorial team]')}}</li>
                                <li>{{__('High level profile summary of 7 corporate groups (corporate relationship diagram, whether they published NDPE commitments or not, key environmental and social issues, etc.) [To be drafted by Auriga, peer-reviewed by the editorial team]. ')}}</li>
                                <li>{{__('In-depth corporate profile of one corporate groups selected by NGOs (Auriga suggest Korindo) which provide good media stories in relation to the Glasgow COP [To be drafted by Auriga, peer-reviewed by the editorial team].')}}</li>
                                <li>{{__('Key NGO publications, media articles of all seven groups [To be compiled by Auriga in cooperation with member NGOs].')}}</li>
                            </ul>
                            <p class="mt-4 leading-relaxed">{{__('Press Release to be published at the launch [To be drafted by Auriga, reviewed by all participating NGOs.]')}}</p>

                            <p class="mt-6 ">
                                {{__('November onwards: The website will keep publishing new contents as follows in phases.')}}
                            </p>
                            <ul class="list-decimal px-8 ">
                                <li>{{__('In-depth corporate profile of additional corporate groups selected by NGOs which provide good media stories in phases, at times agreed with NGOs [To be drafted by Auriga, peer-reviewed by the editorial team].')}}</li>
                                <li>
                                    {{__('Joint publications and open letters on hot topics [To be drafted by an assigned drafter, with inputs by participating NGOs/editorial team].')}}
                                </li>
                                <li>
                                    {{__('Other ideas coming from NGOs [to be drafted by them, peer reviewed by the editorial team].')}}
                                </li>
                                <li>
                                    {{__('Key publications keep being uploaded and history of events and the info on NDPE performance issues associated with each group to be kept updated.')}}
                                </li>
                            </ul>
                        </div>
                        <div x-show="tabs ==='timeline'" x-cloak style="display: none !important" class="flex flex-col space-y-2">
                            <p class="leading-relaxed">
                               <a class="underline italic">{{__('2nd week of Oct:')}}</a>  {{__('defining the minimum content of the platform to be launched with the announcement')}}
                            </p>
                            <p class="leading-relaxed">
                                <a class="underline italic">{{__('1st – 3rd week of Oct:')}}</a> {{__('web developing')}}
                             </p>
                             <p class="leading-relaxed">
                                <a class="underline italic">{{__('4th week of Oct:')}}</a> {{__('announcing the platform in a webinar and a press release')}}
                             </p>
                             <p class="leading-relaxed">
                                <a class="underline italic">{{__('November onward:')}}</a> {{__('updating the profile of the target groups and maintaining the platform to continue posting info on their NDPE commitment implementation performance.')}}
                             </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    @include('partials.footer')

@endsection
