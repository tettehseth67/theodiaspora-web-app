<x-master header="admin.layouts.header" title="Edit Member" active="members">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Member</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="member-name" class="form-label">Name</label>
                                <input type="text" id="member-name"
                                       name="name"
                                       value="{{ old('name', $member->name) }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Full Name" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="member-email" class="form-label">Email</label>
                                <input type="email" id="member-email"
                                       name="email"
                                       value="{{ old('email', $member->email) }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Email Address" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="member-phone" class="form-label">Phone</label>
                                <input type="text" id="member-phone"
                                       name="phone"
                                       value="{{ old('phone', $member->phone) }}"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       placeholder="Phone number">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="member-role" class="form-label">Role</label>
                                <select id="member-role"
                                        name="role"
                                        class="form-select @error('role') is-invalid @enderror"
                                        required>
                                    <option value="" selected>Select a role</option>
                                    <option value="admin" {{ old('role', $member->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="member" {{ old('role', $member->role) == 'member' ? 'selected' : '' }}>Member</option>
                                    <option value="guest" {{ old('role',
 $member->role) == 'guest' ? 'selected' : '' }}>Guest</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Member</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
