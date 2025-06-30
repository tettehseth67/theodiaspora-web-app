<x-master header="admin.layouts.header" title="Edit Event">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Event</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.events.update', $event) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" accept="image/*">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if ($event->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event"
                                            style="max-width:150px;">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Event Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    id="date" name="date" value="{{ old('date', $event->date->toDateString()) }}"
                                    required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="time" class="form-label">Event Time</label>
                                <input type="time" class="form-control @error('time') is-invalid @enderror"
                                    id="time" name="time" value="{{ old('time', $event->time) }}">
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
