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
                            <button type="submit" class="btn btn-danger">Delete Member</button>
                        </form>
                        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Back to Members List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
