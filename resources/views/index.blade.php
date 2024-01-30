<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <section class="h-screen w-screen flex justify-center items-center flex-col gap-8">
        
      
        <div class="border border-solid w-screen h-[1px]"></div>


        <h1 class="text-[20px]">Login</h1>

        <form action="/login" method="post" class="flex flex-col gap-6 ">
            @csrf
            <input type="text" name="logname" id="" placeholder="name" class="outline px-2">
            <input type="password" name="logpassword" id="" placeholder="password" class="outline px-2">
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('page.register') }}">Register Page</a>


    </section>

</body>

</html>
