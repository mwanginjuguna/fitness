<div>
    <div class="mx-auto max-w-screen-sm text-center">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold">Testimonials</h2>
        <p class="mb-8 lg:mb-16">Don't Just take my word for it. See how <strong><span class="text-orange-500">other people in your shoes have transformed their life with a reliable, trusted, and professional fitness partner.</span></strong></p>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Wanjiru Kuria"
                    comment="A very gentle trainer. He a’int pushy or rough with you especially if you are first timer at the gym. He is patient and persistent. His workout routines are friendly to fit every person’s goal. I walked in to the gym with an excruciating 3yrs-chronic back-pain. I started with 2kgs dumbbells and  One year later, I was able to do a dead lift with 60kgs. Same back, firm back. Thank You Njihia"
                    profileUrl="https://lh3.googleusercontent.com/a-/ALV-UjV8Ot5kmdSkeX0yPyWsYoVgiuFqULvL_AMM1IYU4WRXP-qr3FGHBw=w36-h36-p-rp-mo-br100"
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="James Ngugi"
                    comment='CN NJIHIA has been my personal trainer for close to five months now. I can attest to the fact that he is so great at his job, that I can see massive improvement in my physique, endurance and overall mindset regarding physical fitness. From the onset of the training, he works with you progressively depending on the level of your fitness till you reach your goals. I can say, "all the input has been worth it."'
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Julliet"
                    comment='Best gym trainer. Motivates you to keep trying, kind and soft hearted. Different sets of exercises daily suited to fit your goals.'
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Maureen"
                    comment="Best personal trainer one could ask for... cares about his client's needs and is willing to walk the journey with you to meet all your personal goals😊...would highly recommend …"
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Shakilla Ali"
                    comment="Good personal trainer ,very engaging and makes sure one reaches their goals."
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Nelson"
                    comment="Best fitness trainer around."
                />
            </div>
            <div class="swiper-slide" style="height: auto;">
                <x-cards.testimonial-card
                    name="Martha Sammy"
                    comment="Best coach ever💯😊 …"
                />
            </div>
        </div>

        <div class="w-full flex justify-center gap-x-8 mt-1">
            <button class="swiper-prev-btn px-2 py-1 bg-slate-50 rounded-lg border-2 border-red-200 hover:border-red-500 active:border-red-500" @click="swiper.slidePrev()">
                <svg class="w-6 h-6 text-red-600 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </button>

            <button class="swiper-next-btn px-2 py-1 bg-slate-50 rounded-lg border-2 boorder-red-200 hover:border-red-500 active:border-red-500" @click="swiper.slideNext()">
                <svg class="w-6 h-6 text-red-600 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="mt-3 py-3">
        <x-secondary-link href="https://www.google.com/maps/place/CN+NJIHIA+FITNESS/@-1.3032036,36.6825695,11z/data=!4m16!1m9!3m8!1s0x623fccc38c9d9837:0x6b3e56d5930bf38!2sCN+NJIHIA+FITNESS!8m2!3d-1.303209!4d36.8473968!9m1!1b1!16s%2Fg%2F11t1n20_m_!3m5!1s0x623fccc38c9d9837:0x6b3e56d5930bf38!8m2!3d-1.303209!4d36.8473968!16s%2Fg%2F11t1n20_m_?entry=ttu" class="flex flex-row" target="_blank">
            Read More Reviews On GOOGLE.
            <svg class="w-6 h-6 pl-2 text-slate-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
            </svg>
        </x-secondary-link>
    </div>
</div>
