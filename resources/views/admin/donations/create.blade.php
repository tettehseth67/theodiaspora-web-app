<x-master header="admin.layouts.header" title="Create Donation">
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="app-ecommerce">
                <!-- Add Member Header -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1">Add a New Donation</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-4">
                        <a href="{{ route('admin.donations.index') }}" class="btn btn-label-secondary">Discard</a>
                        <button type="submit" form="memberForm" class="btn btn-primary">Save Donation</button>
                    </div>
                </div>

                <form id="memberForm" action="{{ route('admin.donations.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Left Column: Member Information -->
                        <div class="col-12 col-lg-7">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Donna Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="donation-name" name="name"
                                            value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Donor name" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Donor email" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone (Optional)</label>
                                        <input type="text" id="phone" name="phone"
                                            value="{{ old('phone') }}"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Donor phone">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="donation-date" class="form-label">Donation Date</label>
                                        <input type="date" id="donation-date" name="donation_date"
                                            value="{{ old('donation_date') }}"
                                            class="form-control @error('donation_date') is-invalid @enderror"
                                            placeholder="Donation date" required>
                                        @error('donation_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /Left Column -->
                        </div>
                        <!-- Right Column: Status & Meta -->
                        <div class="col-12 col-lg-5">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Options</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" id="amount" name="amount"
                                            value="{{ old('amount') }}"
                                            class="form-control @error('amount') is-invalid @enderror"
                                            placeholder="Donation amount" required>
                                        @error('amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="donation-currency" class="form-label">Currency</label>
                                        <select id="donation-currency" name="currency"
                                            class="form-select @error('currency') is-invalid @enderror" required>
                                            <option value="">Select Currency</option>
                                            <option value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD</option>
                                            <option value="EUR" {{ old('currency') == 'EUR' ? 'selected' : '' }}>EUR</option>
                                            <!-- Add more currencies as needed -->
                                        </select>
                                        @error('currency')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="donation-status" class="form-label">Status</label>
                                        <select id="donation-status" name="status"
                                            class="form-select @error('status') is-invalid @enderror" required>
                                            <option value="">Select Status</option>
                                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <!-- Add more statuses as needed -->
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="donation-message" class="form-label">Message (Optional)</label>
                                        <textarea id="donation-message" name="message"
                                            class="form-control @error('message') is-invalid @enderror"
                                            placeholder="Optional message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Right Column -->
                </form>
            </div>
        </div>
    </div>
</x-master>
