<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Musical Calls') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased text-[#29212d]">
<div class="relative isolate min-h-screen overflow-hidden bg-[#fbf8f2]">
    <div
        class="pointer-events-none absolute -right-40 -top-44 -z-10 h-[28rem] w-[28rem] rounded-full bg-[#e9bd70]/20 blur-3xl"
        aria-hidden="true"></div>

    <header class="mx-auto flex w-full max-w-7xl items-center justify-between px-5 py-6 sm:px-8 lg:px-12">
        <a class="inline-flex items-center gap-3 text-[#21172a] no-underline" href="{{ route('home') }}">
            <span
                class="grid h-11 w-11 place-items-center rounded-full border border-[#e7d3b7] bg-white/70 text-[#a56e43]"
                aria-hidden="true">
                <svg class="h-7 w-7" viewBox="0 0 40 40" fill="none">
                    <path d="M8 30V12l12-6 12 6v18H8Z" stroke="currentColor" stroke-width="1.7"/>
                    <path d="M14 30V18l6-4 6 4v12M17 30v-7h6v7M6 33h28" stroke="currentColor" stroke-width="1.7"/>
                    <path d="m20 3 1.2 2.6L24 6l-2.1 1.9.5 2.8-2.4-1.4-2.4 1.4.5-2.8L16 6l2.8-.4L20 3Z"
                          fill="currentColor"/>
                </svg>
            </span>
            <span class="leading-tight">
                <span class="block font-serif text-xl font-bold tracking-tight">Musical <span class="text-[#a56e43]">Calls</span></span>
                <span class="mt-1 block text-[10px] font-semibold uppercase tracking-[0.18em] text-[#716975]">Het doek gaat open</span>
            </span>
        </a>
        <a class="rounded-full px-4 py-2 text-sm font-semibold text-[#716975] transition hover:bg-white hover:text-[#8c5b39] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#c58c52]"
           href="{{ route('home') }}">Terug naar de site</a>
    </header>

    <main
        class="mx-auto grid min-h-[calc(100vh-6rem)] w-full max-w-7xl items-center gap-10 px-5 pb-12 pt-4 sm:px-8 lg:grid-cols-2 lg:gap-16 lg:px-12">
        <section
            class="relative hidden overflow-hidden rounded-2xl bg-[#21172a] px-10 py-14 text-[#fffaf3] shadow-xl shadow-[#21172a]/10 lg:block xl:px-14 xl:py-16"
            aria-label="Welkom bij Musical Calls">
            <div
                class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full border border-[#e9bd70]/20"
                aria-hidden="true"></div>
            <div
                class="pointer-events-none absolute -bottom-36 -right-16 h-80 w-80 rounded-full bg-[#df8791]/10 blur-3xl"
                aria-hidden="true"></div>
            <p class="relative mb-6 text-xs font-bold uppercase tracking-[0.22em] text-[#e9bd70]">Een wereld vol muziek
                en verhalen</p>
            <h1 class="relative max-w-lg font-serif text-5xl font-normal leading-tight tracking-tight xl:text-6xl">
                Waar verhalen <span class="italic text-[#e9bd70]">tot leven zingen.</span>
            </h1>
            <p class="relative mt-6 max-w-md text-base leading-8 text-[#d8ceda]">
                Ontdek voorstellingen, deel jouw favorieten en lees wat andere musicalfans ervan vonden.
            </p>
            <div class="relative mt-12 flex items-center gap-3 text-sm font-medium text-[#f2d9a5]">
                <span class="text-xl" aria-hidden="true">✦</span>
                <span>Een plek voor iedereen die van musicals houdt</span>
            </div>
        </section>

        <section
            class="mx-auto w-full max-w-lg rounded-2xl border border-[#ebe3d8] bg-white/90 p-6 shadow-xl shadow-[#35273c]/[0.06] sm:p-9">
            <div class="mb-8">
                <p class="mb-2 text-[11px] font-bold uppercase tracking-[0.2em] text-[#a56e43]">Welkom bij Musical
                    Calls</p>
                <h2 class="font-serif text-3xl font-normal tracking-tight text-[#21172a] sm:text-4xl">Fijn dat je er
                    bent</h2>
                <p class="mt-3 text-sm leading-6 text-[#716975]">Log in of maak een account aan om mee te doen.</p>
            </div>

            {{ $slot }}
        </section>
    </main>

    <footer class="mx-auto w-full max-w-7xl px-5 pb-6 text-center text-xs text-[#716975] sm:px-8 lg:px-12">
        &copy; {{ now()->year }} Musical Calls · Het doek gaat open
    </footer>
</div>
</body>
</html>
