@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-[#d9d0c5] bg-white text-[#21172a] shadow-sm placeholder:text-[#9b929d] focus:border-[#a56e43] focus:ring-[#e9bd70]']) }}>
