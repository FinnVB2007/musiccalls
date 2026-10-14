@props(['title' => 'Musical Calls'])

<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#21172a">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<div class="mc-site">
    <header class="mc-header">
        <a class="mc-brand" href="/" aria-label="Musical Calls - startpagina">
            <span class="mc-brand-mark" aria-hidden="true">
                <svg viewBox="0 0 40 40" fill="none">
                    <path d="M8 30V12l12-6 12 6v18H8Z" stroke="currentColor" stroke-width="1.7"/>
                    <path d="M14 30V18l6-4 6 4v12M17 30v-7h6v7M6 33h28" stroke="currentColor" stroke-width="1.7"/>
                    <path d="m20 3 1.2 2.6L24 6l-2.1 1.9.5 2.8-2.4-1.4-2.4 1.4.5-2.8L16 6l2.8-.4L20 3Z"
                          fill="currentColor"/>
                </svg>
            </span>
            <span class="mc-brand-copy">
                <span class="mc-brand-name">Musical <span>Calls</span></span>
                <span class="mc-brand-caption">Het doek gaat open</span>
            </span>
        </a>

        <nav class="mc-nav" aria-label="Hoofdnavigatie">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('musicals.index') }}">Musicals</a>
            <a href="{{ route('about-us') }}">Over ons</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('musicals.create') }}">Musical plaatsen</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="mc-nav-button" type="submit">Uitloggen</button>
                </form>
            @else
                <a href="{{ route('login') }}">Inloggen</a>
                <a class="mc-nav-cta" href="{{ route('register') }}">Registreren</a>
            @endauth
        </nav>
    </header>

    <main class="mc-main">
        {{ $slot }}
    </main>

    <footer class="mc-footer">
        <a class="mc-footer-brand" href="{{ route('home') }}">Musical Calls</a>
        <p>Voor iedereen die het liefst nog even blijft zitten als het doek valt.</p>
        <span>&copy; {{ now()->year }} Musical Calls</span>
    </footer>
</div>
</body>
</html>
