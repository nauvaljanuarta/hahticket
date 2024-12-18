@extends('layout.main')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Daftar Transaksi</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Transactions</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="transactions">
        <div class="row">
            @foreach ($transaksi as $transaction)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border">
                        <div class="card-body">
                            <h5 class="card-title">Transaksi {{ $transaction->id }}</h5>
                            <p class="card-text">
                                <!-- Change background color based on status -->
                                <span class="badge
                                    @if ($transaction->status == 'Pending')
                                        bg-warning
                                    @elseif ($transaction->status == 'Paid')
                                        bg-success
                                    @else
                                        bg-secondary
                                    @endif">
                                    {{ $transaction->status }}
                                </span>
                            </p>
                            <p class="card-text">Total: Rp. {{ number_format($transaction->jumlah, 0, ',', '.') }}</p>

                            <!-- Button to trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#detailModal-{{ $transaction->id }}">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Transaction Detail -->
                <div class="modal fade" id="detailModal-{{ $transaction->id }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $transaction->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                                <h4 class="modal-title" id="detailModalLabel-{{ $transaction->id }}">Detail Transaksi #{{ $transaction->id }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Status: {{ $transaction->status }}</h5>
                                <h5>Total: Rp. {{ number_format($transaction->jumlah, 0, ',', '.') }}</h5>

                                <h6 class="mt-4 mb-3">Daftar Tiket</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Tiket</th>
                                                <th>Deskripsi</th>
                                                <th>Kuantitas</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction->detailTransaksi as $detail)
                                                <tr>
                                                    <td>{{ $detail->pemesananEventTicket->eventTicket->ticket_name }}</td>
                                                    <td>{{ $detail->pemesananEventTicket->eventTicket->description }}</td>
                                                    <td>{{ $detail->quantity }}</td>
                                                    <td>Rp. {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
