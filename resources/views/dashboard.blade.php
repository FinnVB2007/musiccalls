<x-layout title="Dashboard | Musical Calls">
    <section class="py-12 sm:py-16">
        @if (session('status'))
            <p class="mb-6 rounded-lg border border-[#d5e3cb] bg-[#edf1e7] px-4 py-3 text-sm font-medium text-[#35442d]"
               role="status">{{ session('status') }}</p>
        @endif

        <div
            class="overflow-hidden rounded-2xl bg-gradient-to-br from-[#21172a] via-[#302139] to-[#4a3046] px-6 py-10 text-[#fffaf3] shadow-xl shadow-[#21172a]/10 sm:px-10 sm:py-14">
            <p class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-[#e9bd70]">Jouw plek achter de schermen</p>
            <h1 class="max-w-3xl font-serif text-4xl font-normal leading-tight tracking-tight sm:text-5xl">
                Welkom terug, <span class="text-[#e9bd70]">{{ auth()->user()->name }}</span>
            </h1>
            <p class="mt-5 max-w-2xl text-sm leading-7 text-[#e2d8e3] sm:text-base">
                Fijn dat je deel uitmaakt van Musical Calls. Ontdek wat er speelt of deel een voorstelling met de
                community.
            </p>
            <a class="mt-8 inline-flex min-h-12 items-center justify-center gap-3 rounded-md border border-[#e9bd70] bg-[#e9bd70] px-5 py-3 text-sm font-bold text-[#281d2b] transition hover:-translate-y-0.5 hover:bg-[#f2ce8e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#f2ce8e]"
               href="{{ route('musicals.index') }}">
                Ontdek musicals
                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h12m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.7"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        <div class="mt-10">
            <p class="mb-2 text-[11px] font-bold uppercase tracking-[0.2em] text-[#a56e43]">Kies je volgende stap</p>
            <h2 class="font-serif text-3xl font-normal tracking-tight text-[#21172a]">Wat wil je doen?</h2>

            <div class="mt-6 grid gap-4 md:grid-cols-3">
                <a class="group rounded-xl border border-[#ebe3d8] bg-white/80 p-6 transition hover:-translate-y-1 hover:border-[#d9c4a6] hover:shadow-lg hover:shadow-[#35273c]/[0.06] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#c58c52]"
                   href="{{ route('musicals.index') }}">
                    <span
                        class="grid h-11 w-11 place-items-center rounded-full border border-[#e7d3b7] bg-[#fbf8f2] text-[#9c6946]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 19V8l8-4 8 4v11M8 19v-7h8v7M2 20h20" stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-5 font-serif text-xl text-[#21172a]">Bekijk musicals</h3>
                    <p class="mt-2 text-sm leading-6 text-[#716975]">Blader door voorstellingen die met de community
                        zijn gedeeld.</p>
                    <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#8c5b39]">
                        Naar het aanbod
                        <span class="transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </span>
                </a>

                <a class="group rounded-xl border border-[#ebe3d8] bg-white/80 p-6 transition hover:-translate-y-1 hover:border-[#d9c4a6] hover:shadow-lg hover:shadow-[#35273c]/[0.06] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#c58c52]"
                   href="{{ route('musicals.create') }}">
                    <span
                        class="grid h-11 w-11 place-items-center rounded-full border border-[#e7d3b7] bg-[#fbf8f2] text-[#9c6946]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.7"
                                  stroke-linecap="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-5 font-serif text-xl text-[#21172a]">Deel een musical</h3>
                    <p class="mt-2 text-sm leading-6 text-[#716975]">Voeg een voorstelling toe en vertel anderen waarom
                        die bijzonder is.</p>
                    <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#8c5b39]">
                        Musical plaatsen
                        <span class="transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </span>
                </a>

                <a class="group rounded-xl border border-[#ebe3d8] bg-white/80 p-6 transition hover:-translate-y-1 hover:border-[#d9c4a6] hover:shadow-lg hover:shadow-[#35273c]/[0.06] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#c58c52]"
                   href="{{ route('profile.edit') }}">
                    <span
                        class="grid h-11 w-11 place-items-center rounded-full border border-[#e7d3b7] bg-[#fbf8f2] text-[#9c6946]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2m8-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-5 font-serif text-xl text-[#21172a]">Mijn profiel</h3>
                    <p class="mt-2 text-sm leading-6 text-[#716975]">Werk je accountgegevens bij wanneer je maar
                        wilt.</p>
                    <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#8c5b39]">
                        Profiel bekijken
                        <span class="transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </span>
                </a>
            </div>
        </div>

        <section class="mt-14" aria-labelledby="my-musicals-title">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="mb-2 text-[11px] font-bold uppercase tracking-[0.2em] text-[#a56e43]">Jouw bijdragen</p>
                    <h2 id="my-musicals-title" class="font-serif text-3xl font-normal tracking-tight text-[#21172a]">
                        {{ auth()->user()->is_admin ? 'Alle musicals' : 'Mijn musicals' }}</h2>
                </div>
                <a class="inline-flex min-h-10 items-center justify-center rounded-md bg-[#21172a] px-4 py-2 text-sm font-bold text-[#fffaf3] transition hover:bg-[#392a40] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#c58c52]"
                   href="{{ route('musicals.create') }}">Nieuwe musical</a>
            </div>

            @if ($musicals->isEmpty())
                <p class="mt-5 rounded-xl border border-dashed border-[#d9d0c5] bg-white/70 p-6 text-sm text-[#716975]">
                    Je hebt nog geen musicals geplaatst.
                </p>
            @else
                <div class="mt-5 grid gap-4">
                    @foreach ($musicals as $musical)
                        <article
                            class="rounded-xl border border-[#ebe3d8] bg-white/80 p-5 sm:flex sm:items-center sm:justify-between sm:gap-6">
                            <div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span
                                        class="rounded-full bg-[#f0e7da] px-3 py-1 text-xs font-semibold text-[#8c5b39]">{{ $musical->genre->name }}</span>
                                    <span
                                        class="rounded-full px-3 py-1 text-xs font-semibold {{ $musical->is_published ? 'bg-[#edf1e7] text-[#35442d]' : 'bg-[#f3e9e7] text-[#8a443c]' }}">
                                        {{ $musical->is_published ? 'Online' : 'Offline' }}
                                    </span>
                                </div>
                                <h3 class="mt-3 font-serif text-xl text-[#21172a]">
                                    <a class="hover:text-[#8c5b39] focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#c58c52]"
                                       href="{{ route('musicals.show', $musical) }}">{{ $musical->title }}</a>
                                </h3>
                                @if (auth()->user()->is_admin)
                                    <p class="mt-1 text-sm text-[#716975]">Geplaatst door {{ $musical->user->name }}</p>
                                @endif
                            </div>
                            <div class="mt-4 flex flex-wrap items-center gap-4 sm:mt-0">
                                <a class="text-sm font-bold text-[#8c5b39] hover:underline"
                                   href="{{ route('musicals.edit', $musical) }}">Bewerken</a>
                                <form method="POST" action="{{ route('musicals.visibility.update', $musical) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="text-sm font-bold text-[#8c5b39] hover:underline" type="submit">
                                        {{ $musical->is_published ? 'Offline zetten' : 'Weer online zetten' }}
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('musicals.destroy', $musical) }}"
                                      onsubmit="return confirm('Weet je zeker dat je deze musical wilt verwijderen?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-sm font-bold text-[#a12b39] hover:underline" type="submit">
                                        Verwijderen
                                    </button>
                                </form>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="mt-5 [&_a]:text-[#8c5b39] [&_svg]:text-[#8c5b39]">
                    {{ $musicals->links() }}
                </div>
            @endif
        </section>

        <section class="mt-14" aria-labelledby="my-reviews-title">
            <div>
                <p class="mb-2 text-[11px] font-bold uppercase tracking-[0.2em] text-[#a56e43]">Jouw ervaringen</p>
                <h2 id="my-reviews-title" class="font-serif text-3xl font-normal tracking-tight text-[#21172a]">
                    {{ auth()->user()->is_admin ? 'Alle reviews' : 'Mijn reviews' }}</h2>
            </div>

            @if ($reviews->isEmpty())
                <p class="mt-5 rounded-xl border border-dashed border-[#d9d0c5] bg-white/70 p-6 text-sm text-[#716975]">
                    Je hebt nog geen reviews geschreven.
                </p>
            @else
                <div class="mt-5 grid gap-4">
                    @foreach ($reviews as $review)
                        <article class="rounded-xl border border-[#ebe3d8] bg-white/80 p-5">
                            <div class="flex flex-wrap items-start justify-between gap-3">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-[#8c5b39]">{{ $review->musical->title }}</p>
                                    @if (auth()->user()->is_admin)
                                        <p class="mt-1 text-xs text-[#716975]">Geschreven
                                            door {{ $review->user->name }}</p>
                                    @endif
                                    <p class="mt-1 text-sm font-semibold text-[#a56e43]"
                                       aria-label="{{ $review->rating }} van de 5 sterren">
                                        {{ str_repeat('★', $review->rating) }}{{ str_repeat('☆', 5 - $review->rating) }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <a class="text-sm font-bold text-[#8c5b39] hover:underline"
                                       href="{{ route('reviews.edit', $review) }}">Bewerken</a>
                                    <form method="POST" action="{{ route('reviews.destroy', $review) }}"
                                          onsubmit="return confirm('Weet je zeker dat je deze review wilt verwijderen?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-sm font-bold text-[#a12b39] hover:underline" type="submit">
                                            Verwijderen
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 whitespace-pre-line text-sm leading-6 text-[#716975]">{{ $review->body }}</p>
                        </article>
                    @endforeach
                </div>
                <div class="mt-5 [&_a]:text-[#8c5b39] [&_svg]:text-[#8c5b39]">
                    {{ $reviews->links() }}
                </div>
            @endif
        </section>
    </section>
</x-layout>
