<x-master header="admin.layouts.header" title="Sermons">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title
                            mb-0">Sermons List</h5>
                        <div class="card-tools">
                            <a href="{{ route('admin.sermons.create') }}" class="btn btn-primary">
                                <i class="bx bx-plus"></i> Add sermon
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="sermonsTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Speaker</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sermons as $sermon)
                                    <tr>
                                        <td>{{ $sermon->id }}</td>
                                        <td>{{ $sermon->title }}</td>
                                        <td>{{ $sermon->description }}</td>
                                        <td>{{ $sermon->date->format('Y-m-d') }}</td>
                                        <td>{{ $sermon->speaker }}</td>
                                        <td>
                                            <a href="{{ route('admin.sermons.edit', $sermon->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.sermons.destroy', $sermon->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $sermon->id }}">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.sermons.show', $sermon->id) }}"
                                                class="btn btn-sm btn-info">View</a>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade"
                                                id="deleteModal{{ $sermon->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $sermon->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $sermon->id }}">Confirm
                                                                Deletion</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this sermon?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('admin.sermons.destroy', $sermon->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
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
</x-master>
