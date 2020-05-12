@extends('admin.layouts.app')

@section('title')
    <title>Manage Orders</title>
@stop

@section('content')

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Order</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">All orders</h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th width="3%">No.</th>
                                            <th width="30%">Customer</th>
                                            <th width="20%">Products</th>
                                            <th>Payment</th>
                                            <th>Total Price</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>
                                                    <div>Name: <b>{{ $order->customer->name }}</b></div>
                                                    <div>Phone: <b>{{ $order->phone }}</b></div>
                                                    <div>Address: <b>{{ $order->address }}</b></div>
                                                </td>
                                                <td>
                                                    @foreach ($order->orderDetail as $detail)
                                                        <div>{{ $detail->product->barcode }}: <b>{{ $detail->product->name }}</b></div>
                                                    @endforeach
                                                </td>
                                                <td><span style="padding: 1em 1em;
                                                    @if ($order->payment === 'paypal') background-color: #7fde00;
                                                    @else background-color: #1c7430;
                                                    @endif " class="badge badge-warning badge-pill">{{ $order->payment }}</span></td>
                                                <td>$ {{ $order->total_price }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="order-status" id="order-status-{{ $order->id }}" data-id="{{ $order->id }}" data-value="{{ $order->status }}">
                                                        <span style="padding: 1em 1em; font-size: 13px" class="status-card-{{ $order->id }} badge
                                                            @if ($order->status == 'New') badge-success
                                                            @elseif ($order->status == 'Delivering') badge-info
                                                            @elseif ($order->status == 'Done') badge-primary
                                                            @else ($order->status == 'Done') badge-dark @endif">
                                                            {{ $order->status }}
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
                <!-- end page content-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <footer class="footer">
            © 2018 Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
        </footer>
    </div>
@stop

@section('script')
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="datatables/dataTables.buttons.min.js"></script>
    <script src="datatables/buttons.bootstrap4.min.js"></script>
    <script src="datatables/jszip.min.js"></script>
    <script src="datatables/pdfmake.min.js"></script>
    <script src="datatables/vfs_fonts.js"></script>
    <script src="datatables/buttons.html5.min.js"></script>
    <script src="datatables/buttons.print.min.js"></script>
    <script src="datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="datatables/dataTables.responsive.min.js"></script>
    <script src="datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="pages/datatables.init.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.order-status', function() {
            let routeUpdateStatus = '{{ route('adminupdate.status.delivery') }}';
            let status = $(this).data('value');
            let id = $(this).data('id');
            $.ajax({
                url: routeUpdateStatus,
                type: 'post',
                data: {
                    status: status,
                    orderId: id,
                }
            }).done( function(response) {
                $('.status-card-' + id).text(response.order.status);
                $('.status-card-' + id).removeClass(response.oldBadge);
                $('.status-card-' + id).addClass(response.newBadge);
                $('#order-status-' + id).attr('data-value', response.order.status);
                alertify.success('Update status successfully!');
            });
        });
    </script>
@stop
