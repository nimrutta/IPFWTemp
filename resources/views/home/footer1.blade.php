<section class="ipf-home flex flex-row">
    @php
        $url = 'img/Deco footer.svg'
    @endphp
    <div class="flex-1 container flex items-start justify-between">
        <div
          class="pb-10 mt-16 container flex flex-col items-start justify-center"
          style="
           background-image: url('img/Deco footer.svg');
           background-position: -30px -10px;
           background-repeat: no-repeat;
           background-size: 90% 110%;
           width: 17rem;
           height: 11rem;

           "
        >
            <div style="width: fit-content; color: #0d3462;">
                <p class="text-base leading-10">Contact Us</p>
                <p class="text-base leading-10">Call: +255 718 728 778</p>
                <p class="text-base leading-10"> Email: info@ipfsoftwares</p>
            </div>
        </div>
        <div class="pb-10 mt-16 w-52 container flex flex-col items-start justify-center">
            <div style="width: fit-content; color: #0d3462;">
                <p class="text-base leading-10">Offices</p>
                <p class="text-base leading-10">Tanzania</p>
                <p class="text-base leading-10">Dar Es Salaam,Kinondoni.</p>
                <p class="text-base leading-10">Google Maps</p>
            </div>
        </div>
        <div class="pb-10 mt-16 w-52 container flex flex-col items-start justify-center">
            <div style="width: fit-content; color: #0d3462;">
                <p class="text-base leading-10">Join the crew</p>
                <p class="text-base leading-10">Talents are always welcome</p>
                <p class="text-base leading-10">Email: jobs@ipfsoftwares.com</p>
            </div>
        </div>
        <div class="pb-10 mt-16 w-52 container flex flex-col items-start justify-center">
            <div style="width: fit-content; color: #0d3462;">
                <p class="text-base leading-10">Follow Us</p>
                <div class="flex flex-row w-16 justify-between">
                    <img src="{{asset('img/twitter.svg')}}" alt="" class="h-3" />
                    <img src="{{asset('img/linkedin.svg')}}" alt="" class="h-3" />
                    <img src="{{asset('img/instagram.svg')}}" alt="" class="h-3" />
                </div>
            </div>
        </div>
    </div>
</section>