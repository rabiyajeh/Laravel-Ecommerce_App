@extends("layouts.base")
@section("content")
 <!-- Order Success Section Start -->
 <section class="pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="success-icon">
                        <div class="main-container">
                            <div class="check-container">
                                <div class="check-background">
                                    <svg viewbox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="check-shadow"></div>
                            </div>
                        </div>

                        <div class="success-contain">
                            <h4>Order Success</h4>
                            <h5 class="font-light">Payment Is Successfully Processsed And Your Order Is On The Way</h5>
                            <h6 class="font-light">Transaction ID:267676GHERT105467</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section End -->

    <!-- Oder Details Section Start -->
    <section class="section-b-space cart-section order-details-table">
        <div class="container">
            <div class="title title1 title-effect mb-1 title-left">
                <h2 class="mb-3">Order Details</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="col-sm-12 table-responsive">
                        <table class="table cart-table table-borderless">
                            <tbody>
                                <tr class="table-order">
                                    <td>
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/fashion/product/front/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p>Product Name</p>
                                        <h5>Outwear & Coats</h5>
                                    </td>
                                    <td>
                                        <p>Quantity</p>
                                        <h5>1</h5>
                                    </td>
                                    <td>
                                        <p>Price</p>
                                        <h5>$63.54</h5>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td>
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/fashion/product/front/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="font-light">Product Name</p>
                                        <h5>Jacket & Cap</h5>
                                    </td>
                                    <td>
                                        <p class="font-light">Quantity</p>
                                        <h5>5</h5>
                                    </td>
                                    <td>
                                        <p class="font-light">Price</p>
                                        <h5>$57.10</h5>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td>
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/fashion/product/front/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="font-light">Product Name</p>
                                        <h5>New Fashion</h5>
                                    </td>
                                    <td>
                                        <p class="font-light">Quantity</p>
                                        <h5>1</h5>
                                    </td>
                                    <td>
                                        <p class="font-light">Price</p>
                                        <h5>$63.25</h5>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5 class="font-light">Subtotal :</h5>
                                    </td>
                                    <td>
                                        <h4>$55.00</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5 class="font-light">Shipping :</h5>
                                    </td>
                                    <td>
                                        <h4>$12.00</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5 class="font-light">Tax(GST) :</h5>
                                    </td>
                                    <td>
                                        <h4>$10.00</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h4 class="theme-color fw-bold">Total Price :</h4>
                                    </td>
                                    <td>
                                        <h4 class="theme-color fw-bold">$6935.00</h4>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="order-success">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <h4>summery</h4>
                                <ul class="order-details">
                                    <li>Order ID: 5563853658932</li>
                                    <li>Order Date: October 22, 2018</li>
                                    <li>Order Total: $907.28</li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h4>shipping address</h4>
                                <ul class="order-details">
                                    <li>Gerg Harvell</li>
                                    <li>568, Suite Ave.</li>
                                    <li>Austrlia, 235153 Contact No. 48465465465</li>
                                </ul>
                            </div>

                            <div class="col-12">
                                <div class="payment-mode">
                                    <h4>payment method</h4>
                                    <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking
                                        acceptance subject to device availability.</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="delivery-sec">
                                    <h3>expected date of delivery: <span>october 22, 2018</span></h3>
                                    <a href="order-tracking.php">track order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Details Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
    @endsection