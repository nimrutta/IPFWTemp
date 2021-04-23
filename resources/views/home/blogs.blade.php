<section id="sectionHomeBlogs">
    <div class="blogs-wrapper">
        <h1>Insights</h1>
        <div class="layout justified">
            @php
                $insight = $insights->first();
                $image = $insight->cover_url;
                $title = preg_replace("/\\\\'/", "'", $insight->title);
                $slug = is_null($insight->slug) ? $insight->slug : $insight->id;
                $body = substr(strip_tags($insight->body), 0, 120) . '...';
            @endphp
            
            <div class="insight-item large">
                <div class="image layout center-center">
                    <img src="{{$image}}" alt="">
                </div>
                <div class="text">
                    <h3>{{$title}}</h3>
                    {{-- <h5><span class="taggy-item">BUSINESS GROWTH</span><span class="taggy-item">TECHNOLOGY</span></h5> --}}
                    <p> {{ $body }} </p> 

                    <a href="{{url('/insights/' . $slug)}}">Read More</a>
                </div>
            </div>

            <div class="small-blogs">
                @foreach ($insights as $insight)
                    @if ($loop->index == 0)
                        @continue
                    @elseif ($loop->index > 3)
                        @break
                    @endif
            
                    @php
                        $slug = is_null($insight->slug) ? $insight->slug : $insight->id;
                        $image = $insight->cover_url;
                        $title = preg_replace("/\\\\'/", "'", $insight->title);
                        $body = substr(strip_tags($insight->body), 0, 120) . '...';
                    @endphp
                    
                    <div class="insight-item layout start flex">
                        <div class="image">
                            <img src="{{$image}}" alt="">
                        </div>
                        <div class="text">
                            <h3>{{$title}}</h3>
                            {{-- <h5><span class="taggy-item">DIGITAL MARKETTING</span><span class="taggy-item">SOCIAL MEDIA</span></h5> --}}
                            <p> {{ $body }} </p>
                            <a href="{{url('/insights/' . $slug)}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>