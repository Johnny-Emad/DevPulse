<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Home') | DevPulse</title>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800 antialiased">
    <div class="min-h-screen flex flex-col">
        <header class="bg-slate-900 text-white shadow-md">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="#" class="text-xl font-bold tracking-tight text-white">DevPulse</a>

                <div class="hidden items-center gap-6 text-sm font-medium md:flex">
                    <a href="#" class="transition hover:text-indigo-300">Home</a>
                    <a href="#" class="transition hover:text-indigo-300">Features</a>
                    <a href="#" class="transition hover:text-indigo-300">Analytics</a>
                    <a href="#" class="transition hover:text-indigo-300">Pricing</a>
                </div>

                <a href="#" class="rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-400">
                    Get Started
                </a>
            </nav>
        </header>

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="border-t border-slate-200 bg-white">
            <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-4 py-6 text-sm text-slate-600 sm:px-6 md:flex-row lg:px-8">
                <p>© 2026 DevPulse. All rights reserved.</p>
                <div class="flex items-center gap-5">
                    <a href="#" class="hover:text-slate-900">Privacy</a>
                    <a href="#" class="hover:text-slate-900">Terms</a>
                    <a href="#" class="hover:text-slate-900">Contact</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>