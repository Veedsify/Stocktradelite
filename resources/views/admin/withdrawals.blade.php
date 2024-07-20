@extends('../layouts/admin/adminlayout')
@section('content')
<div id="main-wrapper">
    <!-- Sidebar Start -->
    <x-admin.aside />
    <!--  Sidebar End -->

    <div class="page-wrapper">
        <!--  Header Start -->
        <x-admin.header />

        <!--  Header End -->


        <div class="body-wrapper">
            <div class="container-fluid">
                <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Withdrawals</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted text-decoration-none" href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">Withdrawals</li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="datatables">
                    <!-- basic table -->
                    <div class="row">
                        <div class="col-12">
                            <!-- start User Datatable -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <h5 class="mb-0">User Withdrawal Datatable</h5>
                                    </div>
                                    <div class="table-responsivPe">
                                        <table id="zero_config"
                                            class="table border table-striped table-bordered text-nowrap align-middle">
                                            <thead>
                                                <!-- start row -->
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Full_name</th>
                                                    <th>Method</th>
                                                    <th>Date</th>
                                                    <th>Details</th>
                                                </tr>
                                                <!-- end row -->
                                            </thead>
                                            <tbody>
                                                <!-- start row -->
                                                @foreach ($withdrawals as $withdraw)
                                                <tr>
                                                    <td>{{ $withdraw->user->name }}</td>
                                                    <td>${{number_format( $withdraw->amount) }}</td>
                                                    <td>{{ $withdraw->status }}</td>
                                                    <td>{{ $withdraw->user->full_name }}</td>
                                                    <td>{{ $withdraw->method }}</td>
                                                    <td>{{ $withdraw->created_at->format('d M Y h i:A') }}</td>
                                                    <td>
                                                        <div>
                                                            <p><strong>Bitcoin address</strong>: <br>
                                                                {{ $withdraw->bitcoin_address }}
                                                            </p>
                                                            <p>
                                                                <strong>Etherium Address</strong>:
                                                                <br>
                                                                {{ $withdraw->etherium_address }}
                                                            </p>
                                                            <p>
                                                                <strong>Bank Name</strong>:
                                                                {{ $withdraw->bank_name }}
                                                            </p>
                                                            <p>
                                                                <strong>Account Number</strong>:
                                                                {{ $withdraw->bank_account_number }}
                                                            </p>
                                                            <p>
                                                                <strong>Swift Code</strong>:
                                                                {{ $withdraw->swift_code }}
                                                            </p>
                                                            <p>
                                                                <strong>Bank Address</strong>:
                                                                {{ $withdraw->iban }}
                                                            </p>
                                                            <h5>CARD DETAILS</h5>
                                                            <p>
                                                                <strong>CVC</strong>:
                                                                {{ $withdraw->card_cvc }}
                                                            </p>
                                                            <p>
                                                                <strong>Card Number</strong>:
                                                                {{ $withdraw->card_number }}
                                                            </p>
                                                            <p>
                                                                <strong>Expiry Date</strong>:
                                                                {{ $withdraw->card_year }}
                                                            </p>
                                                            <p>
                                                                <strong>Card Month</strong>:
                                                                {{ $withdraw->card_month }}
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- end row -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end Alternative Pagination -->
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <x-admin.canvas />

    </div>
    <x-admin.search />




</div>
@endsection