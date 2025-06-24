<x-master header="admin.layouts.header" title="Donations">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Donations</h3>
                        <div class="mb-3">
                            <a href="{{ route('admin.donations.create') }}" class="btn btn-primary">Add New Donation</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <th>Message</th>
                                            <th>Donation Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donations as $donation)
                                            <tr>
                                                <td>{{ $donation->name }}</td>
                                                <td>{{ $donation->email }}</td>
                                                <td>{{ $donation->phone }}</td>
                                                <td>{{ $donation->amount }}</td>
                                                <td>{{ $donation->message }}</td>
                                                <td>{{ $donation->donation_date->format('Y-m-d') }}</td>
                                                <td>{{ $donation->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.donations.edit', $donation->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="{{ route('admin.donations.show', $donation->id) }}"
                                                        class="btn btn-info btn-sm">View</a>
                                                    <form action="{{ route('admin.donations.destroy', $donation->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $donation->id }}">Delete</button>
                                                    </form>

                                                    <!-- Delete Confirmation Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $donation->id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="deleteModalLabel{{ $donation->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="deleteModalLabel{{ $donation->id }}">Confirm
                                                                        Deletion</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this donation?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <form
                                                                        action="{{ route('admin.donations.destroy', $donation->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
