<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('home') }}" class="btn btn-secondary" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;"><i
                class="fas fa-arrow-left mr-2"></i> Back to Home</a>
        <div>
            <a href="{{ route('profile') . '?edit=1' }}" class="btn btn-primary btn-sm mr-2 py-2">Edit Profile</a>
            <a href="{{ route('profile') . '?change_password=1' }}" class="btn btn-danger btn-sm py-2">Change
                Password</a>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Profile</h5>
        </div>
        <div class="card-body text-center">
            <img class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;"
                src="{{ asset('assets/img/' . $u->photo()) }}" alt="Photo profile">
            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item">Fullname: {{ $u->fullname }}</li>
                <li class="list-group-item">Gender: {{ $u->gender === 'M' ? 'Male' : 'Female' }}</li>
                <li class="list-group-item">Phone: {{ $u->phone }}</li>
                <li class="list-group-item">Username: {{ $u->username }}</li>
                <li class="list-group-item">Email: {{ $u->email }}</li>
            </ul>
        </div>
    </div>
</div>
