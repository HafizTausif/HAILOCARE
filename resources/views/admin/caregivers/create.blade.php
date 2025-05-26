@extends('admin.layouts.app')

@section('title', 'Create Caregiver')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Caregiver</h4>
            </div>
            <div class="card-body">
                @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form action="{{ route('admin.caregivers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Basic Information</h5>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Caregiver Details</h5>
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture">
                            </div>
                            <div class="form-group">
                                <label>Social Security Number</label>
                                <input type="text" class="form-control" name="social_security">
                            </div>
                            <div class="form-group">
                                <label>Driver License (Front)</label>
                                <input type="file" class="form-control" name="driver_license_front">
                            </div>
                            <div class="form-group">
                                <label>Driver License (Back)</label>
                                <input type="file" class="form-control" name="driver_license_back">
                            </div>
                            <div class="form-group">
                                <label>Home Care Aid Number</label>
                                <input type="text" class="form-control" name="home_care_aid_number">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Vehicle Information</h5>
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" class="form-control" name="car_brand">
                            </div>
                            <div class="form-group">
                                <label>Car Model</label>
                                <input type="text" class="form-control" name="car_model">
                            </div>
                            <div class="form-group">
                                <label>License Plate Number</label>
                                <input type="text" class="form-control" name="car_plate_number">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Additional Information</h5>
                          <div class="form-group">
    <label>Certifications</label>
    <div class="certification-container">
        <div class="input-group mb-2">
            <input type="text" class="form-control" name="certifications[]" placeholder="Certification">
            <button type="button" class="btn btn-success add-certification">+</button>
        </div>
    </div>
</div>

                          <div class="form-group">
    <label>Languages Spoken</label>
    <div class="language-container">
        <div class="input-group mb-2">
            <input type="text" class="form-control" name="languages_spoken[]" placeholder="Language">
            <button type="button" class="btn btn-success add-language">+</button>
        </div>
    </div>
</div>
                        </div>
                    </div>
                    
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Create Caregiver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add certification field
    document.querySelector('.add-certification').addEventListener('click', function() {
        const container = document.querySelector('.certification-container');
        const newField = document.createElement('div');
        newField.className = 'input-group mb-2';
        newField.innerHTML = `
            <input type="text" class="form-control" name="certifications[]" placeholder="Certification">
            <button type="button" class="btn btn-danger remove-field">-</button>
        `;
        container.appendChild(newField);
    });

    // Add language field
    document.querySelector('.add-language').addEventListener('click', function() {
        const container = document.querySelector('.language-container');
        const newField = document.createElement('div');
        newField.className = 'input-group mb-2';
        newField.innerHTML = `
            <input type="text" class="form-control" name="languages_spoken[]" placeholder="Language">
            <button type="button" class="btn btn-danger remove-field">-</button>
        `;
        container.appendChild(newField);
    });

    // Remove field
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-field')) {
            e.target.parentElement.remove();
        }
    });
});
</script>
@endsection