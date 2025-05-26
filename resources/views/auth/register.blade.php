// resources/views/auth/register.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="role-switch mb-4">
                        <button type="button" class="btn btn-role active" data-role="caregiver">Caregiver</button>
                        <button type="button" class="btn btn-role" data-role="user">Client</button>
                    </div>

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="role" id="role" value="caregiver">

                        <!-- Common fields for both roles -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name" placeholder="First Name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name" placeholder="Last Name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required>

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <!-- Caregiver-specific fields -->
                        <div id="caregiver-fields">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="social_security" type="text" class="form-control @error('social_security') is-invalid @enderror" name="social_security" value="{{ old('social_security') }}" placeholder="Social Security">

                                    @error('social_security')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="driver_license" type="file" class="form-control @error('driver_license') is-invalid @enderror" name="driver_license">

                                    @error('driver_license')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input id="car_brand" type="text" class="form-control @error('car_brand') is-invalid @enderror" name="car_brand" value="{{ old('car_brand') }}" placeholder="Car Brand">

                                    @error('car_brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input id="car_model" type="text" class="form-control @error('car_model') is-invalid @enderror" name="car_model" value="{{ old('car_model') }}" placeholder="Car Model">

                                    @error('car_model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input id="car_plate_number" type="text" class="form-control @error('car_plate_number') is-invalid @enderror" name="car_plate_number" value="{{ old('car_plate_number') }}" placeholder="Plate Number">

                                    @error('car_plate_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="home_care_aid_number" type="text" class="form-control @error('home_care_aid_number') is-invalid @enderror" name="home_care_aid_number" value="{{ old('home_care_aid_number') }}" placeholder="Home Care Aid Number">

                                    @error('home_care_aid_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="certifications" type="file" class="form-control @error('certifications') is-invalid @enderror" name="certifications">

                                    @error('certifications')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <select id="languages_spoken" class="form-control @error('languages_spoken') is-invalid @enderror" name="languages_spoken[]" multiple>
                                        <option value="english">English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="french">French</option>
                                        <!-- Add more languages as needed -->
                                    </select>

                                    @error('languages_spoken')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture">

                                    @error('profile_picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Client-specific fields -->
                        <div id="client-fields" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="relationship_to_profile" type="text" class="form-control @error('relationship_to_profile') is-invalid @enderror" name="relationship_to_profile" value="{{ old('relationship_to_profile') }}" placeholder="Relationship to Profile">

                                    @error('relationship_to_profile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select id="health_conditions" class="form-control @error('health_conditions') is-invalid @enderror" name="health_conditions[]" multiple>
                                        <option value="diabetes">Diabetes</option>
                                        <option value="hypertension">Hypertension</option>
                                        <option value="arthritis">Arthritis</option>
                                        <!-- Add more conditions as needed -->
                                    </select>

                                    @error('health_conditions')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>

                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#">Terms and Conditions</a>
                                    </label>

                                    @error('terms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const roleButtons = document.querySelectorAll('.btn-role');
        const roleInput = document.getElementById('role');
        const caregiverFields = document.getElementById('caregiver-fields');
        const clientFields = document.getElementById('client-fields');

        roleButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                roleButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Update hidden input value
                const role = this.getAttribute('data-role');
                roleInput.value = role;
                
                // Show/hide fields based on role
                if (role === 'caregiver') {
                    caregiverFields.style.display = 'block';
                    clientFields.style.display = 'none';
                } else {
                    caregiverFields.style.display = 'none';
                    clientFields.style.display = 'block';
                }
            });
        });
    });
</script>
@endsection