@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-[#35273c]']) }}>
    {{ $value ?? $slot }}
</label>
