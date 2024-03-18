<div class="container my-4">
    <h2>Edit Profile</h2>


    <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4 position-relative">
                <label for="upload-photo" class="position-relative">
                    <img id="preview-image" class="rounded-circle mx-auto d-block object-fit-cover" width="200px" height="200px"
                        src="{{ asset('assets/img/' . $u->photo()) }}" alt="Photo profile" />
                    <input type="file" id="upload-photo" class="d-none" name="photo" accept="image/*"
                        onchange="previewImage(event)" />
                    <div id="icon-overlay" class="position-absolute bottom-0 end-0 translate-middle"
                        style="width: 40px; height: 40px;">
                        <div id="icon-container"
                            class="bg-dark rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 100%; height: 100%;">
                            <i id="icon" class="fas fa-camera text-white"></i>
                        </div>
                    </div>
                </label>
            </div>
            <div class="mb-4">
                <label for="fullname" class="form-label">Fullname</label>
                <div class="input-group">
                    <input type="text" name="fullname" id="fullname" value="{{ $u->fullname }}"
                        class="form-control" required placeholder="Enter your fullname" />
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" name="gender" id="gender" required>
                    <option value="">Select gender</option>
                    <option value="M" {{ $u->gender === 'M' ? 'selected' : '' }}>Male</option>
                    <option value="F" {{ $u->gender === 'F' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="phone" class="form-label">Phone number</label>
                <div class="input-group">
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $u->phone }}"
                        required placeholder="Enter your phone number" />
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <input type="text" name="username" id="username" class="form-control"
                        value="{{ $u->username }}" required placeholder="Enter your username" />
                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" value="{{ $u->email }}"
                        required placeholder="Enter your email" />
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Enter your current password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" required
                        placeholder="Enter your current password" />
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary mr-2">Save</button>
                <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
</div>
</div>
