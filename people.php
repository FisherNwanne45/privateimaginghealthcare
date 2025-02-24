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


<section class="background-grey p-t-100 p-b-100">
    <div class="container">
        <div class="heading-text heading-section">

            <h2>Our Providers</h2>

        </div>

        <div class="row team-members m-b-40">



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_tony_abraham.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Abraham_Web72dpi-new-250x300.jpg"
                                alt="Dr. Tony Abraham picture" style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Tony Abraham
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Nuclear Medicine and
                                Theranostics</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr-varghese-cherian.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Cherian_150dpi2-1-225x300.jpg"
                                alt="Dr. Varghese Cherian picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Varghese Cherian
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Chest Imaging</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/jareddunkin.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Dunkin_73_300x400.jpg" alt="Dr. Jared M. Dunkin picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Jared M. Dunkin
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Neuroradiology</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/anthony-gilet-md.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Gilet-Anthony-2014-06-20-683x1024.jpg"
                                alt="Dr. Anthony Gilet picture" style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Anthony Gilet
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Body Imaging</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/michael-j-drabkin-md.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Drabkin_72dpi-2_5bNvuJG.jpg"
                                alt="Dr. Michael J. Drabkin picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Michael J. Drabkin
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Interventional Radiology
                                and Interventional Oncology</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/corinne-e-tobin.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Tobin.jpg" alt="Dr. Corinne E. Tobin picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Corinne E. Tobin
                            </h3><span style="font-size:.9em;color:#484848;">Chief of Breast Imaging</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_stacey_gandhi.php">
                        <div class="team-image">
                            <img src="media/profile_pic/staceyghandi_web_1.jpg" alt="Dr. Stacey Gandhi picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Stacey Gandhi
                            </h3><span style="font-size:.9em;color:#484848;">Breast Imaging Director</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/julian-safir.php">
                        <div class="team-image">
                            <img src="media/profile_pic/safirheadshot.jpg" alt="Dr. Julian Safir picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Julian Safir
                            </h3><span style="font-size:.9em;color:#484848;">Board Certified Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/matthew_comito.php">
                        <div class="team-image">
                            <img src="media/profile_pic/Comito_72dpi_1.jpg" alt="Dr. Matthew Comito picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Matthew Comito
                            </h3><span style="font-size:.9em;color:#484848;">Chief Radiology Officer</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/pejman_dalaie.php">
                        <div class="team-image">
                            <img src="media/profile_pic/PejmanDalaie_WEB_1.jpg" alt="Dr. Pejman Dalaie picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Pejman Dalaie
                            </h3><span style="font-size:.9em;color:#484848;">Nuclear Medicine Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_dinko_franceschi.php">
                        <div class="team-image">
                            <img src="media/profile_pic/DinkoFranceschi_WEB.jpg"
                                alt="Dr. Dinko Franceschi picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Dinko Franceschi
                            </h3><span style="font-size:.9em;color:#484848;">Nuclear Medicine Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_krystal_airola.php">
                        <div class="team-image">
                            <img src="media/profile_pic/krystalairola_web.jpg" alt="Dr. Krystal Airola picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Krystal Airola
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Breast
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/jennifer_ripton_snyder.php">
                        <div class="team-image">
                            <img src="media/profile_pic/jenniferriptonsnyder_web.jpg"
                                alt="Dr. Jennifer Ripton-Snyder picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Jennifer Ripton-Snyder
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Breast
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_lachlan_mcg_smith.php">
                        <div class="team-image">
                            <img src="media/profile_pic/lachlansmith_web_1.jpg"
                                alt="Dr. Lachlan McG Smith picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Lachlan McG Smith
                            </h3><span style="font-size:.9em;color:#484848;">Body/Cardiovascular
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/Dr_Esther_Coronel.php">
                        <div class="team-image">
                            <img src="media/profile_pic/EstherCoronel_WEB_bt8j0UU.jpg"
                                alt="Dr. Esther Coronel picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Esther Coronel
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_hua_carolyn_yang.php">
                        <div class="team-image">
                            <img src="media/profile_pic/huacarloynyang_web.png"
                                alt="Dr. Hua Carolyn Yang picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Hua Carolyn Yang
                            </h3><span style="font-size:.9em;color:#484848;">Nuclear Medicine Physician</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_kristine_pysarenko.php">
                        <div class="team-image">
                            <img src="media/profile_pic/KristinePysarenko_WEB_1.png"
                                alt="Dr. Kristine Pysarenko picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Kristine Pysarenko
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Breast
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_tiffany_m_newman.php">
                        <div class="team-image">
                            <img src="media/profile_pic/TiffanyNewman_WEB_1.jpg"
                                alt="Dr. Tiffany M. Newman picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Tiffany M. Newman
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Breast
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_osama_hussaini.php">
                        <div class="team-image">
                            <img src="media/profile_pic/OsamaHussain_WEB_3.png" alt="Dr. Osama Hussaini picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Osama Hussaini
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dr_kenny_lien.php">
                        <div class="team-image">
                            <img src="media/profile_pic/KennyLien_WEB.png" alt="Dr. Kenny Lien picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dr. Kenny Lien
                            </h3><span style="font-size:.9em;color:#484848;">Board-Certified Interventional
                                Radiologist</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/joseph_ferreri.php">
                        <div class="team-image">
                            <img src="media/profile_pic/josephferreri_web_2.jpg" alt="Joseph Ferreri picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Joseph Ferreri
                            </h3><span style="font-size:.9em;color:#484848;">Radiology Practitioner
                                Assistant</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/alyssa_vanderhoef.php">
                        <div class="team-image">
                            <img src="media/profile_pic/AlyssaVanderhoef_WEB_1.png"
                                alt="Alyssa Vanderhoef picture" style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Alyssa Vanderhoef
                            </h3><span style="font-size:.9em;color:#484848;">Radiology Nurse Practitioner</span>

                        </div>
                    </a>
                </div>
            </div>


        </div>


        <div class="heading-text heading-section">

            <h2>Our Administrators</h2>

        </div>

        <div class="row team-members m-b-40">



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/timothy_wintz.php">
                        <div class="team-image">
                            <img src="media/profile_pic/TimWintz_WEB.png" alt="Timothy Wintz picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Timothy Wintz
                            </h3><span style="font-size:.9em;color:#484848;">SVP Imaging East and Interventional
                                Pain</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/jarett_greenside.php">
                        <div class="team-image">
                            <img src="media/profile_pic/JarretGreenside_WEB_1.jpg"
                                alt="Jarett Greenside picture" style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Jarett Greenside
                            </h3><span style="font-size:.9em;color:#484848;">SVP Imaging West and Interventional
                                Pain</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/dakota_spataro.php">
                        <div class="team-image">
                            <img src="media/profile_pic/DakotaSpataro_Headshot_WEB_1.jpg"
                                alt="Dakota Spataro picture" style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Dakota Spataro
                            </h3><span style="font-size:.9em;color:#484848;">Director of Ultrasound</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/brittany_caban.php">
                        <div class="team-image">
                            <img src="media/profile_pic/BrittanyCaban_WEB_1.jpg" alt="Brittany Caban picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Brittany Caban
                            </h3><span style="font-size:.9em;color:#484848;">Director of Breast Imaging</span>

                        </div>
                    </a>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="team-member">
                    <a href="people/ana_pakal.php">
                        <div class="team-image">
                            <img src="media/profile_pic/AnnaPaka_WEB_1.jpg" alt="Ana Pakal picture"
                                style="max-height: 300px; object-fit: contain;">
                        </div>
                        <div class="team-desc">
                            <h3>
                                Ana Pakal
                            </h3><span style="font-size:.9em;color:#484848;">Senior Director of Nuclear Medicine
                                and Theranostics</span>

                        </div>
                    </a>
                </div>
            </div>


        </div>


        <div class="heading-text heading-section">

            <h2>Our Advanced Practice Practitioners</h2>

        </div>

        <div class="row team-members m-b-40">


        </div>



    </div>
</section>


<?php
include "footer.php"
?>