<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <title>{{ $title }} - Inventory</title>

    <style>
        /*!* width *!*/
        /*::-webkit-scrollbar {*/
        /*    width: .5rem;*/
        /*}*/

        /*!* Handle *!*/
        /*::-webkit-scrollbar-thumb {*/
        /*    background: currentColor;*/
        /*    border-radius: 1rem;*/
        /*}*/

        /*!* Handle on hover *!*/
        /*::-webkit-scrollbar-thumb:hover {*/
        /*    background: #555;*/
        /*}*/
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance:textfield;
        }
    </style>
</head>
<body class=" w-screen h-screen bg-slate-100 dark:bg-slate-800 {{ $class }}">
    {{ $slot }}

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>
