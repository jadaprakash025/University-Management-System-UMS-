<script>
        var fonerror=document.getElementById("fonerror");
        var emailerror=document.getElementById("emailerror");
        var passerror=document.getElementById("passerror");
        var cpasserror=document.getElementById("cpasserror");
        var usererror=document.getElementById("usererror");
        var doberror=document.getElementById("doberror");
        function validuser()
        {
            var user=document.getElementById('user-name');
            usererror.innerHTML='';
            if (user.value=="") {
                usererror.innerHTML='*Enter a User Name';
                user.focus();
                return false;
            }else if(user.value.length > 20){
                usererror.innerHTML='*Invalid Long User Name';
                user.focus();
                return false;
            }else if(user.value.length <= 3){
                usererror.innerHTML='*Invalid Sort User Name';
                user.focus();
                return false;
            }
        }
        function validdob()
        {
            var birth=Date(document.getElementById('dob').value);
            var today=Date();
            var dob=document.getElementById('dob');
            var min=Date('31-12-1981');
            doberror.innerHTML='';
            if (dob.value=="") {
                doberror.innerHTML='*Select Your Birth Date';
                dob.focus();
                return false;
            }else if(birth >= today ){
                doberror.innerHTML='* please Select a date After Today';
                dob.focus();
                return false;
            }else if(birth < min ){
                doberror.innerHTML='* please Select a date  Before 31-12-1981';
                dob.focus();
                return false;
            }
        }
        function validpassword()
        {
            var password=document.getElementById('password');
            passerror.innerHTML='';
            if(password.value == "")
                {
                    passerror.innerHTML='*Enter a Password';
                    password.focus();
                    return false;
                }
            else if(password.value.length < 6)
                {
                    passerror.innerHTML='*Password Must be 6 Carecter';
                    password.focus();
                    return false;
                }
            else if(password.value.length > 8)
                {
                    passerror.innerHTML='*Password 6 To 8 Carecter';
                    password.focus();
                    return false;
                }
        }
        function validcpassword()
        {
            var password=document.getElementById('password');
            var cpassword=document.getElementById('confirm-password');
            cpasserror.innerHTML = '';
            if(cpassword.value==""){
                cpasserror.innerHTML='*Enter a Confirm Password';
                cpassword.focus();
                return false;
            }else if(password.value!=cpassword.value){
                cpasserror.innerHTML='*Password Not Macth';
                cpassword.focus();
                return false;
            }

        }

        function validphone()
        {
            var phone = document.getElementById('phone');
            fonerror.innerHTML = '';
            if(phone.value == ""){
                fonerror.innerHTML = '*Enter a phone Number';
                phone.focus();
                return false;
            }else if (phone.value.length < 10 || phone.value.length > 10) {
                fonerror.innerHTML= '*phone no should be 10 digits';
                phone.focus();
                return false;
            }else if (!phone.value.match(/^[0-9]{10}$/)) {
                fonerror.innerHTML= '*only digits please.';
                phone.focus();
                return false;
             }
        }
        function validemail()
        {
            var email=document.getElementById('email');
            dotPos = $("#email").val().indexOf(".");
            lastDotPos= $("#email").val().lastIndexOf(".");
            atPos= $("#email").val().indexOf("@");
            length = $("#email").val().length;
            emailerror.innerHTML= '';
            if(email.value =="")
            {
                emailerror.innerHTML= '*Enter Your Email!!!!';
                email.focus();
                return false;
            }else if(!(atPos>0  && length>lastDotPos && dotPos>3 && length-lastDotPos>2))
            {
                emailerror.innerHTML= '*Invalid email!!!!';
                email.focus();
                return false;
            }
        }
        //     $(document).ready(function()
        //     {
        //         $("#phone").keydown(function(e){
            
        //             if(!((e.keyCode>=48 && e.keyCode<=57) || e.keyCode==9 || e.keyCode==8))
        //             {
        //                 e.preventDefault();   
        //             }
        //          });
        //         $("#email").blur(function(){
                    // dotPos = $("#email").val().indexOf(".");
                    // lastDotPos= $("#email").val().lastIndexOf(".");
                    // atPos= $("#email").val().indexOf("@");
                    // length = $("#email").val().length;
                    
                    // if(!(atPos>0  && length>lastDotPos && dotPos>3 && length-lastDotPos>2))
                    // {
                    //     alert('Invalid email!!!!');
                    // }
        //         });
        //         $("#phone").blur(function(){
        //             if($("#phone").val().length<10)
        //             {
        //                 alert("Contact should be of 10 digits");
        //                     $("#phone").focus();
        //             }
        //         });
        //         $("form").submit(function(){
        //             if($("#phone").val().length<10)
        //             {
        //                 alert("Contact should be of 10 digits");
        //                     $("#phone").focus();
        //                     return false;  
        //             }
        //             else if($("#password").val()!=$("#confirm-password").val())
        //                 {
        //                     alert("Password and confirm password not matching");
        //                     $("#password").focus();
        //                     return false;
        //                 }
        //         });
        // });

    </script>