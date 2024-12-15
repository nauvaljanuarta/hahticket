@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="mb-4">Create Event</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Create Event -->
        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Event Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="event_category">Event Category</label>
                            <select name="event_category" id="event_category" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="event_date">Event Date</label>
                            <input type="datetime-local" name="event_date" id="event_date" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="event_link">Event Link</label>
                            <input type="text" name="event_link" id="event_link" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pic">Pic URL (Upload Image)</label>
                            <input class="form-control form-control-sm" id="pic" name="pic" type="file"
                                class="form-control" accept="image/*" onchange="previewImage(event)">
                        </div>
                        <!-- Image Preview -->
                        <div class="col-12 form-group mt-3">
                            <label>Image Preview</label>
                            <div>
                                <img id="image-preview" src="" alt="Image Preview"
                                    style="max-width: 100%; height: auto; display:none;">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" id="capacity" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h3>Event Tickets</h3>
                </div>
                <div class="card-body">
                    <div id="ticket-fields">
                        <div class="ticket-field row">
                            <div class="col-md-4 form-group">
                                <label for="ticket_name">Ticket Name</label>
                                <input type="text" name="ticket_name[]" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="ticket_description">Ticket Description</label>
                                <input type="text" name="ticket_description[]" class="form-control"></input>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="ticket_price">Price</label>
                                <input type="number" name="ticket_price[]" class="form-control" required>
                            </div>
                            <div class="col-md-2 d-flex align-items-center">
                                <button type="button" class="btn btn-danger remove-ticket">Delete</button>
                            </div>
                        </div>
                    </div>
                    <br>

                    <button type="button" id="add-ticket" class="btn btn-success">Add Ticket</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>

    <script>
        document.getElementById('add-ticket').addEventListener('click', function() {
            let ticketFields = document.getElementById('ticket-fields');
            let newTicketField = document.querySelector('.ticket-field').cloneNode(true);
            ticketFields.appendChild(newTicketField);
        });

        // Function to preview image before submit
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const imagePreview = document.getElementById('image-preview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // Remove ticket field
        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-ticket')) {
                e.target.closest('.ticket-field').remove();
            }
        });
    </script>
@endsection
