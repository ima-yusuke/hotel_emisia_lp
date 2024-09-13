{{--パンフレット&お問い合わせ--}}
<section class="w-full flex flex-col items-center gap-6 md:gap-16 py-4 md:py-10 bg-white">
    <article class="flex flex-col items-center gap-6">
        <div class="flex flex-col items-center gap-4">
            <h2 class="md:text-2xl font-bold text-gray-800">お問合せ</h2>
            <p class="border-b border-solid border-gray-800 w-[3rem]"></p>
        </div>

        <a href="tel:0118958800" class="flex items-center gap-4 md:gap-6 bg-contact-green text-white shadow-xl py-3 px-4 md:px-8 md:py-4" id="contact">
            <i class="fas fa-phone-volume fa-position-left text-xl md:text-3xl"></i>
            <aside class="flex flex-col items-center justify-center gap-1 md:text-2xl">
                <p>お電話でのお問合せはこちら</p>
                <p class="number phone-number text-center bg-white py-1 px-4 rounded-lg text-contact-green">TEL：011-895-8800</p>
            </aside>
            <p><i class="fa-solid fa-angle-up rotate-90 text-xl md:text-3xl"></i></p>
        </a>
    </article>
    <article class="flex flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-4">
            <h2 class="md:text-2xl font-bold text-gray-800">各種資料</h2>
            <p class="border-b border-solid border-gray-800 w-[3rem]"></p>
        </div>
        <aside class="flex md:flex-row flex-col items-center justify-center gap-16 md:gap-10">
            <x-index-brochure title="パンフレット" link="emisia_map.pdf"/>
            <x-index-brochure title="館内平面図" link="emisia_map.pdf"/>
            <x-index-brochure title="コロナ対策" link="emisia_map.pdf"/>
        </aside>
    </article>
</section>
