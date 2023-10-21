<x-AdminLayout>
    <div class="p-8">
        <table class="table">
            <th>
                Names
            </th>
            <th>
                user
            </th>
            <th>
                Time
            </th>
            @foreach($weddings as $wedding)
            <td>
                <tr>
                    {{$wedding->person_1 . ', ' . $Wedding->person2}}
                </tr>
                <tr>
                    {{$wedding->owner}}
                </tr>
                <tr>
                    {{$wedding->date}}
                </tr>
            </td>
            @endforeach
        </table>
    </div>
</x-AdminLayout>