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
<form method="POST" action="{{ route('caregiver.register') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="first_name" required placeholder="First Name">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="last_name" required placeholder="Last Name">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="date" class="form-control" name="date_of_birth" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <select name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="tel" class="form-control" name="phone" required placeholder="Phone Number">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="email" class="form-control" name="email" required placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="social_security" placeholder="Social Security">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="file" class="form-control" name="driver_license_front" accept="image/*">
                        <small class="text-muted">Driver's License Front</small>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="car_brand" placeholder="Car Brand">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="car_model" placeholder="Car Model">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="car_plate_number" placeholder="License Plate Number">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="home_care_aid_number" placeholder="Home Care Aid Number">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="file" class="form-control" name="certifications[]" multiple accept="image/*,application/pdf">
                        <small class="text-muted">Certifications (multiple allowed)</small>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="file" class="form-control" name="profile_picture" accept="image/*">
                        <small class="text-muted">Profile Picture</small>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="terms" id="acceptTerms" required>
                <label class="form-check-label" for="acceptTerms">
                    I agree to the terms and conditions
                </label>
            </div>

            <button type="submit" class="Bttn more">Sign Up</button>
        </form>
    </div>
</div>

      <div id="client" class="role-content">
    <div class="details forms">
<form method="POST" action="{{ route('client.register') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="name" required placeholder="First Name">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="last_name" required placeholder="Last Name">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="date" class="form-control" name="date_of_birth" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <select name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="tel" class="form-control" name="phone" required placeholder="Phone Number">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="email" class="form-control" name="email" required placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="relationship_to_profile" placeholder="Relationship to Profile">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" class="form-control" name="health_conditions[]" placeholder="Health Conditions (comma separated)">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" name="special_requirements" placeholder="Special Requirements"></textarea>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="file" class="form-control" name="profile_picture" accept="image/*">
                        <small class="text-muted">Profile Picture</small>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="terms" id="acceptTerms" required>
                <label class="form-check-label" for="acceptTerms">
                    I agree to the terms and conditions
                </label>
            </div>

            <button type="submit" class="Bttn more">Sign Up</button>
        </form>
    </div>
</div>

            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle health conditions input for client form
    const healthConditionsInput = document.querySelector('input[name="health_conditions[]"]');
    if (healthConditionsInput) {
        healthConditionsInput.addEventListener('change', function() {
            const conditions = this.value.split(',').map(item => item.trim()).filter(item => item);
            this.value = JSON.stringify(conditions);
        });
    }

    // Form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const checkboxes = this.querySelectorAll('input[type="checkbox"][required]');
            let allChecked = true;
            
            checkboxes.forEach(checkbox => {
                if (!checkbox.checked) allChecked = false;
            });

            if (!allChecked) {
                e.preventDefault();
                alert('Please accept the terms and conditions');
            }
        });
    });
});

// Role switching function (keep your existing one)
function switchRole(role, element) {
    // Your existing role switching code
}
</script>























@include('footer')