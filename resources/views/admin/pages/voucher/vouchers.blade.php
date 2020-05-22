@extends('admin.layouts.app')

@section('title')
    <title>Vouchers</title>
@stop

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Vouchers</h4>

                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="row mb-4 mt-2">
                                        <div class="col-sm-2">
                                            <h4 class="header-title">All Vouchers</h4>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-outline-success voucher-add">New voucher <img src="https://img.icons8.com/ultraviolet/24/000000/plus.png"/></button>
                                        </div>
                                    </div>

                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Description</th>
                                            <th>Expire Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($vouchers as $key => $voucher)
                                            <tr>
                                                <th>{{ $voucher->id }}</th>
                                                <td>{{ $voucher->voucher_code }}</td>
                                                <td>{{ $voucher->discount }} {{ $voucher->unit == 'percent' ? '%' : 'dollars' }}</td>
                                                <td>{{ $voucher->description }}</td>
                                                <td>{{ $voucher->end_date }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    {{ $vouchers->links() }}
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="report">

                    </div>
                </div>
                <!-- end page content-->

                @include('admin.pages.voucher.form')
            </div> <!-- container-fluid -->

        </div> <!-- content -->
        <footer class="footer">
            © 2020 <span class="d-none d-sm-inline-block">- From HaiNH with Love <i class="mdi mdi-heart text-danger"></i></span>
        </footer>

    </div>
@stop

@section('script')
    <script>
        $(document).on('click', '.voucher-add', function() {
            $('.voucherModal').modal('show');
        });

        $(document).on('submit', '.formVoucher', function(e) {
            let route = '{{ route('adminvouchers.store') }}'
            e.preventDefault();
            swal({
                title: 'Save change?',
                text: "All data will save!",
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((save) => {
                if (save) {
                    let code = $('#code').val();
                    let discount = $('#discount').val();
                    let unit = $('#unit').children('option:selected').val();
                    let description = $('#description').val();
                    let expiredDate = $('#expired-date').val();
                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            voucher_code: code,
                            discount: discount,
                            unit: unit,
                            description: description,
                            end_date: expiredDate,
                        },
                        success: function(response) {
                            swal({
                                title: "Added successfully!",
                                icon: "success"
                            });
                            window.location.reload();
                        },
                        error: function (data) {
                            alertify.error('Some thing went wrong!');
                            showVoucherErrorMessages(data);
                        }
                    });
                }
            });
        });

        function showVoucherErrorMessages(data) {
            if (data.status === 200) {
                swal("Ooops...", "Some thing went wrong", {
                    icon: "error",
                });
            }
            if (data.status === 422) {
                if (data.responseJSON.errors.voucher_code) {
                    $('#code').addClass('field-error');
                    $('#code-error').text(data.responseJSON.errors.voucher_code[0]);
                }
                if (data.responseJSON.errors.description) {
                    $('#description').addClass('field-error');
                    $('#description-error').text(data.responseJSON.errors.voucher_code[0]);
                }
                if (data.responseJSON.errors.discount) {
                    $('#discount').addClass('field-error');
                    $('#discount-error').text(data.responseJSON.errors.voucher_code[0]);
                }
                if (data.responseJSON.errors.end_date) {
                    $('#expired-date').addClass('field-error');
                    $('#expired-date-error').text(data.responseJSON.errors.voucher_code[0]);
                }
                if (data.responseJSON.errors.unit) {
                    $('#unit').addClass('field-error');
                    $('#unit-error').text(data.responseJSON.errors.voucher_code[0]);
                }
            }
        }

        $(document).on('input', '#code', function() {
            $('#code').removeClass('field-error');
            $('#code-error').text('');
        })
        $(document).on('input', '#description', function() {
            $('#description').removeClass('field-error');
            $('#description-error').text('');
        })
        $(document).on('input', '#discount', function() {
            $('#discount').removeClass('field-error');
            $('#discount-error').text('');
        })
        $(document).on('change', '#unit', function() {
            $('#unit').removeClass('field-error');
            $('#unit-error').text('');
        })
        $(document).on('input', '#expired-date', function() {
            $('#expired-date').removeClass('field-error');
            $('#expired-date-error').text('');
        })
    </script>
@stop
