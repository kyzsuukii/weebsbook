<div class="card shadow-sm my-4">
    <div class="card-header bg-danger text-white">
        <h5 class="mb-0">Change Password</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('update_password') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="old_password" class="form-label">Old password</label>
                <input type="password" name="old_password" id="old_password" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New password</label>
                <input type="password" name="new_password" id="new_password" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="new_password2" class="form-label">Confirm new password</label>
                <input type="password" name="new_password2" id="new_password2" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
