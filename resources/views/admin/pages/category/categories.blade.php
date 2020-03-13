@extends('admin.layouts.app')

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
                                            <button type="button" class="btn btn-outline-success" id="category-add">Add Category <img src="https://img.icons8.com/ultraviolet/24/000000/plus.png"/></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive" id="category-wrapper">
                                        <table id="datatable" class="table dt-responsive categories-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="5%">(#) Id</th>
                                                    <th scope="col" width="30%">Name</th>
                                                    <th scope="col" width="20%">Description</th>
                                                    <th scope="col" width="10%">Image</th>
                                                    <th scope="col" width="10%">Parent Id</th>
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
                                                            <img src="{{ asset($decodeArray[$key]['logo'] == "null" ? "admin/images/users/user-2.jpg" : $decodeArray[$key]['logo']) }}" alt="" class="thumb-md rounded-circle mr-2"> {{ $category['name'] }}
                                                        </div>
                                                    </td>
                                                    <td>{{ $category['description'] }}</td>
                                                    <td>
                                                        <img src={{ asset($decodeArray[$key]['image'] == "null" ? "admin/images/users/user-2.jpg" : $decodeArray[$key]['image']) }} alt=""
                                                             class="thumb-md rounded-circle mr-2">
                                                    </td>
                                                    <td>{{ $category['parent_id'] }}</td>
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
