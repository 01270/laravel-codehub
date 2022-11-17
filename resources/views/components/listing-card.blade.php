@props(['code'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$code['photo'] ? asset('storage/'. $code['photo']) : asset('images/no-image.png')}}"alt=""/>
        <div>
            <h3 class="text-2xl text-white my-1 underline"> <a href="/{{$code['id']}}">{{$code['title']}}</a></h3>
            <x-tags-ul :tags="$code['tags']" />
            <a href="https://t.me/{{$code['telegram']}}">
            <div class="text-lg mt-4 text-white"><i class="fa-brands fa-telegram"></i> &#64;{{$code['telegram']}}
            </a></div>
        </div>
    </div>
</x-card>
