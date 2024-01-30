<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <section class="h-screen w-screen flex justify-center items-center flex-col gap-8">
        <div class="border border-solid w-screen h-[1px]"></div>

        <h1 class="text-[20px]">Register</h1>

        <form action="/register" method="post" class="flex flex-col gap-6 ">
            @csrf
            <input type="text" name="name" id="" placeholder="name" class="outline px-2">
            <input type="text" name="email" id="" placeholder="email" class="outline px-2">
            <input type="password" name="password" id="" placeholder="password" class="outline px-2">
            <button type="submit">register</button>
        </form>
        <a href="{{ route('home') }}">login Page</a>
    </section>
</body>

</html>
