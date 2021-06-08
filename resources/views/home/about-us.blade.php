<section class="ipf-home flex flex-col h-screen">
    <div class="pt-36 mb-32 flex-1 container flex items-center">
        <div class="flex-1" style="margin-top: 0rem">
            <h1 class="text-2xl font-normal mb-12">
                /About Us<span class="for-lg">
            </h1>
            <p class="max-w-xl mb-8 text-xl leading-relaxed">
                We design, develop and innovate impactful digital solutions for businesses and initiatives that link people with socio-economic opportunities in Africa.
            </p>
            <p class="max-w-xl mb-12 text-xl leading-relaxed">
                We take the extra step to understand our partner’s vision and dreams; we challenge them and work together to bring their vision to life. Our dedicated project teams execute projects using agile methodology and are fully responsible for the final product and quality at every sprint. Our delivery process allows you to flexibly manage your priorities as the project goes on in a way that gives you maximum return on investment.
            </p>

            <button class="mt-4">
                <a href="#" class="btn capitalize">
                    Learn More About Us
                </a>
            </button>
        </div>
        <div class="pt-12 px-12">
            <div class="w-72 bg-gray-100 mb-8 relative" style="width: 30rem; height: 20rem">
            </div>
        </div>
    </div>
    <div class="pb-10 container flex flex-col items-start justify-center">
        <div class="flex items-center space-x-24">
            @php
                class Card
                    {
                        public $imageUrl;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $countries = new Card();
                    $countries->imageUrl = 'img/Africa.svg';
                    $countries->statistics = '07';
                    $countries->title = 'Countries Reached';
                    $countries->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $solutions = new Card();
                    $solutions->imageUrl = 'img/SDG.svg';
                    $solutions->statistics = '193+';
                    $solutions->title = 'Solutions Created';
                    $solutions->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $customers = new Card();
                    $customers->imageUrl = 'img/People.svg';
                    $customers->statistics = '123,768+';
                    $customers->title = 'People using our products';
                    $customers->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $cards = array($countries, $solutions, $customers);
            @endphp

            @foreach($cards as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                <div style="width: 23.8125rem">
                    <img src="{{asset($card->imageUrl)}}" alt="" class="mb-8 h-48" />
                    {{-- <img class="w-full" src="{{asset('img/niajiri-bg.png')}}" alt="" /> --}}
                    {{-- <div class="w-72 bg-gray-100 mb-8" style="height: 13rem"></div> --}}
                    <h1 class="text-6xl font-medium mb-4 block" style="color: #0D3462">{{$card->statistics}}</h1>
                    <h3 class="text-2xl font-medium" style="opacity: 0.75">{{$card->title}}</h3>
                    <p class="text-xl">{{$card->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>