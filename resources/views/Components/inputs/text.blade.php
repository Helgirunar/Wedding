@props([
    'name' => 'text',
    'id' => '',
    'placeholder' => '',
    'type' => 'text'
])

<input type="{{$type}}" {{$attributes->merge(['class' => 'rounded-lg border bg-gray-50 p-2 w-full'])}} value="{{ $type != 'password' ? old($name): '' }}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}">
@error($name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror