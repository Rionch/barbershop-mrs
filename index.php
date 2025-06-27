
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    <!-- HOME SECTION -->

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                    <li data-target="#home-section-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- FIRST SLIDE -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/tentang 5.png" alt="First slide">
                        <div class="carousel-caption d-md-block">
                        <img class="about_img_1" src="Design/images/mrs no bg.png">
                            <h3>It's Not Just a Haircut, It's an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                 premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                    <!-- SECOND SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/tentang 6.png" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                        <img class="about_img_1" src="Design/images/mrs no bg.png">
                            <h3>It's Not Just a Haircut, It's an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                    <!-- THIRD SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/tentang 7.png" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                        <img class="about_img_1" src="Design/images/mrs no bg.png">
                            <h3>It's Not Just a Haircut, It's an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</div>
	</section>

    <!-- ABOUT SECTION -->

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: justify;">
                        <h3>Mempersembahkan</h3>
                        <h2>Barbershop MRS<br>Since 2024</h2>
                        <p style="color: #777">
                            Barbershop MRS adalah sebuah tempat pangkas premium dengan harga terjangkau di Kota Tebing Tinggi. 
                            Kami hadir dengan menyediakan berbagai pilihan variasi gaya rambut dan layanan pangkas rambut yang modern untuk anda tampil lebih pede, keren dan bergaya.
                        </p>
                        <br>
                        <p style="color: #777">
                            Tertarik dan ingin tau lokasi kami?, Yuk langsung tekan tombol di bawah ini untuk bisa langsung mendapatkan pelayanan kami.
                            <br>
                            Kami Tunggu ya!!
                        </p>
                        <a href="#contact-us" class="default_btn" style="opacity: 1; display: inline-flex; align-items: center; gap: 8px;">
                            Klik Disini
                            </a>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/home 3.png">
                        <img class="about_img_2" src="Design/images/orang 7.png">
                        <img class="about_img_3" src="Design/images/home 1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL MEDIA SECTION -->
    
    <section id="social" class="social_section" style="padding: 60px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Kiri: Video -->
            <div class="col-md-6">
            <div class="social_video" style="overflow: hidden; display: flex; justify-content: center;">
            <div class="video-wrapper" style="width: 350px; aspect-ratio: 9 / 16; border-radius: 20px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.3); overflow: hidden; ">
                <video controls style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="Design/video/mrs1.mp4" type="video/mp4">
                </video>
                </div>
            </div>
            </div>

            <!-- Kolom Kanan: Teks dan Link -->
            <div class="col-md-6">
                <div class="social_content" style="text-align: justify;">
                    <h2>Temukan Kami di Media Sosial</h2>
                    <p style="color: #777;">
                        Ikuti perjalanan Barbershop MRS melalui video, foto, dan konten menarik lainnya di media sosial kami. Dapatkan informasi promo, gaya rambut terbaru, dan momen seru dari Barbershop MRS!
                    </p>
                    <br>
                    <div class="social_links" style="display: flex; gap: 10px;">
                        <a href="https://www.tiktok.com/@mrizkysrg" target="_blank" rel="noopener noreferrer">
                        <svg role="img" width = "40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title>
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/mrizkysrg?igsh=ZHg4aGxmMGhvYXg2" target="_blank">
                        <svg role="img" width = "40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title>
                        <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- SERVICES SECTION -->

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h3>Barbershop MRS</h3>
                <h2>Our Services</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Haircut</h3>
                        <p>Layanan dasar berupa pemotongan rambut untuk merapikan atau mengubah gaya rambut sesuai keinginan anda</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Smooth Shave</h3>
                        <p>Pelayanan mencukur wajah (terutama janggut, kumis, dan rambut halus) hingga hasilnya sangat bersih dan halus</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Hair colour</h3>
                        <p>Proses mengganti atau menambah warna rambut menggunakan bahan khusus (cat rambut atau bleaching)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Treatment</h3>
                        <p>Serangkaian variasi perawatan rambut untuk menjaga kesehatan dan penampilan rambut tidak rusak</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- GALLERY SECTION -->

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h3>Barbershop MRS</h3>
            <h2>Barbers Gallery</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model cat rambut 1.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model cat rambut 2.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model cat rambut 3.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model cat rambut 4.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut 2.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut 3.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut 4.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut 5.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut 6.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut anak 1.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model rambut anak 2.jpeg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/model cat rambut 5.jpeg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h3>Barbershop MRS</h3>
                <h2>Our Barbers</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-1.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-2.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-3.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-4.jpg" alt="Team Member">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    
    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">

        <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <!-- END -->

        <div class="container">
            <div class="section_heading">
                <h3>Barbershop MRS</h3>
                <h2>Service Pricing</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">Rp. <?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Get in touch with us & 
                            <br>send us message today!
                        </h2>
                        <p>
                            Tertarik dengan layanan kami atau mencari informasi lebih lanjut?, Silakan hubungi kami melalui nomor informasi yang tertera di bawah ini
                        </p>
                        <h4>
                        </h2>
                        <p>
                            Kami juga menyediakan nomor whatsapp dan alamat email apabila anda ingin melakukan percakapan secara online
                        </p>
                            <span style = "font-weight: bold">Email:</span> 
                            barbershopmrs@gmail.com
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +62 0852-6534-7618
                            <br> 
                        </h4>
                        <a href="https://maps.app.goo.gl/E57MqEaDCpJjytow8" class="default_btn" style="opacity: 1; display: inline-flex; align-items: center; gap: 8px;">
                            Lokasi Barbershop MRS
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5
                                        c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                            </svg>
                            </a>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-12">
        <h2>Lokasi Kami</h2>
        <div class="map_wrapper" style="
            width: 100%;
            height: 100%;
            min-height: 300px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1397880872337!2d99.14185207478388!3d3.3156003966592293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031617546e73445%3A0xee131dc78ba2315!2sMRS%20BARBERSHOP!5e0!3m2!1sid!2sid!4v1751028035866!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
            </div>
        </div>
    </section>

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer_widget">
                        <a href="./#home-section" class="navbar-brand" style="color: #fff; text-decoration: none;">
                        Barbershop MRS
                        </a>
                        <p>
                        Barbershop MRS didirikan oleh Muhammad Rizky Siregar pada tahun 
                        2024. Barbershop ini didirikan dengan tujuan menyediakan 
                        layanan potong rambut dan perawatan rambut berkualitas untuk masyarakat Kota Tebing Tinggi
                        </p>
                        <ul class="widget_social">
                        <li>
                            <a href="https://www.instagram.com/mrizkysrg?igsh=ZHg4aGxmMGhvYXg2" target="_blank" data-toggle="tooltip" title="Instagram">
                            <!-- Inline SVG Instagram -->
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" fill="currentColor">
                                <title>Instagram</title>
                                <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@mrizkysrg?is_from_webapp=1&sender_device=pc" target="_blank" data-toggle="tooltip" title="TikTok">
                            <svg role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" fill="currentColor">
                                <title>TikTok</title>
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
  <div class="footer_widget">
    <h3>
      <!-- Link dan SVG Google Maps -->
      <a href="https://maps.app.goo.gl/E57MqEaDCpJjytow8" 
         target="_blank" 
         style="display: inline-flex; align-items: center; text-decoration: none; color: inherit;">
        <!-- SVG Icon Google Maps -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             width="24" height="24" 
             viewBox="0 0 24 24" 
             fill="currentColor" 
             style="margin-right: 8px;">
          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
        </svg>
        Lokasi
      </a>
    </h3>
    <p>
      Jalan Gatot Subroto, Siantar Batu II, Kota Tebing Tinggi
    </p>
    <p>
      barbershopmrs@gmail.com<br>
      +62 0852-6534-7618   
    </p>
  </div>
</div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Jadwal Operasional
                        </h3>
                        <ul class="opening_time">
                            <li>Senin - Jumat 08:30am - 17:00pm</li>
                            <li>Sabtu - Minggu 09:00am - 15:00pm</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- FOOTER  -->

    <?php include "Includes/templates/footer.php"; ?>