
<div id="myModal" class="voucherModal modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 userModalLabel" id="">New voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post" class="formVoucher" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Voucher Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="code" name="code" placeholder="Enter Voucher Code">
                            <ul class="block-error message-error" id="code-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Discount</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" id="discount" name="discount" placeholder="Enter Discount">
                            <ul class="block-error message-error" id="discount-error">
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <select name="unit" id="unit" class="form-control">
                                <option value="" disabled="disabled" selected>Select Unit</option>
                                <option value="percent">Percent</option>
                                <option value="dollars">Dollars</option>
                            </select>
                            <ul class="block-error message-error" id="unit-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Expired Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2020-05-10" id="expired-date" name="expired-date">
                        </div>
                        <ul class="block-error message-error" id="expired-date-error">
                        </ul>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="description" name="description" placeholder="Enter Description">
                            <ul class="block-error message-error" id="description-error">
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        </a>
                        <a href="#" id="action">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Save changes</button>
                        </a>
                    </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
