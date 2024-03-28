
// ********* ACCORDION ********* //

$(document).ready(function(){
    $(".accordion").click(function(){
        $(this).next(".acco-box").slideToggle();
    });
});

// ********* CONTACT FORM ********* //

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    var phoneRegex = /^\d{11}$/;
    return phoneRegex.test(phone);
}

$(".contact-error-message").delay(2000).fadeOut(500);

$(".enq-btn").on("click", function(e) {
    e.preventDefault();

    var $name = $("#contact-us-name").val();
    var $email = $("#contact-us-email").val();
    var $phone = $("#contact-us-phone").val();
    var $msg = $("#contact-us-msg").val();
    var isValid = true;

    if ($name.trim() === "" || $msg.trim() === "") {
        console.log("Empty name and/or message field.")
    }

    if ($email.trim() === "") {
        console.log("Please enter your email.");
        isValid = false;
    } else if (!isValidEmail($email)) {
        console.log("Please enter a valid email address");
        isValid = false;
    }

    if ($phone === "") {
        console.log("Please enter your phone number.");
        isValid = false;
    } else if (!isValidPhone($phone)) {
        console.log("Please enter a valid phone number.");
        isValid = false;
    }

    if (isValid) {
        console.log("Everything is correct! Submitting...")
        $("#contact-form").submit();
    }
});
