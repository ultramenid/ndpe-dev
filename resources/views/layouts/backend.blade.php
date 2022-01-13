<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    @livewireStyles
    @livewireScripts
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">
    <script src="{{ asset('js/app.js') }}" defer ></script>
    <script src="{{ asset('js/dark.js')}} "></script>
    <script src="https://cdn.tiny.cloud/1/fa5to5aij0r418tqooxyrmncb8eapldn87crb04im234j80z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="selection-bg dark:selection-bg bg-gray-100 dark:bg-newgray-900">

    @yield('content')


</body>
</html>
