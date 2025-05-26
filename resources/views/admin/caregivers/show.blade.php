@extends('admin.layouts.app')

@section('title', 'View Caregiver')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Caregiver Details</h4>
                <a href="{{ route('admin.caregivers.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        @if($caregiver->profile_picture)
                        <img src="{{ asset('storage/' . $caregiver->profile_picture) }}" class="img-fluid rounded-circle mb-3" width="200" alt="Profile Picture">
                        @else
                        <img src="{{ asset('admin-assets/images/default-profile.png') }}" class="img-fluid rounded-circle mb-3" width="200" alt="Profile Picture">
                        @endif
                        <h3>{{ $caregiver->user->name }}</h3>
                        <p class="text-muted">{{ $caregiver->user->email }}</p>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5>Basic Information</h5>
                                    <hr>
                                    <p><strong>Phone:</strong> {{ $caregiver->user->phone }}</p>
<p><strong>Date of Birth:</strong> 
    @if($caregiver->user->date_of_birth)
        {{ \Carbon\Carbon::parse($caregiver->user->date_of_birth)->format('m/d/Y') }}
    @else
        N/A
    @endif
</p>                                    <p><strong>Gender:</strong> {{ ucfirst($caregiver->user->gender) }}</p>
                                    <p><strong>Social Security:</strong> {{ $caregiver->social_security ?? 'N/A' }}</p>
                                    <p><strong>Home Care Aid #:</strong> {{ $caregiver->home_care_aid_number ?? 'N/A' }}</p>
                                </div>
                                
                                <div class="mb-4">
                                    <h5>Vehicle Information</h5>
                                    <hr>
                                    <p><strong>Car Brand:</strong> {{ $caregiver->car_brand ?? 'N/A' }}</p>
                                    <p><strong>Car Model:</strong> {{ $caregiver->car_model ?? 'N/A' }}</p>
                                    <p><strong>License Plate:</strong> {{ $caregiver->car_plate_number ?? 'N/A' }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5>Documents</h5>
                                    <hr>
                                    @if($caregiver->driver_license_front)
                                    <p>
                                        <strong>Driver License (Front):</strong><br>
                                        <a href="{{ asset('storage/' . $caregiver->driver_license_front) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $caregiver->driver_license_front) }}" class="img-thumbnail" width="150">
                                        </a>
                                    </p>
                                    @endif
                                    
                                    @if($caregiver->driver_license_back)
                                    <p>
                                        <strong>Driver License (Back):</strong><br>
                                        <a href="{{ asset('storage/' . $caregiver->driver_license_back) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $caregiver->driver_license_back) }}" class="img-thumbnail" width="150">
                                        </a>
                                    </p>
                                    @endif
                                </div>
                                
                                <div class="mb-4">
                                    <h5>Additional Information</h5>
                                    <hr>
                                    <p><strong>Certifications:</strong></p>
                                    <ul>
                                        @if($caregiver->certifications)
                                            @foreach($caregiver->certifications as $certification)
                                                <li>{{ $certification }}</li>
                                            @endforeach
                                        @else
                                            <li>No certifications listed</li>
                                        @endif
                                    </ul>
                                    
                                    <p><strong>Languages Spoken:</strong></p>
                                    <ul>
                                        @if($caregiver->languages_spoken)
                                            @foreach($caregiver->languages_spoken as $language)
                                                <li>{{ $language }}</li>
                                            @endforeach
                                        @else
                                            <li>No languages listed</li>
                                        @endif
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
@endsection