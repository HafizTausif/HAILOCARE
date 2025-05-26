@include('header')






<section id="contact">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <h2>Sign In</h2>
                <p>Home / Sign In</p>
            </div>

        </div>
    </div>
    </div>
</section>




<section id="messages" class=" sigin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sign-box">
                <div class="detailss">
                    <h2>Login to the Dashboard</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form>
                        <div class="mb-3 mt-4">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" required placeholder="Username">
                                </div>

                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="username" required placeholder="Enter your Email">
                                </div>
                            </div>
                        </div>

                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label for="username" class="form-label">Passward</label>
                                    <input type="passwrd" class="form-control" id="username" required placeholder="Passward">
                                </div>
                            </div>
                        </div>

                        <button href="#" class="Bttn more">Sign In</button>
                    </form>

                </div>
                </div>
     
            </div>
           
            <!-- <div class="col-md-6">
                <div class="map img">
                    <img src="{{ url('public/assests/images/sigin.jpg') }}" alt="">
                </div>
            </div> -->
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