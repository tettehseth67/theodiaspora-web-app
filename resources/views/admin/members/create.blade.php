<x-master header="admin.layouts.header" title="Create Member">

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="app-ecommerce">
                <!-- Add Member Header -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1">Add a New Member</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-4">
                        <a href="{{ route('admin.members.index') }}" class="btn btn-label-secondary">Discard</a>
                        <button type="submit" form="memberForm" class="btn btn-primary">Save Member</button>
                    </div>
                </div>

                <form id="memberForm" action="{{ route('admin.members.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Left Column: Member Information -->
                        <div class="col-12 col-lg-8">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Member Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="member-name" class="form-label">Name</label>
                                        <input type="text"
                                               id="member-name"
                                               name="name"
                                               value="{{ old('name') }}"
                                               class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Member name" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="member-email" class="form-label">Email</label>
                                        <input type="email"
                                               id="member-email"
                                               name="email"
                                               value="{{ old('email') }}"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Member email" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="member-phone" class="form-label">Phone (Optional)</label>
                                        <input type="text"
                                               id="member-phone"
                                               name="phone"
                                               value="{{ old('phone') }}"
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
                                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="member" {{ old('role') == 'member' ? 'selected' : '' }}>Member</option>
                                            <option value="guest" {{ old('role') == 'guest' ? 'selected' : '' }}>Guest</option>
                                        </select>
                                        @error('role')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Left Column -->

                        <!-- Right Column: Status & Meta -->
                        <div class="col-12 col-lg-4">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Options</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="member-active" name="active" checked>
                                        <label class="form-check-label" for="member-active">
                                            Active Member
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="member-notes" class="form-label">Notes (Optional)</label>
                                        <textarea id="member-notes"
                                                  name="notes"
                                                  class="form-control"
                                                  rows="4"
                                                  placeholder="Any additional notes...">{{ old('notes') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Right Column -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
