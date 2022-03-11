<?php
$title = "Dashboard";
$pg = "Dashboard";
include('header.php');
include('nav.php');

?>
<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded">
                            <div class="card-body p-md-2 p-lg-3 p-xl-4">
                                <div class="page-title mb-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12">
                                            <h1>Dashboard</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-dashboard mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-2 d-flex align-items-stretch box-6">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="media d-flex align-items-center w-100">
                                                        <div class="media-body text-left">
                                                            <div class="card-title">TOTAL CUSTOMERS</div>
                                                            <h3>7000.00</h3>
                                                        </div>
                                                        <div class="align-self-center text-right">
                                                            <svg class="radial-progress" data-percentage="50" viewBox="0 0 80 80">
                                                                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                                                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                                                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">50%</text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-md-0 mb-2 d-flex align-items-stretch box-6">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="media d-flex align-items-center w-100">
                                                        <div class="media-body text-left ">
                                                            <div class="card-title">TOTAL ORDERS</div>
                                                            <h3>7000.00</h3>
                                                        </div>
                                                        <div class="align-self-center text-right">
                                                            <svg class="radial-progress" data-percentage="95" viewBox="0 0 80 80">
                                                                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                                                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                                                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">95%</text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-2 d-flex align-items-stretch box-6">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="media d-flex align-items-center w-100">
                                                        <div class="media-body text-left ">
                                                            <div class="card-title">TOTAL SALE</div>
                                                            <h3>$1500</h3>
                                                        </div>
                                                        <div class="align-self-center text-right">
                                                            <svg class="radial-progress" data-percentage="50" viewBox="0 0 80 80">
                                                                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                                                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                                                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">50%</text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-3 pl-md-0 mb-2 d-flex align-items-stretch box-6">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="media d-flex align-items-center w-100">
                                                        <div class="media-body text-left ">
                                                            <div class="card-title">AVERAGE ORDER SALE</div>
                                                            <h3>$1500</h3>
                                                        </div>
                                                        <div class="align-self-center text-right">
                                                            <svg class="radial-progress" data-percentage="50" viewBox="0 0 80 80">
                                                                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                                                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                                                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">50%</text>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-between tckt-srch-row text-left mb-3">
                                                    <h2>Sales Analytics</h2>
                                                    <div class="select-input">
                                                        <select name="" id="">
                                                            <option value="">Year</option>
                                                            <option value="">2012</option>
                                                            <option value="">2012</option>
                                                            <option value="">2012</option>
                                                            <option value="">2012</option>
                                                            <option value="">2012</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-main position-relative">
                                                <div class="row">
                                                    <div class="col-12 col-xl-12 text-center">
                                                        <img src="images/sales-stats.png" alt="">
                                                        <p class="text-dark mt-2">Months</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-tabble table-responsive">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row mt-3">
                                            <div class="col-sm-12">
                                                <h2>Order ID</h2>
                                                <table class="table table-borderless dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO</th>
                                                            <th>Base Total</th>
                                                            <th>Order Date</th>
                                                            <th>STATUS</th>
                                                            <th>Billed To</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="">01</td>
                                                            <td>$100</td>
                                                            <td>DD\mm\yyyy</td>
                                                            <td>In Progress</td>
                                                            <td>Mark Carson</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="">01</td>
                                                            <td>$100</td>
                                                            <td>DD\mm\yyyy</td>
                                                            <td>In Progress</td>
                                                            <td>Mark Carson</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="">01</td>
                                                            <td>$100</td>
                                                            <td>DD\mm\yyyy</td>
                                                            <td>In Progress</td>
                                                            <td>Mark Carson</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

<?php
include('footer.php');
?>