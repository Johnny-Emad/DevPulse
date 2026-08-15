<x-layout>

    <x-slot:heading>
        Page Not Found
    </x-slot:heading>

    <section class="flex min-h-[50vh] items-center justify-center">

        <div class="max-w-xl text-center">

            <p class="text-7xl font-bold tracking-tight text-indigo-600">
                404
            </p>

            <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">
                Workshop not found
            </h2>

            <p class="mt-4 text-slate-600">
                Sorry, the page or workshop you're looking for doesn't exist.
                It may have been removed or the URL may be incorrect.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                <x-button href="/">
                    Back Home
                </x-button>

                <x-button href="/workshops">
                    Browse Workshops
                </x-button>

            </div>

        </div>

    </section>

</x-layout>