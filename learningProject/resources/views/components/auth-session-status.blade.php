@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'd-statusMessage']) }}>
        {{ $status }}
    </div>
@endif
