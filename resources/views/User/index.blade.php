

            @include('User.Layout.header')
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            @include('User.Layout.categories')
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

    <!--================================
    START HERO AREA
=================================-->

@include('User.Layout.baner')
    <!--================================
    START FEATURE AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
    <section class="products py-0">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Newest Release Products</h2>
                        </div>

                        <div class="filter__menu">
                            <p>Filter by:</p>
                            <div class="filter__menu_icon">
                                <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="svg" src="{{asset('User/images/svg/menu.svg')}}" alt="menu icon">
                                </a>

                                <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                    <li>
                                        <a href="#">Trending items</a>
                                    </li>
                                    <li>
                                        <a href="#">Best seller</a>
                                    </li>
                                    <li>
                                        <a href="#">Best rating</a>
                                    </li>
                                    <li>
                                        <a href="#">Low price</a>
                                    </li>
                                    <li>
                                        <a href="#">High price</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
          
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{asset('User/images/p1.jpg')}}" alt="Product Image">
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>Rs 37,000</h4>
                            </a>
                          

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                
                                    <span>15 Days Ago</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

           
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="all-products.html" class="btn btn--lg btn--round"  style="background-color: black;">Load More</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
    <section class="followers-feed py-4">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Fresh Recommendations</h2>
                        </div>

                        <div class="product__slider-nav follow_feed_nav rounded"   style="background-color: black">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="{{asset('User/images/p4.jpg')}}" alt="Product Image">
                                
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4>Rs 60,000</h4>
                                </a>
                                

                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet congue.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                   
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90</p>
                                </div>
                                <div class="sell">
                                    <p>
                                        
                                        <span>16 Days Ago</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                        
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- start /.container -->
    </section>
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

  


   

   
  
    <section>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-1"></div>
            <div class="col-lg-4 col-md-4 col-4">
                <img src="{{asset('User/images/phone-app.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-3">
                <h1 style="font-weight: bold; margin-top: 10px;">TRY THE OLX APP</h1><br>
                <p>Buy, sell and find just about anything using the app on your mobile.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <h5 style="font-weight: bold;  margin-top: 40px;">GET YOUR APP TODAY</h5>
                <img src="{{asset('User/images/appstore_2x.png')}}" alt="" style=" margin-top: 15px;">
                  <img src="{{asset('User/images/playstore_2x.png')}}" alt="" style=" margin-top: 15px;">
            </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    END CALL TO ACTION AREA
=================================-->

    <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area">
        @include('User.Layout.bigFooter')
        <!-- end /.footer-big -->
        @include('User.Layout.miniFooter')     
    </footer>
    <!--================================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    @include('User.Layout.script')
</body>
</html>