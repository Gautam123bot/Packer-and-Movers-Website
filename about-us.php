<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastdeliver - About Us</title>
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



    <div class="side-safety col-sm-12 col-md-4 col-lg-4">
        <div class="side-safety-inner">
            <div class="safety-card">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <img src="img/safety.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <h3>Best Safety Standards.</h3>
                        <h3>We Care.</h3>
                        <div class="safety-dash"></div>
                        <ul>
                            <li>Using gloves and masks</li>
                            <li>100% contactless service</li>
                            <li>Usage of Aarogya Setu app</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h2>Where are you moving?</h2>
            <div class="menu_wrapper">
                <div class="two-nav" id="twonav">
                    <li><a class="btn active">Within the City</a></li>
                    <li><a class="btn">Between Cities</a></li>
                </div>
            </div>
            <label for="">Select City</label>
            <select name="" id="">
                <option value="bangalore">Bangalore</option>
                <option value="mumbai">Mumbai</option>
                <option value="pune">Pune</option>
                <option value="chennai">Chennai</option>
                <option value="faridabad">Faridabad</option>
                <option value="hyderabad">Hyderabad</option>
                <option value="noida">Noida</option>
                <option value="coimbatore">Coimbatore</option>
                <option value="indore">Indore</option>
                <option value="gurgaon">Gurgaon</option>
                <option value="surat">Surat</option>
                <option value="jaipur">Jaipur</option>
            </select>
            <label for="">Moving From</label>
            <input type="text" name="" id="" placeholder="Select building or nearest landmark">
            <label for="">Moving To</label>
            <input type="text" name="" id="" placeholder="Select building or nearest landmark">
            <button class="safety-button">Check Prices</button>
        </div>
    </div>

    <div class="breadback">
        <div class="breadback-back">
            <h1>About Us</h1>
        </div>
    </div>


    <section>
        <div class="container-fluid m-4 about-first-content">
            <div class="row">
                <div class="about-img-content col-sm-12 col-md-12 col-lg-7">
                    <h2>Shifting to a new home? And wondering how packers and movers company can help?</h2>
                    <p>Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget
                        tortor
                        risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                    <p>Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices
                        posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                        ligula.
                        Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar
                        a.
                    </p>
                </div>
                <div class="about-img col-sm-12 col-md-12 col-lg-5">
                    <img src="img/aboutimg1.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid fm_work">
            <!-- <h3>How Fast Deliver Packers and Movers Work?</h3> -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fm_work_content">
                        <img src="img/requirement1.png" alt="" class="img-responsive" width="40">
                        <h4>Share your Requirement</h4>
                        <p>Tell us where and when do you want to move</p>
                    </div>
                    <div class="fm_work_content">
                        <img src="img/requirement3.png" alt="" class="img-responsive" width="40">
                        <h4>Schedule and Confirm</h4>
                        <p>Pick a slot and pay a token amount to confirm your move</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fm_work_content">
                        <img src="img/requirement2.png" alt="" class="img-responsive" width="40">
                        <h4>Get Free Instant Quote</h4>
                        <p>Get guaranteed lowest priced quote for your shifting instantly</p>
                    </div>
                    <div class="fm_work_content">
                        <img src="img/requirement4.png" alt="" class="img-responsive" width="40">
                        <h4>We get you moved!</h4>
                        <p>Our partner will arive as per schedule to pack & load your belonging</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <script>
    var btnContainer = document.getElementById("twonav");
    var btns = btnContainer.getElementsByClassName("btn");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace("active");
            this.className += " active";
        })
    }
    </script>

</body>

</html>