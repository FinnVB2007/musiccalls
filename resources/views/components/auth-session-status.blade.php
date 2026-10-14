@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-md border border-[#d5e3cb] bg-[#edf1e7] px-4 py-3 text-sm font-medium text-[#35442d]']) }}>
        {{ $status }}
    </div>
@endif
