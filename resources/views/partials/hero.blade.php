<section class="relative">
    <div class="min-h-screen bg-update-ndpe py-6" style="
        background-image: url({{ asset('assets/new-bg.jpg') }});
        background-repeat: no-repat;
        background-size: cover;
        background-color: transparent;
        background-blend-mode:multiply;">
            @include('partials.nav')

        <!-- Span bottom edge -->
        <div class="relative z-10 max-w-6xl mx-auto" style="height: 70vh">
            <div class="absolute inset-x-0 sm:bottom-14 bottom-28 h-16 px-8">
                <p class="text-white sm:text-6xl text-4xl font-notoserif">
                    {{__('Save the remaining natural forest cover, including in concessions’.')}}
                </p>
            </div>
        </div>
    </div>
</section>
