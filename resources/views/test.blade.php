<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    {{-- @php
        $icon = "logo.svg";
    @endphp
    <x-icon :src="$icon" />
    <x-ui.button /> --}}

    <x-alert id="my-alert" type="success" class="mt-4 d-flex align-items-center" role="flash">
        {{-- <x-slot:title>
            Success
        </x-slot> --}}
        {{ $component->icon() }}
        <p class="mb-0">Data has been removed {{ $component->link('Undo') }}</p>
    </x-alert>

    <x-form action="/images" method="GET">
        <input type="text" name="name" />
        <button type="submit" >Submit</button>
    </x-form>

</body>
</html>