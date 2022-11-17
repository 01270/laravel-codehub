@extends('master')

@section('body')

<div class="mx-4">
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-white">Edit {{$code['title']}}</h2>
            <p class="mb-4 text-white">Post a code to find a developer</p>
        </header>

        <form method="POST" action="/edit/{{$code['id']}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2 text-white">Post Title:</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    value="{{$code['title']}}"
                    placeholder="Example: Python Hello Word Program"/>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="telegram" class="inline-block text-lg mb-2 text-white">Telegram Username:</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="telegram"
                    value="{{$code['telegram']}}"
                    placeholder="Example: @I01270"/>
                @error('telegram')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2 text-white">
                    Tags (Comma Separated):
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    value="{{$code['tags']}}"
                    placeholder="Example: Python, Backend, AI"/>
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="photo" class="inline-block text-lg mb-2 text-white">Code Photo:</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full text-white"
                    name="photo"/>
                <img class="w-48 mr-6 mb-6" alt=""
                src="{{$code['photo'] ? asset('storage/'. $code['photo']) : asset('images/no-image.png')}}"/>
                @error('photo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="code" class="inline-block text-lg mb-2 text-white">Code:</label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="code"
                    rows="10"
                    placeholder="print('CodesHub')"
                >{{$code['code']}}</textarea>
                @error('code')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-back text-white rounded py-2 px-4 hover:bg-t3">Submit Edit</button>
                <a href="/" class="text-white ml-4">Back</a>
            </div>
        </form>
    </x-card>

@endsection
