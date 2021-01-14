<?php include 'sendemail.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A basic php mailer contact form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body>

<!-- makes appear the alert after form registration-->
<?php echo $alert;?>

<!--contact form-->

<form  onsubmit="return validateForm()" method="post" id="mc-embedded-subscribe-2-form" name="mc-embedded-subscribe-2-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> Campi richiesti</div>
<div class="mc-field-group">
    
    <input type="text" value="" name="NAME" class="required" id="mc-embedded-subscribe-2-form-NAME" placeholder="Nome *">
    <span id="mc-embedded-subscribe-2-form-NAME_errortext" class="errortext">Nome obbligatorio</span>
</div>
<div class="mc-field-group">
    
    <input type="text" value="" name="SURNAME" class="required" id="mc-embedded-subscribe-2-form-SURNAME" placeholder="Cognome *">
    <span id="mc-embedded-subscribe-2-form-SURNAME_errortext" class="errortext">Nome obbligatorio</span>
</div>
<div class="mc-field-group">
    
    <input type="email" value="" name="EMAIL" class="required email" id="mc-embedded-subscribe-2-form-EMAIL" placeholder="Email *">
    <span id="mc-embedded-subscribe-2-form-EMAIL_errortext" class="errortext">Email obbligatoria</span>
</div>
<div class="mc-field-group">
    
    <input type="text" name="MESSAGE" class="" value="" id="mce-MESSAGE" placeholder="Messaggio">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5c771fd39270923ece4828d46_ac778e8164" tabindex="-1" value=""></div>
    <div class="clear"><input class="form-btn" type="submit" value="SEND" name="subscribe" id="mc-embedded-subscribe-2" class="button"></div>
    </div>
</form>

</div>

    
</body>


<!--js validation scrip-->

<script>
function validateForm($form) { 
var $form = $('form'); 
var error = false;
var name = document.forms[$form.attr('name')]["NAME"].value;
if (name == "") {
    //alert("Nome*è un campo obbligatorio");
    showErrors($form.attr('name')+'-NAME')
    error = true;
  }
  var surname = document.forms[$form.attr('name')]["SURNAME"].value;
  if (surname == "") {
    showErrors($form.attr('name')+'-SURNAME')
    error = true;
  }  
  var email = document.forms[$form.attr('name')]["EMAIL"].value;
  if (email == "") {
    showErrors($form.attr('name')+'-EMAIL')
    error = true;
  }
  if(error){
        
        return false;
    }  else {
        return true;
    }

function showErrors(id) {
  document.getElementById(id).classList.add("error");
  document.getElementById(id + '_errortext').style.display = 'block'
}    

}

</script>

<!--re-loading to page to make the alert appear after form registration-->
<script type="text/javascript">
if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
}
</script>

</html>