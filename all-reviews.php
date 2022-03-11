<?php
$title = "ALL REVIEWS";
$pg = "all-reviews";
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
                                <div class="page-title mb-0">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-9">
                                            <h1>All Reviews</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-summary">
                                    <div id="reviews" class="reviews">
                                        <div id="comments">
                                            <ol class="commentlist p-0">
                                                <li class="review">
                                                    <div class="row">
                                                        <div class="comment-text col-sm-1 mb-2">
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
                                                        <div class="comment-text col-sm-1 mb-2">
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
                                                        <div class="comment-text col-sm-1 mb-2">
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