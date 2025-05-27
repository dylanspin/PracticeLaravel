@props(['value'])

<label {{ $attributes->merge(['class' => 'd-inputLabel']) }}>
    {{ $value ?? $slot }}
</label>
