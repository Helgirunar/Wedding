@props([
    'action' => '/register',
    'method' => 'POST',
    'formClass' => '',
    'footer' => ''
])
<div {{ $attributes->merge(['class' => 'h-full m-auto w-1/2 border p-12 rounded bg-white'])}}>
    <form action="{{$action}}" method="POST">
        @csrf
        <div class="h-full space-y-4 {{$formClass}}">
            {{$slot}}
        </div>
        <div class="h-20 w-full mt-6 flex relative">
            <div class="bottom-0 absolute right-0">
                {{$footer}}
            </div>
        </div>
    </form>
</div>