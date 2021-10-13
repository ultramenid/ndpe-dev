@extends('layouts.indexLayout')

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
            <div class="max-w-6xl mx-auto  px-6 py-6">
                <h1 class="font-notoserif text-6xl text-gray-200 mt-20">Benchmark</h1>
                <p class="leading-relaxed text-gray-200 mt-6 sm:w-8/12 w-full   ">
                    NGOs supporting this website worked together to develop the following joint recommendations on deforestation risk commodities. The group has initially developed the following recommendations for deforestation risk commodities produced in Indonesia with the intention of applying and, as warranted, adapting them to other countries and regions producing deforestation commodities. The recommendations can be applied globally, but have been developed with strong emphasis on oil palm and pulp, paper, chips, timber and other forest products in moist tropical forest regions like Indonesia (as of 10 Nov 2020).
                </p>
                <p class="leading-relaxed text-gray-200 mt-6 sm:w-8/12 w-full   ">
                    The three sets of recommendations are built around the following four terms which have minimum requirements drafted by the NGOs:
                    <ul class="list-disc text-gray-200 px-8 sm:w-8/12 w-full    ">
                        <li class="leading-relaxed">Credible policy on no deforestation, no natural ecosystem or peat conversion/ degradation, no exploitation & environmentally and socially responsible supply chains and investments</li>
                        <li class="leading-relaxed">
                            Transparent and collaborative monitoring systems.
                        </li>
                        <li class="leading-relaxed">
                            Independent verification of the credible policy compliance and implementation progress.
                        </li>
                        <li class="leading-relaxed">
                            Effective grievance mechanisms and conflict resolution procedures.
                        </li>
                    </ul>
                </p>
                <h1 class="font-notoserif sm:text-5xl text-4xl text-gray-200 mt-16">Recommendation</h1>
                <div class="flex sm:flex-row  flex-col justify-between" x-data="{ recs : 'corporate' }">
                    <div class="sm:w-5/12 w-full flex flex-col space-y-4 text-gray-200 mt-12  z-20 ">
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'corporate' }" @click=" recs = 'corporate' " class=" font-light cursor-pointer uppercase">FOR PRODUCERS</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'brands' }" @click=" recs = 'brands'"   class=" font-light cursor-pointer uppercase">FOR BUYERS & INVESTORS</a>
                        </div>
                        <div class="border-b border-white w-11/12">
                            <a :class="{ 'font-bold' : recs === 'individual' }" @click=" recs = 'individual' "  class="font-light cursor-pointer uppercase">FOR INDIVIDUAL CONSUMERS</a>
                        </div>
                    </div>
                    <div class="sm:w-7/12 w-full mt-10">
                        <div x-show="recs === 'corporate'" class="min-h-screen">
                            <ul class="list-decimal text-gray-200 px-8 space-y-2">
                                <li class="leading-relaxed">Adopt and publish a credible policy on no deforestation, no natural ecosystems or peat conversion/ degradation, no exploitation & environmentally and socially responsible operations, supply chains and investments. It must apply across global corporate group operations, commit to conservation and restoration of natural ecosystems including financing, and remediation of their social and environmental harms in their operations and through their supply chains and investments.</li>
                                <li class="leading-relaxed">Implement the policy across all operations and raw material source areas and landbanks under the influence of the corporate group, suppliers in its global supply chains, and investments.</li>
                                <li class="leading-relaxed">Purchase raw materials and products from third parties shown by independent verification to have no raw materials violating the policy and follow non-compliance protocols[2] to engage, retain, suspend or stop/avoid non-compliant suppliers. Stop or avoid sourcing from corporate groups producing/sourcing/processing commodities who are violating the policy and/or those disassociated from credible certification systems[3] and have failed to implement corrective actions and remedy negative impacts.</li>
                                <li class="leading-relaxed">Preference doing business with or investment in companies and smallholder farmers producing / sourcing/ processing commodities in a manner shown by credible independent verification as compliant with the policy.</li>
                                <li class="leading-relaxed">Disclose sufficient information on all areas relevant for the policy implementation including information on: all raw material source areas and landbanks, traceability data, conservation areas, and affected indigenous peoples and local communities under the influence of the corporate group and suppliers in its global supply chains and investments. Publish and provide this information to transparent and collaborative monitoring systems that are accessible to the public and can inform monitoring of policy implementation and credible independent verification.
                                </li>
                                <li class="leading-relaxed">
                                    Demonstrate policy compliance and implementation progress through, at a minimum, annual reporting of the results of independent verification undertaken across all operations, raw material source areas and landbanks under the influence of the corporate group, suppliers in its global supply chains and investments and implementation against clear time-bound targets, actions and tangible outcomes outlined in the policy.
                                </li>
                                <li class="leading-relaxed">
                                    Demonstrate conservation and restoration of natural ecosystems, including finance and support and rights based approaches.
                                </li>
                                <li class="leading-relaxed">Support commodity production models that demonstrate alternatives to expansion of industrial plantations and advocate for legal recognition of land rights for forest peoples.
                                </li>
                                <li class="leading-relaxed">Establish and ensure accessibility for rights holders and workers to an effective grievance mechanism and conflict resolution procedure and publish and follow non-compliance protocols[4] to engage, retain, suspend or stop/avoid non-compliant suppliers. Stop or avoid sourcing from corporate groups producing/sourcing/processing commodities who are violating the policy and/or those disassociated from credible certification systems[5] and have failed to implement corrective actions and remedy negative impacts.</li>
                            </ul>
                        </div>
                        <div x-show=" recs === 'brands' " x-cloak style="display: none !important" class="min-h-screen">
                            <ul class="list-decimal px-8 text-gray-200 space-y-2">
                                <li class="leading-relaxed">Adopt and publish a credible policy on no deforestation, no natural ecosystem or peat conversion/ degradation, no exploitation & environmentally and socially responsible supply chains and investments. It must apply across global corporate group operations of their suppliers or clients. They must commit to supporting proximate conservation and restoration of natural ecosystems, including financing, and remediation of their social and environmental harms.
                                </li>
                                <li class="leading-relaxed">
                                    Implement the policy across all raw material source areas and landbanks under the influence of suppliers and clients in its global supply chains and investments at the corporate group level.
                                </li>
                                <li class="leading-relaxed">
                                    Purchase products shown by independent verification to have no raw materials violating the policy and follow non-compliance protocols[6] to engage, retain, suspend or stop/avoid non-compliant suppliers. Stop or avoid sourcing from corporate groups producing/sourcing/processing commodities, who are violating the policy and/or those disassociated from credible certification systems[7] and have failed to implement corrective actions and remedy negative impacts.
                                </li>
                                <li class="leading-relaxed">
                                    Preference doing business with or investment in companies and smallholder farmers producing / sourcing/ processing commodities in a manner shown by independent verification as compliant with the policy.
                                </li>
                                <li class="leading-relaxed">
                                    Demonstrate policy compliance and implementation progress through transparent and collaborative monitoring systems, independent verification and annual reporting.
                                </li>
                                <li class="leading-relaxed">
                                    Demonstrate conservation and restoration of natural ecosystems, including finance and support and rights based approaches.
                                </li>
                                <li class="leading-relaxed">
                                    Support commodity production models that demonstrate alternatives to expansion of industrial plantations and advocate for legal recognition of land rights for forest peoples.
                                </li>
                                <li class="leading-relaxed">
                                    Establish, ensure accessibility for and empower the contribution of rights holders and workers and local ngos to an effective grievance mechanism and publish and follow non-compliance protocols[8] detailing its approach to responding to the violations of its policies identified via its internal due diligence and verification systems and reports raised by rightsholders or external stakeholders.
                                </li>
                            </ul>
                        </div>
                        <div x-show=" recs ==='individual'" x-cloak style="display: none !important" class="min-h-screen">
                            <ul class="list-decimal px-8 text-gray-200 space-y-2">
                                <li class="leading-relaxed">
                                    Purchase products shown by independent verification to have no raw materials violating the credible policy.
                                </li>
                                <li class="leading-relaxed">
                                    Ask for information on the origins of products where unknown and demand your shops to sell products that are shown by independent verification to have no trace of raw materials violating the policy or, better yet, ask for recycled products.
                                </li>
                                <li class="leading-relaxed">
                                    Take action today to influence the behaviours of corporate groups producing/sourcing/processing/trading or brands, end users and investors sourcing or investing in deforestation risk commodities.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
