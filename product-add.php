<?php
$title = "Products View";
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
                                        <div class="col-12 col-md-6 col-lg-9">
                                            <h1>Product Details</h1>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 text-right">
                                            <a href="product-edit.php" class="btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-gallery">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="product-preview text-center">
                                                <img src="images/product-preview.png" alt="" class="h-100">
                                            </div>

                                        </div>
                                        <div class="col-12 col-xl-6 mt-2 mt-xl-0 product-thumb-wrap">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 mb-1 mb-lg-0">
                                                    <div class="preview-thumbs text-center">
                                                        <img src="images/product-thumb-1.png" alt="" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center"><img src="images/product-thumb-2.png" alt="" class="h-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-0">
                                                <div class="col-12 col-lg-6">
                                                    <div class="preview-thumbs text-center"><img src="images/product-thumb-3.png" alt="" class="h-100"></div>
                                                </div>
                                                <div class="col-12 col-lg-6 mt-1 mt-lg-0">
                                                    <div class="preview-thumbs text-center"><img src="images/product-thumb-4.png" alt="" class="h-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-summary">
                                    <div class="summary">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="product-title mb-2">ABC Product Name</h3>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-8">
                                                <div class="product-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                        <i class="far fa-star rated"></i>
                                                        <i class="far fa-star rated"></i>
                                                        <i class="far fa-star rated"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>

                                                </div>
                                                <div class="product-meta">
                                                    <span class="status-wrapper">Status: <span class="status">Active</span></span>
                                                    <span class="price">Price per unit: <span class="price-amount amount"><span class="price-currencySymbol">$</span>100.00</span></span>
                                                </div>

                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="product-meta">
                                                    <span class="posted-in">Category: <a href="#" rel="tag">ABC</a></span>
                                                    <span class="sku-wrapper">SKU # <span class="sku">123</span></span>
                                                    <span class="product-variations">
                                                        <select class="js-example-placeholder-single form-control">
                                                            <option>Base Price</option>
                                                            <option>Range A - 10</option>
                                                            <option>Range B - 20</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <h3>Descriptions</h3>
                                                <ul>
                                                    <li>15 Amp</li>
                                                    <li>12 Volt</li>
                                                    <li>N/E LA3 Charging</li>
                                                    <li>18-20 Ah Battery Type : Standard ACID & AGM</li>
                                                    <li>Solid Metal Housing</li>
                                                    <li>Standard Lead Acid</li>
                                                    <li>Ammeter Included</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional-information">
                                        <div class="row">
                                            <div class="col-12 product-attributes">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <th>Size:</th>
                                                            <td>L, XL. S</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Colors:</th>
                                                            <td>
                                                                <p>Red, Orange, Yellow, Green, Blue</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rating-wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Customer Rating</h3>
                                            </div>
                                        </div>
                                        <div class="row d-flex review-ratings">
                                            <div class="col-12 col-lg-4 col-xl-5">
                                                <div class="star-rating mt-1 mb-1" role="img" aria-label="Rated 4.00 out of 5">
                                                    <i class="far fa-star rated"></i>
                                                    <i class="far fa-star rated"></i>
                                                    <i class="far fa-star rated"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <div class="reviews-count">4.5 Ratings & 2 Reviews</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8 col-xl-7 mt-2">
                                                <div class="counter-container flex-row d-flex align-items-center">
                                                    <a href="#" title="" class="d-flex align-items-center">
                                                        <span class="counter-label">5 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar" style="width:50%;"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">50%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex align-items-center">
                                                    <a href="#" title="" class="d-flex align-items-center">
                                                        <span class="counter-label">4 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar" style="width:40%;"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">40%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex align-items-center">
                                                    <a href="#" class="d-flex align-items-center" title="Click to see reviews that provided a rating of 3 stars">
                                                        <span class="counter-label">3 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">0%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex align-items-center">
                                                    <a href="#" title="" class="d-flex align-items-center">
                                                        <span class="counter-label">2 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">0%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex align-items-center">
                                                    <a href="#" title="" class="d-flex align-items-center">
                                                        <span class="counter-label">1 star</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="reviews" class="reviews">
                                        <div id="comments">
                                            <h3 class="mb-2">Reviews</h3>
                                            <ol class="commentlist p-0">
                                                <li class="review">
                                                    <div class="row">
                                                        <div class="comment-text col-sm-10">
                                                            <div class="description-txt">
                                                                <p>Good Product</p>
                                                            </div>
                                                            <div class="star-rating mt-1" role="img" aria-label="Rated 4.00 out of 5">
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p class="meta">
                                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                                            </p>
                                                        </div>
                                                        <div class="comment-dlt-btn col-sm-2 align-self-center mt-1 mt-sm-0">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="review">
                                                    <div class="row">
                                                        <div class="comment-text col-sm-10">
                                                            <div class="description-txt">
                                                                <p>Good Product</p>
                                                            </div>
                                                            <div class="star-rating mt-1" role="img" aria-label="Rated 4.00 out of 5">
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star rated"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p class="meta">
                                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                                            </p>
                                                        </div>
                                                        <div class="comment-dlt-btn col-sm-2 align-self-center mt-1 mt-sm-0">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="all-reviews text-right">
                                                    <a href="#" data-toggle="modal" data-target=".review-list">View all Reviews</a>
                                                </li>
                                            </ol>
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

<!-- Review List Popup -->
<div class="modal fade review-list p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <h3>All Reviews</h3>
                        <div id="review-list" class="position-relative height-500  scrollable-container media-list ps-container ps-theme-dark ps-active-y">
                            <ol class="commentlist">
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center mt-1 mt-sm-0">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center mt-1 mt-sm-0">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center mt-1 mt-sm-0">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center mt-1 mt-sm-0">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="review">
                                    <div class="row">
                                        <div class="comment-text col-lg-10">
                                            <div class="description-txt">
                                                <p>Good Product</p>
                                            </div>
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star rated"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p class="meta">
                                                Review by <span class="review-author">user Abc</span> on <time class="review-published-date" datetime="">July 30, 202020</time>
                                            </p>
                                        </div>
                                        <div class="comment-dlt-btn col-lg-2 align-self-center mt-1 mt-sm-0">
                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
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
                <form action="" method="post">
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