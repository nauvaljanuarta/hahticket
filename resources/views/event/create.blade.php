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
                            <input type="datetime-local" name="event_date" id="event_date" class="form-control" required
                                min="{{ now()->toIso8601String() }}" max="{{ now()->addMonths(6)->toIso8601String() }}">

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
                        <div class="col-md-6 form-group">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" id="capacity" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="description">Event Description</label>
                            <textarea name="description" id="description" class="form-control" required rows="5"
                                oninput="limitWords(this, 30)"></textarea>
                            <small id="word-count" class="text-muted">0/30 words</small>
                        </div>
                        <!-- Image Preview -->
                        <div class="col-12 form-group mt-3">
                            <label>Image Preview</label>
                            <div>
                                <img id="image-preview" src="" alt="Image Preview"
                                    style="width: 405px; height: 270px; object-fit: cover; display:none;">
                            </div>
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
        const maxTickets = 10;

        document.addEventListener('DOMContentLoaded', function() {
            const addTicketBtn = document.getElementById('add-ticket');
            const ticketFields = document.getElementById('ticket-fields');
            const eventDateInput = document.getElementById('event_date');
            const now = new Date();

            const minDate = new Date(now);
            minDate.setHours(0, 0, 0, 0);

            const maxDate = new Date(now);
            maxDate.setMonth(now.getMonth() + 6);
            maxDate.setHours(23, 59, 59, 999);

            eventDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const minDate = new Date();
                minDate.setHours(0, 0, 0, 0); // Set waktu menjadi tengah malam

                const maxDate = new Date();
                maxDate.setMonth(maxDate.getMonth() + 6); // 6 bulan dari sekarang
                maxDate.setHours(23, 59, 59, 999); // Set waktu maksimal ke 23:59:59

                if (selectedDate < minDate) {
                    showPopover(eventDateInput, 'Event date cannot be earlier than today!');
                    eventDateInput.style.backgroundColor = 'rgba(255, 0, 0, 0.3)';
                    eventDateInput.disabled = false;
                } else if (selectedDate > maxDate) {
                    showPopover(eventDateInput, 'Event date cannot be later than 6 months from today!');
                    eventDateInput.style.backgroundColor = 'rgba(255, 0, 0, 0.3)';
                    eventDateInput.disabled = false;
                } else {
                    hidePopover(eventDateInput);
                    eventDateInput.style.backgroundColor = '';
                    eventDateInput.disabled = false;
                }
            });


            // remove tiket
            function updateRemoveButtons() {
                const removeButtons = ticketFields.querySelectorAll('.remove-ticket');
                removeButtons.forEach(btn => {
                    btn.onclick = function() {
                        const currentTickets = ticketFields.querySelectorAll('.ticket-field').length;
                        if (currentTickets > 1) {
                            btn.closest('.ticket-field').remove();
                        } else {
                            showPopover(btn, 'At least one ticket is required.');
                        }
                    }
                });
            }

            updateRemoveButtons(); // Initialize on page load

            addTicketBtn.addEventListener('click', function() {
                const ticketCount = ticketFields.querySelectorAll('.ticket-field').length;

                if (ticketCount >= maxTickets) {
                    const popoverMessage = `You cannot add more than ${maxTickets} tickets.`;
                    showPopover(addTicketBtn, popoverMessage);
                } else {
                    const newTicketRow = document.createElement('div');
                    newTicketRow.classList.add('ticket-field', 'row');
                    newTicketRow.innerHTML = `
            <div class="col-md-4 form-group">
                <label for="ticket_name">Ticket Name</label>
                <input type="text" name="ticket_name[]" class="form-control" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="ticket_description">Ticket Description</label>
                <input type="text" name="ticket_description[]" class="form-control">
            </div>
            <div class="col-md-2 form-group">
                <label for="ticket_price">Price</label>
                <input type="number" name="ticket_price[]" class="form-control" required>
            </div>
            <div class="col-md-2 d-flex align-items-center">
                <button type="button" class="btn btn-danger remove-ticket">Delete</button>
            </div>
        `;

                    ticketFields.appendChild(newTicketRow);
                    updateRemoveButtons(); // Re-initialize remove buttons
                }
            });

        });

        // preview image
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

        // batas deskripsi
        function limitWords(input, maxWords) {
            const words = input.value.trim().split(/\s+/).filter(w => w.length > 0);

            if (words.length > maxWords) {
                input.value = words.slice(0, maxWords).join(' ');
            }

            const wordCount = words.length > maxWords ? maxWords : words.length;
            const wordCountDisplay = document.getElementById('word-count');
            wordCountDisplay.innerText = wordCount + '/' + maxWords + ' words';

            if (wordCount >= maxWords) {
                showPopover(input, 'Maximum 30 words allowed!');
                wordCountDisplay.classList.remove('text-muted');
                wordCountDisplay.classList.add('text-danger');
            } else {
                hidePopover(input);
                wordCountDisplay.classList.remove('text-danger');
                wordCountDisplay.classList.add('text-muted');
            }
        }

        // fungsi show popover
        function showPopover(element, message) {
            const existingPopover = bootstrap.Popover.getInstance(element);

            if (existingPopover) {
                existingPopover.dispose();
            }

            const popover = new bootstrap.Popover(element, {
                content: message,
                placement: 'top',
                trigger: 'focus',
                customClass: 'popover-danger'
            });

            popover.show();

            // Auto hide dalam 2 detik
            setTimeout(() => {
                popover.hide();
            }, 2000);
        }

        // fungsi hide popover
        function hidePopover(element) {
            const existingPopover = bootstrap.Popover.getInstance(element);

            if (existingPopover) {
                existingPopover.dispose();
            }
        }
    </script>
@endsection
