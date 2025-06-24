<x-master header="admin.layouts.header" title="Testimonial Details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Testimonial Details</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $testimonial->author }}</h5>
                        <p class="card-text">{{ $testimonial->content }}</p>
                        <p class="card-text"><small class="text-muted">Posted on {{ $testimonial->date }}</small></p>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Back to Testimonials</a>
                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $testimonial->id }}">
                                Delete
                            </button>
                        </form>

                        {{-- Delete Confirmation modal --}}
                        <div class="modal fade" id="deleteModal{{ $testimonial->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $testimonial->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $testimonial->id }}">Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this testimonial?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete Testimonial
                                            </button>
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
