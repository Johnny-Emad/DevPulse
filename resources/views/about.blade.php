<x-layout>

    <x-slot:heading>
        About DevPulse
    </x-slot:heading>

    <section class="space-y-10">

        {{-- Community Stats --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">

            <x-card title="Total Students">
                <p class="text-4xl font-bold text-indigo-600">
                    2,500+
                </p>

                <p class="mt-2 text-sm text-slate-600">
                    Developers learning with DevPulse.
                </p>
            </x-card>

            <x-card title="Workshops Held">
                <p class="text-4xl font-bold text-indigo-600">
                    120+
                </p>

                <p class="mt-2 text-sm text-slate-600">
                    Practical workshops delivered.
                </p>
            </x-card>

            <x-card title="Expert Instructors">
                <p class="text-4xl font-bold text-indigo-600">
                    25+
                </p>

                <p class="mt-2 text-sm text-slate-600">
                    Experienced developers and instructors.
                </p>
            </x-card>

        </div>

        {{-- Platform Vision --}}
        <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">

            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Our Vision
            </p>

            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                Helping developers build skills that matter.
            </h2>

            <p class="mt-4 max-w-3xl text-base leading-7 text-slate-600">
                DevPulse is built around practical learning. Our goal is to
                connect developers with focused workshops, experienced
                instructors, and useful knowledge that can be applied to
                real-world development.
            </p>

        </div>

    </section>

</x-layout>