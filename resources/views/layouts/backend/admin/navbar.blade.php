<div class="h-screen w-[12%] border-r bg-gray-700 p-1 border-gray-500">
    <div class="h-16 flex">
        <a class="m-auto text-2xl hover:text-gray-400 text-gray-700" href="/">Weddings</a>
    </div>
    <div class="m-auto space-y-4 flex flex-col">
        <a class="my-auto hover:text-gray-400 py-2 hover:border-gray-500 hover:border hover:bg-gray-600 text-white pl-2 {{str_contains(Route::current()->getName(), 'weddings') ? ' bg-gray-600 border border-gray-500 text-gray-400' : ''}}" href="/admin/weddings">Giftingar</a>
        <a class="my-auto hover:text-gray-400 py-2 hover:border-gray-500 hover:border hover:bg-gray-600 text-white pl-2 {{str_contains(Route::current()->getName(), 'users') ? ' bg-gray-600 border border-gray-500 text-gray-400' : ''}}" href="/admin/users">Notendur</a>
    </div>
</div>