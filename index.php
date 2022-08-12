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



    <section class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="com_ques_full com_ques_full_index">
                    <h3>Common questions about Packers & Movers</h3>

                    <div class="quesans">
                        <div class="question">
                            <p class="ques" id="ques1" onclick="questionfunction1()">Why should I pay token in advance
                                before the move?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus1" onclick="questionfunction1()"></i>
                            <p class="ans" id="ans1">The token is to confirm the slot bookings and avoid any last minute
                                delays or
                                inconvenience. The token amount will be adjusted in the final payment of your quotation.
                            </p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques2" onclick="questionfunction2()">Why are weekend and month-end
                                prices
                                different?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus2" onclick="questionfunction2()"></i>
                            <p class="ans" id="ans2">The quote is calculated based on the availability of slots. Since
                                there is
                                high demand for movement during weekend and month-end, prices are generally high on
                                these days.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques3" onclick="questionfunction3()">Can I reschedule my movement after
                                I
                                have paid the token amount?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus3" onclick="questionfunction3()"></i>
                            <p class="ans" id="ans3">You can reschedule your movement by informing your dedicated move
                                manager
                                whose details are included in the confirmation email. Your move manager will reschedule
                                the movement based on the availability of slots</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques4" onclick="questionfunction4()">My movement date is not fixed yet.
                                How can I book in advance?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus4" onclick="questionfunction4()"></i>
                            <p class="ans" id="ans4">You can notify your dedicated movement manager to reschedule
                                movement upto 2
                                days before the booked date. Change in movement date is FREE of cost for following
                                categories: weekdays to weekdays, weekend to weekend, weekend to weekdays.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques5" onclick="questionfunction5()">Will the movers and packers also
                                dismantle beds and other furniture?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus5" onclick="questionfunction5()"></i>
                            <p class="ans" id="ans5">Yes, we can dismantle and assemble beds and other furniture without
                                any extra
                                cost. However, you will have to notify your dedicated move manager before movement.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques6" onclick="questionfunction6()">We have very few items to move. The
                                quotation is very costly.</p>
                            <i class="fa-solid fa-plus quesplus" id="plus6" onclick="questionfunction6()"></i>
                            <p class="ans" id="ans6">Please contact us at +91 924300 9813. We can arrange a small
                                transportation
                                for such movements at a lower cost.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques7" onclick="questionfunction7()">Is preliminary inspection required
                                before booking the movement?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus7" onclick="questionfunction7()"></i>
                            <p class="ans" id="ans7">No, instant quotes are generated as per the apartment
                                size/inventory
                                list,
                                movement date and the movement distance.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques8" onclick="questionfunction8()">Are the packing materials are
                                included in the package? Are there any hidden
                                charges?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus8" onclick="questionfunction8()"></i>
                            <p class="ans" id="ans8">Yes, all packing materials and labour cost are provided by the
                                vendor and included in the package.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques9" onclick="questionfunction9()">Do you provide insurance for the
                                goods?</p>
                            <i class="fa-solid fa-plus quesplus" id="plus9" onclick="questionfunction9()"></i>
                            <p class="ans" id="ans9">Yes, you can insure your goods by informing your dedicated move
                                manager. You
                                will be required to purchase our secured package addon. This addon has many other
                                benefits along with insurance.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques10" onclick="questionfunction10()">Can I also move my car or bike?
                            </p>
                            <i class="fa-solid fa-plus quesplus" id="plus10" onclick="questionfunction10()"></i>
                            <p class="ans" id="ans10">Yes, you can also move your car or bike for inter-city movements.
                                Special
                                closed containers will be used to transport your vehicle safely to your new home.</p>
                            <hr>
                        </div>
                        <div class="question">
                            <p class="ques" id="ques11" onclick="questionfunction11()">Cities where NoBroker provides
                                Packers and Movers services</p>
                            <i class="fa-solid fa-plus quesplus" id="plus11" onclick="questionfunction11()"></i>
                            <div class="ans" id="ans11">
                                <ul class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <li><a href="#">Packers & Movers in Bangalore</li></a>
                                        <li><a href="#">Packers & Movers in Mumbai</li></a>
                                        <li><a href="#">Packers & Movers in Chennai</li></a>
                                        <li><a href="#">Packers & Movers in Pune</li></a>
                                        <li><a href="#">Packers & Movers in Gurgaon</li></a>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <li><a href="#">Packers & Movers in Hyderabad</li></a>
                                        <li><a href="#">Packers & Movers in Delhi</li></a>
                                        <li><a href="#">Packers & Movers in Faridabad</li></a>
                                        <li><a href="#">Packers & Movers in Noida</li></a>
                                        <li><a href="#">Packers & Movers in Ghaziabad</li></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="free-quote-section">
        <div class="container free-quote">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 free-quote-col1">
                    <h1>Get Your Free Quote</h1>
                    <p>Kindly Fill out this form we indus packers and movers will contact you as soon as possible.
                        thanks</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 free-quote-col2">
                    <form action="">
                        <input type="text" placeholder="Enter Your Name" name="name">
                        <input type="number" placeholder="Enter Phone Number" name="name">
                        <input type="text" placeholder="Enter Starting City" name="name">
                        <input type="text" placeholder="Enter Destination City" name="name">
                        <textarea name="query" id="" cols="30" rows="3" placeholder="Any Query"></textarea>
                        <input type="email" name="email" id="" placeholder="Enter Email Id">
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>


    <!-- --------------------------------------- Start of Home Modal -------------------------------->


    <div class="modal fade in" id="subscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <!-- <div class="modal-body"> -->
                <div class="subscription_content container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h2>Need help? <span>We're here to assist you!</span> </h2>
                            <h3>Fill in the details and we'll get in touch</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 subscription_img">
                            <img src="img/optin_cart.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 subscription_form">
                            <button type="button" class="close cross-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <form action="" class="inside_form text-center">
                                <div class="">
                                    <input type="text" class="three-input-modal" name="name" id="" placeholder="Enter Your Name">
                                </div>
                                <div class="">
                                    <input type="number" class="three-input-modal" name="phone" id="" placeholder="Enter Your Phone Number">
                                </div>
                                <div class="">
                                    <input type="email" class="three-input-modal" name="email" id="" placeholder="Enter Your Email">
                                </div>
                                <div class="">
                                    <div class="checkbox_modal">
                                        <input type="checkbox" name="ip_check" id="">
                                    </div>
                                    <label for="" class="acknowledge_label">I acknowledge that my IP address and email address are being logged
                                        for monitoring purposes.*</label>
                                </div>
                                <div class="">
                                    <div class="checkbox_modal">
                                        <input type="checkbox" name="terms_check" id="">
                                    </div>
                                    <label for="" class="acknowledge_label">I acknowledge <span>Terms of Service</span> and <span>Privacy
                                            Policy</span>* </label>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="sigsbsform" id="subsforn">Submit</a>
                                </div>
                                <div class="">
                                    <span class="hate-spam">We hate spam as much as you do, your detials are safe with
                                        us.</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script>
    var subscription = new bootstrap.Modal(document.getElementById('subscription'), {})
    subscription.show()
    </script>

    <!-- -------------------------- End of Home Modal -------------------------------------------- -->


    <script>
    function questionfunction1() {
        var question = document.getElementById("ques1");
        var answer = document.getElementById("ans1");
        var plus = document.getElementById("plus1");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction2() {
        var question = document.getElementById("ques2");
        var answer = document.getElementById("ans2");
        var plus = document.getElementById("plus2");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction3() {
        var question = document.getElementById("ques3");
        var answer = document.getElementById("ans3");
        var plus = document.getElementById("plus3");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction4() {
        var question = document.getElementById("ques4");
        var answer = document.getElementById("ans4");
        var plus = document.getElementById("plus4");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction5() {
        var question = document.getElementById("ques5");
        var answer = document.getElementById("ans5");
        var plus = document.getElementById("plus5");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction6() {
        var question = document.getElementById("ques6");
        var answer = document.getElementById("ans6");
        var plus = document.getElementById("plus6");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction7() {
        var question = document.getElementById("ques7");
        var answer = document.getElementById("ans7");
        var plus = document.getElementById("plus7");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction8() {
        var question = document.getElementById("ques8");
        var answer = document.getElementById("ans8");
        var plus = document.getElementById("plus8");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction9() {
        var question = document.getElementById("ques9");
        var answer = document.getElementById("ans9");
        var plus = document.getElementById("plus9");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction10() {
        var question = document.getElementById("ques10");
        var answer = document.getElementById("ans10");
        var plus = document.getElementById("plus10");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }

    function questionfunction11() {
        var question = document.getElementById("ques11");
        var answer = document.getElementById("ans11");
        var plus = document.getElementById("plus11");
        if (answer.style.display === "block") {
            answer.style.display = "none";
            question.style.color = "black";
            plus.style.transform = "rotate(0deg)";
        } else {
            answer.style.display = "block";
            question.style.color = "rgb(0, 149, 135)";
            plus.style.transform = "rotate(45deg)";
        }
    }
    </script>


</body>

</html>