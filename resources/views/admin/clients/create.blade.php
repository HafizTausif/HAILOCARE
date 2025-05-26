@extends('admin.layouts.app')

@section('title', 'Create Client')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Client</h4>
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
                <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Basic Information</h5>
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth *</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Gender *</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password *</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>Client Details</h5>
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture">
                            </div>
                            <div class="form-group">
                                <label>Relationship to Profile</label>
                                <input type="text" class="form-control" name="relationship_to_profile" value="{{ old('relationship_to_profile') }}">
                            </div>
                            <div class="form-group">
                                <label>Health Conditions (comma separated)</label>
                                <input type="text" class="form-control" name="health_conditions_input" 
                                       value="{{ old('health_conditions_input') }}" placeholder="Diabetes, Hypertension, etc.">
                                <input type="hidden" name="health_conditions" id="health_conditions">
                            </div>
                            <div class="form-group">
                                <label>Special Requirements</label>
                                <textarea class="form-control" name="special_requirements" rows="3">{{ old('special_requirements') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Create Client</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Convert comma-separated health conditions to array
    const healthInput = document.querySelector('input[name="health_conditions_input"]');
    const healthHidden = document.getElementById('health_conditions');
    
    healthInput.addEventListener('change', function() {
        const conditions = this.value.split(',').map(item => item.trim()).filter(item => item);
        healthHidden.value = JSON.stringify(conditions);
    });
});
</script>
@endsection