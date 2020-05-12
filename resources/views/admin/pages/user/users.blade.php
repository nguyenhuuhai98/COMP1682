@extends('admin.layouts.app')

@section('title')
    <title>Manage Users</title>
@stop
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Users</h4>
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
                                            <h4 class="header-title">All Users</h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-outline-success user-add">Add User <img src="https://img.icons8.com/ultraviolet/24/000000/plus.png"/></button>
                                        </div>
                                    </div>

                                    <table class="table table-bordered dt-responsive nowrap userTable">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                <span>{{ $user->name }}</span>
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->birthday }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->role['name'] }}</td>
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
        </footer

        <!-- modal content -->
        @include('admin.pages.user.form')
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
    <script>
        $(document).on('ready', function () {
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.user-add', function() {
            $('.userModal').modal('show');
            $('.formUser').attr('_method', 'post');
        });
        $(document).on('submit', '.formUser', function(e) {
            e.preventDefault();
            let routeCreateUser = '{{ route('adminusers.store') }}'
            swal({
                title: 'Save change?',
                text: "All data will save!",
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((save) => {
                if (save) {
                    let userName = $('#userName').val();
                    let phone = $('#phone').val();
                    let email = $('#email').val();
                    let birthday = $('#birthday').val();
                    let gender = $('input[name=gender]:checked').val();
                    let address = $('#address').val();
                    let role = $('select#role').children('option:selected').val();
                    let method = $('.formUser').attr('method');
                    let _method = $('.formUser').attr('_method');
                    $.ajax({
                        method: method,
                        url: routeCreateUser,
                        data: {
                            userName: userName,
                            phone: phone,
                            email: email,
                            birthday: birthday,
                            gender: gender,
                            address: address,
                            role: role,
                        },success: function(response) {
                            let row = [
                                response.id,
                                userName,
                                phone,
                                email,
                                birthday,
                                address,
                                response.role.name,
                            ];
                            if (_method == 'post') {
                                swal({
                                    title: "Added successfully!",
                                    icon: "success"
                                });
                                $('.userTable').DataTable().row.add(row).draw();
                            } else {

                            }
                            $('.userModal').modal('hide');
                            clearUserData();
                        }
                    });
                }
            });
        });

        function clearUserData() {
            $('.formUser').trigger('reset');
        }
    </script>
@stop
