@extends('admin.layouts.app')

@section('title')
    <title>Monthly Report</title>
@stop

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Monthly Report</h4>

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
                                        <div class="col-sm-1">
                                            <h4 class="header-title">Select month</h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="month" id="select-month">
                                                <option value="null" selected disabled="disabled">-- Select month to create report --</option>
                                                @foreach ($months as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="report">

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

@section('script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let route = '{{ route('admingenerate.monthly.report') }}';

        $(document).on('change', '#select-month', function() {
            var selectedMonth = $(this).children("option:selected").val();
            console.log(selectedMonth);
            $.ajax({
                url: route,
                type: 'POST',
                data: {
                    month: selectedMonth
                },
                success: function(response) {
                    swal("Create report successful!", {
                        icon: "success",
                    });
                    $('.report').empty();
                    $('.report').append(response);
                }
            });
        })

    </script>
@stop
