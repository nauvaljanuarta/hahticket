@extends('layout.main')

@section('content')
    {{-- resources/views/events/index.blade.php --}}

    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Events</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="../dark/index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('event.show', ['slug' => $event->slug, 'id' => $event->id]) }}">
                <div class="card rounded-2 overflow-hidden hover-img">
                    <!-- Open anchor tag for the entire card -->
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $event->pic) }}" class="card-img-top rounded-0"
                                alt="{{ $event->event_name }}" style="width: 405px; height: 270px; object-fit: cover;">

                            <span class="badge text-bg-light fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('D, M j Y') }}
                            </span>

                            <img src="https://placehold.co/400x400" alt="{{ $event->organizer->username }}"
                                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                                height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="{{ $event->organizer->username }}">
                        </div>
                     <!-- Close anchor tag here -->

                    <div class="card-body p-4">
                        <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm mt-3">
                            {{ $event->category->category }}
                        </span>
                        <a class="d-block my-4 fs-5 text-dark fw-semibold"
                            href="{{ route('event.show', ['slug' => $event->slug, 'id' => $event->id]) }}">
                            {{ $event->event_name }}
                        </a>
                        <p class="text-muted fs-3">{{ Str::limit($event->description, 100) }}</p>
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-ticket text-dark fs-5"></i>
                                @php
                                    $cheapestTicket = $event->tickets->min('price');
                                @endphp
                                Rp. {{ number_format($cheapestTicket, 0, ',', '.') }}
                            </div>

                            <!-- Event Capacity -->
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-user text-dark fs-5"></i>{{ $event->capacity }}
                            </div>

                            <!-- Event Date -->
                            <div class="d-flex align-items-center fs-2 ms-auto">
                                <i class="ti ti-point text-dark"></i>
                                {{ \Carbon\Carbon::parse($event->event_date)->format('D, M j Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
    </div>
@endsection
