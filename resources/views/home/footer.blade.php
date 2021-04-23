<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 03/01/2017
 * Time: 6:36 PM
 */?>

<Style>
    
</Style>


<section class="ipf-footer">
    <div class="footer-large-deco"></div>
    <div class="footer-large-small"></div>
    <section class="footer-social">
        {{-- <h1>Say Hi!</h1> --}}
        <div class="social">
                <a class="fb text-center pull-left" href="https://www.facebook.com/ipfsoftwarescom/" target="_blank">
                    <div class="front layout center-center">
                        <svg fill="#3b598f" style="width: 32px !important; height: 32px !important;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6C10,3.79 11.79,2 14,2H17Z" /></svg>
                    </div>
                    <div class="behind text-right">LIKE US</div>
                </a>

                <a class="tw text-center pull-left" href="https://twitter.com/ipfsoftwares" target="_blank">
                    <div class="front layout center-center">
                        <svg fill="#55acee" style="width: 32px !important; height: 32px !important;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg>
                    </div>
                    <div class="behind">FOLLOW</div>
                </a>

                <a class="ig text-center pull-left" href="https://www.instagram.com/ipfsoftwares/" target="_blank">
                    <div class="front layout center-center">
                        <svg style="fill: #f09433 !important;width: 32px !important; height: 32px !important;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </div>
                    <div class="behind text-left">FOLLOW</div>
                </a>
        </div>
    </section>

    <section class="ipf-sec-footer">

        <div class="see-more">
            <h1>Get a free quotation!</h1>
            <a href="{{ url('contact/agency') }}">Contact Us.</a>
<!--            <a href="--><?//=base_url('contact/agency')?><!--" class="work-anchor"></a>-->
        </div>
        <div class="contacts contact-actions" id="dials">
            <h1>Contact us</h1>
            <h2 class="h-call"><i>Call: </i>&nbsp;&nbsp;&nbsp;<a href="tel:+255718728778"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg><span>+255 718 728 778</span></a></h2>
            <h2 class="h-email"><i>Email: </i><a href="mailto:info@ipfsoftwares.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg><span>info@ipfsoftwares.com</span></a></h2>

        </div>
        <div class="contacts">
            <h1>Offices</h1>
            <h2><span>Tanzania</span></h2>
            <h2><i>Dar Es Salaam,Kinondoni.</i></h2>
            <a href="https://goo.gl/CRKB5c" target="_blank">Google Maps</a>
        </div>
        <div class="contacts">
            <h1>Join the crew</h1>
            <h2><i>Talents are always welcome</i></h2>
            <h2><i>Email: </i>&nbsp;<span>jobs@ipfsoftwares.com</span></h2>
        </div>

        <h3 id="copy-element">&copy; <?=date('Y')?>&nbsp;&nbsp; all rights reserved ipf softwares | BRANDS MENTIONNED ABOVE ARE PROPERTY OF THEIR RESPECTIVE OWNER.</h3>
    </section>
</section>

<!-- BEGIN JIVOSITE CODE {literal} -->

<!-- {/literal} END JIVOSITE CODE -->
<!--https://www.jivochat.com/support/knowledge-base/article/how-to-create-a-custom-appearance-for-the-live-chat-widget-->