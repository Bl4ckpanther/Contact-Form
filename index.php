<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
        <link rel="stylesheet" type="text/css" href="custom.css">
    </head>
    <body>
        <main>
            <div class="container">  
                <form id="contact" action="" method="post">
                    <h3>Quick Contact</h3>
                    <h4>Contact us today, and get reply with in 24 hours!</h4>
                    <fieldset>
                        <input id="form_name" type="text" name="name" class="form_control" tabindex="1"
                        placeholder="Please enter your name *" required="required" data-error="Name is required.">
                    </fieldset>
                    <fieldset>
                        <input id="form_email" placeholder="Please enter your email *" type="email" tabindex="2" name="email" class="form_control"  required="required" data-error="Valid email is required.">
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Phone Number" class="form_control" type="tel" tabindex="3" name="phone" required="required" data-error="Phone is required".>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Web Site starts with http://" type="text" class="form_control" tabindex="4" name="url" required="required" data-error="URL is required".>
                    </fieldset>
                    <fieldset>
                        <textarea id="form_message" name="message"  class="form_control" rows="4" placeholder="Type your Message Here...." type="text" name="message" tabindex="5" required="required" data-error="Please, leave us a message.">
                        </textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit"class="form_control" data-submit="...Sending">Send</button>
                    </fieldset>
                </form>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    </body>
</html>