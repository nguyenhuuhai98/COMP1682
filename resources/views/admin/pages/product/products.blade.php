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

                                    <table id="products-table" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>(#) Id</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Barcode</th>
                                            <th>Slug</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Status</th>
                                            <th>Discount</th>
                                            <th>Point</th>
                                            <th>Calculate Unit</th>
                                            <th>Images</th>
                                            <th>Short Description</th>
                                            <th>Description</th>
                                            <th style="padding: 0px; width: 1%"></th>
                                            <th style="padding: 0px; width: 1%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <th>{{ $product['id'] }}</th>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product['name'] }}</td>
                                                <td>{{ $product['barcode'] }}</td>
                                                <td>{{ $product['slug'] }}</td>
                                                <td>{{ $product['stock'] }}</td>
                                                <td>$ {{ $product['price'] }}</td>
                                                <td>$ {{ $product['sale_price'] }}</td>
                                                <td><span class="badge badge-success">{{ $product['status'] }}</span></td>
                                                <td>{{ $product['discount'] }}</td>
                                                <td>{{ $product['point'] }}</td>
                                                <td>{{ $product['calculate_unit'] }}</td>
                                                <td></td>
                                                <td>{!! $product['short_description'] !!}</td>
                                                <td>{!! $product['description'] !!}</td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-outline-primary product-edit" data-id="{{ $product['id'] }}"><i class="far fa-edit"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button href="#" class="btn btn-outline-danger product-delete" data-id="{{ $product['id'] }}"><i class="far fa-trash-alt"></i></button>
                                                    </div>
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

