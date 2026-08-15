<x-layout>

    <x-slot:heading>
        Welcome to DevPulse
    </x-slot:heading>
    <section class="rounded-2xl bg-slate-900 px-6 py-12 text-white shadow-sm sm:px-10">
    <div class="max-w-3xl">
        <p class="text-sm font-semibold uppercase tracking-wider text-indigo-300">
            Learn. Build. Grow.
        </p>

        <h2 class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl">
            Level up your development skills with DevPulse.
        </h2>

        <p class="mt-5 max-w-2xl text-base leading-7 text-slate-300">
            Join practical workshops led by experienced developers and build
            skills that actually matter.
        </p>

        <div class="mt-8">
            <x-button href="/workshops">
                Explore Workshops
            </x-button>
        </div>
    </div>
</section>
<section class="mt-12">

    <div class="mb-6 flex items-end justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Upcoming
            </p>

            <h2 class="mt-1 text-2xl font-bold text-slate-900">
                Upcoming Workshops
            </h2>
        </div>

        <a href="/workshops" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            View all
        </a>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

        @foreach ($workshops as $workshop)
            <x-card
                :title="$workshop['title']"
                :description="$workshop['description']"
            >

                <div class="space-y-3">

                    <x-badge type="info">
                        {{ $workshop['category'] }}
                    </x-badge>

                    <div class="text-sm text-slate-600">
                        <p>
                            <span class="font-semibold text-slate-800">Instructor:</span>
                            {{ $workshop['instructor'] }}
                        </p>

                        <p>
                            <span class="font-semibold text-slate-800">Date:</span>
                            {{ $workshop['date'] }}
                        </p>

                        <p>
                            <span class="font-semibold text-slate-800">Level:</span>
                            {{ $workshop['level'] }}
                        </p>
                    </div>

                    <x-button href="/workshops/{{ $workshop['id'] }}">
                        View Details
                    </x-button>

                </div>

            </x-card>
        @endforeach

    </div>

</section>
</x-layout>