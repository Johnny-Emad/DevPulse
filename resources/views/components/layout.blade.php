<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>{{ $heading ?? 'Home' }}</title>
</head>

<body class="min-h-screen bg-slate-100 text-slate-800 antialiased">

    <div class="min-h-screen flex flex-col">

        {{-- Header --}}
        <header class="bg-slate-900 text-white shadow-md">

            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">

                {{-- Logo --}}
                <a href="/" class="text-xl font-bold tracking-tight text-white">
                    DevPulse
                </a>

                {{-- Navigation --}}
                <div class="hidden items-center gap-6 text-sm font-medium md:flex">

                    <x-nav-link
                        href="/"
                        :active="request()->is('/')">
                        Home
                    </x-nav-link>

                    <x-nav-link
                        href="/workshops"
                        :active="request()->is('workshops')">
                        Workshops
                    </x-nav-link>

                    <x-nav-link
                        href="/about"
                        :active="request()->is('about')">
                        About
                    </x-nav-link>

                    <x-nav-link
                        href="/contact"
                        :active="request()->is('contact')">
                        Contact
                    </x-nav-link>

                </div>

                {{-- Action Button --}}
                <x-button href="/workshops">
                    Explore Workshops
                </x-button>

            </nav>

        </header>

        {{-- Page Content --}}
        <main class="flex-1">

            {{-- Page Heading --}}
            <section class="mx-auto max-w-6xl px-4 pt-10 sm:px-6 lg:px-8">

                <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                    {{ $heading ?? 'Home' }}
                </h1>

            </section>

            {{-- Dynamic Page Body --}}
            <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">

                {{ $slot }}

            </section>

        </main>

        {{-- Footer --}}
        <x-footer />

    </div>

</body>

</html>