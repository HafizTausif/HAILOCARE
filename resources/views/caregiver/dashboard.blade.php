@include('header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Caregiver Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as a Caregiver!
                    
                    <!-- Add caregiver-specific content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection