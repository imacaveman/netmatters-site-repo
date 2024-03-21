<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="js/hamburger/hamburgers.css">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d3889deb.js" crossorigin="anonymous"></script>
    <title>Contact Us | Netmatters</title>
</head>
<body>
    <?php include "includes/header.php" ?>
    <div class="page-title-container">
        <div class="global-container">
            <div class="page-title">
                <h2>Our Offices</h2>
            </div>
        </div>
    </div>
    <div id="middle-content">
        <div class="our-services">
            <div class="global-container">
                <div class="service-block">
                    <div class="image">
                        <a href="#">
                            <img src="img/contact-us/london.jpg" alt="London Office" class="office-img">
                        </a>
                    </div>
                    <div class="contact-desc-box">
                        <span class="contact-title"><a href="#" class="color-link">London Office</a></span>
                        <p class="contact-desc">Unit G6,</br>
                                                Pixel Business Centre,</br>
                                                110 Brooker Road, Waltham Abbey,</br>
                                                London,</br>
                                                EN9 1JH</p>
                        <a href="#" class="phone-no">02045 397354</a>
                        <div class="contact-btn-container">
                            <a href="#" class="contact-btn light">View More</a>
                        </div>
                    </div>
                    <div class="image">
                        <a href="#">
                            <img src="img/contact-us/cambridge.jpg" alt="Cambridge Office" class="office-img">
                        </a>
                    </div>
                    <div class="contact-desc-box">
                        <span class="contact-title"><a href="#" class="color-link">Cambridge Office</a></span>
                        <p class="contact-desc">Unit 1.31,</br>
                                                St John's Innovation Centre,</br>
                                                Cowley Road, Milton,</br>
                                                Cambridge,</br>
                                                CB4 0WS</p>
                        <a href="#" class="phone-no">01223 37 57 72</a>
                        <div class="contact-btn-container">
                            <a href="#" class="contact-btn light">View More</a>
                        </div>
                    </div>
                    <div class="image">
                        <a href="#">
                            <img src="img/contact-us/wymondham.jpg" alt="Wymondham Office" class="office-img">
                        </a>
                    </div>
                    <div class="contact-desc-box">
                        <span class="contact-title"><a href="#" class="color-link">Wymondham Office</a></span>
                        <p class="contact-desc">Unit 15,</br>
                                                Penfold Drive,</br>
                                                Gateway 11 Business Park,</br>
                                                Wymondham, Norfolk,</br>
                                                NR18 0WZ</p>
                        <a href="#" class="phone-no">01603 70 40 20</a>
                        <div class="contact-btn-container">
                            <a href="#" class="contact-btn light">View More</a>
                        </div>
                    </div>
                    <div class="service-block-med">
                    <div class="image">
                        <a href="#">
                            <img src="img/contact-us/yarmouth-2.jpg" alt="Great Yarmouth Office" class="office-img">
                        </a>
                    </div>
                    <div class="contact-desc-box">
                        <span class="contact-title"><a href="#" class="color-link">Great Yarmouth Office</a></span>
                        <p class="contact-desc">Suite F23,</br>
                                                Beacon Innovation Centre,</br>
                                                Beacon Park, Gorleston,</br>
                                                Great Yarmouth, Norfolk,</br>
                                                NR31 7RA</p>
                        <a href="#" class="phone-no">01493 60 32 04</a>
                        <div class="contact-btn-container">
                            <a href="#" class="contact-btn light">View More</a>
                        </div>
                    </div>
                </div>
                <div class="email-contact">
                    <p class="text-bold">Email us on:</p>
                    <a href="#" class="phone-no">sales@netmatters.com</a>
                    <p class="text-bold">Business hours:</p>
                    <p class="text-bold">Monday - Friday 07:00 - 18:00</p>
                    <a href="#" class="color-link text-bold">Out of Hours IT Support<i class="fa-solid fa-angle-down fa-lg"></i></a>
                </div>
                <div class="form-body">
                    <form method="POST" accept-charset="UTF-8" id="contact-form">
                        <div class="form-group">
                            <div class="form-name contact-form">
                                <label for="contact-us-name" class="newsltr-label required">Your Name</label>
                                <input id="contact-us-name" class="contact-us" name="name" type="text">
                            </div>
                            <div class="form-company contact-form">
                                <label for="contact-us-company" class="newsltr-label">Company Name</label>
                                <input id="contact-us-company" class="contact-us" name="company" type="text">
                            </div>
                            <div class="form-email contact-form">
                                <label for="contact-us-email" class="newsltr-label required">Your Email</label>
                                <input id="contact-us-email" class="contact-us" name="email" type="text">
                            </div>
                            <div class="form-phone contact-form">
                                <label for="contact-us-phone" class="newsltr-label required">Your Telephone Number</label>
                                <input id="contact-us-phone" class="contact-us" name="phone" type="text">
                            </div>
                            <div class="form-msg contact-form">
                                <label for="contact-us-msg" class="newsltr-label required">Message</label>
                                <textarea id="contact-us-msg" class="contact-us-msgbox" name="phone" type="text">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                            </div>
                        </div>
                        <div class="newsletter-add">
                            <span class="newsletter-checkbox">
                                <input class="market-check" id="marketing" type="checkbox">
                                <label for="marketing"></label>
                            </span>
                            <label for="marketing" class="newsletter-text">Please tick this box if you wish to receive marketing information from us. Please see our <a href="index.html" target="_blank">Privacy Policy</a> for more information on how we keep your data safe.
                            </label>
                        </div>
                        <div class="newsletter-add">
                            <small class="small-txt">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</br></small>
                        </div>
                        <div class="endblock">
                            <button name="submit" class="sub-btn">Send Enquiry</button>
                            <small> <span class="warning-red">*</span> Fields Required</small>
                        </div>
                    </form>
                </div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
    <?php include "includes/newsletter.php";
    include "includes/footer.php";
    include "includes/submenu.php"; ?>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/myjs/variables.js"></script>
    <script src="js/myjs/cookies.js"></script>
    <script src="js/myjs/hamburger.js"></script>
    <script src="js/myjs/carousel.js"></script>
    <script src="js/myjs/stickynav.js"></script>
</body>
</html>