<x-template title="教育旅行">
    {{--アイキャッチ--}}
    <section class="relative">
        <h1 class="text-2xl md:text-5xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">教育旅行</h1>
        <img src="{{asset("storage/img/emisia_appearance.jpg")}}" class="h-[50dvh] md:h-auto object-cover">
    </section>

    {{--パンフレット&お問い合わせ--}}
    <x-index-contact></x-index-contact>

    {{--利用メリット3選--}}
    <section class="w-full bg-gray-200 flex flex-col md:flex-row md:items-stretch items-center justify-center gap-16 py-16 mb-10">
        <x-index-advantage fontawsome="fa-solid fa-school" title="実績多数" text1="過去の実績〇〇校以上"
                           text2="修学旅行、部活の合宿などこれまでに手掛けた教育旅行は多数。学校様のご要望に可能な限りお応えさせて頂きます。"/>
        <x-index-advantage fontawsome="fa-solid fa-location-dot" title="駅からすぐ" text1="JR新札幌駅から徒歩約3分 <br> 地下鉄新さっぽろ駅から徒歩約1分"
                           text2="道央圏の主要な交通拠点である新札幌に位置し、JR、地下鉄、バスすべての交通機関へダイレクトにアクセス。
                             新千歳空港へもほど近く、<span class='text-main-text-color'>貸切バスを使用せずに電車移動</span>にすることで親御様のご負担も軽減できます。"/>
        <x-index-advantage fontawsome="fa-solid fa-house-chimney-crack" title="災害時にも安心" text1="自家発電システムを完備、災害時も<br>安心・快適なホテルステイを"
                           text2="停電発生時でも、<span class='text-main-text-color'>自家発電</span>を使用しているため給電が可能です。2018年に北海道全域に影響した大規模停電時も、
                           電気や熱を通常通り供給することができ、ご宿泊のお客様はもちろん、近隣住民のお客様の給水・充電などの受け入れをすることができました。
                           <span class='text-main-text-color'>（札幌市長より表彰）</span>"/>
    </section>

    <p class="md:text-2xl font-bold text-center text-main-color pb-6">あなたはこんな悩みありませんか？</p>

    {{--悩みの明確化--}}
    <section class="flex justify-between items-center pt-2 pb-12 md:py-24 relative min-h-[40dvh] md:min-h-[60dvh] h-full bg-gray-300" id="problem_container">
        <img src="{{asset("storage/img/problem.png")}}" class="w-[40%] object-cover absolute -bottom-12  md:top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">

        <article class="flex flex-col justify-around items-center h-full min-h-[40dvh] md:min-h-[60dvh] pl-6 w-[45%] md:w-[35%]">
            <p class="text-sm md:text-2xl">「<span class="text-main-text-color md:text-4xl">札幌市内</span>でどこか良い宿ないかな。」</p>
            <p class="text-sm md:text-2xl md:w-[70%]">「昨今の災害状況を考慮すると<span class="text-main-text-color md:text-4xl">災害対策</span>が気になる。」</p>
            <p class="text-sm md:text-2xl">「<span class="text-main-text-color md:text-4xl">大規模校</span>だと宿探し難しい。」</p>
        </article>

        <article class="flex flex-col justify-around items-center h-full min-h-[40dvh] md:min-h-[60dvh] w-[45%] md:w-[35%]">
            <p class="text-sm md:text-2xl">「大きな<span class="text-main-text-color md:text-4xl">食事会場</span>ないかな。」</p>
            <p class="text-sm md:text-2xl">「<span class="text-main-text-color md:text-4xl">コロナ対策</span>何かあるかな。」</p>
            <p class="text-sm md:text-2xl">「<span class="text-main-text-color md:text-4xl">費用</span>を抑えたいな。」</p>
        </article>
    </section>

    {{--選ばれる理由--}}
    <section class="bg-white flex flex-col justify-center items-center py-4">
        <article class="flex flex-col items-center py-16 gap-4 md:gap-0">
            <h2 class="md:text-xl">\\ そんな方でも<span class="text-main-text-color">大丈夫!</span> //</h2>
            <p class="text-xl md:text-2xl font-bold text-center">ホテルエミシア札幌が選ばれる <br class="md:hidden"> <span class="text-main-text-color text-5xl">3</span><span class="text-main-text-color">つ</span>の理由!</p>
        </article>

        <div class="flex flex-col gap-10">
            <x-index-reason-container>
                <x-index-reason-title num="01" title="小人数から<span class='text-main-text-color'>大規模校</span>まで対応可能！"></x-index-reason-title>
                <x-slot name="flag">true</x-slot>
                <x-slot name="src">storage/img/reason-1.jpg</x-slot>
                <x-slot name="fontawsome1">fa-solid fa-utensils</x-slot>
                <x-slot name="title1">最大で<span class='text-main-text-color'>900名</span>収容可能なお食事会場</x-slot>
                <x-slot name="text1">大規模校でも全員同じ会場でお食事が取れるので管理がしやすいです。</x-slot>
                <x-slot name="fontawsome2">fa-solid fa-bed</x-slot>
                <x-slot name="title2">1部屋あたり2~3名様で<span class='text-main-text-color'>密</span>回避</x-slot>
                <x-slot name="text2">全512室のお部屋をご用意しており、密にならないお部屋割りが可能なのでコロナ対策にもなります。</x-slot>
            </x-index-reason-container>

            <x-index-reason-container>
                <x-index-reason-title num="02" title="<span class='text-main-text-color'>札幌市内</span>班別・コース別研修などに<br class='md:hidden'>最適な立地！"></x-index-reason-title>
                <x-slot name="flag">false</x-slot>
                <x-slot name="src">storage/img/reason-2.jpg</x-slot>
                <x-slot name="fontawsome1">fa-solid fa-train-subway</x-slot>
                <x-slot name="title1">電車利用で旅費を<span class='text-main-text-color'>お安く</span></x-slot>
                <x-slot name="text1">最寄り駅まで徒歩1分の立地。札幌市内の班別研修からホテルまで、またはホテルから新千歳空港まで電車で移動することができます。</x-slot>
                <x-slot name="fontawsome2">fa-solid fa-bus</x-slot>
                <x-slot name="title2"><span class="text-main-text-color">札幌市内</span>コース別研修にもオススメ</x-slot>
                <x-slot name="text2">「白い恋人パーク」、「大倉山ジャンプ競技場」、「もいわ山」など貸切バスでの移動にも最適。</x-slot>
            </x-index-reason-container>

            <x-index-reason-container>
                <x-index-reason-title num="03" title="札幌市長にも表彰された<br class='md:hidden'><span class='text-main-text-color'>災害時</span>にでも安心なホテル！"></x-index-reason-title>
                <x-slot name="flag">true</x-slot>
                <x-slot name="src">storage/img/reason-3.jpg</x-slot>
                <x-slot name="fontawsome1">fa-solid fa-faucet-drip</x-slot>
                <x-slot name="title1">2018年9月「北海道胆振東部地震」</x-slot>
                <x-slot name="text1">北海道全域に影響した大規模停電時にも、途切れることなく電気と熱を供給し、近隣住民の生活を支えた実績が評価され、札幌市長より表彰いただきました。昨今の災害状況を心配される方にも安心してご利用いただけます。</x-slot>
                <x-slot name="fontawsome2">fa-regular fa-lightbulb</x-slot>
                <x-slot name="title2"><span class="text-main-text-color">自家発電システム</span>を完備</x-slot>
                <x-slot name="text2">北海道全域に影響した大規模停電”ブラックアウト”時の対応が評価され、札幌市長より表彰いただきました。現在はエレベーター用の「防災キャビネット」や日本災害食承認取得「アルファ米」を4,200食ご用意しております。</x-slot>
            </x-index-reason-container>
        </div>

    </section>

    {{--権威性・実績--}}
    <section class="flex justify-center items-center bg-main-color">
        <article class="bg-white flex flex-col justify-center items-center gap-10 p-6 my-16 w-[90%] md:w-[50%]">
            <h1 class="text-xl md:text-4xl font-bold">豊富な<span class="text-main-text-color">学生団体</span>受け入れ実績</h1>
            <p class="w-[90%] md:w-[70%] leading-8">小・中・高・大学から〇〇以上の学生団体にご利用いただいた実績を誇る、学生団体のエキスパートホテル。豊富なノウハウで快適な宿泊をサポートします。</p>
        </article>
    </section>

    {{--お客様の声--}}
    <section class="flex flex-col justify-center items-center gap-10 py-10">
        <article class="flex flex-col items-center gap-4">
            <h2 class="md:text-xl">\\ <span class="text-main-text-color">ご旅行会社</span>の方のお声も！ //</h2>
            <p class="text-xl md:text-2xl font-bold text-center">ホテルエミシア札幌を利用した<br class="md:hidden"><span class="text-main-text-color">お客様</span>に聞いてみました！</p>
        </article>

        <div class="flex flex-col items-center justify-center gap-20">
            <x-index-review role="某大手旅行会社 営業職" name="〇〇さん" title="学生団体担当者がずば抜けて親切！" flag="true" src="storage/img/review-1.jpg"
                            text="新卒で入社して初めてのお客様の宿泊先として利用させていただきました。未熟な私に対して、とても親身にご相談に乗っていただき、おかげさまで学校様にもご満足いただき、継続してご契約をいただくことができました。
                            以降、札幌市内での宿泊先としては、いつもホテルエミシア札幌をご紹介させていただいております。"/>
            <x-index-review role="〇〇高等学校 校長" name="〇〇校長先生" title="客室数も多く密になることなく安心して過ごせた" flag="true" src="storage/img/review-2.jpg"
                            text="体調不良の生徒が発生した際も、専用の保健室をしっかりと確保しており、1部屋あたり最大3名までの利用に制限することで、感染予防対策を徹底していた。
                            修学旅行の事前案内においては、保護者の皆様にも大変安心していただいた。"/>
            <x-index-review role="某大手旅行会社 営業職" name="〇〇さん" title="アレルギー対応など細かな依頼にもしっかり対応してくれた！" flag="true" src="storage/img/review-4.jpg"
                            text="アレルギーにより別メニューが必要な生徒様の対応もしっかりしていただいた。お陰様で養護の先生ともスムーズにやり取りが進んだ。
                            またお部屋割りについても男女フロア別にするなど先生が管理しやすいようご配慮いただいた。"/>

        </div>
    </section>

    {{--よくある質問--}}
    <section class="flex flex-col items-center gap-10 bg-gray-300 py-10">
        <div class="flex flex-col items-center gap-4">
            <p class="text-2xl font-bold text-center text-main-color">よくある質問</p>
            <p class="border-b border-solid border-main-color w-[3rem]"></p>
        </div>

        <div class="w-full md:px-8 flex flex-col md:flex-row md:flex-wrap items-center md:items-start justify-center gap-10 md:gap-16">
            <x-index-question question="大浴場はありますか？" answer="例）大浴場はございますが、学生団体様のご利用はご遠慮頂いております。"/>
            <x-index-question question="食事はビュッフェかお弁当選べますか？" answer="〇〇〇〇〇〇〇〇"/>
            <x-index-question question="他校が同宿する可能性がありますか？" answer="〇〇〇〇〇〇〇〇"/>
            <x-index-question question="レクリエーションなど出来る会場はありますか？" answer="〇〇〇〇〇〇〇〇"/>
            <x-index-question question="男女別フロアにすることは出来ますか？" answer="〇〇〇〇〇〇〇〇"/>
            <x-index-question question="学生はエレベーター使えますか？" answer="〇〇〇〇〇〇〇〇"/>
        </div>
    </section>

    {{--ひと言--}}
    <section class="relative w-full h-[40dvh]">
        <img src="{{asset("storage/img/room.jpg")}}" class="h-[40dvh] w-full object-cover blur-[3px]">
        <aside class="w-full flex flex-col gap-4 md:gap-8 text-2xl md:text-4xl text-center font-bold text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <p>一生の思い出となる</p>
            <p><span class="text-main-text-color">修学旅行</span>の1日を、</p>
            <p>この場所から</p>
        </aside>
    </section>

    {{--パンフレット&お問い合わせ--}}
    <x-index-contact></x-index-contact>

</x-template>

