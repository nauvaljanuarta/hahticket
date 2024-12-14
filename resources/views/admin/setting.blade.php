@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="mb-4">Setting Menu untuk Role: {{ $role->jenis_user }}</h1>

        <!-- Form to Update Assigned Menus -->
        <form action="{{ route('role.updateMenus', $role->id) }}" method="POST" id="menusForm">
            @csrf
            @method('PUT') <!-- Use PUT Method for Update -->

            <div class="form-group">
                <label for="menus">Assign Menus</label>
                <div id="menus">
                    @foreach ($menulist as $menu)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="menus[]" value="{{ $menu->id }}"
                                id="menu_{{ $menu->id }}"
                                @if($role->menus->contains($menu->id)) checked @endif>
                            <label class="form-check-label" for="menu_{{ $menu->id }}">
                                {{ $menu->menu_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3" id="saveButton">Save Changes</button>
        </form>
    </div>

    <script>
        // JavaScript for managing checkbox selections and form validation
        document.getElementById('menusForm').addEventListener('submit', function(e) {
            const selectedMenus = document.querySelectorAll('input[name="menus[]"]:checked');

            if (selectedMenus.length === 0) {
                e.preventDefault(); // Prevent form submission
                alert('Please select at least one menu.');
            }
        });
    </script>
@endsection
