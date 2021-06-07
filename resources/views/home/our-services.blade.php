<section class="flex flex-col" style="margin-top: 32rem; background-color: #0d3462">
    <div class="pt-28 flex-1 container flex items-center">
        <div class="flex-1" style="color: #ffffff">
            <h1 class="text-3xl mb-6" style="font-weight: 500;">
                /Our Services<span class="for-lg">
            </h1>
            <p class="text-4xl font-light leading-snug" style="width: 72rem">
                We take pride in everything we do, our aim is to deliver the highest quality of work we give it our all.
            </p>
        </div>
    </div>
    <div class="pb-10 mt-32 container flex flex-col items-start justify-center">
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
                    $website->imageUrl = 'img/Africa.svg';
                    $website->statistics = '07';
                    $website->title = 'Website applications';
                    $website->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $mobile = new Card();
                    $mobile->imageUrl = 'img/Africa.svg';
                    $mobile->statistics = '193+';
                    $mobile->title = 'Mobile applications';
                    $mobile->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $xplatform = new Card();
                    $xplatform->imageUrl = 'img/Africa.svg';
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
                    <h3 class="text-2xl font-light mb-6 hover:text-blue-500" style="opacity: 0.80; font-size: 1.8rem; color: #999999">{{$card->title}}</h3>
                    <p class="text-xl text-white">{{$card->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pb-10 container flex flex-col items-start justify-center" style="margin-top: 6rem">
        <h1 class="text-2xl text-white" style="opacity: 50%; margin-bottom: 1.7rem">Technologies we use</h1>
        <div class="flex items-center">
            @php
                class Icons
                    {
                        public $type;
                        public $imageUrl;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $android = new Icons();
                    $android->type = 'android';
                    $android->imageUrl = 'img/logo 1.png';
                    $android->statistics = '07';
                    $android->title = 'Website applications';
                    $android->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $node = new Card();
                    $node->type = 'node';
                    $node->imageUrl = 'img/logo 2.png';
                    $node->statistics = '193+';
                    $node->title = 'Mobile applications';
                    $node->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $laravel = new Card();
                    $laravel->type = 'laravel';
                    $laravel->imageUrl = 'img/logo 3.png';
                    $laravel->statistics = '123,768+';
                    $laravel->title = 'Cross platform APPs';
                    $laravel->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $react = new Card();
                    $react->type = 'react';
                    $react->imageUrl = 'img/logo 5.png';
                    $react->statistics = '123,768+';
                    $react->title = 'Cross platform APPs';
                    $react->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $mongo = new Card();
                    $mongo->type = 'mongo';
                    $mongo->imageUrl = 'img/logo 6.png';
                    $mongo->statistics = '123,768+';
                    $mongo->title = 'Cross platform APPs';
                    $mongo->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $cards = array($android, $node, $laravel, $react, $mongo);
            @endphp

            @foreach($cards as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                    $height = $card->type == 'android' ? "h-8" : ($card->type == 'node' ? "h-10" : ($card->type == 'laravel' ? "h-10" : ($card->type == 'react' ? "h-12" : ($card->type == 'mongo' ? "h-12" : ""))));
                    // $space = $card->type == 'android' ? "mr-4" : "";
                    // $card->type == 'mongo' ? "h-10" : $card->mongo ? "h-16" : $card->laravel : "h-12" : $card->mongo ? "h-16": "h-10";
                    //  : $card->laravel
                @endphp
                {{-- <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" /> --}}
                <div style="width: 16rem" class="ml-0">
                    <img src="{{asset($card->imageUrl)}}" alt="" class={{$height}} style="margin-bottom: 2rem" />
                    {{-- <div class="w-72 bg-gray-300 mb-8" style="height: 3rem"></div> --}}
                </div>
            @endforeach
        </div>
    </div>
</section>