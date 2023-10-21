@props([
    'label' => 'text',
    'inline' => false
])

<div {{$attributes->merge(['class' => ''])}}>
    <div class="{{' ' . (!$inline ? ' flex space-x-2' : '')}}">
        <div class="z-20 {{' ' . (!$inline ? '' : '')}}">{{$label}}</div>
        <div class="{{' ' . (!$inline ? ' w-full' : '')}}">
            {{$slot}}
        </div>
    </div>
</div>