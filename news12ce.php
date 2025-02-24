<?php
include "header.php"
?>

<!--<body>


    
<div class="body-inner">
    
<div id="topbar" class="d-xl-block d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="top-menu-box top-menu" style="float:right;">

                    <li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>

                </ul>
            </div>
            <div class="d-none" style="display:none;">
                <div class="social-icons social-icons-colored-hover">
                    <ul>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    
<header id="header" data-transparent="true" data-fullwidth="true" class="light submenu-light"
    style="background-color: #FFF;">
    <div class="header-inner">
        <div class="container">
            
<div id="logo">
    <a href="index.php"><span class=""><img src="static/images/NY_Imaging_Specialists.png"
                style="max-width:250px;" alt="<?php echo $name; ?>  Logo" /></span></a>
</div>




<div class="header-extras">
    <ul>

        <li class="d-none d-xl-block d-lg-block">
            <a href="<?php echo $url; ?>/appointment.php" class="btn btn-rounded btn-sm"
                style="background-color: rgb(76,66,135);border-color: rgb(76,66,135); color: #FFF;">Make
                Appointment</a>
        </li>

    </ul>
</div>





<div id="mainMenu-trigger">
    <button class="lines-button x"> <span class="lines"></span></button>
</div>



<div id="mainMenu" class="light">
    <div class="container">
        <nav>
            <ul>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="people.php">Our Team</a></li>


                <li>
                    <a href="our-equipment/index.php">Services</a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="dexa-scan/index.php">Bone Density</a></li>
                        <li class=""><a href="computed-tomography-ct/index.php">Computed
                                Tomography (CT)</a></li>

                        <li class=""><a
                                href="main-interventional-radiology-oncology/index.php">Interventional
                                Radiology &amp; Oncology</a></li>
                        <li class=""><a href="lung-screening/index.php">Lung Screening</a></li>
                        <li class=""><a href="mammo/index.php">Mammography</a></li>
                        <li class=""><a href="mri/index.php">MRI</a></li>
                        <li class=""><a href="fdg-pet-ct-scan/index.php">PET/CT Scan</a></li>
                        <li class=""><a href="radionuclide-therapies-2/index.php">Radionuclide
                                Therapies</a></li>
                        <li class=""><a
                                href="transthoracic-echocardiogram-tte/index.php">Transthoracic
                                Echocardiogram (TTE)</a></li>
                        <li class=""><a href="ultrasound-2/index.php">Ultrasound</a></li>

                    </ul>
                </li>




                <li class="dropdown">
                    <a href="#">About</a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="insurance-billing-information/index.php">Accepted
                                Insurance</a></li>
                        <li class=""><a href="about-us/index.php">About Us</a></li>
                        <li class=""><a href="hipaa-notice-of-privacy-practices.php">HIPAA and
                                Compliance</a></li>
                        <li class=""><a href="ada-statement/index.php">ADA Statement</a></li>
                        <li class=""><a href="covid-policy/index.php">COVID-19 POLICY</a></li>
                        <li class=""><a href="nassau-county/index.php">Nassau County</a></li>
                        <li class=""><a href="news.php">News</a></li>
                    </ul>
                </li>
                <li><a href="payment/index.php">Payment</a></li>
                <li class="dropdown">
                    <a href="#">Portals</a>
                    <ul class="dropdown-menu">

                        <li class=""><a
                                href="https://accounts.flatiron.com/account/login/?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dfh.patient_portal%26nonce%3D17h7jA8gPTj9SJMK%26redirect_uri%3Dhttps%253A%252F%252Fcarespaceportal.com%252Fcb%26response_type%3Dcode%26scope%3Dopenid%2520profile%26state%3DxcuQzpriokHxgTi1">Patients</a>
                        </li>

                        <li class="dropdown-submenu"><span class="dropdown-arrow"></span><a
                                href="#">Physicians</a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="infinitt/index.php">INFINITT</a></li>

                                <li><a
                                        href="https://scriptsender.nycancer.com/">ScriptSender</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </li>

            </ul>

        </nav>
    </div>
</div>

</div>
</div>
</header>
</div>
<!-- end: Header -->


<section id="page-content">
    <div class="container">
        <!-- post content -->
        <!-- Page title -->
        <div class="page-title">
            <h1><a href="news.php" style="color:black;">



                    News & Updates





                </a></h1>
            <!--
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Blog</a> </li>
                            <li class="active"><a href="#">One Column</a> </li>
                        </ul>
                    </div>
                        -->
        </div>
        <br>
        <!-- end: Page title -->


        <!-- Blog -->
        <div id="blog" class="grid-layout post-1-columns m-b-30" data-item="post-item">



            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">


                        <a href="news/a-look-back-2022.php"> <img alt="" src="media/blog/machine.jpg"> </a>



                    </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>Jan. 27, 2023</span>
                        <h2><a href="news/a-look-back-2022.php">A Look Back at 2022</a></h2>
                        <p>Discover the advancements and achievements of <?php echo $name; ?> in 2022. From new technology
                            implementations to successful projects, this overview will give you a glimpse into
                            the company&#39;s progress and future plans. Don&#39;t miss out on this insightful
                            look back at the year!</p>
                        <a href="news/a-look-back-2022.php" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">


                        <a href="news/lung-cancer-screening-benefits.php"> <img alt=""
                                src="media/blog/lowdose_nyimg.jpg"> </a>



                    </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>Jan. 26, 2023</span>
                        <h2><a href="news/lung-cancer-screening-benefits.php">The Benefits of Low-Dose CT Scans
                                for Lung Cancer Screening</a></h2>
                        <p>The Benefits of Low-Dose CT Scans for Lung Cancer Screening</p>
                        <a href="news/lung-cancer-screening-benefits.php" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">


                        <a href="news/new-year-new-me.php"> <img alt="" src="media/blog/NewYearNewMe.jpg"> </a>



                    </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>Dec. 30, 2022</span>
                        <h2><a href="news/new-year-new-me.php">New Year, New Me?</a></h2>
                        <p>The new year can be a stressful time for anyone and making resolutions can only add
                            to this stress. This is why you should stop making new year&#39;s resolutions and
                            focus on small daily goals.</p>
                        <a href="news/new-year-new-me.php" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">


                        <a href="news/holiday-fun-pack.php"> <img alt="" src="media/blog/holidayhousecover.jpg">
                        </a>



                    </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>Dec. 20, 2022</span>
                        <h2><a href="news/holiday-fun-pack.php">Printable Holiday Fun Pack</a></h2>
                        <p>Downloadable Holiday Coloring Books!</p>
                        <a href="news/holiday-fun-pack.php" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">


                        <a href="news/interventional_radiology"> <img alt=""
                                src="media/blog/December_Sliders-09.png"> </a>



                    </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>Dec. 1, 2022</span>
                        <h2><a href="news/interventional_radiology">Interventional Radiology</a></h2>
                        <p>The interventional radiology (IR) team performs minimally invasive therapies using
                            imaging to guide minimally invasive procedures that diagnose, treat, and cure many
                            conditions.</p>
                        <a href="news/interventional_radiology" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->




        </div>
        <!-- end: Blog -->

        <div class='center'>
            <ul class="pagination">


                <li class="page-item"><a class="page-link" href="news0ada.php?offset=40"><i
                            class="fa fa-angle-left"></i></a></li>


                <li class="page-item active"><a class="page-link">10</a></li>


                <li class="page-item"><a class="page-link" href="newse164.php?offset=50"><i
                            class="fa fa-angle-right"></i></a></li>


            </ul>
        </div>


        <!-- end: Pagination -->
    </div>
    <!-- end: post content -->
</section> <!-- end: Content -->


<?php
include "footer.php"
?>