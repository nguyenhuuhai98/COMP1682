
<div id="myModal" class="productModal modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 productModalLabel" id="">Product form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="" method="post" class="formProduct" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="prod-name" name="name" placeholder="Enter Product Name">
                                    <ul class="block-error message-error" id="product-name-error">
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" id="category" name="category">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2 category" name="cat" id="cat">
                                        <option value="">Select category</option>
                                        {{ handleCategory($categories) }}
                                    </select>
                                    <ul class="block-error message-error" id="category-error">
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Barcode</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="prod-barcode" name="barcode" placeholder="Enter Product Barcode">
                                    <ul class="block-error message-error" id="product-barcode-error">
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" step="1" id="prod-price" name="price" placeholder="Enter Product Price">
                                    <ul class="block-error message-error" id="product-price-error">
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" name="calculate-unit">Calculate Unit</label>
                                <div class="col-sm-10">
                                    <select class="form-control calculate-unit">
                                        <option value="">Select Unit</option>
                                        <option value="Pack">Package</option>
                                        <option value="Box">Box</option>
                                    </select>
                                    <ul class="block-error message-error" id="category-error">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image 1</label>
                                <div class="form-group col-sm-9">
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="product1" id="product1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image 2</label>
                                <div class="form-group col-sm-9">
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="product2" id="product2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image 3</label>
                                <div class="form-group col-sm-9">
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="product3" id="product3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image 4</label>
                                <div class="form-group col-sm-9">
                                    <input type="file" class="filestyle" data-buttonname="btn-secondary" name="product4" id="product4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Short Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="search" id="prod-short-description" name="short-description" ></textarea>
                            <ul class="block-error message-error" id="product-short-description-error">
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="search" id="prod-description" name="description" ></textarea>
                            <ul class="block-error message-error" id="product-description-error">
                            </ul>
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

