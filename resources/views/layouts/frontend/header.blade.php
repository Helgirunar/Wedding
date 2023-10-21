<div class="w-full bg-transparent">
    <div class="h-20 flex justify-between w-4/5 mx-auto">
        <a class="w-40 justify-center flex my-auto" href="/">
            Wedding
        </a>
        <div class="w-40 flex justify-around h-full">
            @if(auth()->user())
                <a class="my-auto hover:text-gray-600 p-4 rounded-lg" href="/profile">Profile</a>
                <a class="my-auto hover:text-gray-600"  href="/{{auth()->user()->is_admin() ? 'admin' : 'customer'}}/dashboard">Dashboard</a>
            @else
                <a class="my-auto hover:text-gray-600 p-4 rounded-lg" href="/login">Login</a>
                <a class="my-auto hover:text-gray-600"  href="/register">Register</a>
            @endif
        </div>
    </div>
</div>