<section class="ipf-home flex flex-col h-screen">
    <div class="pt-0 flex-1 container flex items-center">
        <div class="flex-1">
            <h1 class="text-3xl font-meddium mb-6">
                /About Us<span class="for-lg">
            </h1>
            <p class="max-w-xl w-1/3 mb-9 text-xl leading-relaxed">
                We design, develop and innovate impactful digital solutions for businesses and initiatives that link people with socio-economic opportunities in Africa.
            </p>
            <p class="max-w-xl w-1/3 mb-9 text-xl leading-relaxed">
                We take the extra step to understand our partner’s vision and dreams; we challenge them and work together to bring their vision to life. Our dedicated project teams execute projects using agile methodology and are fully responsible for the final product and quality at every sprint. Our delivery process allows you to flexibly manage your priorities as the project goes on in a way that gives you maximum return on investment.
            </p>

            <button class="mt-4">
                <a href="#" class="btn capitalize">
                    Learn More About Us
                </a>
            </button>
        </div>
        <div class="pt-12 px-12">
            <div class="relative" style="width: 380px">
            </div>
        </div>
    </div>

    <div class="pb-10 container flex flex-col items-center justify-center">
        <p class="mb-5 text-lg">
            Leading organisations trust us as their digital solutions partners
        </p>
        <div class="flex items-center space-x-12">
            @php
                class Card
                    {
                        public $imageUrl;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $countries = new Card();
                    $countries->imageUrl = 'red';
                    $countries->statistics = '07';
                    $countries->title = 'Countries Reached';
                    $countries->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $cards = array($countries);
            @endphp

            @foreach($cards as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                {{-- <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" /> --}}
                <h1>{{$card->statistics}}</h1>
                <h3>{{$card->title}}</h3>
                <p>{{$card->description}}</p>
            @endforeach
        </div>
    </div>
</section>