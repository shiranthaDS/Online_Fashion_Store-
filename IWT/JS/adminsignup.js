

// Wait for the document to fully load
document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    const form = document.querySelector('form');
    
    // Get the password and confirm password fields
    const password = document.querySelector('#pass');
    const confirmPassword = document.querySelector('#cpass');
    
    // Add an event listener for form submission
    form.addEventListener('submit', function (event) {
        // Prevent form submission if passwords don't match
        if (password.value !== confirmPassword.value) {
            event.preventDefault();
            alert('Passwords do not match! Please try again..!');
            confirmPassword.focus(); // Focus on confirm password field
        }
    });
});
