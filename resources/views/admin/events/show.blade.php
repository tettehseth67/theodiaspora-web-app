<x-master header="admin.layouts.header" title="Event Details">

    <div class="container-fluid py-5 px-5">
        <div class="row">
            {{-- Make two columns --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Event Details</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">
                                <i class="bx bx-edit"></i> Edit Event
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ $event->description }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                        <p class="card-text"><strong>Date:</strong>
                            {{ $event->date ? $event->date->format('Y-m-d') : 'N/A' }}</p>
                        <p class="card-text"><strong>Time:</strong>
                            {{ $event->time ? $event->time->format('H:i') : 'N/A' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Actions</h3>
                    </div>
                    <div class="card-body d-flex justify-content-start align-items-center gap-2">
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $event->id }}">
                                <i class="bx bx-trash"></i> Delete Event
                            </button>
                        </form>
                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $event->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $event->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $event->id }}">Confirm
                                            Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this event?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-danger">Delete Event</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                            <i class="bx bx-arrow-back"></i> Back to Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Event Details</h3>
            <div class="card-tools">
                <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                    <i class="bx bx-arrow-back"></i> Back to Events
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <p class="form-control-plaintext">{{ $event->title }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <p class="form-control-plaintext">{{ $event->description }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Location:</label>
                <p class="form-control-plaintext">{{ $event->location }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <p class="form-control-plaintext">{{ $event->date ? $event->date->format('Y-m-d') : 'N/A' }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Time:</label>
                <p class="form-control-plaintext">{{ $event->time ? $event->time->format('H:i') : 'N/A' }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Created At:</label>
                <p class="form-control-plaintext">
                    {{ $event->created_at ? $event->created_at->format('Y-m-d H:i') : 'N/A' }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Updated At:</label>
                <p class="form-control-plaintext">
                    {{ $event->updated_at ? $event->updated_at->format('Y-m-d H:i') : 'N/A' }}</p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning me-2">
                    <i class="bx bx-edit"></i> Edit Event
                </a>
                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $event->id }}">
                        <i class="bx bx-trash"></i> Delete Event
                    </button>
                </form>
                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal{{ $event->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel{{ $event->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $event->id }}">Confirm Deletion
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this event?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-danger">Delete Event</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
