<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskSprint</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-screen">
    <div class="fixed top-0 left-0 w-full">
        @include('components.navbar')
    </div>

    <main class=" container mx-auto px-6 py-24">
        @yield('content')
    </main>

    @include('components.footer')

    @yield('scripts')
</body>
</html>
