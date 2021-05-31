<section class="flex flex-col" style="margin-top: 32rem; background-color: #0d3462">
    <div class="pt-0 flex-1 container flex items-center">
        <div class="flex-1" style="margin-top: 7rem; color: #ffffff">
            <h1 class="text-3xl font-meddium mb-6" style="font-weight: 500;">
                /Our Services<span class="for-lg">
            </h1>
            <p class="mb-9 text-5xl font-normal leading-relaxed" style="font-size: 3.125rem; width: 56rem">
                We take pride in everything we do, our aim is to deliver the highest quality of work we give it our all.
            </p>
            <br><br><br><br>
        </div>
    </div>
    <div class="pb-10 mt-28 container flex flex-col items-start justify-center">
        <div class="flex items-center space-x-12">
            @php
                class Tile
                    {
                        public $imageUrl;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $website = new Tile();
                    $website->imageUrl = 'red';
                    $website->statistics = '07';
                    $website->title = 'Website applications';
                    $website->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $mobile = new Card();
                    $mobile->imageUrl = 'red';
                    $mobile->statistics = '193+';
                    $mobile->title = 'Mobile applications';
                    $mobile->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $xplatform = new Card();
                    $xplatform->imageUrl = 'red';
                    $xplatform->statistics = '123,768+';
                    $xplatform->title = 'Cross platform APPs';
                    $xplatform->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $cards = array($website, $mobile, $xplatform);
            @endphp

            @foreach($cards as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                {{-- <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" /> --}}
                <div style="width: 23.8125rem">
                    {{-- <div class="w-72 bg-gray-100 mb-8" style="height: 13rem"></div>
                    <h1 class="text-7xl font-medium mb-4 block" style="color: #0D3462">{{$card->statistics}}</h1> --}}
                    <h3 class="text-3xl font-medium mb-6" style="opacity: 0.80; font-size: 2.2rem; color: #999999">{{$card->title}}</h3>
                    <p class="text-xl text-white">{{$card->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pb-10 mt-44 container flex flex-col items-start justify-center" style="margin-top: 10rem">
        <h1 class="text-3xl text-white" style="opacity: 50%; margin-bottom: 1.7rem">Technologies we use</h1>
        <div class="flex items-center space-x-12">
            @php
                class Icons
                    {
                        public $imageUrl;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $android = new Icons();
                    $android->imageUrl = 'red';
                    $android->statistics = '07';
                    $android->title = 'Website applications';
                    $android->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $node = new Card();
                    $node->imageUrl = 'red';
                    $node->statistics = '193+';
                    $node->title = 'Mobile applications';
                    $node->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $laravel = new Card();
                    $laravel->imageUrl = 'red';
                    $laravel->statistics = '123,768+';
                    $laravel->title = 'Cross platform APPs';
                    $laravel->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $react = new Card();
                    $react->imageUrl = 'red';
                    $react->statistics = '123,768+';
                    $react->title = 'Cross platform APPs';
                    $react->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $mongo = new Card();
                    $mongo->imageUrl = 'red';
                    $mongo->statistics = '123,768+';
                    $mongo->title = 'Cross platform APPs';
                    $mongo->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $cards = array($android, $node, $laravel, $react, $mongo);
            @endphp

            @foreach($cards as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                {{-- <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" /> --}}
                <div style="width: 16rem">
                    <div class="w-72 bg-gray-300 mb-8" style="height: 3rem"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section class="flex items-center" style="margin-top: 35rem">
    <div class="pt-12 pb-16 relative w-full flex flex-col text-white"
        style="background: #107E68"
    >
        <div class="relative z-10 flex-1 container flex items-center">
            <div class="flex-1">
                <img class="h-10 mb-6" src="{{asset('img/niajiri-logo-black.png')}}" alt="" />

                <h1 class="text-3xl font-medium leading-snug mb-6">
                    Revolutionising talent <span class="for-lg"><br/></span>
                    management in Africa,<span class="for-lg"><br/></span>
                    an incredible partnership <span class="for-lg"><br/></span>
                    with Niajiri Limited
                </h1>
                <p class="max-w-lg mb-12 text-xl leading-relaxed">
                    An interesting journey building the platform from an idea stage to now a calling product.
                </p>
    
                <a href="#" class="btn capitalize py-2 px-4 bg-white border-white text-black">
                    View Case Study
                </a>
            </div>
            <div class="pt-12 px-12 w-3/5">
                <div class="relative">
                    <div class="bg-black rounded-xl py-5 px-6 relative">
                        <div class="bg-gray-500 rounded overflow-hidden">
                            <img class="w-full" src="{{asset('img/niajiri-bg.png')}}" alt="" />
                        </div>
                        <div class="w-5 h-5 border-4 opacity-20 rounded-full absolute inset-y-0 my-auto right-0 mr-0.5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}