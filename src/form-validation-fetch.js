function validateForm(){
  var formField = document.getElementsByClassName('required');
  var data = formField[0,1,2].value
  const myForm = document.getElementById('my-form');
  const formData = new FormData(document.getElementById('my-form'));
  console.log(formData);

  
  

  if (data === ''){
       
      alert('questo campo non può essere vuoto');
  }
  else{
      alert('success');
      fetch('sendemail.php', {
          method : 'post',
          body : formData
      }).then(function(response){
          return response.text();
      }).then(function(text){
          console.log(text);
      }).catch(function(error){
          console.error(error);
      })
  }
  
}