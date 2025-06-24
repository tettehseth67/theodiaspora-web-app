<x-master header="admin.layouts.header" title="Create Testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Testimonial</h1>
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Testimonial</button>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Back to Testimonials</a>
                </form>
            </div>
        </div>
    </div>
</x-master>
