<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center rounded-md border border-[#21172a] bg-[#21172a] px-5 py-3 text-xs font-bold uppercase tracking-widest text-[#fffaf3] shadow-sm transition duration-150 ease-in-out hover:-translate-y-0.5 hover:bg-[#392a40] focus:outline-none focus:ring-2 focus:ring-[#c58c52] focus:ring-offset-2 active:bg-[#21172a]']) }}>
    {{ $slot }}
</button>
