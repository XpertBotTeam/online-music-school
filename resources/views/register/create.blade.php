<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/bootstrap.css"> --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 rounded-xl p-6 border border-gray-200">

        <h1 class="text-center font-bold text-xl">Register</h1>

        <form action="/register" class="mt-5 text-center " method="POST">
                @csrf

                <div class="mb-6  mt-5">
                    <label for="first_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        First Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="first_name"
                    id="first_name"
                    value="{{ old('first_name') }}"
                    required
                    >
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6  mt-5">
                    <label for="last_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Last Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="last_name"
                    id="last_name"
                    value="{{ old('lastname') }}"
                    required
                    >
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6  mt-5">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        UserName
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="username"
                    id="username"
                    value="{{ old('username') }}"
                    required
                    >
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6 mt-5">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 mt-5">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="password"
                    name="password"
                    id="password"
                    required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 mt-5">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Submit
                    </button>
                </div>
        </form>

    </main>
</section>

</body>
</html>

