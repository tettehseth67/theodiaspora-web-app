<x-master header="admin.layouts.header" title="Create Categories">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Category</h1>
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to Categories</a>
            </div>
        </div>
    </div>
</x-master>
