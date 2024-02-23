<form action="{{ route("profile.update_password") }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="old_password" class="form-label">Old password</label>
        <input type="password" name="old_password" id="old_password" class="form-control" required />
    </div>
    <div class="mb-4">
        <label for="new_password" class="form-label">New password</label>
        <input type="password" name="new_password" id="new_password" class="form-control" required />
    </div>
    <div class="mb-4">
        <label for="new_password2" class="form-label">New password</label>
        <input type="password" name="new_password2" id="new_password2" class="form-control" required />
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <span class="d-inline-block mt-4"><a href="{{ route('profile') }}">Cancel</a></span>
</form>
