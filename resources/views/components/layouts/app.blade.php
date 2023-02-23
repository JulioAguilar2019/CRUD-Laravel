<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First app - {{$title ?? 'default'}}</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


<x-layouts.navigation/>


@if(session('status'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Success alert!</span> {{session('status')}}
    </div>

@endif

    {{$slot}}

</body>
</html>
