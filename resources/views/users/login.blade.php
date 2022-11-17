@extends('master')

@section('body')

<div class="bg-nav border border-nav p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1 text-white">Login</h2>
    <p class="mb-4 text-white">Login into your account</p>
</header>

<form action="/user/login" method="POST">
    @csrf

    <div class="mb-6">
        <label for="email" class="text-white inline-block text-lg mb-2">Email:</label>
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"/>
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2 text-white">text-white</label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password"/>
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-back text-white rounded py-2 px-4 hover:bg-t3">Sign Up</button>
    </div>

    <div class="mt-8">
        <p class="text-white">Don't have an account?<a href="/register" class="text-t3"> Register</a></p>
    </div>

</form>
</div>

@endsection
