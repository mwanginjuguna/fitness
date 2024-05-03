<!-- Contact Us -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl lg:max-w-5xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                Contact Me
            </h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                I'd love to hear about your fitness journey and goals.
            </p>
        </div>

        <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
                <h3 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Tell me about You.
                </h3>

                <form wire:submit="saveMessage">
                    @csrf
                    <div class="grid gap-4">
                        <!-- Grid -->
                        <div class="grid gap-4">
                            <div>
                                <label for="name-contact" class="sr-only">Name</label>
                                <input type="text"
                                       name="name-contact"
                                       id="name-contact"
                                       wire:model="form.name"
                                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                       placeholder="Name. Ex. 'John', 'Mbithe', 'Precious Atieno'...">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="email-contact" class="sr-only">Email</label>
                            <input type="email"
                                   name="email-contact"
                                   id="email-contact"
                                   wire:model="form.email"
                                   autocomplete="email"
                                   class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                   placeholder="Email. Ex. 'janejuma@gmail.com'">
                        </div>

                        <div>
                            <label for="phone-number" class="sr-only">Phone Number</label>
                            <input type="text"
                                   name="phone-number"
                                   wire:model="form.phone"
                                   id="phone-number"
                                   class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                   placeholder="Phone Number. Ex. 0712 34 56 78">
                        </div>

                        <div>
                            <label for="contact-message" class="sr-only">Message/ Question/ Details</label>
                            <textarea
                                id="contact-message"
                                name="contact-message"
                                wire:model="form.contactMessage"
                                rows="4"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Your Message, Question, or Details."></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-4 grid">
                        <button
                            type="submit"
                            wire:loading.attr="disabled"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                            Send Message
                        </button>
                    </div>

                    <div class="mt-3 text-center">
                        @if($saved)
                            <div class="my-4 p-3 flex items-center justify-center text-xs gap-x-2 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="">Thank you, I am very excited to hear from you. The Message has been saved and sent successfully.</span>
                            </div>
                        @endif

                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </div>
                </form>
            </div>
            <!-- End Card -->

            <div class="divide-y divide-gray-200 dark:divide-neutral-800">
                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">0746498473</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Call / SMS / WhatsApp</p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Maps Profile -->
                <div class="flex gap-x-7 py-6">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                    </svg>

                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">
                            Google Maps Profile
                            <span class="text-orange-500">~ CN NJIHIA FITNESS</span>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Checkout Reviews and Photos on Google Maps</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-orange-500 dark:text-neutral-400 dark:hover:text-orange-500"
                           target="_blank"
                           href="https://maps.app.goo.gl/6KnyNF8g9wZZpitWA">
                            Visit on Google Maps
                            <svg class="flex-shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Maps Profile -->

                <!-- Instagram Block -->
                <div class=" flex gap-x-7 py-6">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-orange-600 dark:text-orange-500">@cnnjihiafitness</h3>
                        <p class="mt-1 text-sm text-slate-500">Instagram Profile</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-orange-500 dark:text-neutral-400 dark:hover:text-orange-500 underline"
                           href="https://www.instagram.com/cnnjihiafitness/"
                           target="_blank"
                        >
                            Browse reels and videos on IG
                            <svg class="flex-shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End IG Block -->

                <!-- Email Block -->
                <div class=" flex gap-x-7 py-6">
                    <svg class="flex-shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">via email</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                            Shoot Me An Email And I will get back to you Immediately.
                        </p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-orange-500 dark:text-neutral-400 dark:hover:text-orange-500" href="mailto::cnnjihiafitness@gmail.com" target="_blank">
                            cnnjihiafitness@gmail.com
                        </a>
                    </div>
                </div>
                <!-- End Email Block -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Us -->
