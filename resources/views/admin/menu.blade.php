@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="mb-4">Menu Management</h1>

        <!-- Success Message (if any) -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form to Add New Menu -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Add New Menu</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="menu_name">Menu Name</label>
                        <input type="text" id="menu_name" name="menu_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="menu_link">Menu Link</label>
                        <input type="text" id="menu_link" name="menu_link" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="menu_icon">Menu Icon</label>
                        <input type="text" id="menu_icon" name="menu_icon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Parent Menu</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="">No Parent</option>
                            @foreach ($menuslist as $parentMenu)
                                <option value="{{ $parentMenu->id }}">{{ $parentMenu->menu_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_level">Menu Level</label>
                        <select name="id_level" id="id_level" class="form-control" required>
                            @foreach ($menuLevels as $level)
                                <option value="{{ $level->id }}">{{ $level->level }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>

        <!-- List of Existing Menus -->
        <div class="card">
            <div class="card-header">
                <h3>Menu List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Menu</th>
                            <th>Menu Link</th>
                            <th>Menu Icon</th>
                            <th>Parent Menu</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->menu_name }}</td>
                                <td>{{ $menu->menu_link }}</td>
                                <td>{{ $menu->menu_icon }}</td>
                                <td>{{ $menu->parent ? $menu->parent->menu_name : 'No Parent' }}</td>
                                <td>{{ $menu->level->level ?? 'N/A' }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-warning btn-sm" onclick="toggleEditForm({{ $menu->id }})">Edit</button>

                                    <!-- Delete Form -->
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Display Submenus -->
                            @foreach ($menu->children as $submenu)
                                <tr>
                                    <td style="padding-left: 30px;">- {{ $submenu->menu_name }}</td>
                                    <td>{{ $submenu->menu_link }}</td>
                                    <td>{{ $submenu->menu_icon }}</td>
                                    <td>{{ $submenu->parent ? $submenu->parent->menu_name : 'No Parent' }}</td>
                                    <td>{{ $submenu->level->level ?? 'N/A' }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button type="button" class="btn btn-warning btn-sm" onclick="toggleEditForm({{ $submenu->id }})">Edit</button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('menu.destroy', $submenu->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Loop through menus and show the edit form (initially hidden) -->
    @foreach ($menus as $menu)
        <div id="edit-form-{{ $menu->id }}" class="edit-form mt-3" style="display:none;"> <!-- Initially hidden -->
            <div class="card">
                <div class="card-header">
                    <h3>Edit Menu</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="menu_name">Menu Name</label>
                            <input type="text" id="menu_name" name="menu_name" class="form-control" value="{{ $menu->menu_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="menu_link">Menu Link</label>
                            <input type="text" id="menu_link" name="menu_link" class="form-control" value="{{ $menu->menu_link }}" required>
                        </div>
                        <div class="form-group">
                            <label for="menu_icon">Menu Icon</label>
                            <input type="text" id="menu_icon" name="menu_icon" class="form-control" value="{{ $menu->menu_icon }}">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent Menu</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">No Parent</option>
                                @foreach ($menuslist as $parentMenu)
                                    <option value="{{ $parentMenu->id }}" @if($menu->parent_id == $parentMenu->id) selected @endif>
                                        {{ $parentMenu->menu_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_level">Menu Level</label>
                            <select name="id_level" id="id_level" class="form-control" required>
                                @foreach ($menuLevels as $level)
                                    <option value="{{ $level->id }}" @if($menu->id_level == $level->id) selected @endif>
                                        {{ $level->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                        <button type="button" class="btn btn-secondary mt-3" onclick="toggleEditForm({{ $menu->id }})">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function toggleEditForm(menuId) {
            var $formContainer = $('#edit-form-' + menuId);
            $formContainer.slideToggle('slow');
        }
    </script>
@endsection
