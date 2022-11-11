<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="flex justify-center w-1/5 mx-auto my-8 border-b border-gray-300">
        <h1 class="text-3xl font-semibold pb-6">Login</h1>
    </div>

    @if(Session::has('success'))
        <div class="text-green-500 flex justify-center items-center">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
        <div class="text-red-500 flex justify-center items-center">{{ Session::get('fail') }}</div>
    @endif

    <div class="flex flex-col w-1/5 mx-auto my-8">

        <label for="email" class="mb-2 mt-10 text-sm font-medium">Email</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="email" type="email" placeholder="Your Email" name="email">
        
        @error('email')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-1/5 mx-auto my-8">

        <label for="password" class="mb-2 text-sm font-medium">Password</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="password" type="password" placeholder="Your Password" name="password">
        
        @error('password')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex justify-center items-center w-1/5 mx-auto my-10">
        <a class="hover:underline hover:text-blue-500" href="register">Don't have an account? Register here</a>
        <button class="w-3/5 bg-white hover:bg-green-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" type="submit">Login</button>
    </div>

</form>
</body>
</html>