@props([
    'name' => 'text',
    'id' => '',
    'placeholder' => ''
])

<input type="password" {{$attributes->merge(['class' => 'rounded-lg border bg-gray-50 p-2 w-full'])}} name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}">