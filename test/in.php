<!DOCTYPE html>
<html lang="en">
<head>
  <title>OASA.gr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="signup.js"></script>
</head>

<body>
<div class="hero-unit">
 <h1>Contact Form</h1> 
</br>
<form method="POST" action="contact-form-submission.php" class="form-horizontal" id="contact-form">
    <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" name="name" id="name" placeholder="Your name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Email Address</label>
        <div class="controls">
            <input type="text" name="email" id="email" placeholder="Your email address">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="subject">Subject</label>
        <div class="controls">
            <select id="subject" name="subject">
                <option value="na" selected="">Choose One:</option>
                <option value="service">Feedback</option>
                <option value="suggestions">Suggestion</option>
                <option value="support">Question</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="message">Message</label>
        <div class="controls">
            <textarea name="message" id="message" rows="8" class="span5" placeholder="The message you want to send to us."></textarea>
        </div>
    </div>
    <div class="form-actions">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Submit Message</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</form>
</body>
<script>
    
$(document).ready(function () {

    $('#contact-form').validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });

});

</script>