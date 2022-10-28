<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body> 

<form action="{{ route('register') }}" method="POST">
    @csrf
         
    <div class="flex justify-center w-1/5 mx-auto my-8 border-b border-gray-300">
        <h1 class="text-3xl font-semibold pb-6">Register</h1>
    </div>

    @if(Session::has('success'))
    <div class="text-green-500 flex justify-center items-center">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
    <div class="text-red-500 flex justify-center items-center">{{ Session::get('fail') }}</div>
    @endif

    <div class="flex flex-col w-1/5 mx-auto my-8">
        
        <label for="first_name" class="mb-2 mt-10 text-sm font-medium">First Name</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="first_name" type="text" placeholder="Your First Name" name="first_name">
        
        @error('first_name')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-1/5 mx-auto my-8">
        
        <label for="last_name" class="mb-2 text-sm font-medium">Last Name</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="last_name" type="text" placeholder="Your Last Name" name="last_name">
        
        @error('last_name')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-1/5 mx-auto my-8">

        <label for="email" class="mb-2 text-sm font-medium">Email</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="email" type="email" placeholder="Your Email" name="email">
        
        @error('email')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex flex-col w-1/5 mx-auto my-8">

        <label for="password" class="mb-2 text-sm font-medium">Password</label>
        <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" id="password" type="password" placeholder="Your Password" name="password">
        
        @error('password')<span class="text-red-600">{{ $message }}</span>@enderror
    </div>

    <div class="flex justify-center items-center w-1/5 mx-auto my-10">
        <a class="hover:underline hover:text-blue-500" href="login">Already have an account? Login here</a>
        <button class="w-3/5 bg-white hover:bg-red-200 font-semibold py-2 px-4 border border-gray-400 rounded-lg shadow" type="submit">Register</button>
    </div>
        
</form>
</body>
</html>