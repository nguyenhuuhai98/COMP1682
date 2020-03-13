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
                                    <h4 class="mt-0 header-title mb-4">All Categories</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
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
                                            <tbody>
                                            @foreach ($categories as $key => $category)

                                            <tr>
                                                <th scope="row"># {{ $category['id'] }}</th>
                                                <td>
                                                    <div>
                                                        <img src="{{ $decodeArray[$key]['logo'] == "null" ? "images/users/user-2.jpg" : $decodeArray[$key]['logo'] }}" alt="" class="thumb-md rounded-circle mr-2"> {{ $category['name'] }}
                                                    </div>
                                                </td>
                                                <td>{{ $category['description'] }}</td>
                                                <td>
                                                    <img src={{ $decodeArray[$key]['image'] == "null" ? "images/users/user-2.jpg" : $decodeArray[$key]['image'] }} alt=""
                                                         class="thumb-md rounded-circle mr-2">
                                                </td>
                                                <td>{{ $category['parent_id'] }}</td>
                                                <td style="padding: 0px">
                                                    <div>
                                                        <button class="btn btn-outline-primary category-edit" data-id="{{ $category['id'] }}"><i class="far fa-edit"></i></button>
                                                    </div>
                                                </td>
                                                <td style="padding: 0px">
                                                    <div>
                                                        <button href="#" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach()
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                {{ $categories->links() }}
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

    </div>
@stop
