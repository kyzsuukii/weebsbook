<form action="{{ route("profile.update") }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="fullname" class="form-label">Fullname</label>
        <input type="text" name="fullname" id="fullname" value="{{ $u->fullname }}" class="form-control" required />
    </div>
    <p>Gender</p>
    <div class="form-check form-check-inline mb-4">
        <input class="form-check-input" type="radio" name="gender" id="male" value="M"
            {!! $u->gender === 'M' ? 'checked' : '' !!} required />
        <label class="form-check-label" for="male">
            Male
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="female" value="F"
            {!! $u->gender === 'F' ? 'checked' : '' !!} required />
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>
    <div class="mb-4">
        <label for="phone" class="form-label">Phone number</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $u->phone }}" required />
    </div>
    <div class="mb-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ $u->username }}"
            required />
    </div>
    <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $u->email }}" required />
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Enter your current password</label>
        <input type="password" name="password" id="password" class="form-control" required />
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <span class="d-inline-block mt-4"><a href="{{ route('profile') }}">Cancel</a></span>
</form>
