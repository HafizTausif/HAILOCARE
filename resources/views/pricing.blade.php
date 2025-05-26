@include('header')


<section id="pricing">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-12">
                <h2>Price Plan</h2>
                <p>Home / Price Plan</p>
            </div>

        </div>



    </div>
    </div>
</section>




<section id="families" class="job mt-5">
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
















@include('footer')