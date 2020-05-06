@extends('admin.layouts.app')

@section('title')
    <title>Manage Categories</title>
@stop

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Categories</h4>

                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-2">
                                            <h4 class="header-title">All Categories</h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-outline-success category-add">Add Category <img src="https://img.icons8.com/ultraviolet/24/000000/plus.png"/></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive" id="category-wrapper">
                                        <table id="datatable" class="table dt-responsive categories-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="5%">(#) Id</th>
                                                    <th scope="col" width="30%">Name</th>
                                                    <th scope="col" width="20%">Description</th>
                                                    <th scope="col" width="10%">Parent</th>
                                                    <th scope="col" style="padding: 0px; width: 1%"></th>
                                                    <th scope="col" style="padding: 0px; width: 1%"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="category-tbody">
                                            @foreach ($categories as $key => $category)
                                                <tr id="category{{$category['id']}}">
                                                    <th scope="row">{{ $category['id'] }}</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset($decodeArray[$key]['image'] == "null" ? "admin/images/users/user-2.jpg" : $decodeArray[$key]['image']) }}" alt="" class="thumb-md rounded-circle mr-2"> {{ $category['name'] }}
                                                        </div>
                                                    </td>
                                                    <td>{{ $category['description'] }}</td>
                                                    <td>{{ $category->category['name'] ? $category->category['name'] : 'Root'}}</td>
                                                    <td>
                                                        <div>
                                                            <button class="btn btn-outline-primary category-edit" data-id="{{ $category['id'] }}"><i class="far fa-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <button href="#" class="btn btn-outline-danger category-delete" data-id="{{ $category['id'] }}"><i class="far fa-trash-alt"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach()
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end page content-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <footer class="footer">
            © 2020 <span class="d-none d-sm-inline-block">- From HaiNH with Love <i class="mdi mdi-heart text-danger"></i></span>
        </footer>

        <!-- modal content -->
        @include('admin.pages.category.form')

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
@stop
