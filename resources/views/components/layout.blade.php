<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            navMainColor: "#349834",
                            navSecondaryColor: "#ffc107",
                        },
                        borderWidth: {
                            "16" : "16px"
                        }
                    },
                },
            };
        </script>
    <title>Thesis Archiving System</title>
</head>
<body class="body-bg h-screen bg-slate-600" style="font-family: 'Lato', sans-serif;">
    <nav class="bg-green-600 h-24 w-full border-b-16 border-yellow-500">
        <img src="./images/Logo.png" alt="Library Logo" class="w-80 p-4 md:w-96 md:px-4 md:py-2">
    </nav>
    <main class="pt-16 md:pt-24 pb-6 px-2 md:px-0">

            {{-- Main Content --}}
            {{$slot}}

    </main>
</body>
</html>