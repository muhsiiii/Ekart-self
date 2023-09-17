<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekart | Homepage</title>
    <link rel="stylesheet" href="{{asset('home/css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@bbbootstrap.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">

                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Sign in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#">Ekart</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                            <div class="custom_dropdown" style="display: none;">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                        <div class="wishlist_count">10</div>
                                    </div>
                                </div>

                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                            <div class="cart_count"><span>3</span></div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="#">Cart</a></div>
                                            <div class="cart_price">$185</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->



                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

    </div>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>Quant trident shirts</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>310</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span>100% cotton</span>
                                        <span class="text-primary"> • </span>
                                        <span>Light weight</span>
                                        <span class="text-primary"> • </span>
                                        <span>Best finish<br /></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                        <span>Unique design</span>
                                        <span class="text-primary"> • </span>
                                        <span>For men</span>
                                        <span class="text-primary"> • </span>
                                        <span>Casual<br /></span>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">$13.99</h4>
                                        <span class="text-danger"><s>$20.99</s></span>
                                    </div>
                                    <h6 class="text-success">Free shipping</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Add to kart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>Quant olap shirts</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>289</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span>100% cotton</span>
                                        <span class="text-primary"> • </span>
                                        <span>Light weight</span>
                                        <span class="text-primary"> • </span>
                                        <span>Best finish<br /></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                        <span>Unique design</span>
                                        <span class="text-primary"> • </span>
                                        <span>For men</span>
                                        <span class="text-primary"> • </span>
                                        <span>Casual<br /></span>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">$14.99</h4>
                                        <span class="text-danger"><s>$21.99</s></span>
                                    </div>
                                    <h6 class="text-success">Free shipping</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Add to kart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>Quant ruybi shirts</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>145</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span>100% cotton</span>
                                        <span class="text-primary"> • </span>
                                        <span>Light weight</span>
                                        <span class="text-primary"> • </span>
                                        <span>Best finish<br /></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                        <span>Unique design</span>
                                        <span class="text-primary"> • </span>
                                        <span>For women</span>
                                        <span class="text-primary"> • </span>
                                        <span>Casual<br /></span>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">$17.99</h4>
                                        <span class="text-danger"><s>$25.99</s></span>
                                    </div>
                                    <h6 class="text-success">Free shipping</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Add to kart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->


<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #007bff">
        <!-- Left -->
        <div class="me-5">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Company name</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Here you can use rows and columns to organize your footer
                        content. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Products</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#!" class="text-white">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Bootstrap Angular</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#!" class="text-white">Your Account</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- End of .container -->

</html>