
function browserinfo(){
   alert(  " AppName: " + navigator.appName  + '\n' 
   + "AppVersion: " + navigator.appVersion + '\n'
  + "Language used "+navigator.language + '\n'
    + "Cookies enabled: " + navigator.cookieEnabled + '\n'
    + "UserAgent: " + navigator.userAgent + '\n' 
    + "JavaEnabled: " + navigator.javaEnabled() + '\n' 
    //+ "TaintEnabled: " + navigator.taintEnabled() //taint is no longer in use but the function for it id the above
    );        // I was making the use of javascript navigator object.
}

document.designMode = "off";        // this was a test to see if designMode is a working DOM element
document.addEventListener("DOMContentLoaded", function() {  //this is HTML DOM method.
  const heroContent = document.querySelector('.hero-content');  //this is HTML DOM method.

  
  heroContent.classList.add('animate');     //Javascript Animation


});

function validateForm(){
  
  var len = document.signup.elements.length;
  for(let i = 0; i < len-1 ; i++){      // i used len -1 because it also recognizes the submit button as an element or a field.
      var element = document.signup.elements[i];      //retrieves the element we are working on
      
      if (element.value ==''){
          alert(element.name + " required");      
          return false;
      }       //check if the input fields are not empty
      else {
          if(element.name=="password" &&  element.value.length<= 7){
            alert("password must not be less than 8 characters");       //check if length of password is the right length
            return false;         
              }
          else if(element.name=="email"){
            
            var email = element.value;          //get elements value or whatever is in that field.
            var regex = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9\])+.([a-z]+)([.a-z]+)?/ ;     //specify regex format
              if (regex.test(email))
              {
                
                // return true;
              }      
              else{
                alert("you have provided an invalid email")
                return false;
              }//validate the email whether it is correct
            }
          else if( element.name == "confirm-password" ){
            var prev = document.signup.elements[i-1];
            
            if(prev.value !=  element.value){
              alert("passwords do not match");
              return false;
            }
             else if (element.value==''){
               alert("Please confirm your password");
               return false;
             }
             else{
               return true;
             } //checks if passwords are a match
          }
      
  }
}       //else if the input field is not empty check for one of the above conditions
}       //basic validation //data format Validation

