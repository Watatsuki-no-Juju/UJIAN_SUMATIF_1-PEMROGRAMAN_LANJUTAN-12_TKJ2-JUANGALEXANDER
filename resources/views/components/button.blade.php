@props(['color'])

<button style="color: {{ $color }}" >
    {{ $slot }}
</button>  