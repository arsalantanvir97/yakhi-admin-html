<?php
$title = "Products View Edit";
$pg = "products";
include('header.php');
include('nav.php');
?>

<div class="app-content dashboard content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="page-view-page">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded">
                            <div class="card-body p-md-2 p-lg-3 p-xl-4">
                                <div class="page-title mb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h1>Product Details</h1>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-6 text-right">
                                            <a href="product-add.php" class="btn btn-primary">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-gallery">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="product-preview text-center position-relative">
                                                <img src="images/product-preview.png" alt="">

                                                <div class="d-inline-block align-bottom actions-buttons">
                                                    <input type="file" id="upload" name="file">
                                                    <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                        <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                    </button>
                                                    <button type="button" class="btn upload">
                                                        <label for="upload" class="d-block mb-0">
                                                            <i class="fa fa-upload"></i>
                                                        </label>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="primary-text pt-2 pl-2">Please note that you can upload up to 5 images only</p>

                                        </div>
                                        <div class="col-12 col-lg-6 product-thumb-wrap">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center">
                                                        <img src="images/product-thumb-1.png" alt="">
                                                        <input type="checkbox" id="checkbox_one" name="question1" data-trigger="hidden_fields_one" class="trigger">
                                                        <div id="hidden_fields_one" class="align-bottom actions-buttons" style="display:none;">
                                                            <input type="file" id="upload" name="file">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn upload">
                                                                <label for="upload" class="d-block mb-0">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center">
                                                        <img src="images/product-thumb-1.png" alt="">
                                                        <input type="checkbox" id="checkbox_one" name="question1" data-trigger="hidden_fields_two" class="trigger">
                                                        <div id="hidden_fields_two" class="align-bottom actions-buttons" style="display:none;">
                                                            <input type="file" id="upload" name="file">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn upload">
                                                                <label for="upload" class="d-block mb-0">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-0">
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center">
                                                        <img src="images/product-thumb-1.png" alt="">
                                                        <input type="checkbox" id="checkbox_one" name="question1" data-trigger="hidden_fields_three" class="trigger">
                                                        <div id="hidden_fields_three" class="align-bottom actions-buttons" style="display:none;">
                                                            <input type="file" id="upload" name="file">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn upload">
                                                                <label for="upload" class="d-block mb-0">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center">
                                                        <img src="images/product-thumb-4.png" alt="">
                                                        <input type="checkbox" id="checkbox_one" name="question1" data-trigger="hidden_fields_four" class="trigger">
                                                        <div id="hidden_fields_four" class="align-bottom actions-buttons" style="display:none;">
                                                            <input type="file" id="upload" name="file">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn upload">
                                                                <label for="upload" class="d-block mb-0">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-form">
                                    <div class="user-block">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mb-2">
                                                    <label>Product Title</label>
                                                    <input type="text" class="form-control" placeholder="Title ABC">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Category</label>
                                                    <select id="" class="form-control">
                                                        <option value="">Select Category Abc</option>
                                                        <option value="small">Category Abc</option>
                                                        <option value="medium">Category Ab</option>
                                                        <option value="large">Category Ac</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Status</label>
                                                    <select id="" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="small">Active</option>
                                                        <option value="medium">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mb-2">
                                                    <label>Base Price</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder=" Abc">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Description</label>
                                                    <div class="position-relative">
                                                        <textarea class="form-control" placeholder="Confirm New Password"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group mb-2 price-quality-range">
                                                <label>Price Quantity Range</label>
                                                <input type="text" class="form-control" placeholder="Add">
                                                <i class="fas fa-plus plus-btn add-range"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group mb-2">
                                                <div style="display:none;" class="range-a col-12 form-group mb-2">
                                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                                        <h4>Range A</h4>
                                                        <div class="delete-range d-flex justify-content-center align-items-center remove-range">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <label>Range Starting Quantity</label>
                                                        <select id="" class="form-control">
                                                            <option value="">10</option>
                                                            <option value="small">20</option>
                                                            <option value="medium">30</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-2">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Delet Review Popup -->
<div class="modal fade delete-review p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fa fa-question red"></i>
                            <h3>Are you sure you want to delete this
                                <span class="d-block">review ?</span>
                            </h3>
                            <button type="submit" class="btn btn-primary mr-1">yes</button>
                            <button type="submit" class="btn btn-secondary ml-1" data-dismiss="modal" aria-label="Close">No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>