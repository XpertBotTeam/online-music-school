<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 py-6 px-5 rounded-xl">

            <h1 class="text-center font-bold text-xl"> Login </h1>

            <form action="/login" method="POST" class="mt-6 px-6 py-8">

                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="email"
                        name="email" id="email" value="{{ old('email') }}"
                        class="border border-gray-400 p-2 w-full rounded" required>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password"
                        name="password" id="password" value="{{ old('passwod') }}"
                        class="border border-gray-400 p-2 w-full rounded" required>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white text-center rounded py-2 px-4 hover:bg-blue-500">
                        Login
                    </button>
                </div>
            </form>

        </main>

    </section>

</body>
</html>
