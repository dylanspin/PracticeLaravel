@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'd-errorMessage']) }}>
        <img src="{{ asset('images/ui/ErrorCross.png') }}" alt="" class="d-errorIcon"/>
        
        <div class="d-errorText">
            <ul>
                @foreach ((array) $messages as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
