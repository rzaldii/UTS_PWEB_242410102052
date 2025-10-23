<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TaskSprint</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black flex flex-col justify-center items-center min-h-screen text-white space-y-16">
    <h1 class="text-5xl font-extrabold text-center">
        TaskSprint
    </h1>
    <div class="bg-neutral-900 p-8 rounded-2xl shadow-md w-full max-w-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Login</h1>

        @if(session('error'))
            <div class="bg-red-600 text-white px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('doLogin') }}" id="loginForm">
            @csrf
            <div class="mb-4">
                <label class="block text-medium mb-1">Username</label>
                <input type="text" name="username" class="w-full border border-neutral-800 bg-neutral-800 p-2 rounded fill-neutral-800" required>
            </div>
            <div class="mb-6">
                <label class="block text-medium mb-1">Password</label>
                <input type="password" name="password" class="w-full border border-neutral-800 bg-neutral-800 p-2 rounded fill-neutral-800" required>
            </div>
            <button type="submit" class="w-full bg-slate-800 text-white py-2 rounded hover:bg-slate-700 transition">
                Login
            </button>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const username = this.username.value.trim();
            const password = this.password.value.trim();

            if (!username || !password) {
                alert('Username dan Password harus diisi!');
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
