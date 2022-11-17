@extends('master')
@section('body')

<div class="bg-nav border border-nav p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl text-white font-bold uppercase mb-1">Register</h2>
    <p class="mb-4 text-white">Create an account to post codes</p>
</header>

<form action="/user/register" method="POST">
    @csrf
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2 text-white">User:</label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"/>
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2 text-white">Email:</label>
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"/>
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2 text-white">Password:</label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password""/>
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password2" class="inline-block text-lg mb-2 text-white">Confirm Password</label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password_confirmation"/>
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-back text-white rounded py-2 px-8 hover:bg-t3">Sign Up</button>
    </div>

    <div class="mt-8">
        <p class="text-white">Already have an account?<a href="/login" class="text-t3"> Login</a>
        </p>
    </div>
</form>
</div>

@endsection
