
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-xl-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                        <h3 class="mb-3 mt-0">{{ count($orders) }}</h3>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                        <?php $revenue = 0; ?>
                                        @foreach ($orders as $order)
                                            <?php $revenue += $order->total_price; ?>
                                        @endforeach
                                        <h3 class="mb-3 mt-0">$ {{ $revenue }}</h3>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Top Products sell</h4>
                <table class="table mb-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Barcode</th>
                        <th>Sold</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orderDetails as $key => $orderDetail)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $orderDetail->product->name }}</td>
                            <td>{{ $orderDetail->product->barcode }}</td>
                            <td>{{ $orderDetail->total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
