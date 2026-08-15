<x-layout>

    <x-slot:heading>
        Workshops
    </x-slot:heading>

    <section>

        <div class="mb-8">
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Explore
            </p>

            <h2 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                All Workshops
            </h2>

            <p class="mt-3 max-w-2xl text-slate-600">
                Explore our upcoming workshops and find the right one for your learning journey.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($workshops as $workshop)

                <x-card
                    :title="$workshop['title']"
                    :description="$workshop['description']"
                >

                    <div class="space-y-4">

                        <x-badge type="info">
                            {{ $workshop['category'] }}
                        </x-badge>

                        <div class="space-y-2 text-sm text-slate-600">

                            <p>
                                <span class="font-semibold text-slate-800">
                                    Instructor:
                                </span>

                                {{ $workshop['instructor'] }}
                            </p>

                            <p>
                                <span class="font-semibold text-slate-800">
                                    Date:
                                </span>

                                {{ $workshop['date'] }}
                            </p>

                            <p>
                                <span class="font-semibold text-slate-800">
                                    Level:
                                </span>

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