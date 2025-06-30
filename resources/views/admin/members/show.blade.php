<x-master title="Member Details" header="admin.layouts.header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Member Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Name: {{ $member->name }}</h5>
                                <p>Email: {{ $member->email }}</p>
                                <p>Phone: {{ $member->phone ?? 'N/A' }}</p>
                                <p>Role: {{ $member->role }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Address: {{ $member->address ?? 'N/A' }}</h5>
                                <p>Joined on: {{ $member->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-primary">Edit Member</a>
                        <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $member->id }}">Delete</button>
                        </form>
                        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Back to Members List</a>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $member->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $member->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $member->id }}">Confirm
                                            Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this member?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('admin.members.destroy', $member->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
