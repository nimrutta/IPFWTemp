<section class="ipf-testimonial">
    <!-- <h1>Testimonials.</h1> -->

    <div class="testimonials-wrapper">
        <div class="testimonial-buttons layout center justified">
            <button id="testimonialsPrevBtn" class="disabled layout center-center" onclick="scrollTestimoniaslTo(0)">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
            </button>

            <button id="testimonialsNextBtn" class="layout center-center" onclick="scrollTestimoniaslTo(1)">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                </svg>
            </button>
        </div>

        <div class="testimonial-scroller layout">
        <div class="current testimonial-card layout vertical justified">
                <p class="flex layout center-center">
                    I would not choose a better partner <br/>to shine my personal and business online presence and engagement. For me working with iPF has been a very professional, ethical and an experience full of integrity. The customer service I continue to receive is high class, I will recommend them to anyone willing to take their brand and business to the next level anytime.
                </p>
                <h2>
                    Abella Bateyunga
                    <sub>Director, Tanzania Bora Initiative</sub>
                </h2>
            </div>
            <div class=" testimonial-card layout vertical justified">
                <p class="flex layout center-center">
                    The team at iPF was great to work with.They took everything off my plate and came up with something amazing.
                </p>
                <h2>
                    Godwin Monyo
                    <sub>ICT Manager, Tanzania Teachers Union</sub>
                </h2>
            </div>
             <div class="testimonial-card layout vertical justified">
                <p class="flex layout center-center">
                    When it comes to websites, i love great designs coupled with functionality, iPF Softwares is the place where that marriage occurs!I love the look of our website its color full and unique.
                </p>
                <h2>
                    Rosemary Funja
                    <sub>Director, She Codes 4 Change</sub>
                </h2>
            </div>
           
            <div class="testimonial-card layout vertical justified">
                <p class="flex layout center-center">
                Thanks to IPF Softwares for putting a lot of thought and expertise into designing the TYDS Website.You guys have calm and logical methods of approach that truly inspired us.

                </p>
                <h2>
                    Issa Hezron
                    <sub>IT Manager, DOT TRUST TANZANIA</sub>
                </h2>
            </div>
        </div>

        <div id="testimonialMarkers" class="layout inline center">
            <button onclick="scrollTestimoniaslTo(0, true)" class="testimonial-marker active"></button>
            <button onclick="scrollTestimoniaslTo(1, true)" class="testimonial-marker"></button>
            <button onclick="scrollTestimoniaslTo(2, true)" class="testimonial-marker"></button>
            <button onclick="scrollTestimoniaslTo(3, true)" class="testimonial-marker"></button>
        </div>
    </div>
</section>


<script>
    var onboarder = document.querySelector("#onBoarder");
    var wrapper = document.querySelector(".testimonials-wrapper");
    var scroller = document.querySelector(".testimonial-scroller");
    var testimonialCards = document.querySelectorAll(".testimonial-card");
    var testimonialMarkers = document.querySelectorAll(".testimonial-marker");
    var prevButton = document.querySelector("#testimonialsPrevBtn");
    var nextButton = document.querySelector("#testimonialsNextBtn");

    var testy = testimonialCards[0];
    var testyBox = testy.getBoundingClientRect();

    var cur_idx = 0;
    // var distance = window.innerWidth > 800 ? 800 : window.innerWidth - 20;
    var distance = testyBox.width;

    function scrollTestimoniaslTo(dir, from_marker){
        var dir, to_idx;

        if(!from_marker){
            dir = dir === 1 ? true : false;
            to_idx = -1;
            console.log("0 or 1 is dir!");
        }
        else{
            to_idx = dir;
            dir = cur_idx < dir ? true : false;

            console.log("Neither 0 nor 1 is dir!");
        }    

        console.log("Dir is " + dir);

        if(dir){
            console.log(to_idx == -1 && cur_idx >= testimonialCards.length - 1);

            if(to_idx == -1 && cur_idx >= testimonialCards.length - 1)
                return;
            else if(to_idx == -1 && cur_idx === testimonialCards.length - 2)
                nextButton.classList.add('disabled');
            else if(to_idx === testimonialCards.length - 1)
                nextButton.classList.add('disabled');    

            prevButton.classList.remove('disabled');

            if(to_idx === -1)
                cur_idx+=1;
            else
                cur_idx = to_idx;

            console.log(cur_idx);  
        }else{
            console.log(to_idx == -1 && cur_idx === 0);
            if(to_idx == -1 && cur_idx === 0)
                return;
            else if(to_idx == -1 && cur_idx === 1)
                prevButton.classList.add('disabled');
            else if(to_idx == 0)
                prevButton.classList.add('disabled');
                
            nextButton.classList.remove('disabled');

            if(to_idx === -1)
                cur_idx-=1;
            else
                cur_idx = to_idx;


            console.log(cur_idx);
        }

        setActive();
    }

    function setActive(){
        // var margin = cur_idx <= 1 ? 60 : 30;
        // if(window.innerWidth < 800){
            // var margin = cur_idx <= 1 ? 64 : 32;
        // }
        var margin = 0;

        wrapper.classList.add("gawk");
        scroller.style.transform = `translateX(${cur_idx * -(distance + (margin * cur_idx))}px)`;

        document.querySelector(".testimonial-card.current").classList.remove('current');
        testimonialCards[cur_idx].classList.add('current');
        scroller.addEventListener("transitionend", function(event) {
            wrapper.classList.remove("gawk");
        }, false);

        document.querySelector(".testimonial-marker.active").classList.remove('active');
        testimonialMarkers[cur_idx].classList.add('active');
    }

    function scrollOnBoarderTo(idx){
        cur_idx = idx;

        if(cur_idx === 0)
            prevButton.classList.add('disabled');
        else
            prevButton.classList.remove('disabled');

        if(cur_idx === testimonialCards.length - 1)
            nextButton.classList.add('disabled');
        else
            nextButton.classList.remove('disabled');

        setActive();
    }
</script>