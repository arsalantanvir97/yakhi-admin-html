<?php
$title = "Users";
$pg = "users";
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
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h1>Users</h1>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-6 text-right">
                                            <a href="new-user.php" class="btn btn-primary">New User</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTables_wrapper">
                                    <div class="user-listing-top">
                                        <div class="row align-items-end d-flex mb-1">
                                            <div class="col-xl-9">
                                                <div class="row align-items-center justify-content-start">
                                                    <div class="col-xl-3 col-md-6 mt-2">
                                                        <label>Show entries </label>
                                                        <select class="w-100 form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 mt-2">
                                                        <label for="" class="d-block">Sort by:</label>
                                                        <select name="" class="w-100 form-control sort-select" id="">
                                                            <option value="">Latest</option>
                                                            <option value="">Earlier</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 mt-2">
                                                        <label for="" class="d-block">From</label>
                                                        <input type="date" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 mt-2">
                                                        <label for="" class="d-block">To</label>
                                                        <input type="date" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="row align-items-center justify-content-end">
                                                    <div class="col-12">
                                                        <div class="search-filter w-100">
                                                            <label>Search:</label>
                                                            <input type="search" class="form-control form-control-sm" placeholder="Search">
                                                        </div>
                                                    </div>
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
                                                                    <th class="">S. No.</th>
                                                                    <th class="">First Name</th>
                                                                    <th class="">Last Name</th>
                                                                    <th class="">Email</th>
                                                                    <th class="">Status</th>
                                                                    <th class="">Registration Date</th>
                                                                    <th class="">ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>abc@abc.com</td>
                                                                    <td>Active</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".inactive-user"><i class="fa fa-ban"></i>Inactive</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>abc@abc.com</td>
                                                                    <td>Active</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".inactive-user"><i class="fa fa-ban"></i>Inactive</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>abc@abc.com</td>
                                                                    <td>Inactive</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".active-user"><i class="fa fa-check-circle"></i>Active</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="">01</td>
                                                                    <td>ABC</td>
                                                                    <td>ABC</td>
                                                                    <td>abc@abc.com</td>
                                                                    <td>Inactive</td>
                                                                    <td>mm/dd/yyyy</td>
                                                                    <td>
                                                                        <div class="btn-group ml-1">
                                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View Detail</a>
                                                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".active-user"><i class="fa fa-check-circle"></i>Active</a>
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

<!-- Active User Popup -->
<div class="modal fade active-user p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h3>Are you sure you want to mark this
                                <span class="d-block">user as Active ?</span>
                            </h3>
                            <button type="submit" class="btn btn-secondary mr-1" data-dismiss="modal" aria-label="Close">yes</button>
                            <button type="submit" class="btn btn-primary ">No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Inactive User Popup -->

<div class="modal fade inactive-user p-0"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <h3>Are you sure you want to mark this
                                <span class="d-block">user as Inactive ?</span>
                            </h3>
                            <button type="submit" class="btn btn-secondary mr-1" data-dismiss="modal" aria-label="Close">yes</button>
                            <button type="submit" class="btn btn-primary ">No</button>
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