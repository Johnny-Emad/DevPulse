<x-layout>

    <x-slot:heading>
        {{ $workshop['title'] }}
    </x-slot:heading>

    <section class="grid grid-cols-1 gap-8 lg:grid-cols-3">

        {{-- Workshop Information --}}
        <div class="lg:col-span-2">

            <x-card
                :title="$workshop['title']"
                :description="$workshop['description']"
            >

                <div class="space-y-6">

                    <div class="flex flex-wrap gap-2">

                        <x-badge type="info">
                            {{ $workshop['category'] }}
                        </x-badge>

                        <x-badge>
                            {{ $workshop['level'] }}
                        </x-badge>

                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <div class="rounded-lg bg-slate-50 p-4">
                            <p class="text-sm text-slate-500">
                                Instructor
                            </p>

                            <p class="mt-1 font-semibold text-slate-900">
                                {{ $workshop['instructor'] }}
                            </p>
                        </div>

                        <div class="rounded-lg bg-slate-50 p-4">
                            <p class="text-sm text-slate-500">
                                Date
                            </p>

                            <p class="mt-1 font-semibold text-slate-900">
                                {{ $workshop['date'] }}
                            </p>
                        </div>

                    </div>

                </div>

            </x-card>

            {{-- Schedule Timeline --}}
            <div class="mt-8">

                <x-card title="Schedule">

                    <div class="relative ml-3 border-l-2 border-indigo-200 pl-6">

                        <div class="relative pb-8">

                            <span
                                class="absolute -left-[33px] flex h-4 w-4 items-center justify-center rounded-full bg-indigo-600 ring-4 ring-white">
                            </span>

                            <p class="text-sm font-semibold text-indigo-600">
                                09:00 AM
                            </p>

                            <h3 class="mt-1 font-semibold text-slate-900">
                                Introduction
                            </h3>

                            <p class="mt-1 text-sm text-slate-600">
                                Introduction to the workshop topics and learning objectives.
                            </p>

                        </div>

                        <div class="relative pb-8">

                            <span
                                class="absolute -left-[33px] flex h-4 w-4 items-center justify-center rounded-full bg-indigo-600 ring-4 ring-white">
                            </span>

                            <p class="text-sm font-semibold text-indigo-600">
                                10:30 AM
                            </p>

                            <h3 class="mt-1 font-semibold text-slate-900">
                                Practical Session
                            </h3>

                            <p class="mt-1 text-sm text-slate-600">
                                Apply the concepts through practical examples and exercises.
                            </p>

                        </div>

                        <div class="relative">

                            <span
                                class="absolute -left-[33px] flex h-4 w-4 items-center justify-center rounded-full bg-indigo-600 ring-4 ring-white">
                            </span>

                            <p class="text-sm font-semibold text-indigo-600">
                                12:00 PM
                            </p>

                            <h3 class="mt-1 font-semibold text-slate-900">
                                Q&A and Wrap-up
                            </h3>

                            <p class="mt-1 text-sm text-slate-600">
                                Ask questions, review the key concepts, and wrap up the workshop.
                            </p>

                        </div>

                    </div>

                </x-card>

            </div>

            {{-- Instructor Profile --}}
            <div class="mt-8">

                <x-card title="Instructor Profile">

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-lg font-bold text-indigo-700">
                            {{ strtoupper(substr($workshop['instructor'], 0, 1)) }}
                        </div>

                        <div>
                            <h3 class="font-semibold text-slate-900">
                                {{ $workshop['instructor'] }}
                            </h3>

                            <p class="text-sm text-slate-600">
                                Experienced DevPulse Instructor
                            </p>
                        </div>

                    </div>

                </x-card>

            </div>

        </div>

        {{-- Registration Panel --}}
        <aside>

            <x-card title="Registration">

                <div class="space-y-5">

                    <div>
                        <p class="text-sm text-slate-500">
                            Workshop Date
                        </p>

                        <p class="mt-1 font-semibold text-slate-900">
                            {{ $workshop['date'] }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-slate-500">
                            Level
                        </p>

                        <p class="mt-1 font-semibold text-slate-900">
                            {{ $workshop['level'] }}
                        </p>
                    </div>

                    <x-button class="w-full">
                        Register Now
                    </x-button>

                    <p class="text-center text-xs text-slate-500">
                        Registration is currently available.
                    </p>

                </div>

            </x-card>

        </aside>

    </section>

</x-layout>