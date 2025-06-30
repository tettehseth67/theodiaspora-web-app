<x-master header="admin.layouts.header" title="Edit Donation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Edit Donation</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.donations.update', $donation) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="first_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $donation->first_name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $donation->email) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $donation->phone) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount', $donation->amount) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message">{{ old('message', $donation->message) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="donation_date" class="form-label">Donation Date</label>
                                <input type="date" class="form-control" id="donation_date" name="donation_date" value="{{ old('donation_date', $donation->donation_date->format('Y-m-d')) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="pending" {{ old('status', $donation->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ old('status', $donation->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="failed" {{ old('status', $donation->status) == 'failed' ? 'selected' : '' }}>Failed</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Donation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
