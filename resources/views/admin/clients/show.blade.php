@extends('admin.layouts.app')

@section('title', 'Client Details')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Client Details</h4>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        @if($client->user->profile_picture)
                        <img src="{{ asset('storage/'.$client->user->profile_picture) }}" class="img-fluid rounded-circle mb-3" width="200" alt="Profile Picture">
                        @else
                        <img src="{{ asset('admin-assets/images/default-profile.png') }}" class="img-fluid rounded-circle mb-3" width="200" alt="Profile Picture">
                        @endif
                        <h3>{{ $client->user->name }}</h3>
                        <p class="text-muted">{{ $client->user->email }}</p>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5>Basic Information</h5>
                                    <hr>
                                    <p><strong>Phone:</strong> {{ $client->user->phone }}</p>
                                    <p><strong>Date of Birth:</strong> {{ optional($client->user->date_of_birth)->format('m/d/Y') ?? 'N/A' }}</p>
                                    <p><strong>Gender:</strong> {{ ucfirst($client->user->gender) }}</p>
                                    <p><strong>Relationship:</strong> {{ $client->relationship_to_profile ?? 'N/A' }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5>Health Information</h5>
                                    <hr>
                                    <p><strong>Health Conditions:</strong></p>
                                    <ul>
                                        @if($client->health_conditions)
                                            @foreach($client->health_conditions as $condition)
                                                <li>{{ $condition }}</li>
                                            @endforeach
                                        @else
                                            <li>None listed</li>
                                        @endif
                                    </ul>
                                    
                                    <p><strong>Special Requirements:</strong></p>
                                    <p>{{ $client->special_requirements ?? 'None' }}</p>
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