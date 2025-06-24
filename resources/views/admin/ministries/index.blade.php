<x-master header="admin.layouts.header" title="Ministries">

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">
                <h1>Ministries</h1>
                <a href="{{ route('admin.ministries.create') }}" class="btn btn-primary mb-3">Add New Ministry</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if ($ministries->isEmpty())
                    <p>No ministries found.</p>
                @else
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Leader</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ministries as $ministry)
                                <tr>
                                    <td>{{ $ministry->name }}</td>
                                    <td>{{ $ministry->description }}</td>
                                    <td>{{ $ministry->leader ?? 'N/A' }}</td>
                                    <td>
                                        @if ($ministry->image)
                                        <img
                                        src="{{ asset('storage/'.$ministry->image) }}"
                                        class="img-thumbnail"
                                        style="width: 40px; height: 40px; object-fit: cover;"
                                        alt="{{ $ministry->name }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.ministries.edit', $ministry->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.ministries.destroy', $ministry->id) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $ministry->id }}">
                                                Delete
                                            </button>
                                        </form>
                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteModal{{ $ministry->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $ministry->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="deleteModalLabel{{ $ministry->id }}">Confirm
                                                            Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this ministry?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel
                                                        </button>
                                                        <form
                                                            action="{{ route('admin.ministries.destroy', $ministry) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                Delete Ministry
                                                            </button>
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

                    {{ $ministries->links() }}
                @endif
            </div>
        </div>
    </div>
</x-master>
