@extends('admin.layouts.app')

@section('title', 'Caregivers')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Caregivers</h4>
                <a href="{{ route('admin.caregivers.create') }}" class="btn btn-primary">Add New Caregiver</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Home Care Aid #</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($caregivers as $caregiver)
                            <tr>
                                <td>{{ $caregiver->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($caregiver->profile_picture)
                                        <img src="{{ asset('storage/' . $caregiver->profile_picture) }}" class="rounded-lg me-2" width="40" alt="">
                                        @else
                                        <img src="{{ asset('admin-assets/images/default-profile.png') }}" class="rounded-lg me-2" width="40" alt="">
                                        @endif
                                        <span>{{ $caregiver->user->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $caregiver->user->email }}</td>
                                <td>{{ $caregiver->user->phone }}</td>
                                <td>{{ $caregiver->home_care_aid_number ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.caregivers.show', $caregiver->id) }}" class="btn btn-primary shadow btn-xs sharp me-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.caregivers.edit', $caregiver->id) }}" class="btn btn-secondary shadow btn-xs sharp me-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.caregivers.destroy', $caregiver->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $caregivers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection