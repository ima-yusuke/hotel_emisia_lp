<article class="flex flex-col items-center justify-start gap-4 bg-white w-[85%] md:w-[25%] p-6 text-gray-800 rounded-lg">
    <aside class="flex flex-col items-center gap-2">
        <p><i class="{{$fontawsome}} text-4xl text-main-color"></i></p>
        <h2 class="font-bold text-2xl">{{$title}}</h2>
    </aside>
    <p class="border-b border-solid border-red-600 w-[3rem]"></p>
    <p class="font-bold text-center">{!! $text1 !!}</p>
    <p class="leading-8">{!! $text2 !!}</p> <!-- エスケープを無効化 -->
</article>
