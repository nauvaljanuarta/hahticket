@extends('layout.main')

@section('content')
    <div class="container">

        <!-- Card Header for Event List -->
        <div class="card shadow position-relative overflow-hidden mb-4">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <h3 class="fw-semibold mb-0">Event List</h3>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Event Table -->
        <div class="card mb-4">
            <div class="card-header">
                <h4>Event List</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Event Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Penyelenggara</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->category->category }}</td>
                                <td>{{ Str::limit($event->description, 50) }}</td> <!-- Limit description -->
                                <td>{{ $event->organizer->username}}</td>
                                <td>
                                    <!-- Show button to view ticket details -->
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#eventDetailsModal-{{ $event->id }}">
                                        <i class="bi bi-eye"></i> Show Details
                                    </button>

                                    <!-- Modal for Event Ticket Details -->
                                    <div class="modal fade" id="eventDetailsModal-{{ $event->id }}" tabindex="-1"
                                        aria-labelledby="eventDetailsModalLabel-{{ $event->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info text-white">
                                                    <h5 class="modal-title" id="eventDetailsModalLabel-{{ $event->id }}">
                                                        Event: {{ $event->event_name }} - Ticket Details
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Tickets:</h5>
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Ticket Name</th>
                                                                <th>Description</th>
                                                                <th>Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($event->tickets as $ticket)
                                                                <tr>
                                                                    <td>{{ $ticket->ticket_name }}</td>
                                                                    <td>{{ $ticket->description }}</td>
                                                                    <td>Rp. {{ number_format($ticket->price, 0, ',', '.') }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-danger-subtle text-danger"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('event.create') }}" class="btn btn-primary ">
            <i class="bi bi-plus-circle"></i> Add Event</a>
    </div>

    <script>
        // Enable Tooltip and Popover functionality (if any)
        $(document).ready(function() {
            // Initialize Bootstrap tooltips
            $('[data-bs-toggle="tooltip"]').tooltip();

            // Initialize Bootstrap popovers
            $('[data-bs-toggle="popover"]').popover();
        });
    </script>

@endsection
