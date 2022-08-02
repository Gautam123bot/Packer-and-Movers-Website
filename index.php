<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastdeliver - Home page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="laptopmode.css">
    <link rel="stylesheet" href="tabletmode.css">
    <link rel="stylesheet" href="mobilemode.css">
    <link rel="stylesheet" href="laptop1024pxless.css">
    <link rel="stylesheet" href="laptop1024pxmore.css">
    <script src="js/bootstrap.js"></script>
    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <?php include 'header.php'; ?>


    <div id="carouselExampleFade" class="carousel index-carou slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carou11.jpg" class="d-block w-100" width="300" height="670" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carou2.jpeg" class="d-block w-100" width="300" height="670" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carou1.png" class="d-block w-100" width="300" height="670" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <section>
        <div class="house-services">
            <div class="container house-services-container">
                <h2 class="house-top-heading">Services</h2>
                <p class="house-top-para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores earum
                    mollitia animi
                    consequuntur eveniet, corrupti, quos, ut ab quasi tenetur distinctio minima ex nesciunt quod
                    accusantium numquam temporibus reprehenderit commodi ci praesentium quidem nulla voluptates
                    reprehenderit quam repudiandae.</p>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="small-service-contain">

                            <div class="small-service" id="first" onclick="firstfunc()">
                                <img src="img/house-service1.png" alt="" class="img-responsive small-service-img"
                                    width="92">
                                <p>Household Goods</p>
                            </div>

                            <div class="small-service" onclick="secondfunc()">
                                <img src="img/house-service2.png" alt="" class="img-responsive small-service-img"
                                    width="92">
                                <p>Cubes Logistics</p>
                            </div>

                            <div class="small-service" onclick="thirdfunc()">
                                <img src="img/house-service3.png" alt="" class="img-responsive small-service-img"
                                    width="92">
                                <p>Contract Logistics</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-5 first-service-content" id="firsti">
                        <img src="img/house-service.jpg" alt="" class="img-responsive service-main-img">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 first-service-content" id="firstc">
                        <div class="house-goods">
                            <h2>Household Goods</h2>
                            <ul>
                                <li>APML Domestic</li>
                                <li>APML International</li>
                                <li>APML Removal and Storage</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 first-service-content" id="firstb">
                        <button class="more-service">More Services we offer</button>
                    </div>


                    <div class="col-sm-12 col-md-12 col-lg-5 second-service-content" id="secondi">
                        <img src="img/house-servicee.jpg" alt="" class="img-responsive service-main-img">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 second-service-content" id="secondc">
                        <div class="house-goods">
                            <h2>Cubes Logistics</h2>
                            <ul>
                                <li>Part load and exclusive separate cubes</li>
                                <li>Zero space wastage</li>
                                <li>Vehicles available at eye distance</li>
                                <li>Zero trans-shipment at nominal rates</li>
                                <li>Virtual warehouse</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 second-service-content" id="secondb">
                        <button class="more-service">More Services we offer</button>
                    </div>


                    <div class="col-sm-12 col-md-12 col-lg-5 third-service-content" id="thirdi">
                        <img src="img/house-serviceee.jpg" alt="" class="img-responsive service-main-img">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 third-service-content" id="thirdc">
                        <div class="house-goods">
                            <h2>Contract Logistics</h2>
                            <ul>
                                <li>ODC Transportation</li>
                                <li>Bulk goods</li>
                                <li>Small Goods</li>
                                <li>Car Transportation</li>
                                <li>Warehousing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 third-service-content" id="thirdb">
                        <button class="more-service">More Services we offer</button>
                    </div>


                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="our-process">
            <div class="container p-4">
                <h1>Our Process</h1>
                <span class="our-process-dash"></span>
                <p class="packinghead">Packing Standard are always in Priority</p>
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="our-process-content">
                            <img src="img/packprocess1.jpg" width="380" alt="" class="img-responsive">
                            <h5>Packing Materials</h5>
                            <p>We bring our own packing-material to your home that is to be shifted. This helps in
                                speeding up the packing process. Packing-material can be obtained over websites on the
                                internet.</p>
                            <button class="our-process-btn">Read More<i
                                    class="fa-solid fa-circle-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="our-process-content">
                            <img src="img/packprocess2.jpg" width="360" alt="" class="img-responsive">
                            <h5>Packing Tips</h5>
                            <p>The first thing that should be borne in mind while packing is that the item you are most
                                likely to need the first when you reach your new home is to be packed last.</p>
                            <button class="our-process-btn">Read More<i
                                    class="fa-solid fa-circle-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="our-process-content">
                            <img src="img/packprocess3.jpg" width="350" alt="" class="img-responsive">
                            <h5>Transportation Process</h5>
                            <p>The transportation process is the most important part of the shifting business. This is
                                where most of the damage to goods is done. Transportation is usually done using trucks
                                and lorries.</p>
                            <button class="our-process-btn">Read More<i
                                    class="fa-solid fa-circle-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="about-content">
                <h1>About Chetna Moving Services</h1>
                <p>You’ve arrived at the right site if you’re seeking for the top movers and packers in India. Chetna
                    Packers & Movers is recognized as one of the best home and office relocation service providers in
                    India because we take the necessary security precautions when packing and transporting your
                    furniture and other belongings. We offer hassle-free, affordable, and high-quality transfer and
                    relocation services.</p>
                <p>Whether you need to relocate a single piece of furniture or your complete home’s contents, we can
                    provide the services you want. All people who require stress-free home and office relocation
                    services can benefit from our services. Furthermore, there are no additional charges. We are
                    contracted to manage a specific team for each project.</p>
                <p>Chetna packers and movers aim for 100% customer satisfaction, which has resulted in a lengthy list of
                    satisfied clients. Our skilled and efficient moving team thoroughly examines every detail of any
                    relocation project and takes the necessary steps to ensure that the project’s exact requirements are
                    met by offering superior moving services.</p>
            </div>
        </div>
    </section>

    <section class="first-choice-section">
        <div class="container">
            <div class="first-choice">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <img src="img/cityservice-removebg-preview.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 first-choice-content">
                        <h2>We are Always the First Choice</h2>
                        <p>Whether you’re moving your house or your business, we’ve got you covered. We provide a full
                            range of relocation services for everyone from individuals and families to businesses and
                            corporations. We from inception to delivery, we provide packing and moving services. We link
                            our customers with the best and most experienced movers in India.</p>
                        <p>Whether you’re moving your house or your business, we’ve got you covered. We provide a full
                            range of relocation services for everyone from individuals and families to businesses and
                            corporations. We from inception to delivery, we provide packing and moving services. We link
                            our customers with the best and most experienced movers in India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="packers-india">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 packers-india-content">
                        <h4>Packers and Movers in India</h4>
                        <a href="#">View More &gt;&gt;</a>
                        <hr>
                        <div class="packers-india-city">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Ahmedabad</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Rohtak</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Faridabad</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Gurgaon</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Jamshedpur</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Mumbai</p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Thane</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Cochin</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Faridabad</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Bangalore</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Dehradun</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Indore</p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Jaipur</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Chandigarh</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Faridabad</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Goa</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Chennai</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Lucknow</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <img src="img/packers-movers.jpg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------------------------------------------- Testimonials section -------------------------- -->

    <div class="container">
        <div class="row full-testi">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <section class="testimonial-section" style="padding-left: 10px;">
                    <div class="text-center p-4 testiheader">
                        <h3>Top Packers and Movers Reviews</h3>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner testi-carousel-inn container-fluid">
                            <div class="carousel-item active">
                                <div class="row carouse-row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                        <div class="carouse-content carouse-content-index">
                                            <img src="img/man.jpg" alt="" class="img-responsive testiimg">
                                            <p class="man-text">Suresh Kumar Singh</p>
                                            <div class="testi-ranking">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p class="small-comment">Convenience guaranteed by FastDeliver packers and
                                                movers</p>
                                            <p class="small-content">I am extremely happy with my experience with
                                                NoBroker
                                                movers and packers team. Being a senior citizen while shift from
                                                Hyderabad
                                                to Ranchi I was worried about the entire shifting process. But thanks to
                                                Nobroker and their team for making the entire process smooth and easy
                                            </p>
                                            <p class="small-position">Head-Strategy & Business Development Jakson Ltd.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                        <div class="carouse-content carouse-content-index">
                                            <img src="img/man.jpg" alt="" class="img-responsive testiimg">
                                            <p class="man-text">R.K. Mishra</p>
                                            <div class="testi-ranking">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                            <p class="small-comment">Recommended for everyone looking for best-in-class
                                                services!</p>
                                            <p class="small-content">Extraordinary services and customer support
                                                provider by
                                                NoBroker Packers and Movers for my shifting from Faridabad to Lucknow.
                                                Extremely happy with the customer care and service provided by their
                                                team.
                                                Miles to go. Kudos Team.</p>
                                            <p class="small-position">Ex DGM, State Bank of India</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row carouse-row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                        <div class="carouse-content carouse-content-index">
                                            <div class="right-quotee-div">
                                            </div>
                                            <img src="img/man.jpg" alt="" class="img-responsive testiimg">
                                            <p class="man-text">Sneha Trivedi</p>
                                            <div class="testi-ranking">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p class="small-comment">Extremely happy with the support provided</p>
                                            <p class="small-content">I'm very happy with the quality of services
                                                provided by
                                                Nobroker Packers and movers. A designated movement manager is assigned
                                                to
                                                each customer which makes the entire shifting process very convenient.
                                            </p>
                                            <p class="small-position">Business Owner</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                        <div class="carouse-content carouse-content-index">
                                            <div class="right-quotee-div">
                                            </div>
                                            <img src="img/man.jpg" alt="" class="img-responsive testiimg">
                                            <p class="man-text">Naveen Reddy</p>
                                            <div class="testi-ranking">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                            <p class="small-comment">Exceptional customer support & hassle free
                                                movement!
                                            </p>
                                            <p class="small-content">Professionalism with quality services is what you
                                                get
                                                with NoBroker Packers and Movers. Their entire team including their
                                                Movement
                                                manager made my shifting from Delhi to Gurgaon hassle free. I would
                                                recommend their services to every one who is looking for best in class
                                                packers and movers services.</p>
                                            <p class="small-position">Visual Merchandiser</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                    class="fa-solid fa-arrow-left move-carou-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                    class="fa-solid fa-arrow-right move-carou-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>


   




    <?php include 'footer.php'; ?>


</body>

</html>