<x-guest-layout>
    <x-slot:title>
        About {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-6xl mx-auto">
        {{-- hero --}}
        <!-- Hero -->
        <div class="relative overflow-hidden">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                <div class="bg-gradient-to-r from-red-300/50 to-orange-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-red-900/50 dark:to-orange-900"></div>
                <div class="bg-gradient-to-tl from-orange-50 via-orange-100 to-orange-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-red-900/70 dark:via-red-900/70 dark:to-red-900/70"></div>
            </div>
            <!-- End Gradients -->

            <div class="relative z-10">
                <div class="px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-orange-600 to-orange-500 text-transparent dark:from-orange-400 dark:to-orange-400">
                            About {{ config('app.name') }}
                        </p>

                        <!-- Title -->
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                                The Most-Rated Personal Fitness Trainer in Nairobi
                            </h1>
                        </div>
                        <!-- End Title -->

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-gray-600 dark:text-neutral-400">{{ config('app.name') }} targets your specific fitness goals and aspiration. Together, we create a routine, diet-plan, fun-activities that help you achieve your ideal fitness.</p>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-8 gap-3 flex justify-center">
                            <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                Get In Touch
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                        </div>
                        <!-- End Buttons -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <!-- stats -->
        <x-parts.stats />

        <!-- Bio Section: Image Side with an intro -->
        <div id="trainer" class="max-w-7xl mx-auto px-4 py-10 md:py-16 lg:py-24">
            <div class="hidden md:flex flex-row items-center">
                <x-secondary-link href="javascript:void(0)" class="basis-1/3">CN Fitness</x-secondary-link>
                <hr class="w-full">
                <p class="basis-1/3 text-end">The best time to act is now.</p>
            </div>

            <h2 class="mt-3 max-w-xl mx-auto py-2 text-3xl md:text-4xl text-center font-bold">
                Meet Your Trainer <span class="text-2xl text-red-600 dark:text-red-500">Certified. Trusted. And... Passionate about your health and fitness goals</span>
            </h2>

            <div class="grid md:grid-cols-2 gap-6 py-8 items-center">
                <video src="{{ asset('assets/cn-njihia-video.mp4') }}" controls loop autoplay muted
                       class="h-[80vh] place-self-center w-full rounded-lg bg-gradient-to-tr from-red-200 to-orange-200 via-yellow-200 dark:from-red-700 dark:via-yellow-800 dark:to-orange-700"
                ></video>

                <div class=" grid gap-y-2">
                    <h3 class="py-1 font-bold text-2xl md:text-3xl">
                        Someone to walk with you every step of the fitness journey
                    </h3>

                    <div>
                        <p class="py-2">
                            Hi, I'm Joseph, a certified personal fitness trainer with a <strong>passion for helping people like you, who care about their health, achieve their fitness goals</strong>.
                            I understand the struggles of trying to balance work, family, and fitness, because I've been there too.<br><br>
                            After years of struggling with my own weight and fitness, I discovered <strong>the power of personalized coaching</strong> and completely changed my body and life. Now, I'm dedicated to helping others do the same.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <x-parts.my-services />

        <x-parts.featured-story />
    </div>

    <div class="my-8 md:my-14">
        <x-parts.how-it-works />
    </div>

    <!-- Card Section -->
    <div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="https://maps.app.goo.gl/csNjEHiyrNx7Gf3B6" target="_blank">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>

                        <div class="grow ms-5">
                            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Checkout Reviews on Google
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                                20+ 5-Star Reviews by customers
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="{{ route('blog') }}">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>

                        <div class="grow ms-5">
                            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Understanding Fitness
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                                Tips, Tricks, and Updates on my blog
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>

                        <div class="grow ms-5">
                            <h3 class="font-semibold text-gray-800 dark:text-neutral-200">
                                Email/Call me
                            </h3>
                            <p class="group text-xs text-gray-500 dark:text-neutral-500">
                                Reach us at <a href="tel:0746498473" class="hover:underline group-hover:text-blue-600 dark:group-hover:text-blue-400">0746498473</a> <a href="mailto:cnnjihifitness@gmail.com" class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500">cnnjihifitness@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->
</x-guest-layout>
