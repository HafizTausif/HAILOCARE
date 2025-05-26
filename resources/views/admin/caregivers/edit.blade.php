@extends('admin.layouts.app')

@section('title', 'Edit Caregiver')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Caregiver</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.caregivers.update', $caregiver->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Basic Information</h5>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $caregiver->user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $caregiver->user->email }}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $caregiver->user->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $caregiver->user->date_of_birth->format('Y-m-d') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male" {{ $caregiver->user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $caregiver->user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ $caregiver->user->gender == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password (leave blank to keep current)</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Caregiver Details</h5>
                            <div class="form-group">
                                <label>Profile Picture</label>
                                @if($caregiver->profile_picture)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $caregiver->profile_picture) }}" width="100" class="img-thumbnail">
                                </div>
                                @endif
                                <input type="file" class="form-control" name="profile_picture">
                            </div>
                            <div class="form-group">
                                <label>Social Security Number</label>
                                <input type="text" class="form-control" name="social_security" value="{{ $caregiver->social_security }}">
                            </div>
                            <div class="form-group">
                                <label>Driver License (Front)</label>
                                @if($caregiver->driver_license_front)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $caregiver->driver_license_front) }}" width="150" class="img-thumbnail">
                                </div>
                                @endif
                                <input type="file" class="form-control" name="driver_license_front">
                            </div>
                            <div class="form-group">
                                <label>Driver License (Back)</label>
                                @if($caregiver->driver_license_back)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $caregiver->driver_license_back) }}" width="150" class="img-thumbnail">
                                </div>
                                @endif
                                <input type="file" class="form-control" name="driver_license_back">
                            </div>
                            <div class="form-group">
                                <label>Home Care Aid Number</label>
                                <input type="text" class="form-control" name="home_care_aid_number" value="{{ $caregiver->home_care_aid_number }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Vehicle Information</h5>
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" class="form-control" name="car_brand" value="{{ $caregiver->car_brand }}">
                            </div>
                            <div class="form-group">
                                <label>Car Model</label>
                                <input type="text" class="form-control" name="car_model" value="{{ $caregiver->car_model }}">
                            </div>
                            <div class="form-group">
                                <label>License Plate Number</label>
                                <input type="text" class="form-control" name="car_plate_number" value="{{ $caregiver->car_plate_number }}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Additional Information</h5>
                           <div class="form-group">
    <label>Certifications</label>
    <div class="certification-container">
        @if(old('certifications', $caregiver->certifications ?? []))
            @foreach(old('certifications', $caregiver->certifications ?? []) as $index => $certification)
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="certifications[]" 
                           value="{{ $certification }}" placeholder="Certification">
                    @if($index > 0)
                        <button type="button" class="btn btn-danger remove-field">-</button>
                    @else
                        <button type="button" class="btn btn-success add-certification">+</button>
                    @endif
                </div>
            @endforeach
        @else
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="certifications[]" placeholder="Certification">
                <button type="button" class="btn btn-success add-certification">+</button>
            </div>
        @endif
    </div>
</div>

<!-- Languages Spoken Section -->
<div class="form-group">
    <label>Languages Spoken</label>
    <div class="language-container">
        @if(old('languages_spoken', $caregiver->languages_spoken ?? []))
            @foreach(old('languages_spoken', $caregiver->languages_spoken ?? []) as $index => $language)
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="languages_spoken[]" 
                           value="{{ $language }}" placeholder="Language">
                    @if($index > 0)
                        <button type="button" class="btn btn-danger remove-field">-</button>
                    @else
                        <button type="button" class="btn btn-success add-language">+</button>
                    @endif
                </div>
            @endforeach
        @else
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="languages_spoken[]" placeholder="Language">
                <button type="button" class="btn btn-success add-language">+</button>
            </div>
        @endif
    </div>
</div>

<!-- JavaScript for Dynamic Fields -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add certification field
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-certification')) {
            const container = e.target.closest('.certification-container');
            const newField = document.createElement('div');
            newField.className = 'input-group mb-2';
            newField.innerHTML = `
                <input type="text" class="form-control" name="certifications[]" placeholder="Certification">
                <button type="button" class="btn btn-danger remove-field">-</button>
            `;
            container.appendChild(newField);
        }
    });

    // Add language field
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-language')) {
            const container = e.target.closest('.language-container');
            const newField = document.createElement('div');
            newField.className = 'input-group mb-2';
            newField.innerHTML = `
                <input type="text" class="form-control" name="languages_spoken[]" placeholder="Language">
                <button type="button" class="btn btn-danger remove-field">-</button>
            `;
            container.appendChild(newField);
        }
    });

    // Remove field
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-field')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>
                        </div>
                    </div>
                    
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Update Caregiver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection