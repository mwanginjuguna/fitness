<div class="grid grid-cols-8 md:grid-cols-11 gap-2">
    {{-- navigation buttones --}}
    <div class="col-span-1 z-[10] grid content-center justify-end gap-y-2">
        <button class="benefit-swiper-prev-btn h-max w-max p-px md:p-1 bg-slate-50 rounded-lg border-2 border-red-200 hover:border-red-500 active:border-red-500" @click="benSwiper.slidePrev()">
            <svg class="w-6 h-6 text-red-600 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
            </svg>
        </button>

        <button class="benefit-swiper-next-btn h-max w-max p-px md:p-1 bg-slate-50 rounded-lg border-2 boorder-red-200 hover:border-red-500 active:border-red-500" @click="benSwiper.slideNext()">
            <svg class="w-6 h-6 text-red-600 dark:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 14-4-4m4 4 4-4"/>
            </svg>

        </button>
    </div>

    <div class="col-span-7 md:col-span-10 w-full swiper benefitSwiper">
        <div class="swiper-wrapper benefitSwiper-wrapper">
            <div class="swiper-slide benefitSwiper-slide" style="height: auto;">
                <x-cards.benefit-reel-card>
                    <x-slot:hook>
                        Personal Training
                    </x-slot:hook>
                    <x-slot:heading>
                        The personalized attention you need to achieve your fitness goals
                    </x-slot:heading>
                    <x-parts.checked-list-item>
                        Work one-on-one with a certified trainer who understands your unique challenges and goals
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Receive customized workout plans that address your specific needs and limitations
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Enjoy the accountability and motivation that comes with having a dedicated coach in your corner
                    </x-parts.checked-list-item>
                </x-cards.benefit-reel-card>
            </div>
            <div class="swiper-slide benefitSwiper-slide" style="height: auto;">
                <x-cards.benefit-reel-card>
                    <x-slot:hook>
                        Meal Plans & Diet
                    </x-slot:hook>
                    <x-slot:heading>
                        Fuel your body for optimal weight loss and energy
                    </x-slot:heading>

                    <x-parts.checked-list-item>
                        Enjoy the accountability and motivation that comes with having a dedicated coach in your corner
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Personalized nutrition plans that take into account your dietary needs and preferences
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Learn how to make healthy eating easy and convenient, even on a busy schedule
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Say goodbye to restrictive dieting. A balanced and sustainable lifestyle of healthy, enjoyable nutrition
                    </x-parts.checked-list-item>
                </x-cards.benefit-reel-card>
            </div>
            <div class="swiper-slide benefitSwiper-slide" style="height: auto;">
                <x-cards.benefit-reel-card>
                    <x-slot:hook>
                        Online Training
                    </x-slot:hook>
                    <x-slot:heading>
                        Get fit from the comfort of your own home
                    </x-slot:heading>

                    <x-parts.checked-list-item>
                        Workouts and training programs that you can do from anywhere
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Enjoy the flexibility and convenience of online training, with the support of a certified coach
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Stay motivated and accountable with regular check-ins and progress tracking
                    </x-parts.checked-list-item>
                </x-cards.benefit-reel-card>
            </div>
            <div class="swiper-slide benefitSwiper-slide" style="height: auto;">
                <x-cards.benefit-reel-card>
                    <x-slot:hook>
                        Group Classes/Semi-Personal Training
                    </x-slot:hook>
                    <x-slot:heading>
                        Get the benefits of personal training, with the energy and motivation of a group
                    </x-slot:heading>

                    <x-parts.checked-list-item>
                        Work out with a small group of like-minded individuals who share your goals and challenges
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Personalized attention and feedback from a certified trainer
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Enjoy the camaraderie and accountability that comes with working out with a team
                    </x-parts.checked-list-item>
                </x-cards.benefit-reel-card>
            </div>
            <div class="swiper-slide benefitSwiper-slide" style="height: auto;">
                <x-cards.benefit-reel-card>
                    <x-slot:hook>
                        Outdoor Activities/Bootcamps
                    </x-slot:hook>
                    <x-slot:heading>
                        Take your fitness into the Nature with outdoor activities and bootcamps
                    </x-slot:heading>

                    <x-parts.checked-list-item>
                        Get out of the gym and into the great outdoors, with activities like hiking, bike-riding, kayaking, and more
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Challenge yourself with high-intensity bootcamps that will push you to new heights
                    </x-parts.checked-list-item>
                    <x-parts.checked-list-item>
                        Enjoy the fresh air and scenic views, while getting a workout that will leave you feeling energized and empowered
                    </x-parts.checked-list-item>
                </x-cards.benefit-reel-card>
            </div>
        </div>
    </div>
</div>
