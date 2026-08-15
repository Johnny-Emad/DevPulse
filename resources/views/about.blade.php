<x-layout>

    <x-slot:heading>
        About DevPulse
    </x-slot:heading>

    <section class="space-y-8">

        {{-- Introduction --}}
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                About Us
            </p>

            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                Learn practical development skills.
            </h2>

            <p class="mt-4 text-base leading-7 text-slate-600">
                DevPulse is a learning platform focused on practical development
                workshops. We help developers improve their skills through
                focused sessions, real-world examples, and experienced instructors.
            </p>
        </div>

        {{-- Features --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            <x-card title="Practical Learning">
                <p class="text-sm leading-6 text-slate-600">
                    Learn through practical workshops designed around real
                    development concepts and projects.
                </p>
            </x-card>

            <x-card title="Experienced Instructors">
                <p class="text-sm leading-6 text-slate-600">
                    Learn from instructors who focus on useful development
                    knowledge and clear explanations.
                </p>
            </x-card>

            <x-card title="Developer Growth">
                <p class="text-sm leading-6 text-slate-600">
                    Build your skills step by step and keep progressing toward
                    becoming a stronger developer.
                </p>
            </x-card>

        </div>

        {{-- CTA --}}
        <div class="rounded-2xl bg-indigo-50 p-8 ring-1 ring-indigo-100">

            <h2 class="text-2xl font-bold text-slate-900">
                Ready to start learning?
            </h2>

            <p class="mt-2 max-w-2xl text-slate-600">
                Explore our workshops and find your next opportunity to learn.
            </p>

            <div class="mt-6">
                <x-button href="/workshops">
                    Explore Workshops
                </x-button>
            </div>

        </div>

    </section>

</x-layout>