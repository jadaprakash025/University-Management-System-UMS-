 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()



  // Validation()
  // {
  //   var name1 = document.getElementById('validationCustom01').value;
  //   if(name1.lenght<3)
  //   {
  //     document.getElementById('name1').innerHTML="**please write more than one charecter ";
  //     return false;

  //   }
  // }




document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function (event) {
        // Prevent form submission
        event.preventDefault();
        
        // Clear previous errors
        clearErrors();
        
        // Perform validation
        const name = document.getElementById('validationCustom01').value;
        const email = document.getElementById('validationCustom02').value;
        const username = document.getElementById('validationCustomUsername').value;
        const password = document.getElementById('validationCustom05').value;
        const confirmPassword = document.getElementById('validationCustom06').value;
        const state = document.getElementById('validationCustom03').value;
        const city = document.getElementById('validationCustom04').value;
        const agree = document.getElementById('check_me_out').checked;
        
        let valid = true;

        // Validate name
        if (name.trim() === '') {
            showError('name1', 'Please enter your name.');
            valid = false;
        }

        // Validate email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            showError('emailHelp', 'Please enter a valid email address.');
            valid = false;
        }

        // Validate username
        if (username.length < 3) {
            showError('validationCustomUsername', 'Username must be at least 3 characters long.');
            valid = false;
        }

        // Validate password
        if (password.length < 6) {
            showError('validationCustom05', 'Password must be at least 6 characters long.');
            valid = false;
        }

        // Validate confirm password
        if (password !== confirmPassword) {
            showError('validationCustom06', 'Passwords do not match.');
            valid = false;
        }

        // Validate state
        if (state === '' || state === 'select state') {
            showError('validationCustom03', 'Please select a state.');
            valid = false;
        }

        // Validate city
        if (city === '' || city === 'select city') {
            showError('validationCustom04', 'Please choose a city.');
            valid = false;
        }

        // Validate checkbox
        if (!agree) {
            showError('check_me_out', 'You must agree before submitting.');
            valid = false;
        }

        // If all fields are valid, you can submit the form
        if (valid) {
            form.submit();
        }
    });

    function showError(elementId, message) {
        const element = document.getElementById(elementId);
        if (element) {
            element.textContent = message;
            element.classList.add('invalid-feedback');
        }
    }

    function clearErrors() {
        const errors = document.querySelectorAll('.invalid-feedback');
        errors.forEach(error => {
            error.textContent = '';
            error.classList.remove('invalid-feedback');
        });
    }
});

