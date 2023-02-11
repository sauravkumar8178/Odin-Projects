<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>GET IN TOUCH</h3>
            <input type="text" id="name" autocomplete="on" required autofocus placeholder="Your Name">
            <input type="email" id="email" autocomplete="on" required placeholder="Your mail">
            <input type="tel" id="phone" autocomplete="on" required placeholder="your number" pattern="[0-9]{10}">
            <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
            <button type="submit">Send</button>
        </form>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
                Email.send({
                    Host : "smtp.gmail.com",
                    Username : "maliodas.dragon.sin07@gmail.com",
                    Password : "saurav@Singh",
                    To : 'maliodas.dragon.sin07@gmail.com',
                    From : document.getElementById("email").value,
                    Subject : "New Contact Form Enquiry",
                    Body : "Name: " + document.getElementById("name").value
                        + "<br> Email: " + document.getElementById("email").value
                        + "<br> Phone no: " + document.getElementById("phone").value
                        + "<br> Message: " + document.getElementById("message").value
                }).then(
                message => alert("Message Sent Succesfully")
                );

            }
        </script>
    </div>
</body>
</html>