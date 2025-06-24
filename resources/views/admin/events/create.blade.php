<x-master header="admin.layouts.header" title="Create Event">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create New Event</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                                <i class="bx bx-list-ul"></i> View Events
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.events.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Event Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Event Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Event Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Event Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Event Time</label>
                                <input type="time" class="form-control" id="time" name="time">
                            </div>
                            <button type="submit" class="btn btn-primary">Create Event</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Event Guidelines</h5>
                    </div>
                    <div class="card-body">
                        <p>Please fill in the details of the event carefully. Ensure that the date and location are correct.</p>
                        <ul>
                            <li>Title: A brief description of the event.</li>
                            <li>Date: The date when the event will take place.</li>
                            <li>Location: The venue or online platform where the event will be held.</li>
                        </ul>
                        <p>After creating the event, you can view it in the events list.</p>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Back to Events</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-master>
