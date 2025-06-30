<x-master header="admin.layouts.header" title="Events">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Events List</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
                                <i class="bx bx-plus"></i> Add Event
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-striped table-bordered" id="eventsTable">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>
                                            @if ($event->image)
                                                <img src="{{ asset('storage/' . $event->image) }}" alt="Event"
                                                    class="img-thumbnail" style="width: 100px; height: auto;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $event->date ? $event->date->format('Y-m-d') : 'N/A' }}</td>
                                        <td>{{ $event->time ? $event->time->format('H:i') : 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('admin.events.edit', $event->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.events.destroy', $event->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $event->id }}">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.events.show', $event->id) }}"
                                                class="btn btn-sm btn-info">View</a>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal{{ $event->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $event->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $event->id }}">Confirm
                                                                Deletion</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this event?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Delete
                                                                Event</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
