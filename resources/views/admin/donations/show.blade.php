<x-master header="admin.layouts.header" title="Donation Details">
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="app-ecommerce">
                <!-- Donation Details Header -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1">Donation Details</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-4">
                        <a href="{{ route('admin.donations.index') }}" class="btn btn-label-secondary">Back to Donations</a>
                    </div>
                </div>

                <!-- Donation Details Card -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title
                            mb-0">Donation #{{ $donation->id }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> {{ $donation->first_name }}</p>
                                <p><strong>Email:</strong> {{ $donation->email }}</p>
                                <p><strong>Phone:</strong> {{ $donation->phone }}</p>
                                <p><strong>Amount:</strong> {{ $donation->amount }}</p>
                                <p><strong>Message:</strong> {{ $donation->message }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Donation Date:</strong> {{ $donation->donation_date->format('Y-m-d') }}</p>
                                <p><strong>Status:</strong> {{  $donation->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
