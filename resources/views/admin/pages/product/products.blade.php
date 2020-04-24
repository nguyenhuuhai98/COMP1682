@extends('admin.layouts.app')

@section('title')
    <title>Manage Products</title>
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
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-outline-success product-add">Add Product <img src="https://img.icons8.com/ultraviolet/24/000000/plus.png"/></button>
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
                                                <th width="5%">Description</th>
                                                <th style="padding: 0px" width="7%"></th>
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
                                                            <li>Status: <span class="badge badge-warning">{{ $product['status'] }}</span></li>
                                                            <li>Hot: <span class="badge badge-danger">Hot</span></li>
                                                            <li>Featured: <span class="badge badge-success">None</span></li>
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
                                                    <td>
                                                        <div class="btn btn-outline-info waves-effect waves-light">Short Description</div>
                                                        <div class="btn btn-outline-info waves-effect waves-light">Description</div>
                                                    </td>
                                                    <td>
                                                        <div class="btn btn-outline-primary product-edit" data-id="{{ $product['id'] }}"><i class="far fa-edit"></i></div>
                                                        <div href="#" class="btn btn-outline-danger product-delete" data-id="{{ $product['id'] }}"><i class="far fa-trash-alt"></i></div>
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
        @include('admin.pages.product.form')

    </div>
@stop

@section('script')
    <!-- Required datatable js -->
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

    <script src="select2/js/select2.min.js"></script>
    <script src="bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script src="bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="pages/form-advanced.js"></script>

    <!-- Responsive examples -->
    <script src="datatables/dataTables.responsive.min.js"></script>
    <script src="datatables/responsive.bootstrap4.min.js"></script>


    <!-- Datatable init js -->
    <script src="pages/datatables.init.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('prod-description'); </script>
    <script> CKEDITOR.replace('prod-short-description'); </script>
@stop

