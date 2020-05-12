
<div id="myModal" class="userModal modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 userModalLabel" id="">User form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post" class="formUser" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="userName" name="userName" placeholder="Enter User Name">
                            <ul class="block-error message-error" id="userName-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter Phone">
                            <ul class="block-error message-error" id="phone-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email">
                            <ul class="block-error message-error" id="email-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2020-05-10" id="birthday" name="birthday">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-2">
                            <input type="radio" value="0" name="gender">Male
                        </div>
                        <div class="col-sm-2">
                            <input type="radio" value="1" name="gender">Female
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address">
                            <ul class="block-error message-error" id="address-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select name="role" id="role" class="form-control">
                                <option value="3">Staff</option>
                                <option value="4">Customer</option>
                            </select>
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
