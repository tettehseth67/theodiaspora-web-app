<x-master header="admin.layouts.header" title="Create Sermons">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Create Sermon</h5>
                        <div class="card-tools">
                            <a href="{{ route('admin.sermons.index') }}" class="btn btn-primary">
                                <i class="bx bx-list-ul"></i> View Sermons
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sermons.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="speaker" class="form-label">Speaker</label>
                                <input type="text" class="form-control" id="speaker" name="speaker" required>
                            </div>
                            <button type="submit" class="btn btn-success">Create Sermon</button>
                            <a href="{{ route('admin.sermons.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
