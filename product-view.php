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
                                            <div class="d-flex mt-2">
                                                <div class="preview-thumbs text-center">
                                                    <img src="images/product-thumb-1.png" alt="" class="h-100">
                                                </div>
                                                <div class="preview-thumbs text-center"><img src="images/product-thumb-2.png" alt="" class="h-100">
                                                </div>
                                                <div class="preview-thumbs text-center"><img src="images/product-thumb-3.png" alt="" class="h-100"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 pt-2">
                                            <h3 class="product-title mb-1">ABC Product Name</h3>
                                            <div class="product-rating mb-1">
                                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="product-meta">
                                                <span class="status-wrapper">Status: <span class="status">Active</span></span>
                                                <span class="price">Price per unit: <span class="price-amount amount"><span class="price-currencySymbol">$</span>100.00</span></span>
                                            </div>
                                            <div class="product-meta mt-3">
                                                <span class="posted-in">Category: <a href="#" rel="tag">ABC</a></span>
                                                <span class="sku-wrapper">SKU # <span class="sku">123</span></span>
                                                <span class="product-variations">
                                                    <select class="js-example-placeholder-single form-control">
                                                        <option>Select Quality Range</option>
                                                        <option>Base Range</option>
                                                        <option>Range A - 10</option>
                                                        <option>Range B - 20</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="product-summary">
                                    <div class="description">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <h3>Product Specification</h3>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                                                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                                                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                                                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                                    dolor sit amet.
                                                </p>
                                                <!-- <ul>
                                                    <li>15 Amp</li>
                                                    <li>12 Volt</li>
                                                    <li>N/E LA3 Charging</li>
                                                    <li>18-20 Ah Battery Type : Standard ACID & AGM</li>
                                                    <li>Solid Metal Housing</li>
                                                    <li>Standard Lead Acid</li>
                                                    <li>Ammeter Included</li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="additional-information">
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
                                    </div> -->

                                    <div class="rating-wrapper">
                                        <div class="row d-flex review-ratings">
                                            <div class="col-12 col-lg-4 col-xl-5">
                                                <h3>Reviews</h3>
                                                <h4 class="primary-text mt-2">4.5 Star</h4>
                                                <div class="star-rating mt-1 mb-1" role="img" aria-label="Rated 4.00 out of 5">
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star rated"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <div class="reviews-count">4.5 Ratings & 2 Reviews</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8 col-xl-7 mt-2">
                                                <div class="counter-container flex-row d-flex flex-md-row flex-column">
                                                    <a href="#" title="" class="d-flex flex-md-row flex-column">
                                                        <span class="counter-label">5 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar" style="width:50%;"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">50%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex flex-md-row flex-column">
                                                    <a href="#" title="" class="d-flex flex-md-row flex-column">
                                                        <span class="counter-label">4 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar" style="width:40%;"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">40%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex flex-md-row flex-column">
                                                    <a href="#" class="d-flex flex-md-row flex-column" title="Click to see reviews that provided a rating of 3 stars">
                                                        <span class="counter-label">3 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">0%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex flex-md-row flex-column">
                                                    <a href="#" title="" class="d-flex flex-md-row flex-column">
                                                        <span class="counter-label">2 stars</span>
                                                        <span class="counter-back">
                                                            <span class="counter-bar"></span>
                                                        </span>
                                                    </a>
                                                    <span class="counter-count">0%</span>
                                                </div>
                                                <div class="counter-container flex-row d-flex flex-md-row flex-column">
                                                    <a href="#" title="" class="d-flex flex-md-row flex-column">
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
                                            <ol class="commentlist p-0">
                                                <li class="review">
                                                    <div class="row">
                                                        <div class="comment-text col-sm-1">
                                                            <img class="rounded-circle" src="images/post-avatar.png">
                                                        </div>
                                                        <div class="comment-text col-sm-9">
                                                            <h4 class="primary-text mb-0">Ben Döring</h4>
                                                            <small>Oct 27 - 8 Minutes read</small>
                                                            <p class="meta">
                                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                                            </p>
                                                            <div class="star-rating mt-1" role="img" aria-label="Rated 4.00 out of 5">
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="comment-dlt-btn col-sm-2 align-self-center mt-1 mt-sm-0 text-center">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="review">
                                                    <div class="row">
                                                        <div class="comment-text col-sm-1">
                                                            <img class="rounded-circle" src="images/post-avatar.png">
                                                        </div>
                                                        <div class="comment-text col-sm-9">
                                                            <h4 class="primary-text mb-0">Ben Döring</h4>
                                                            <small>Oct 27 - 8 Minutes read</small>
                                                            <p class="meta">
                                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                                                            </p>
                                                            <div class="star-rating mt-1" role="img" aria-label="Rated 4.00 out of 5">
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star rated"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="comment-dlt-btn col-sm-2 align-self-center mt-1 mt-sm-0 text-center">
                                                            <button type="button" class="btn delet" data-toggle="modal" data-target=".delete-review">
                                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="all-reviews text-right">
                                                    <a href="all-reviews.php">View all Reviews</a>
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

<!-- Review List Popup
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
</div> -->


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
                            <button type="submit" class="btn btn-secondary mr-1" data-dismiss="modal" aria-label="Close">yes</button>
                            <button type="submit" class="btn btn-primary ml-1">No</button>
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