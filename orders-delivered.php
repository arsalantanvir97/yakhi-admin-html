<?php

$title = "Order delivered";
$pg = "orders";
include('header.php');
include('nav.php');

?>
<div class="app-content dashboard content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="order-detail">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded">
                            <div class="card-body p-md-2 p-lg-3 p-xl-4">
                                <div class="page-title mb-2">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h1><a href="orders.php"><i class="fa fa-angle-left"></i></a>Order Details</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-block mb-1">
                                    <div class="row ">
                                        <div class="col-12">
                                            <h3>Order & Account</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="card light-primary-bg">
                                                <div class="card-header">
                                                    <h4>Order Information</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <h4>Order Date</h4>
                                                            <p>mm/dd/yyyy</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Order Status</h4>
                                                            <p> Delivered</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card light-primary-bg">
                                                <div class="card-header">
                                                    <h4>Account Information</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <h4>Customer Name</h4>
                                                            <p>Abc</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Email</h4>
                                                            <p>test@email.com</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-block mb-1">
                                    <div class="row ">
                                        <div class="col-12 title">
                                            <h3>Address</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="card light-primary-bg">
                                                <div class="card-header">
                                                    <h4>Billing Address</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-xl-4">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-block mb-1">
                                    <div class="row ">
                                         <h3 class="col-md-6 col-12">Payment and Shipping</h3>
                                        <div class="col-md-6 col-12 align-self-end text-right">
                                            <a href="orders-invoice.php" class="btn btn-primary">Print Invoice</a>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="card light-primary-bg">
                                                <div class="card-header">
                                                    <h4>Payment Information</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Payment Method</h4>
                                                            <p>Card</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card light-primary-bg">
                                                <div class="card-header">
                                                    <h4>Shipping Information</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <h4>Shipping Method</h4>
                                                            <p>Flat Rate - Flat Rate</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Shipping Price</h4>
                                                            <p>$10.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-block ">
                                    <div class="row ">
                                        <div class="col-12 title">
                                            <h3>Products</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="card mb-0 light-primary-bg">
                                                <div class="table-responsive">
                                                    <table class="table shop_table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-sku">SKU</th>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-color">Color</th>
                                                                <th class="product-color">Size</th>
                                                                <th class="product-quantity">Qty</th>
                                                                <th class="product-price-per">Price per unit</th>
                                                                <th class="product-price">Price </th>
                                                                <th class="product-subtotal">Sub Total</th>
                                                                <th class="product-tax">Tax Amount</th>
                                                                <th class="product-tax-amount">Tax Percent</th>
                                                                <th class="product-total">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="product-sku" data-title="sku">1sdnk</td>
                                                                <td class="product-name">Product abc</td>
                                                                <td class="product-color" data-title="sku">Red</td>
                                                                <td class="product-color" data-title="size">Large</td>
                                                                <td class="product-quantity" data-title="quantity">1</td>
                                                                <td class="product-price-per" data-title="sku">$00.00</td>
                                                                <td class="product-price" data-title="sku">$00.00</td>
                                                                <td class="product-subtotal" data-title="subtotal">$00.00</td>
                                                                <td class="product-tax" data-title="tax">$20.00</td>
                                                                <td class="product-tax-amount" data-title="tax-amount">$00.00</td>
                                                                <td class="product-total" data-title="total">$00.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row info-block justify-content-end">
                                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-end">
                                        <table cellspacing="0" class="table total-table table-borderless mt-5">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Sub Total</th>
                                                    <td data-title="Subtotal"><span class="amount"><span class="currencySymbol">$</span>44.00</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <th>Shipping </th>
                                                    <td data-title="Subtotal"><span class="amount"><span class="currencySymbol">$</span>0.00</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tax</th>
                                                    <td data-title="Total"><span class="amount"><span class="currencySymbol">$</span>$52.80</span></strong> </td>
                                                </tr>
                                                <tr class="order-total light-primary-bg">
                                                    <th>Total</th>
                                                    <td data-title="Total"><span class="amount"><span class="currencySymbol">$</span>$52.80</span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </td>

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