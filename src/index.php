<?php include 'sendemail.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A basic php mailer contact form</title>

</head>
<!--super basic style-->
<style>

*{
    box-sizing:border-box;
}


.form-control{
    margin-bottom:10px;
    padding-bottom:20px; /*leaving the space for the alert message*/
    position:relative;

}

.form-control label{
    display:inline-block;
    margin-bottom:10px;
}

.form-control input{
    border:2px solid #f0f0f0;
    border-radius:4px;
    display:block;
    padding:10px;
    font-size:14px;
}

.form-control small {
    position:absolute;
    bottom:0;
    left:0;
    visibility:hidden;
}

.form-control.error small {
    
    visibility:visible;
    color:#e74c3c;
}

.form-btn{
    margin-top:20px;
    

}

.form-control.success input {
    border-color:#2ecc71;
}

.form-control.error input {
    border-color:#e74c3c;
}



</style>

<body>

<!-- makes appear the alert after form registration-->
<?php echo $alert;?>

<!--contact form-->

<form onsubmit="return validateForm()" class="form" id="my-form" method="post" class="validate" taget="_blank" novalidate>
    <div class="form-control">
        <label>Name*</label>
        <input type="text" name="NAME" class="required" id="NAME" placeholder="Name*">
        <small>Error message</small>
    </div>
    <div class="form-control">
        <label>Surname*</label>
        <input type="text" name="SURNAME" class="required" id="SURNAME" placeholder="Surname*">
        <small>Error message</small>
    </div>
    <div class="form-control">
        <label>E-mail*</label>
        <input type="email" name="EMAIL" class="required" id="EMAIL" placeholder="Email*">
        <small>Error message</small>
    </div>
    <div class="form-control">
        <label>Messaggio</label>
        <input type="textarea" name="MESSAGE" id="MESSAGE" placeholder="Message">
        <small>Error message</small>
    </div>
    <input class="form-btn" type="submit" value="SEND" name="subscribe" id="form-button" class="button">
</form>

    
</body>

<script type="text/javascript" src="form-validation-fetch.js"></script>



</html>