<x-layout>

    <x-slot:heading>
        Contact DevPulse
    </x-slot:heading>

    <section class="grid grid-cols-1 gap-8 lg:grid-cols-3">

        {{-- Contact Information --}}
        <div class="lg:col-span-1">
            <x-card title="Get in Touch">

                <div class="space-y-5">

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Email
                        </p>

                        <p class="mt-1 text-sm text-slate-600">
                            hello@devpulse.com
                        </p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Phone
                        </p>

                        <p class="mt-1 text-sm text-slate-600">
                            +20 100 000 0000
                        </p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Location
                        </p>

                        <p class="mt-1 text-sm text-slate-600">
                            Cairo, Egypt
                        </p>
                    </div>

                </div>

            </x-card>
        </div>

        {{-- Contact Form --}}
        <div class="lg:col-span-2">

            <x-card title="Send Us a Message">

                <form action="#" method="POST" class="space-y-6">

                    @csrf

                    <div>
                        <label
                            for="name"
                            class="block text-sm font-medium text-slate-700">
                            Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            class="mt-2 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                            placeholder="Your name">
                    </div>

                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-slate-700">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="mt-2 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                            placeholder="you@example.com">
                    </div>

                    <div>
                        <label
                            for="message"
                            class="block text-sm font-medium text-slate-700">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            required
                            class="mt-2 block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
                            placeholder="Write your message..."></textarea>
                    </div>

                    <div>
                        <x-button type="submit">
                            Send Message
                        </x-button>
                    </div>

                </form>

            </x-card>

        </div>

    </section>

</x-layout>