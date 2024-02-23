<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Fullname: {{ $u->fullname }}</li>
        <li class="list-group-item">Gender: {{ $u->gender === 'M' ? 'Male' : 'Female' }}</li>
        <li class="list-group-item">Phone: {{ $u->phone }}</li>
        <li class="list-group-item">Username: {{ $u->username }}</li>
        <li class="list-group-item">Email: {{ $u->email }}</li>
    </ul>
</div>
<span class="d-inline-block mt-4"><a href="{{ route('profile') . '?edit=1' }}">Edit profile</a></span>
<span class="d-inline-block mt-4"><a href="{{ route('profile') . '?change_password=1' }}">Change Password</a></span>
