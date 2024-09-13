<article class="flex flex-col md:flex-row justify-center items-center bg-white gap-10 w-[90%] md:w-[70%] p-8 outline outline-[6px] outline-main-color rounded-lg">
    @if($flag=="true")
        <img src="{{asset($src)}}" class="w-[12rem] h-[12rem] object-cover aspect-square rounded-full border-4 border-solid border-main-color">
    @endif
    <aside class="flex flex-col items-start justify-center gap-6 w-full">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <p class="bg-main-color rounded-lg px-2 text-white">{{$role}}</p>
            <h4>{{$name}}</h4>
        </div>
        <p class="w-full border-b-2 border-solid border-gray-200"></p>
        <h2 class="text-main-text-color text-2xl font-bold">{{$title}}</h2>
        <p class="leading-8">
            {{$text}}
        </p>
    </aside>
    @if($flag=="false")
        <img src="{{asset($src)}}" class="w-[12rem] h-[12rem] rounded-full border-4 border-solid border-main-color">
    @endif
</article>
