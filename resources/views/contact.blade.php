@include('header')






<section id="contact">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-12">
                <h2>Contact Us</h2>
                <p>Home / Contact Us</p>
            </div>

        </div>



    </div>
    </div>
</section>


<div id="contacts">
    <div class="container">
        <div class="row justify-content-space-between align-items-center">
            <div class="col-md-4">
                <div class="cont-det">
                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                    <h2>Our Office</h2>
                    <p>47 W 13th St, New York, NY 10011, USA</p>
                    <a href="#">View On Maps</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cont-det">
                    <a href="mailto:info@hailocare.com"><i class="fa-solid fa-envelope"></i></a>
                    <h2>Email Us</h2>
                    <p>Please be patient, we’re usually replying within 24 hours</p>
                    <a href="mailto:info@hailocare.com">info@hailocare.com</a>
                </div>
            </div>


            <div class="col-md-4">
                <div class="cont-det">
                    <a href="tel:+1543435632"><i class="fa-solid fa-phone-volume"></i></a>
                    <h2>Call Us</h2>
                    <p>Talk to us and see how we can work this together</p>
                    <a href="tel:+1543435632">+ 1 543 435 632</a>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="messages">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="details">
                    <h2>Send us a message</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="username" class="form-label">First Name*</label>
                                    <input type="text" class="form-control" id="username" required placeholder="John">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="username" class="form-label">Last Name*</label>
                                    <input type="text" class="form-control" id="username" required placeholder="Doe">
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="phone" class="form-label">Phone Number*</label>
                                    <input type="tel" class="form-control" id="phone" required required
                                        placeholder="+1 (234) 567 789">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="email" required
                                        placeholder="testingemail@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Message*</label>
                            <textarea class="form-control" id="additionalInfo" rows="4"
                                placeholder="Hello There!"></textarea>
                        </div>

                        <button href="#" class="Bttn more">Submit Form</button>
                    </form>

                </div>
            </div>

            <div class="col-md-6">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d195601.04562769792!2d-75.11803295!3d40.002497999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1401521095201"
                        width="100%" height="100%" frameborder="0" style="border:0"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="carousels" class="accord mt-5">
    <div class="container">
        <h2>Lorem Ipsum is simply dummy<br> text of the printing</h2>
        <p>lorem ipsum is simply dummy text.</p>
        <div class="row  justify-content-space-between align-items-center mt-3">
            <div class="col-md-6">
                <div class="img">
                    <img src="{{ asset('assests/images/contact1.png') }}" alt="store" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long has your company been established?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta rhoncus leo, eget
                                iaculis arcu dapibus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                porttitor, erat mollis, magna augue consectetur lorem
                            </div>
                        </div>
                    </div>

                    <!-- Repeat for each FAQ below -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How much does it cost for one care?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta rhoncus leo, eget
                                iaculis arcu dapibus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                porttitor, erat mollis, magna augue consectetur lorem
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How many people work at your company?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                            <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta rhoncus leo, eget
                                iaculis arcu dapibus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                porttitor, erat mollis, magna augue consectetur lorem
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can other info be added to an invoice?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                            <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta rhoncus leo, eget
                                iaculis arcu dapibus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                porttitor, erat mollis, magna augue consectetur lorem
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How do I contact Hailocare for appointment?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                            <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta rhoncus leo, eget
                                iaculis arcu dapibus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                porttitor, erat mollis, magna augue consectetur lorem
                            </div>
                        </div>
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

                    <img src="{{ asset('assests/images/mobile.png') }}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')