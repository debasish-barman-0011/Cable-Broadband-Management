document.addEventListener("DOMContentLoaded", function() {
    // Get login form
    var loginForm = document.getElementById('loginForm');
    // Get admin registration form
    var adminRegistrationForm = document.getElementById('adminRegistrationForm');
    // Get consumer registration form
    var consumerRegistrationForm = document.getElementById('consumerRegistrationForm');

    // Single click to show forms
    document.querySelectorAll('.navbar button').forEach(function(button) {
        button.addEventListener('click', function() {
            var formId = this.getAttribute('data-form');
            var form = document.getElementById(formId);
            if (form) {
                form.style.display = 'block';
            }
        });
    });

    // Double click to hide forms
    document.querySelectorAll('.navbar button').forEach(function(button) {
        button.addEventListener('dblclick', function() {
            var formId = this.getAttribute('data-form');
            var form = document.getElementById(formId);
            if (form) {
                form.style.display = 'none';
            }
        });
    });

    // Close forms on double click on form heading
    document.querySelectorAll('.login-form h2, .admin-registration-form h2, .consumer-registration-form h2').forEach(function(heading) {
        heading.addEventListener('dblclick', function() {
            this.parentElement.style.display = 'none';
        });
    });
});
