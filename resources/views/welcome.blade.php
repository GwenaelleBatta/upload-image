<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
    <form action="/avatar" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="avatar">Ajouter un avatar</label>
            <input type="file" name="avatar" id="avatar">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    @if(session()->has('path'))
        <div>
            {{asset(session('path'))}}
            <img src="{{\Illuminate\Support\Facades\Storage::url(session('path'))}}" alt="image upload test">
        </div>
    @endif
</body>
</html>
