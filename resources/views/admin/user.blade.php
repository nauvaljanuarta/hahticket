@extends('layout.main')

@section('content')
    <div class="container">
        <!-- Header for User Management -->
        <h1 class="mb-4">Manajemen User</h1>

        <!-- Success Message (if any) -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form to Add New User -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Tambah User Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_user_id">Role</label>
                        <select name="jenis_user_id" id="jenis_user_id" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->jenis_user }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

        <!-- List of Existing Users -->
        <div class="card">
            <div class="card-header">
                <h3>User List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created by</th>
                            <th>Updated by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->jenisuser->jenis_user }}</td>
                                <td>{{ $user->create_by }}</td>
                                <td>{{ $user->update_by }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-warning btn-sm" onclick="toggleEditForm({{ $user->id }})">Edit</button>
                                    <!-- Delete Form -->
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @foreach ($users as $user)
        <div id="edit-form-{{ $user->id }}" class="edit-form mt-3" style="display:none;">
            <div class="card">
                <div class="card-header">
                    <h3>Edit User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $user->no_hp }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_user_id">Role</label>
                            <select name="jenis_user_id" id="jenis_user_id" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == $user->jenis_user_id ? 'selected' : '' }}>{{ $role->jenis_user }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                        <button type="button" class="btn btn-secondary mt-3" onclick="toggleEditForm({{ $user->id }})">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        // Function to toggle the edit form visibility using slideToggle
        function toggleEditForm(userId) {
            var $formContainer = $('#edit-form-' + userId);
            $formContainer.slideToggle('slow'); // Smooth slideToggle for showing/hiding form
        }
    </script>
@endsection
