<article class="flex flex-col items-center gap-10 md:py-6">
    {{$slot}}
    <aside class="flex flex-col md:flex-row items-center gap-6 w-[90%] md:w-[80%]">
        @if($flag=="true")
            <img src="{{asset($src)}}" class="w-[80%] md:w-1/2 object-cover">
        @endif
        <aside class="flex flex-col justify-center gap-10">
            <div class="flex flex-col justify-center md:items-start gap-2 w-full px-2">
                <p class="md:text-2xl font-bold text-center"><i class="{{$fontawsome1}} text-main-color pr-2 text-xl md:text-4xl"></i>{{$title1}}</p>
                <p class="leading-8">{{$text1}}</p>
            </div>
            <div class="flex flex-col justify-center md:items-start gap-2 w-full px-2">
                <p class="md:text-2xl font-bold text-center"><i class="{{$fontawsome2}} text-main-color pr-2 text-xl md:text-4xl"></i>{{$title2}}</p>
                <p class="leading-8">{{$text2}}</p>
            </div>
        </aside>
        @if($flag=="false")
                <img src="{{asset($src)}}" class="w-[80%] md:w-1/2 object-cover">
        @endif
    </aside>
</article>
