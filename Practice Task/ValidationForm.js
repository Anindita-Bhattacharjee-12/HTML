function handlesubmit(){
                var nameError=document.getElementById("NameError");
                nameError.innerHTML="";
                var ageError=document.getElementById("AgeError");
                ageError.innerHTML="";
                var numberError=document.getElementById("NumberError");
                numberError.innerHTML="";
                var emailError=document.getElementById("EmailError");
                emailError.innerHTML="";
                var passwordError=document.getElementById("PasswordError");
                passwordError.innerHTML="";
                var name=document.getElementById("fullname").value;
                var age=document.getElementById("age").value;
                var phoneNumber=document.getElementById("phoneNumber").value;
                var email=document.getElementById("emailAddress").value;
                var password=document.getElementById("Password").value;
                var hasError=false;
                if(name.trim()===""){
                    document.getElementById("NameError").innerHTML="Full name is required";
                    hasError=true;
                }
                else if(!/^[A-Za-z\s]+$/.test(name)){
                   document.getElementById("NameError").innerHTML="Invalid Name";
                   hasError=true; 
                }
                if(age.trim()===""){
                    document.getElementById("AgeError").innerHTML="Age is required";
                    hasError=true;
                }
                else if(Number(age)<18){
                   document.getElementById("AgeError").innerHTML="Age must be equal or higher than 18";
                    hasError=true;
                }
                if(phoneNumber.trim()===""){
                    document.getElementById("NumberError").innerHTML="Number is required";
                    hasError=true;
                }
                else if (!/^\+880-\d{5}-\d{5}$/.test(phoneNumber)) {
                    document.getElementById("NumberError").innerHTML="Phone number must follow the format +880-XXXXX-XXXXX";
                    hasError = true;
                }
               if(email.trim()===""){
                    document.getElementById("EmailError").innerHTML="Email is required";
                    hasError=true;
                }
                else if(!email.includes("@")||!email.includes(".")){
                   document.getElementById("EmailError").innerHTML="Invalid email address";
                   hasError=true;
                }
                if(password.trim()===""){
                    document.getElementById("PasswordError").innerHTML="Password is required";
                    hasError=true;
                }
                else if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8}$/.test(password)){
                   document.getElementById("PasswordError").innerHTML="Invalid password";
                   hasError=true;
                }
                if(hasError){
                   return false;
                } 
              alert("Form submitted successfully");
              return false;
        }