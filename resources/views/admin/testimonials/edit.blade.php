<x-master header=admin.layouts.header title="Edit Testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Testimonial</h1>
                <form action="{{ route('admin.testimonials.update',$testimonial) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name</label>
                        <input type="text" name="author" id="author" class="form-control" required
                            value="{{ old('author', $testimonial->author) }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required>
                            {{ old('content', $testimonial->content) }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control" required
                            value="{{ old('date', $testimonial->date) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Testimonial</button>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Back to Testimonials</a>
                </form>
            </div>
        </div>
    </div>
</x-master>
