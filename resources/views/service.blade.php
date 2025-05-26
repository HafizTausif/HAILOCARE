@include('header')


<section id="service">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-12">
                <h2>Services</h2>
                <p>Home / Services</p>
            </div>

        </div>



    </div>
    </div>
</section>




<section id="families" class="job mt-5 servces">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <h2>Lorem Ipsum is simply dummy<br> text of the printing</h2>
            <p>lorem ipsum is simply dummy text.</p>
        </div>


        <div class="row mt-4">
            <div class="col-md-4">
                <div class="serviceBox">
                    <img src="{{ url('public/assests/images/s1.png') }}" alt="">
                    <h2>Lorem, ipsum.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="Bttn app">Read More <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="serviceBox">
                    <img src="{{ url('public/assests/images/s2.png') }}" alt="">
                    <h2>Skin Care</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="Bttn app">Read More <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="serviceBox">
                    <img src="{{ url('public/assests/images/s3.png') }}" alt="">
                    <h2>Lorem, ipsum.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="Bttn app">Read More <i class="fa-solid fa-plus"></i></a>
                </div>
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

                    <img src="{{ url('public/assests/images/mobile.png') }}" alt="">

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
                    <img src="{{ url('public/assests/images/calinder.png') }}" alt="store" />
                    <h5>Earn your way</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="box">
                    <img src="{{ url('public/assests/images/boost.png') }}" alt="store" />
                    <h5>Boost your earnings</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <img src="{{ url('public/assests/images/email.png') }}" alt="store" />
                    <h5>Build a career</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>

        </div>
    </div>

</section>













@include('footer')