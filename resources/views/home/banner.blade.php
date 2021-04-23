<section class="ipf-home flex flex-col h-screen">
    <div class="pt-10 flex-1 container flex items-center">
        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-4">
                A fully-fledged <span class="for-lg"><br/></span>
                software development house<span class="for-lg"><br/></span>
                based in Dar, Tanzania
            </h1>
            <p class="max-w-xl mb-9 text-xl leading-relaxed">
                We are focused on building and innovating digital solutions for <a href="#" class="underline text-blue-500">impact-oriented</a> businesses and initiatives that link people with social and economic opportunities in Africa.
            </p>

            <a href="#" class="btn capitalize">
                Let's Talk About Your Project
            </a>
        </div>
        <div class="pt-12 px-12">
            <div class="relative" style="width: 380px">
                <img class="w-full" src="{{asset('img/deco.png')}}" alt="" />
                <div class="absolute inset-0 z-10 flex flex-col text-white items-center justify-center">
                    <span class="text-xl opascity-50 mb-8">WE'RE A TEAM THAT</span>
                    <p class="text-7xl font-bold">
                        Delivers
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-10 container flex flex-col items-center justify-center">
        <p class="mb-5 text-lg">
            Leading organisations trust us as their digital solutions partners
        </p>
        <div class="flex items-center space-x-12">
            @php
                $partners = ["care", "sahara", "dot",  "palladium", "fsdt", "hdif"];
            @endphp

            @foreach($partners as $partner)
                @php
                    $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" />
            @endforeach
        </div>
    </div>
</section>