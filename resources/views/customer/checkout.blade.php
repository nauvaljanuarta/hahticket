@extends('layout.main')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Checkout</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="checkout">
        <div class="card shadow-none border">
            <div class="card-body p-4">
                <div class="wizard-content">
                    <form action="{{ route('checkout.store') }}" method="POST" class="tab-wizard wizard-circle">
                        @csrf

                        <h4 class="mb-4">Your Cart</h4>
                        <section>
                            <div class="table-responsive">
                                <table class="table align-middle text-nowrap mb-0">
                                    <thead class="fs-2">
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Price</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div>
                                                            <h6 class="fw-semibold fs-4 mb-0">{{ $item['ticket']['ticket_name'] }}</h6>
                                                            <p class="mb-0">{{ $item['ticket']['description'] }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fs-4 fw-semibold">{{ $item['qty'] }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-4 fw-semibold">Rp. {{ number_format($item['ticket']['price'], 0, ',', '.') }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-4 fw-semibold">Rp. {{ number_format($item['totalPrice'], 0, ',', '.') }}</span>
                                                </td>
                                                <input type="hidden" name="items[{{ $loop->index }}][event_ticket_id]" value="{{ $item['ticket']['id'] }}">
                                                <input type="hidden" name="items[{{ $loop->index }}][quantity]" value="{{ $item['qty'] }}">
                                                <input type="hidden" name="items[{{ $loop->index }}][sub_total]" value="{{ $item['totalPrice'] }}">
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>

                        <!-- Order Summary -->
                        <h6 class="mt-5 mb-4">Order Summary</h6>
                        <section>
                            <div class="order-summary border rounded-3 p-3">
                                <div class="d-flex justify-content-between mb-0">
                                    <p class="mb-0 fs-0">Total</p>
                                    <h6 class="mb-0 fs-4 fw-semibold">Rp. {{ number_format($totalAmount, 0, ',', '.') }}</h6>
                                </div>
                            </div>
                        </section>

                        <!-- Step 2: Payment -->
                        <h6 class="mt-5 mb-4">Payment</h6>
                        <section class="payment-method text-center">
                            <h5 class="fw-semibold fs-5">Thank you for your purchase!</h5>
                            <h6 class="fw-semibold text-primary mb-7">Your order id: 3fa7-69e1-79b4-dbe0d35f5f5d</h6>
                            <div class="d-sm-flex align-items-center justify-content-between my-4">
                                <a href="" class="btn btn-success d-block mb-2 mb-sm-0">Continue Shopping</a>
                                <button type="submit" class="btn btn-primary d-block">Proceed to Payment</button>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
