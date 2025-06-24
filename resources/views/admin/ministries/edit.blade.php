<x-master header="admin.layouts.header" title="Ministries">
    <div class="container py-5 px-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Ministry</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.ministries.update',$ministry) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name', $ministry->name ?? '') }}"
                            class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="leader" class="form-label">Leader</label>
                        <input type="text" name="leader" value="{{ old('leader', $ministry->leader ?? '') }}"
                            class="form-control @error('leader') is-invalid @enderror">
                        @error('leader')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $ministry->description ?? '') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if (!empty($ministry->image))
                            <img src="{{ asset('storage/' . $ministry->image) }}" alt="" class="mt-2"
                                style="max-width: 150px;">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update Ministry</button>
                    <a href="{{ route('admin.ministries.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-master>
