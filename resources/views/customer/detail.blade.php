@extends('layout.main')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Event Detail</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="">Events</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $event->event_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card rounded-2 overflow-hidden">
        <div class="position-relative">
            <!-- Event Image -->
            <img src="{{ asset('storage/' . $event->pic) }}" class="card-img-top rounded-0 object-fit-cover"
                alt="{{ $event->event_name }}" height="400">
            <!-- Event Date Badge -->
            <span
                class="badge text-bg-light fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">
                {{ \Carbon\Carbon::parse($event->event_date)->format('D, M j Y') }}
            </span>
            <!-- Organizer Profile -->
            <img src="https://placehold.co/400x400" alt="{{ $event->organizer->username }} "
                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ $event->organizer->username }} ">
        </div>
        <div class="card-body p-4">
            <h2 class="fs-9 fw-semibold my-4">{{ $event->event_name }}</h2>
            <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm mt-3">{{ $event->category->category }}</span>

            <!-- Event Details with Icons -->
            <div class="d-flex align-items-center gap-4 mt-4">
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-calendar text-dark fs-4"></i>
                    <span><strong>Date & Time: </strong>
                        {{ \Carbon\Carbon::parse($event->event_date)->format('l, j F Y H:i') }}</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="ti-location-pin text-dark fs-4"></i>
                    <span><strong>Location: </strong> {{ $event->location }}</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-users text-dark fs-4"></i>
                    <span><strong>Capacity: </strong> {{ $event->capacity }}</span>
                </div>
            </div>
            <div class="mt-3">
                <h5 class="fw-semibold">About the Event</h5>
                <p class="mt-3">{{ $event->description }}</p>
            </div>
        </div>
    </div>

    <!-- Available Tickets Section -->
    <div class="card">
        <div class="card-body">
            <h4 class="fw-semibold">Available Tickets</h4>
            <div class="row">
                @foreach ($event->tickets as $ticket)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h6 class="fw-semibold">{{ $ticket->ticket_name }}</h6>
                                <p>{{ $ticket->description }}</p>
                                <p><strong>Price: </strong> Rp. {{ number_format($ticket->price, 0, ',', '.') }}</p>

                                <!-- Quantity Selector -->
                                <div class="d-flex align-items-center gap-2 mb-3" id="ticket-quantity-{{ $ticket->id }}">
                                    <button class="btn bg-secondary-subtle text-secondary btn-sm"
                                        onclick="decrementQty({{ $ticket->id }})">-</button>
                                    <input type="number" class="form-control text-left" id="qty-{{ $ticket->id }}"
                                        value="0" min="0" max="3"
                                        style="width: 60px; font-size: 14px; height: 30px; text-align: left;"
                                        onchange="updateCart({{ $ticket->id }})">
                                    <button class="btn bg-secondary-subtle text-secondary btn-sm"
                                        onclick="incrementQty({{ $ticket->id }})">+</button>
                                </div>

                                <!-- Add to Cart Button -->
                                <button class="btn btn-primary btn-sm mt-3" id="buy-now-{{ $ticket->id }}"
                                    onclick="toggleQuantityInput({{ $ticket->id }})">
                                    <i class="ti ti-shopping-cart text-white"></i> <span
                                        id="btn-text-{{ $ticket->id }}">Add to Cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Offcanvas Summary (Cart) -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="ticketSummaryOffcanvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Your Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
        </div>
        <div class="offcanvas-body">
            <!-- Nama Acara -->
            <h6 class="fw-semibold mb-3">Event : <span id="event-name">{{ $event->event_name }}</span></h6>
            <hr class="my-3">
            <!-- Ticket Details -->
            <div id="ticket-details"></div>

            <hr class="my-3">
            <!-- Total Price -->
            <div class="d-flex justify-content-between align-items-center" id="total-price"
                style="background-color: #f1eeff; padding: 10px 15px; border-radius: 8px;">
                <strong>Total: </strong>
                <span id="total-amount" class="fs-5">Rp. 0</span>
            </div>
            <hr class="my-3">
            <!-- Checkout Button -->
            <button type="button" class="btn btn-primary w-100" id="checkout-btn" onclick="checkout()">
                <i class="ti ti-shopping-cart text-white"></i> Checkout
            </button>
            <!-- Footer Information -->
            <div class="text-center mt-4">
                <p class="mb-1 text-muted">Need help? Contact our support team</p>
                <a href="mailto:support@company.com" class="btn btn-sm btn-outline-secondary">Contact Support</a>
            </div>
        </div>
    </div>

    <script>
        let cart = []; // Keranjang untuk menyimpan tiket yang dipilih

        // Fungsi untuk menambah kuantitas tiket
        function incrementQty(ticketId) {
            let qtyInput = document.getElementById('qty-' + ticketId);
            let qty = parseInt(qtyInput.value);
            if (qty < 3) {
                qtyInput.value = qty + 1;
                updateCart(ticketId);
            } else {
                // Tampilkan popover jika kuantitas sudah mencapai 3
                showPopover(ticketId);
            }
        }

        // Fungsi untuk mengurangi kuantitas tiket
        function decrementQty(ticketId) {
            let qtyInput = document.getElementById('qty-' + ticketId);
            let qty = parseInt(qtyInput.value);
            if (qty > 0) {
                qtyInput.value = qty - 1;
                updateCart(ticketId);
            }
        }

        // Fungsi untuk memperbarui keranjang dan menampilkan ringkasan
        function updateCart(ticketId) {
            let qty = document.getElementById('qty-' + ticketId).value;
            let btnText = document.getElementById('btn-text-' + ticketId);

            if (qty > 0 && qty <= 3) {
                // Temukan tiket yang dipilih berdasarkan ticketId
                let ticket = @json($event->tickets).find(ticket => ticket.id == ticketId);
                let totalPrice = ticket.price * qty;

                // Cek apakah tiket sudah ada di keranjang
                let index = cart.findIndex(item => item.ticketId === ticketId);
                if (index === -1) {
                    cart.push({
                        ticketId: ticketId,
                        qty: qty,
                        ticket: ticket,
                        totalPrice: totalPrice
                    });
                } else {
                    cart[index].qty = qty;
                    cart[index].totalPrice = totalPrice;
                }

                // Perbarui ringkasan keranjang
                showTicketSummary();
            } else {
                // Jika kuantitas 0, hapus tiket dari keranjang
                cart = cart.filter(item => item.ticketId !== ticketId);
                showTicketSummary();
            }
        }

        // Fungsi untuk menampilkan ringkasan tiket di offcanvas
        function showTicketSummary() {
            let ticketDetails = '';
            let totalPrice = 0;

            // Menyusun detail tiket di keranjang
            cart.forEach(item => {
                ticketDetails += `
            <div class="d-flex justify-content-between">
                <span>${item.ticket.ticket_name} ( x ${item.qty})</span>
                <span>Rp. ${item.totalPrice.toLocaleString()}</span>
            </div>
        `;
                totalPrice += item.totalPrice;
            });

            // Menampilkan ringkasan tiket
            document.getElementById('ticket-details').innerHTML = ticketDetails;
            document.getElementById('total-price').innerHTML = `<strong>Total: Rp. ${totalPrice.toLocaleString()}</strong>`;

            // Menampilkan offcanvas jika ada tiket di keranjang
            if (cart.length > 0 && totalPrice > 0) {
                let offcanvas = new bootstrap.Offcanvas(document.getElementById('ticketSummaryOffcanvas'));
                offcanvas.show(); // Tampilkan offcanvas jika ada tiket
            }
        }

        // Fungsi untuk menampilkan popover ketika kuantitas mencapai 3
        function showPopover(ticketId) {
            const buyBtn = document.getElementById('buy-now-' + ticketId);
            const popover = new bootstrap.Popover(buyBtn, {
                content: 'Maximum quantity is 3.',
                placement: 'top',
                trigger: 'focus',
                customClass: 'popover-danger'
            });
            popover.show();
        }

        // Fungsi checkout
         // Fungsi checkout untuk mengirimkan data keranjang ke halaman pemesanan
    function checkout() {
        if (cart.length === 0) {
            alert("Please add at least one ticket to your cart.");
            return;
        }

        const queryParams = cart.map(item => `tickets[]=${encodeURIComponent(JSON.stringify(item))}`).join('&');

        window.location.href = "{{ route('checkout.form') }}?" + queryParams;
    }
    </script>
@endsection
