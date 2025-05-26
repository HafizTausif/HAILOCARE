@include('header')


<section id="hailo">
    <div class="container">
        <div class="row justify-content-space-between align-items-center">

            <div class="col-md-8">
                <div class="detail">
                    <h5>Connecting Families with<br>
                        Quality, Local Caregivers</h5>
                    <p>Work. At the touch of a button.</p>
                    <div class="detail-btn">
                        <a href="#" class="Bttn app">Download App Now</a>
                        <a href="#" class="Bttn more">More About Us</a>
                    </div>

                    <div class="bttns">
                        <img src="{{ asset('/assests/images/store.png') }}" alt="store" />
                        <img src="{{ asset('/assests/images/app.png') }}" alt="store" />
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="detail-box">
                    <h2><span class="text">Find Care</span> Find A Job</h2>
                    <input type="number" class="form-control" name="number" id="exampleFormControlInput1"
                        placeholder="ZIP Code">
                    <button href="#" class="Search">Search</button>
                </div>
            </div>


        </div>
    </div>
</section>



<section id="families" class="mt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <h2>Join 29 million families<br>who've turned to <span class="halio">Hailo</span><span
                    class="text">Care</span></h2>
            <p>Background-checked care for all you love</p>
        </div>
        <div class="row mt-4 justify-content-space-between align-items-center">
    
        <div class="col-6 col-md-2">
                <div class="box">
                    <img src="{{ asset('/assests/images/child.png') }}" alt="store" />
                    <h5>Lorem, ipsum.</h5>
                </div>
            </div>


            <div class="col-6 col-md-2">
                <div class="box">
                    <img src="{{ asset('/assests/images/care.png') }}" alt="store" />
                    <h5>Senior Care</h5>
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="box">
                    <img src="{{ asset('/assests/images/house.png') }}" alt="store" />
                    <h5>Lorem, ipsum.</h5>
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="box">
                    <img src="{{ asset('/assests/images/pet.png') }}" alt="store" />
                    <h5>Lorem, ipsum.</h5>
                </div>
            </div>

            <div class="col-12 col-md-2">
                <div class="box">
                    <img src="{{ asset('/assests/images/totoring.png') }}" alt="store" />
                    <h5>Lorem, ipsum.</h5>
                </div>
            </div>
           

        </div>
    </div>

</section>

<section id="carousels">
    <div class="container">
        <div class="row  justify-content-space-between align-items-center">
            <div class="col-md-6">
                <div class="just">
                    <h2>Don't just rely on a<br>
                        single referral</h2>
                    <p>Tap into the one of the largest online services for finding<br> and managing care</p>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/check.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>100% of caregivers are background<br> checked before you can hire</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/user.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>Transparent profiles, ratings and reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/wishlist.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>Dedicated safety and support teams</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="Bttn app">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('/assests/images/slide1.png') }}" alt="User">
                   

                            <p class="testimonial">"This platform transformed our outreach. Absolutely love the design
                                and experience!"</p>
                                <h3>Sarah Williams</h3>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assests/images/slide2.png') }}" alt="User">

                            <p class="testimonial">"Reliable, clean, and user-friendly. A great addition to our tech
                                stack."</p>
                                <h3>Daniel Smith</h3>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assests/images/slide3.png') }}" alt="User">
                            <p class="testimonial">"Sleek and intuitive. Made our workflows so much easier."</p>
                            <h3>Amy Chen</h3>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assests/images/slide1.png') }}" alt="User">
                            <p class="testimonial">"This platform transformed our outreach. Absolutely love the design
                                and experience!"</p>
                            <h3>Sarah Williams</h3>
                        </div>
                    </div>
                    <!-- Swiper navigation -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>


<section id="carousels">
    <div class="container">
        <div class="row  justify-content-space-between align-items-center">
            <div class="col-md-6">
                <div class="img">
                    <img src="{{ asset('/assests/images/peace.png') }}" alt="store" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="just">
                    <h2>Find peace of mind with<br> safety resources</h2>
                    <p>Our Safety Pledge means we're dedicated to you<br> and your safety.</p>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/trick.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>All caregivers you can hire are background-checked</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/trick.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>Supplemental Background Check reports available for purchase</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/trick.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>Dedicated safety team reviews all job posts and caregiver profiles</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <img src="{{ asset('/assests/images/trick.png') }}" alt="">
                                </div>
                                <div class="iconDetail">
                                    <p>Learn more with dozens of articles and resources in our Trust And Security
                                        Center/p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="Bttn app">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>



<section id="carousels" class="make">
    <div class="container">
        <div class="row  justify-content-space-between align-items-center">

            <div class="col-md-6">
                <div class="just">
                    <h2>We Make Finding Care<br> Easier</h2>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>1.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Tell us what you need</h3>
                                    <p>Share your care needs and start reviewing profiles.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>2.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Choose your caregiver</h3>
                                    <p>Start a conversation and hire the caregiver that's right for you.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>3.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Get 24/7 support</h3>
                                    <p>Chat with a live agent in an average of 1 minute or less.</p>
                                </div>
                            </div>
                        </div>


                        <a href="#" class="Bttn app">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="img">
                    <img src="{{ asset('/assests/images/make.png') }}" alt="store" />
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>



<section id="families" class="job">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <h2>Discover thousands of<br> new jobs daily</h2>
            <p>With a new job posting added every 10 seconds, you’ll be sure to find something that’s right for you</p>
        </div>
        <div class="row mt-4 justify-content-space-between align-items-center">


            <div class="col-md-4">
                <div class="box">
                    <img src="{{ asset('/assests/images/calinder.png') }}" alt="store" />
                    <h5>Earn your way</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="box">
                    <img src="{{ asset('/assests/images/boost.png') }}" alt="store" />
                    <h5>Boost your earnings</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <img src="{{ asset('/assests/images/email.png') }}" alt="store" />
                    <h5>Build a career</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

        </div>
    </div>

</section>


<section id="safety">
    <div class="container">
        <div class="baner">
            <div class="row justify-content-space-between align-items-center">
                <div class="col-md-6">
                    <div class="find">
                        <h2>Find peace of mind with<br>
                            safety resources</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum aliquet accumsan porta
                            .</p>
                        <a href="#" class="Bttn more">Get Started</a>
                    </div>
                </div>

                <div class="col-md-6 wids">

                    <img src="{{ asset('/assests/images/mobile.png') }}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>




<section id="families" class="job">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <h2>Choose a plan that suits for<br> your business</h2>
        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="billing-toggle">
                    <span class="label-text" id="annually-label">Annually</span>

                    <label class="switch">
                        <input type="checkbox" id="billing-toggle">
                        <span class="slider"></span>
                    </label>

                    <span class="label-text active" id="monthly-label">Monthly</span>
                </div>

                <!-- Content -->
                <div class="mt-5">
                    <div id="monthly" class="pricing-content active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Monthly</h4>
                                    <h1>$38.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class="Bttn ">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Lowest up front
                                                payment-</strong>Perfect for
                                            short term solutions
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Quartely</h4>
                                    <h1>$24.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class=" more">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Save 36% VS
                                                Monthly-</strong>ongoing access with lower commitment than annual
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Idea for planning
                                                ahead-</strong>Summer break, back to school and other seasonal needs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Annual</h4>
                                    <h1>$12.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class="Bttn ">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Save upto 65% vs
                                                monthly-</strong>lowest price
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Ideas for multiple
                                                need-</strong>when the whole household has a care schedule, annual is
                                            here
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Stay Covered-</strong>Because we
                                            know care is rarely a one time arrangement
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="annually" class="pricing-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Monthly</h4>
                                    <h1>$0.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class="Bttn ">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Lowest up front
                                                payment-</strong>Perfect for
                                            short term solutions
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Quartely</h4>
                                    <h1>$2.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class=" more">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Save 36% VS
                                                Monthly-</strong>ongoing access with lower commitment than annual
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Idea for planning
                                                ahead-</strong>Summer break, back to school and other seasonal needs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="pricing">
                                    <h4>Premium Annual</h4>
                                    <h1>$1.95</h1>
                                    <p>Per month, billed anually</p>
                                    <button href="#" class="Bttn ">Purchase Now</button>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Save upto 65% vs
                                                monthly-</strong>lowest price
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Ideas for multiple
                                                need-</strong>when the whole household has a care schedule, annual is
                                            here
                                        </li>

                                        <li>
                                            <i class="fa-solid fa-check"></i> <strong>Stay Covered-</strong>Because we
                                            know care is rarely a one time arrangement
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>





<section id="carousels" class="make">
    <div class="container">
        <div class="row  justify-content-space-between align-items-center">

            <div class="col-md-7">
                <div class="just">
                    <h2>Get started with Care</h2>
                    <p>Get started enrolling now by following these steps: </p>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>1.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Tell us what you’re looking for</h3>
                                    <p>Let us know who you are, where you live, and what kinds of jobs you want</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>2.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Submit your background check</h3>
                                    <p>Provide details to complete your required background check  </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>3.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Build your profile</h3>
                                    <p>Make a compelling profile by adding a photo, service details, bio, and
                                        availability info</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="icons-detail">
                                <div class="icon">
                                    <h1>4.</h1>
                                </div>
                                <div class="iconDetail">
                                    <h3>Start applying for jobs & getting requests</h3>
                                    <p>Once you’ve submitted your profile, you can start applying to jobs and receiving
                                        booking requests!</p>
                                </div>
                            </div>
                        </div>


                        <a href="#" class="Bttn app">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="img">
                    <img src="{{ asset('/assests/images/phone.png') }}" alt="store" />
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>












@include('footer')























<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.mySwiper', {
    slidesPerView: 3,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});
</script>
