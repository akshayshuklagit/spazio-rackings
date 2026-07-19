<header class="<?php echo isset($header_class) ? $header_class : 'site-header header-style-3 nav-wide header-fixed mobile-sider-drawer-menu'; ?>">

        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="<?php echo isset($main_bar_class) ? $main_bar_class : 'main-bar bg-white'; ?>">
                <div class="container-fluid clearfix">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.php" style="text-decoration: none; display: flex; align-items: center; height: 100%;">
                                <img src="images/logo-1.png" alt="Spazio Racking System" style="max-height: 50px; width: auto; max-width: 180px;" />
                            </a>
                        </div>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>
                    
                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">											
                            <ul class="list-unstyled social-bx text-black d-flex flex-wrap align-content-center">
                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>                                 
                    </div>
                    <!-- EXTRA Nav -->
                                            
                    <!-- MAIN NAVIGATION -->
                    <div class="header-nav navbar-collapse collapse justify-content-center">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li>
                                <a href="javascript:;">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.php">All Services</a></li>
                                    <li><a href="supermarket-racking-solutions.php">Supermarket Racking Solutions</a></li>
                                    <li><a href="retail-display-racking-solutions.php">Retail Display Racking Solutions</a></li>
                                    <li><a href="warehouse-storage-solutions.php">Warehouse Storage Solutions</a></li>
                                    <li><a href="industrial-racking-solutions.php">Industrial Racking Solutions</a></li>
                                    <li><a href="departmental-store-racking.php">Departmental Store Racking</a></li>
                                    <li><a href="custom-racking-systems.php">Custom Racking Systems</a></li>
                                    <li><a href="retail-fixtures-accessories.php">Retail Fixtures & Accessories</a></li>
                                    <li><a href="shopping-trolleys-baskets.php">Shopping Trolleys & Baskets</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>