<x-layout title="Dashboard | Musical Calls">
    <section class="py-12 sm:py-16">
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
    </section>
</x-layout>
