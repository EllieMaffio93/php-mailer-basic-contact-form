const username = document.getElementById('NAME');
const surname = document.getElementById('SURNAME');
const email = document.getElementById('EMAIL');
const message = document.getElementById('MESSAGE');





function checkInputs(form){
  //gets the values from the input fields
  const usernameValue = username.value.trim();
  const surnameValue = surname.value.trim();
  const emailValue = email.value.trim();
  const messageValue = message.value.trim();
  var form = document.getElementById('my-form');
  var error = false;

  //check if the input fields have a value
  //if field is empty 
  if (usernameValue === ''){
    //show the error message
    //add error class
    setErrorFor(username, 'Il campo Nome non può essere vuoto');
    error = true;
  }
  else{
    //add success class
    setSuccessFor(username);
  }

  if (surnameValue === ''){
    //show the error message
    //add error class
    setErrorFor(surname, 'Il campo Cognome non può essere vuoto');
    error = true;
  }
  else{
    //add success class
    setSuccessFor(surname);
  }

  if (emailValue === ''){
    //show the error message
    //add error class
    setErrorFor(email, 'Il campo Email non può essere vuoto');
    error = true;
  }
  else{
    //add success class
    setSuccessFor(email);
  }


  if (messageValue === ''){
    //show the error message
    //add error class
    setErrorFor(message, 'Il campo Messaggio non può essere vuoto');
    error = true;
  }
  else{
    //add success class
    setSuccessFor(message);
  }

  if(error){
        
    return false;
}  else {
    fetch('sendemail.php',{
      method: 'POST',
    });
}

//function that adds the .error class and the error message

function setErrorFor(input , message){
  const formControl = input.parentElement; //targets .form-control div
  const small = formControl.querySelector('small');
  //add the the error message inside the <small> element
  small.innerText = message;
  //adds error class
  formControl.className = 'form-control error';
}

//function that adds the .success class

function setSuccessFor(input){
  //targets .form-control div
  const formControl = input.parentElement; 
  // adds success class
  formControl.className = 'form-control success';
}

  
}


//making the alert appear
if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
}







