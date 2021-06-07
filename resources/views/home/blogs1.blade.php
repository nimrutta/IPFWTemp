<section class="ipf-home flex flex-col relative">
    <div class="pt-0  container flex">
        <div class="" style="margin-top: 6rem">
            <h1 class="text-3xl font-meddium mb-6">
                /Insights<span class="for-lg">
            </h1>
        </div>
    </div>
    <div class="pb-10 container flex flex-col items-start justify-center">
        <div class="flex" style="width: 95%; justify-content: flex-end">
            <h3 class="flex font-meddium mb-8" style="align-self: flex-end; color: #1E79E4; font-weight: 300">View All Insights</h3>
        </div>
        <div class="flex items-start space-x-12 justify-between mb-20" style="width: 95%">
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
                    $HIF->author = 'By Walter';
                    $HIF->category = 'Products';
                    $HIF->title = 'HIF Reached';
                    $HIF->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $niajiri = new Blog();
                    $niajiri->imageUrl = 'img/Insight 2.png';
                    $niajiri->statistics = 'Niajiri platform from an idea to a world class product';
                    $niajiri->author = 'By Nelson';
                    $niajiri->category = 'Teams';
                    $niajiri->title = 'niajiri Created';
                    $niajiri->description = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.';

                    $anniversary = new Blog();
                    $anniversary->imageUrl = 'img/Insight 3.png';
                    $anniversary->statistics = 'Our 5 anniversary, creating systems & processes';
                    $anniversary->author = 'By Greyson';
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
                    <span><h5 class="inline font-light" style="color: #0d3462">{{$card->author}}</h5><h5 class="inline ml-2" style="color: #A5A5A5"> - #{{$card->category}}</h5></span>
                    <h1 class="font-light mb-4 block" 
                    style="width: 19rem; color: #666666;
                    font-size: 1.5rem; overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;">{{$card->statistics}}</h1>
                    {{-- <h3 class="text-3xl font-medium" style="opacity: 0.75">{{$card->title}}</h3> --}}
                    <p class="text-xl w-80" style="width: 19rem">{{$card->description}}</p>
                </div>
            @endforeach
        </div>
        <div class="flex w-full justify-center flex-wrap mb-8" style="    flex-wrap: wrap;">
            <h1 class="block text-4xl mb-1.5" style="flex-basis: 100%;text-align: center;color: #08213E;">Premium Insights into your inbox</h1>
            <h3 class="block mb-2.5 text-sm" style="flex-basis: 100%;text-align: center;color: #08213E;">Subscribe to our newsletter for fresh, Premium content from industry experts.</h3>
            <div>
                <input type="text" class="mr-2 rounded-sm h-14 w-96" style="border: solid 1px #1976D2; height: 2.4rem; width: 16rem; border-radius: 5px">
                <button 
                  class="text-white text-xs w-28"
                  style="border: solid 1px #1976D2; height: 2.4rem; border-radius: 5px; background-color: #1976D2;">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</section>