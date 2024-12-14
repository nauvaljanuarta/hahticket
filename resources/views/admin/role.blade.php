@extends('layout.main')

@section('content')
    <div class="container">
        <!-- Header for Role Management -->
        <h1 class="mb-4">Manajemen Role</h1>

        <!-- Success Message (if any) -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form to Add New Role -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Tambah Role Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jenis_user">Nama Role</label>
                        <input type="text" id="jenis_user" name="jenis_user" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

        <!-- List of Existing Roles -->
        <div class="card">
            <div class="card-header">
                <h3>Role List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Created by</th>
                            <th>Updated by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->jenis_user }}</td>
                                <td>{{ $role->create_by }}</td>
                                <td>{{ $role->update_by }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="toggleEditForm({{ $role->id }})">Edit</button>
                                    <!-- Delete Form -->
                                    <form action="{{ route('role.destroy', $role->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Loop through roles and show the edit form (initially hidden) -->
    @foreach ($roles as $role)
        <div id="edit-form-{{ $role->id }}" class="edit-form mt-3" style="display:none;"> <!-- Initially hidden -->
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jenis_user">Nama Role</label>
                            <input type="text" id="jenis_user" name="jenis_user" class="form-control"
                                value="{{ $role->jenis_user }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                        <button type="button" class="btn btn-secondary mt-3"
                            onclick="toggleEditForm({{ $role->id }})">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    <script>
        // Function to toggle the edit form visibility using slideToggle
        function toggleEditForm(roleId) {
            var $formContainer = $('#edit-form-' + roleId);
            $formContainer.slideToggle('slow'); // Smooth slideToggle for showing/hiding form
        }
    </script>
@endsection
