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
    <?php
    if (isset($_GET['error'])) {
        $errorMessage = "";
    
        switch ($_GET['error']) {
            case 'db_error':
                $errorMessage = "There was an error processing your request. Please try again later.";
                break;
            default:
                $errorMessage = "An unknown error has occurred.";
                break;
        }
    
        echo '<div class="contact-error-message">' . $errorMessage . '</div>';
    }

    ?>
    <div class="breadcrumb-container hidden-xs">
        <div class="global-container">
            <p class="breadcrumb-txt"><a href="#" class="color-link"><strong>Home</strong></a> / Our Offices</p>
        </div>
    </div>
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
                <div class="offices-block">
                    <div class="office-box">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.8054762210577!2d-0.005641987802082621!3d51.68170359783767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761fff09271cbd%3A0xbfed51d9cf061321!2sPixel%20Business%20Centre%2C%20Brooker%20Rd%2C%20Waltham%20Abbey%20EN9%201JH!5e0!3m2!1sen!2suk!4v1711353207494!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="office-box">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1221.723241981271!2d0.1516903505147654!3d52.235273443582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8711469d7de59%3A0x4ad66f1b36a452da!2sNetmatters%20Cambridge!5e0!3m2!1sen!2suk!4v1711354006001!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="office-box">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.644199469616!2d1.13399011224614!3d52.5760453319621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1711354068399!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="office-box">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.7578045941837!2d1.710479212245013!3d52.55590573345401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1711354165190!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="bottom-content">
                    <div class="email-contact">
                        <p class="text-bold">Email us on:</p>
                        <a href="#" class="emailuson">sales@netmatters.com</a>
                        <p class="text-bold">Business hours:</p>
                        <p class="text-bold">Monday - Friday 07:00 - 18:00</p>
                        <a class="accordion color-link text-bold">Out of Hours IT Support<i class="fa-solid fa-angle-down fa-lg"></i></a>
                        <div class="acco-box">
                        <p class="graytext">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p class="text-bold">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00</br>
                        Sunday 10:00 - 18:00</p>
                        <p class="graytext">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                        </div>
                    </div>
                    <div class="form-body">
                        <form action="includes/formhandler.php" method="POST" accept-charset="UTF-8" id="contact-form">
                            <div class="form-group">
                                <div class="form-group-row">
                                    <div class="form-name contact-form">
                                        <label for="contact-us-name" class="newsltr-label required">Your Name</label>
                                        <input id="contact-us-name" class="contact-us-name" name="name" type="text">
                                    </div>
                                    <div class="form-company contact-form">
                                        <label for="contact-us-company" class="newsltr-label">Company Name</label>
                                        <input id="contact-us-company" class="contact-us-company" name="company" type="text">
                                    </div>
                                    <div class="form-email contact-form">
                                        <label for="contact-us-email" class="newsltr-label required">Your Email</label>
                                        <input id="contact-us-email" class="contact-us-email" name="email" type="text">
                                    </div>
                                    <div class="form-phone contact-form">
                                        <label for="contact-us-phone" class="newsltr-label required">Your Telephone Number</label>
                                        <input id="contact-us-phone" class="contact-us-phone" name="phone" type="text">
                                    </div>
                                </div>
                                <div class="form-msg contact-form">
                                    <label for="contact-us-msg" class="newsltr-label required">Message</label>
                                    <textarea id="contact-us-msg" class="contact-us-msgbox" name="message" type="text">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
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
                                <button name="submit" class="sub-btn enq-btn">Send Enquiry</button>
                                <small> <span class="warning-red">*</span> Fields Required</small>
                            </div>
                        </form>
                    </div>
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
    <script src="js/myjs/accordion.js"></script>
</body>
</html>