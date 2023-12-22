

 var name = ""
 var email = ""
 var password = ""
 var confirmPassword = ""
 var error_flag = 0

 $("#name").on("change", function(){
  name = $(this).val()

  if (name == "") {
    $("#name_error").text("")
    error_flag += 1
  }
  else if (name.length >= 30 ) {
    $("#name_error").text("Only 30 Characters are allowed")
    error_flag += 1
  } else {
    $("#name_error").text("Email Acceptable")
  }
})
 $("#email").on("change", function(){
  email = $(this).val()
  if (email == "") {
    $("#email_error").text("")
    error_flag += 1
  }
  else if (email.length >= 30 ) {
    $("#email_error").text("Only 30 Characters are allowed")
    error_flag += 1
  } else if (email.includes("@") == false) {
    $("#email_error").text("Email Address Does Not Contains @")
    error_flag += 1
  } else {
    $("#email_error").text("Email Acceptable")
  }
})
 $("#password").on("change", function(){
    password = $(this).val()
    const strengthMeter = $('#password_error');

        let strength = '';
        const lowerCase = /[a-z]/;
        const upperCase = /[A-Z]/;
        const numbers = /[0-9]/;
        const specialChars = /[!@#$%^&*]/;

        const weak_length = password.length >= 4;
        const medium_length = password.length >= 8;
        const strong_length = password.length >= 12;
        const containsLowerCase = lowerCase.test(password);
        const containsUpperCase = upperCase.test(password);
        const containsNumber = numbers.test(password);
        const containsSpecialChar = specialChars.test(password);

        const strong = strong_length || containsLowerCase && containsUpperCase && containsNumber && containsSpecialChar
        const medium = medium_length || (containsLowerCase || containsUpperCase) && containsNumber && containsSpecialChar
        const weak = weak_length 

        if (strong) {
          strength = 'Strong';
        } else if (medium) {
          strength = 'Medium';
        } else if (weak) {
          strength = 'Weak';
        } else {
          strength = 'Password Should be above or Equal 4 Characters';
          error_flag += 1

        }

        strengthMeter.html(`Password Strength: <strong>${strength}</strong>`);
 })
 $("#confirm_password").on("change", function(){
   confirmPassword = $(this).val()

   if (confirmPassword == "") {
    $("#confirm_password_error").text("")
    error_flag += 1
   }
   else if (password != confirmPassword) {
    $("#confirm_password_error").text("Password Do Not Match")
    error_flag += 1
  } else {
    $("#confirm_password_error").text("Password Matched")

  }
 })

$("#btn-submit").on("click", function() {
  if (error_flag >= 0) {
    alert("Form Cancelled")
    $("#error_submit").text("Fill the inputs in order to register")
  } else {
    alert("Form Submitted")
    $("#sub").submit()  
  }
})