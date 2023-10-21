<x-FrontendLayout>
    <x-form action="/login" method="POST">
        <div>
            FUCK YOU I. THE ACTION IS TO /LOGIN
        </div>

        <x-group label="Email" inline>
            <x-inputs.text name="email"/>
        </x-group>

        <x-group label="Password" inline>
            <x-inputs.text type="password" name="password"/>
        </x-group>

        <x-slot name="footer">
            <button class="btn btn-success">Submit</button>
        </x-slot>
    </x-form>
</x-FrontendLayout>