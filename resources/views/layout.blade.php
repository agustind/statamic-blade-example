<!doctype html>

<html lang="@site('short_locale')">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@if(!empty($title)) {{ $title }} @else @site('title') @endif</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="{{ mix('/js/site.js') }}"></script>
    </head>
    <body class="bg-gray-200 font-sans leading-normal text-grey-800">
        
        <div class="mb-12 px-12 py-8 text-2xl bg-white">
            <h3>Testing app</h3>
        </div>
        
        @yield('body')
        
    </body>
</html>
