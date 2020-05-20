
<div id="myModal" class="product-plus-modal modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Multiple Select</label>
                                <div class="col-sm-8">
                                    <select class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        @foreach($products as $key => $product)
                                            <option value="{{ $product['id'] }}">{{ $product['barcode'] }}: {{ $product['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-form-label">Product Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="prod-name" name="name" placeholder="Enter Product Name">
                                    <ul class="block-error message-error" id="product-name-error">
                                    </ul>
                                </div>
                            </div>
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

