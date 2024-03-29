<section class="relative">
    <div class=" bg-update-ndpe py-6" style="
        background-image: url({{ asset('assets/new-bg.jpg') }});
        background-repeat: no-repat;
        background-size: cover;
        height: 80vh;
        background-color: transparent;
        background-blend-mode:multiply;">
            @include('partials.nav')

        <!-- Span bottom edge -->
        <div class="relative z-10 max-w-6xl mx-auto" style="height: 50vh">
            <div class="absolute inset-x-0 sm:bottom-14 bottom-28 h-16 px-8">
                <p class="text-brown-ndpe sm:text-6xl text-4xl font-notoserif">
                    {{__('Saving the remaining natural forest cover')}}
                </p>
            </div>
        </div>
    </div>
</section>
