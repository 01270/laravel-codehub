@extends('master')

@section('body')
    <div class="bg-nav border border-nav p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase text-white">
                @if(!count($codes))
                You Don't Have Codes
                @else
                Posts: {{ count($codes) }}
                @endif
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach ($codes as $code)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a class="text-white" href="/{{$code['id']}}">{{$code['title']}}</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/edit/{{$code['id']}}" class="text-white px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/{{$code['id']}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

