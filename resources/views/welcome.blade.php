<x-guest-layout>
    <x-slot:title>
        {{ 'Trusted Personal Fitness Trainer' }}
    </x-slot:title>

    <div class="max-w-6xl mx-auto">
        <!-- Pr image -->
        <!-- who you are and what you do -->
        <!-- what can you do for me? - business -->
        <!-- why should I listen to you? - why choose you - personal story or mission -->
        <!-- What makes you legit - social proof - brands, media appearances, social media sites, testimonials -->
        <!-- what do you do? - services and benefits -->
        <!-- where do I start? clear cta and relevant to heder copy-->
        <!-- why stick around? - link to other pages -->
        <!-- Keep it short and sweet - Powerful and impactful -->

    </div>

    <!-- Hero Section: Image Side with Simple Header -->
    <div
        class="relative overflow-hidden bg-white dark:bg-gray-900 dark:text-gray-100"
    >
        <!-- Hero Content -->
        <div
            class="container relative mx-auto flex flex-col gap-16 px-4 py-16 text-center lg:flex-row lg:gap-0 lg:px-8 lg:py-32 lg:text-left xl:max-w-7xl"
        >
            <div class="lg:flex lg:w-1/2 lg:items-center">
                <div>
                    <div
                        class="mb-2 inline-flex rounded border border-gray-200 bg-gray-100 px-2 py-1 text-sm font-medium leading-4 text-gray-800 dark:border-gray-600/50 dark:bg-gray-700/50 dark:text-gray-200"
                    >
                        v6.0 Latest Version
                    </div>
                    <h1 class="mb-4 text-4xl font-black text-black dark:text-white">
                        Next generation
                        <span class="text-blue-600 dark:text-blue-500">website builder</span>
                    </h1>
                    <h2
                        class="text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300"
                    >
                        Super fast and easy to use software to power your next idea or build
                        your client’s web projects. Get it today and profit.
                    </h2>
                    <div
                        class="flex flex-col justify-center gap-2 pb-16 pt-10 sm:flex-row sm:items-center lg:justify-start"
                    >
                        <a
                            href="javascript:void(0)"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-blue-700 bg-blue-700 px-7 py-3.5 font-semibold leading-6 text-white hover:border-blue-600 hover:bg-blue-600 hover:text-white focus:ring focus:ring-blue-400/50 active:border-blue-700 active:bg-blue-700 dark:focus:ring-blue-400/90"
                        >
                            <svg
                                class="hi-mini hi-arrow-down-tray inline-block size-5 opacity-75"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M10.75 2.75a.75.75 0 00-1.5 0v8.614L6.295 8.235a.75.75 0 10-1.09 1.03l4.25 4.5a.75.75 0 001.09 0l4.25-4.5a.75.75 0 00-1.09-1.03l-2.955 3.129V2.75z"
                                />
                                <path
                                    d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z"
                                />
                            </svg>
                            <span>Download for free</span>
                        </a>
                        <a
                            href="javascript:void(0)"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-7 py-3.5 font-semibold leading-6 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-transparent dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                        >
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:ml-16 lg:flex lg:w-1/2 lg:items-center lg:justify-center">
                <div class="relative mx-5 lg:w-96">
                    <div
                        class="bg-tranparent absolute left-0 top-0 -ml-20 -mt-16 size-40 rounded-full border border-blue-200 dark:border-blue-900 lg:size-72"
                    ></div>
                    <div
                        class="bg-tranparent absolute left-0 top-0 -ml-14 -mt-20 size-40 rounded-full border border-blue-100 dark:border-blue-950 lg:size-72"
                    ></div>
                    <div
                        class="bg-tranparent absolute bottom-0 right-0 -mb-16 -mr-20 size-40 rounded-full border border-blue-200 dark:border-blue-900 lg:size-72"
                    ></div>
                    <div
                        class="bg-tranparent absolute bottom-0 right-0 -mb-20 -mr-14 size-40 rounded-full border border-blue-100 dark:border-blue-950 lg:size-72"
                    ></div>
                    <div
                        class="absolute inset-0 -m-6 -rotate-2 rounded-xl bg-gray-200 dark:bg-gray-800"
                    ></div>
                    <div
                        class="absolute inset-0 -m-6 rotate-1 rounded-xl bg-blue-800/75 shadow-inner dark:bg-blue-900/75"
                    ></div>
                    <img
                        src="{{ asset('assets/cn-fitness.jpg') }}"
                        class="relative mx-auto rounded-lg shadow-lg"
                        alt="Hero Image"
                    />
                </div>
            </div>
        </div>
        <!-- END Hero Content -->
    </div>
    <!-- END Hero Section: Image Side with Simple Header -->

    <!-- Features Section: Boxes with Icons -->
    <div
        class="bg-gradient-to-tr from-indigo-100 via-purple-50 to-teal-100 dark:from-indigo-900 dark:via-purple-900 dark:to-teal-900 dark:text-gray-100"
    >
        <div class="container mx-auto px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="rounded-lg border border-white bg-white p-5 shadow-sm transition hover:border-blue-600 dark:border-gray-800 dark:bg-gray-800 dark:shadow-none dark:hover:border-blue-400 md:p-7 xl:p-10"
                >
                    <svg
                        class="hi-outline hi-rectangle-stack mb-5 inline-block size-12 text-blue-600 dark:text-blue-500"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"
                        />
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">1. UI Components Library</h4>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        We carefully handcrafted a vast collection of UI components to build
                        all kinds of web applications and websites. We keep designing and
                        adding new ones with each update.
                    </p>
                </div>
                <div
                    class="rounded-lg border border-white bg-white p-5 shadow-sm transition hover:border-blue-600 dark:border-gray-800 dark:bg-gray-800 dark:shadow-none dark:hover:border-blue-400 md:p-7 xl:p-10"
                >
                    <svg
                        class="hi-outline hi-cube mb-5 inline-block size-12 text-blue-600 dark:text-blue-500"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"
                        />
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">2. Self-Hosted Web App</h4>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        You’ll love working with the Tailkit web app! It’s a compiled Vue.js
                        based app which you can host on your own and use to explore and use
                        all available UI components.
                    </p>
                </div>
                <div
                    class="rounded-lg border border-white bg-white p-5 shadow-sm transition hover:border-blue-600 dark:border-gray-800 dark:bg-gray-800 dark:shadow-none dark:hover:border-blue-400 sm:col-span-2 md:p-7 lg:col-span-1 xl:p-10"
                >
                    <svg
                        class="hi-outline hi-cog mb-5 inline-block size-12 text-blue-600 dark:text-blue-500"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495"
                        />
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">3. Helper Tools</h4>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        Search and copy SVG icons, build your button markup or copy your
                        favorite color classes with powerful tools. More are under development
                        to give you superpowers.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Features Section: Boxes with Icons -->


</x-guest-layout>
