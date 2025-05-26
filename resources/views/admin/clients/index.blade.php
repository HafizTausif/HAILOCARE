@extends('admin.layouts.app')

@section('title', 'Clients')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Clients</h4>
                <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Add New Client</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Relationship</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($client->user->profile_picture)
                                        <img src="{{ asset('storage/'.$client->user->profile_picture) }}" class="rounded-lg me-2" width="40" alt="">
                                        @else
                                        <img src="{{ asset('admin-assets/images/default-profile.png') }}" class="rounded-lg me-2" width="40" alt="">
                                        @endif
                                        <span>{{ $client->user->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $client->user->email }}</td>
                                <td>{{ $client->user->phone }}</td>
                                <td>{{ $client->relationship_to_profile ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.clients.show', $client->id) }}" class="btn btn-primary shadow btn-xs sharp me-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-secondary shadow btn-xs sharp me-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST">
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
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection