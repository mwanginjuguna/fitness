<div>
    <h4 class="max-w-3xl mx-auto my-2 py-2 text-slate-700 dark:text-slate-300 text-center text-lg font-semibold">
        Schedule Your Complimentary Consultation Today and Take the First Step Towards Unlocking Your Dream Body!
    </h4>

    <form class="mt-4 max-w-3xl mx-auto" wire:submit="saveContact">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text"
                       name="phone" id="phone"
                       wire:model="phone"
                       class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-100 appearance-none text-slate-900 dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                       placeholder=" " required />
                <label
                    for="phone"
                    class="peer-focus:font-medium absolute text-sm text-slate-800 dark:text-slate-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-slate-700 peer-focus:dark:text-slate-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Phone number (0712-345-678)
                </label>
                @error('phone')<p class="py-1 text-red-600">{{ $value }}</p>@enderror
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input
                    type="text"
                    name="first_name"
                    id="first_name"
                    wire:model="firstName"
                    class="block py-2.5 px-0 w-full text-sm text-slate-900 dark:text-slate-100 bg-transparent border-0 border-b-2 border-gray-100 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer"
                    placeholder=" " required />
                <label
                    for="first_name"
                    class="peer-focus:font-medium absolute text-sm text-slate-800 dark:text-slate-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-slate-700 peer-focus:dark:text-slate-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    First name
                </label>
                @error('firstName')<p class="py-1 text-red-600">{{ $value }}</p>@enderror
            </div>
        </div>

        <x-ctas.primary-btn button="true">Book A Consultation Call Now.</x-ctas.primary-btn>
    </form>
</div>
