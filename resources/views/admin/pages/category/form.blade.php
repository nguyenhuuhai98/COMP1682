
<div id="myModal" class="categoryModal modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 categoryModalLabel" id="">Category form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post" class="formCategory" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="cat-name" name="name" placeholder="Enter Category Name">
                                <ul class="block-error message-error" id="category-name-error">
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" id="cat-parent-id" name="parent-id">Parent Category</label>
                            <div class="col-sm-10">
                                <select class="form-control select2 " name="parent" id="parent-category">
                                    <option value="">Select parent categories</option>
                                    {{ handleCategory($categories) }}
                                </select>
                                <ul class="block-error message-error" id="category-parent-error">
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="search" id="cat-description" name="description" ></textarea>
                                <ul class="block-error message-error" id="category-description-error">
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Logo</label>
                            <div class="form-group col-sm-7">
                                <input type="file" class="filestyle" data-buttonname="btn-secondary" name="category-logo" id="category-logo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-7">
                                <input type="file" class="filestyle " data-buttonname="btn-secondary" name="category-image" id="category-image">
                            </div>
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
