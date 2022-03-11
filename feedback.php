<?php
$title = "Feedback";
$pg = "feedback";
include('header.php');
include('nav.php');
?>

<div class="app-content dashboard content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="user-page">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded">
                            <div class="card-body p-md-2 p-lg-3 p-xl-4">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>Feedback</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                        <div class="row align-items-end d-flex mb-1">
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-2 mt-2">
                                                <label>Show entries </label>
                                                <select class="w-100 form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-2 mt-2">
                                                <label for="" class="d-block">Sort by:</label>
                                                <select name="" class="w-100 form-control sort-select" id="">
                                                    <option value="">Latest</option>
                                                    <option value="">Earlier</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-2 mt-2">
                                                <label for="" class="d-block">From</label>
                                                <input type="date" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-2 mt-2">
                                                <label for="" class="d-block">To</label>
                                                <input type="date" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mt-2 offset-xl-1 offset-0">
                                                <div class="search-filter w-100">
                                                    <label>Search:</label>
                                                    <input type="search" class="form-control form-control-sm" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-table">
                                        <div class="main-tabble table-responsive">
                                            <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-borderless  dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="sorting_asc">S. No.</th>
                                                                    <th class="sorting">First Name</th>
                                                                    <th class="sorting">Last Name</th>
                                                                    <th class="sorting">Subject</th>
                                                                    <th class="sorting">Date</th>
                                                                    <th class="sorting">ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-detail.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".delete-feedback"><i class="fa fa-trash-alt"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="feedback-detail.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".delete-feedback"><i class="fa fa-trash-alt"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled"><a href="#" class="page-link"><i class="fa fa-chevron-left red"></i></a></li>
                                                                <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                                <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                                <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                                <li class="paginate_button page-item next disabled" i><a href="#" class="page-link"><i class="fa fa-chevron-right red"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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

<!-- Delet Feedback Popup -->
<div class="modal fade delete-feedback p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h3>Are you sure you want to delete
                                <span class="d-block">this Feedback?</span>
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