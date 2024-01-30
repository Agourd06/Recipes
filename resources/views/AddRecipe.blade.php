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

        <h1 class="text-[20px]">Add Recipe</h1>

        <form action="/New-recipe" method="post" class="flex flex-col gap-6 ">
            @csrf
            <input type="text" name="Title" id="" placeholder="Title" class="outline px-2">
            <textarea name="Desc" id="" placeholder="Description" class="outline px-2"></textarea>
            <button type="submit">Add</button>
        </form>
    </section>
</body>

</html>
