<section class="ipf-home flex flex-col h-screen">
    <div class="pt-0 flex-1 container flex items-center">
        <div class="flex-1" style="margin-top: 4rem">
            <h1 class="text-3xl font-meddium mb-6">
                /Insights<span class="for-lg">
            </h1>
        </div>
    </div>
    <div class="pb-10 mt-28 container flex flex-col items-start justify-center">
        <h3 class="flex self-end">View All</h3>
        <div class="flex items-start space-x-12 justify-between" style="width: 95%">
            @php
                class Blog
                    {
                        public $imageUrl;
                        public $author;
                        public $category;
                        public $statistics;
                        public $title;
                        public $description;
                    }
                    $HIF = new Blog();
                    $HIF->imageUrl = 'img/Insight 1.png';
                    $HIF->statistics = 'Constant evolution With #HackITFriday';
                    $HIF->author = 'R.R C';
                    $HIF->category = 'Products';
                    $HIF->title = 'HIF Reached';
                    $HIF->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $niajiri = new Blog();
                    $niajiri->imageUrl = 'img/Insight 2.png';
                    $niajiri->statistics = 'Niajiri platform from an idea to a world class product';
                    $niajiri->author = 'H.E T';
                    $niajiri->category = 'Teams';
                    $niajiri->title = 'niajiri Created';
                    $niajiri->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $anniversary = new Blog();
                    $anniversary->imageUrl = 'img/Insight 3.png';
                    $anniversary->statistics = 'Our 5 anniversary, creating systems & processes';
                    $anniversary->author = 'K.S G';
                    $anniversary->category = 'Services';
                    $anniversary->title = 'People using our products';
                    $anniversary->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $Blogs = array($HIF, $niajiri, $anniversary);
            @endphp

            @foreach($Blogs as $card)
                @php
                    // $height = $partner == "palladium" ? "h-10" : "h-8";
                @endphp
                {{-- <img class="{{$height}}" src="{{asset('img/partners/' . $partner . '.png')}}" alt="" /> --}}
                <div style="width: fit-content">
                    {{-- <div class="w-72 bg-gray-100 mb-8" style="height: 13rem"></div> --}}
                    <img src="{{asset($card->imageUrl)}}" alt="" class="mb-8" style="height: auto; width: 19rem" />
                    <span><h5 class="inline font-medium" style="color: #0d3462">{{$card->author}}</h5><h5 class="inline ml-2" style="color: #A5A5A5">#{{$card->category}}</h5></span>
                    <h1 class="font-medium mb-4 block" style="width: 19rem; color: #666666; font-size: 1.5rem">{{$card->statistics}}</h1>
                    {{-- <h3 class="text-3xl font-medium" style="opacity: 0.75">{{$card->title}}</h3> --}}
                    <p class="text-xl w-80" style="width: 19rem">{{$card->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>