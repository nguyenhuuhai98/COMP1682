@extends('staff.layouts.app')

@section('title')
    <title>Staff Site</title>
@stop

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Products</h4>

                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-2">
                                            <h4 class="header-title">All Products</h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-outline-success product-plus"><img src="https://img.icons8.com/nolan/30/plus.png"/></button>
                                        </div>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-outline-success product-discount"><img src="https://img.icons8.com/nolan/30/discount.png"/></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="products-table" class="table table-striped table-bordered dt-responsive"
                                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th width="5%">(#) Id</th>
                                                <th width="25%">Name</th>
                                                <th width="20%">Images</th>
                                                <th width="10%">Properties</th>
                                                <th width="10%">Price</th>
                                                <th width="10%">Other information</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($products as $key => $product)
                                                <tr>
                                                    <th>{{ $product['id'] }}</th>
                                                    <td>
                                                        <ul>
                                                            <li>Name: {{ $product['name'] }}</li>
                                                            <li>Barcode: {{ $product['barcode'] }}</li>
                                                            <li>Category: <span class="badge badge-primary">{{ $product->category->name }}</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div style="padding: 0px 30px">
                                                            <img class="align-self-start shadow rounded mr-4"
                                                                 src="{{ json_decode($product->images)->image1 == null ? '' : json_decode($product->images)->image1 }}"
                                                                 alt="Generic placeholder image" height="100">
                                                            <img class="align-self-start shadow rounded"
                                                                 src="{{ json_decode($product->images)->image2 ? json_decode($product->images)->image2 : json_decode($product->images)->image1 }}"
                                                                 alt="Generic placeholder image" height="100">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Status: <span class="btn btn-warning btn-sm waves-effect waves-light">{{ $product['status'] }}</span></li>
                                                            <li>Hot: <span class="btn btn-danger btn-sm waves-effect waves-light">Hot</span></li>
                                                            <li>Featured: <span class="btn btn-success btn-sm waves-effect waves-light">None</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Price: $ {{ $product['price'] }}</li>
                                                            <li>Discount: {{ $product['discount'] }} %</li>
                                                            <li>Sale price: $ {{ $product['sale_price'] }}</li>
                                                        </ul></td>
                                                    <td>
                                                        <ul>
                                                            <li>In stocks: {{ $product['stock'] }}</li>
                                                            <li>Point: {{ $product['point'] }}</li>
                                                            <li>Unit: {{ $product['calculate_unit'] }}</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!-- end page content-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <footer class="footer">
            © 2020 <span class="d-none d-sm-inline-block">- From HaiNH with Love <i class="mdi mdi-heart text-danger"></i></span>
        </footer>

        <!-- modal content -->
        @include('staff.pages.product-plus')
        @include('staff.pages.product-discount')

    </div>
@stop

@section('script')
<!-- Required datatable js -->
<script src="admin/datatables/jquery.dataTables.min.js"></script>
<script src="admin/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="admin/datatables/dataTables.buttons.min.js"></script>
<script src="admin/datatables/buttons.bootstrap4.min.js"></script>
<script src="admin/datatables/jszip.min.js"></script>
<script src="admin/datatables/pdfmake.min.js"></script>
<script src="admin/datatables/vfs_fonts.js"></script>
<script src="admin/datatables/buttons.html5.min.js"></script>
<script src="admin/datatables/buttons.print.min.js"></script>
<script src="admin/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="admin/datatables/dataTables.responsive.min.js"></script>
<script src="admin/datatables/responsive.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- Datatable init js -->
<script src="admin/pages/datatables.init.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('.select2-multiple').select2();
    });
    $('#products-table').DataTable({
        "order": [[ 0, "desc" ]]
    } );
    $(document).on('click', '.product-plus', function() {
        $('.product-plus-modal').modal('show');
    });
    $(document).on('click', '.product-discount', function() {
        $('.product-discount-modal').modal('show');
    });
    $(document).on('submit', '.discountForm', function(e) {
        e.preventDefault();
        let routeUpdateDiscount = '{{ route('update.discount.products') }}'
        swal({
            title: 'Save change?',
            text: "All data will save!",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((save) => {
            if (save) {
                let products = [];
                $.each($('#product-discount option:selected'), function () {
                    products.push($(this).val());
                });
                let discount = $('#prod-discount').val();
                $.ajax({
                    method: 'post',
                    url: routeUpdateDiscount,
                    data: {
                        products: products,
                        discount: discount
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
@stop

