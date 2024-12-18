@extends('layout.main')

@section('content')
    <div class="container">
        <div class="card shadow position-relative overflow-hidden mb-4">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <h3 class="fw-semibold mb-0">Event Categories</h3>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <h4>Add New Category</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category Name</label>
                        <input type="text" name="category" id="category" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Add Category</button>
                </form>
            </div>
        </div>

        <hr>

        <!-- Table displaying categories -->
        <div class="card">
            <div class="card-header">
                <h3>Categories List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->category }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->create_by }}</td>
                                <td>{{ $category->update_by }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <!-- Edit Category -->
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal-{{ $category->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Category -->
                                    <form action="{{ route('event.category.destroy', $category->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Modal for editing category -->
        @foreach ($categories as $category)
            <div class="modal fade" id="editModal-{{ $category->id }}" tabindex="-1" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="editModalLabel">Edit Category</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('event.category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="category">Category Name</label>
                                    <input type="text" name="category" id="category" class="form-control"
                                        value="{{ $category->category }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control">{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-danger-subtle text-danger waves-effect text-start"
                                    data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <script>
            // Enable Tooltip and Popover functionality
            $(document).ready(function() {
                // Initialize Bootstrap tooltips
                $('[data-bs-toggle="tooltip"]').tooltip();

                // Initialize Bootstrap popovers
                $('[data-bs-toggle="popover"]').popover();
            });
        </script>
    @endsection
