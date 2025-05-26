@include('header')





















<section id="contact">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-12">
                <h2>Login</h2>
                <p>Home / Login</p>
            </div>

        </div>



    </div>
    </div>
</section>



<section id="messages" class="logins">
    <div class="container">
        <div class="row justify-contnt-center align-items-center">
            <div class="col-md-12 justify-contnt-center align-items-center">

                <div class="role-switch">
                    <button class="btn-role active" onclick="switchRole('caregiver', this)">Caregiver</button>
                    <button class="btn-role" onclick="switchRole('client', this)">Client</button>
                    <div class="highlight"></div>
                </div>

                <!-- Tab content sections -->
                <div id="caregiver" class="role-content active">
                    <div class="details forms">
                        <form>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="text" class="form-control" id="username" required
                                            placeholder="John">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control" id="username" required
                                            placeholder="Doe">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="date" class="form-control" id="username" required
                                            placeholder="Date Of Birth">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <select name="cars" id="gender" class="form-control">
                                            <option value="volvo">Gender</option>
                                            <option value="volvo">Man</option>
                                            <option value="saab">Female</option>
                                            <option value="opel">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="tel" class="form-control" id="phone" required required
                                            placeholder="+1 (234) 567 789">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="email" class="form-control" id="email" required
                                            placeholder="testingemail@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="Psswrd" class="form-control" id="phone" required required
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="Psswrd" class="form-control" id="Psswrd" required
                                            placeholder="Conform Password">
                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control" id="phone" required required
                                            placeholder="Social Security">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="file" class="form-control" id="Psswrd" required
                                            placeholder="Drivers License Upload (Front+Back)">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">

                                        <input type="text" class="form-control" id="Brand" required required
                                            placeholder="Brand">
                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <input type="text" class="form-control" id="Model" required
                                            placeholder="Model Car">
                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <input type="text" class="form-control" id="Model" required
                                            placeholder="Model Car">
                                    </div>
                                    <div class="col-md-3 col-sm-6">

                                        <input type="number" class="form-control" id="Model" required
                                            placeholder="Car Plate Number">
                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="number" class="form-control" id="number" required required
                                            placeholder="Home Care Aid Number">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="file" class="form-control" id="Psswrd" required
                                            placeholder="Certifications Upload">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <select name="cars" id="gender" class="form-control">
                                            <option value="volvo">Languages spoken Select</option>
                                            <option value="saab">Lorem, ipsum.</option>
                                            <option value="opel">Lorem, ipsum.</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="file" class="form-control" id="Psswrd" required
                                            placeholder="Profile Picture Upload">
                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms"> Lorem Ipsum is simply dummy text of
                                    the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</a>
                                </label>
                            </div>

                            <button href="#" class="Bttn more">Sign Up</button>
                        </form>

                    </div>
                </div>

                <div id="client" class="role-content">
                    <div class="details forms">
                        <form>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control" id="username" required
                                            placeholder="John">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control" id="username" required
                                            placeholder="Doe">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="date" class="form-control" id="username" required
                                            placeholder="Date Of Birth">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <select name="cars" id="gender" class="form-control">
                                            <option value="volvo">Gender</option>
                                            <option value="volvo">Man</option>
                                            <option value="saab">Female</option>
                                            <option value="opel">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="tel" class="form-control" id="phone" required required
                                            placeholder="+1 (234) 567 789">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="email" class="form-control" id="email" required
                                            placeholder="testingemail@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="Psswrd" class="form-control" id="phone" required required
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <input type="Psswrd" class="form-control" id="Psswrd" required
                                            placeholder="Conform Password">
                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <input type="text" class="form-control" id="phone" required required
                                            placeholder="Phone Number (verification?)">
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control" id="Relationship" required required
                                            placeholder="Relationship to Profile">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <select name="cars" id="gender" class="form-control">
                                            <option value="volvo">Health Conditions</option>
                                            <option value="volvo">Lorem, ipsum dolor.</option>
                                            <option value="saab">Lorem, ipsum dolor.</option>
                                            <option value="opel">Lorem, ipsum dolor.</option>
                                        </select>
                                    </div>

                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <input type="date" class="form-control" id="date" required required
                                            placeholder="Date Of Birth">
                                    </div>

                                </div>
                            </div>




                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</a>
                                </label>
                            </div>

                            <button href="#" class="Bttn more">Sign Up</button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

























@include('footer')