<x-AdminLayout>
    <div class="px-12 pt-24 w-full">
        <table class="table w-3/4">
            <th>
                id
            </th>
            <th>
                name
            </th>
            <th>
                Created at
            </th>
            @foreach($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->created_at->format('d. M Y')}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-AdminLayout>