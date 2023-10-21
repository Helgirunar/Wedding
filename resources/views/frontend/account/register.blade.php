<x-FrontendLayout>
    <x-form action="/register" method="POST">
        <x-group label="Name" inline>
            <x-inputs.text name="name"/>
        </x-group>

        <x-group label="Email" inline>
            <x-inputs.text name="email"/>
        </x-group>

        <x-group label="Password" inline>
            <x-inputs.text type="password" name="password"/>
        </x-group>

        <x-group label="Repeat password" inline>
            <x-inputs.text type="password" name="password_confirmation"/>
        </x-group>
        <x-slot name="footer">
            <button class="btn btn-success">Submit</button>
        </x-slot>
    </x-form>
</x-FrontendLayout>