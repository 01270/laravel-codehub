@extends('master')
@section('body')

<div class="mx-4">
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-white">Upload New Code</h2>
            <p class="mb-4 text-white">Post a code to help developers</p>
        </header>

        <form method="post" action="/new" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2 text-white">Post Title:</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    value="{{old('title')}}"
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
                    value="{{old('telegram')}}"
                    placeholder="Example: @I01270"
                />
                @error('telegram')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="text-white inline-block text-lg mb-2">
                    Tags (Comma Separated):
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    value="{{old('tags')}}"
                    placeholder="Example: Python, Backend, AI"/>
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="photo" class="inline-block text-lg mb-2 text-white">Code Photo:</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded text-white p-2 w-full"
                    name="photo"/>
                @error('photo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="code" class="text-white inline-block text-lg mb-2">Code:</label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="code"
                    rows="10"
                    value="{{old('code')}}"
                    placeholder="print('CodesHub')"
                ></textarea>
                @error('code')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-back text-white rounded py-2 px-4 hover:bg-t3">Create Post</button>
                <a href="/" class="ml-4 text-white">Back</a>
            </div>
        </form>
    </x-card>

@endsection
