<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>TechTalent | Find Development Jobs & Projects</title>
</head>
<body class="mb-48">
<nav class="flex justify-end items-center mb-4 pt-5">
    @auth
    <a href="/"
    ><span class="font-bold uppercase tracking-wider ms-2">Welcome {{auth()->user()->name}}</span>
    </a>
    @endauth
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth

        <li class="grow">

        </li>
        <li class="text-center">
            <a href="/jobs/manage" class="hover:text-laravel"
            ><i class="fa-solid fa-gear"></i>
                <span class="hidden sm:inline-block">Manage Jobs</span></a
            >
        </li>
        <li>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button type="submit" class="hover:text-laravel">
                    <i class="fa-solid fa-door-closed"></i>
                    <span class="hidden sm:inline-block">Logout </span></button>
            </form>
        </li>
@else
        <li>
            <a href="/register" class="hover:text-laravel"
            ><i class="fa-solid fa-user-plus"></i> Register</a
            >
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"
            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a
            >
        </li>
        @endauth
    </ul>
</nav>
<main>
@yield('content')
</main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-80 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2023 Rehaan Rafiq</p>

    <a
        href="/job/create"
        class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
    >Post Job</a
    >
</footer>
<x-flash-message />
</body>
</html>



