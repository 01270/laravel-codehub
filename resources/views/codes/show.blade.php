@extends('master')
@section('body')

@if($yes)
<x-card class="mx-4 mb-4 p-4 flex space-x-6 items-center justify-center">
    <a href="/" class="text-white"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <a class="text-white" href="/edit/{{$code->id}}"><i class="fa-solid fa-pencil"></i> Edit</a>
    <form method="POST" action="/{{$code->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
</x-card>
@endif

<div class="mx-4">
    <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="{{$code['photo'] ? asset('storage/'. $code['photo']) : asset('images/no-image.png')}}" alt="" />
            <h3 class="text-2xl mr-6 mb-6 text-white">{{ $code['title'] }}</h3>
            <div class="text-xl font-bold mb-4">{{ $code['comp'] }}</div>
            <div class="border border-gray-200 w-full mb-6"></div>
        </div>

                <div class="text-lg space-y-6">
                    <div style="width: 100%;">
                        <textarea style="width: 100%; max-width: 100%;"
                        class="border bg-back text-white border-back rounded p-2"
                        name="code"
                        value="{{old('code')}}"
                        rows="10">{{ $code['code'] }}</textarea>
                    </div>
                    <a href="https://t.me/{{ $code['telegram'] }}" target="_blank"
                    class="block bg-t3 text-white w-[30%] py-2 px-8 rounded-xl hover:opacity-80 text-center"
                    ><i class="fa-brands fa-telegram text-center"></i> {{$code['telegram']}} On Telegram</a>
                </div>

    </x-card>
</div>

@endsection
