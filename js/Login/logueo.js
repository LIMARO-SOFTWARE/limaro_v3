$(document).ready(function() {
    // Handle logout button click
    $(document).on('click', '#btnCerrar', function() {
        handleLogout();
    });
    
    // Check login status on page load
    checkLoginStatus();
});

// Function to handle user logout
function handleLogout() {
    $.ajax({
        url: '../controladorLogin/login.delete.php',
        type: 'POST',
        dataType: 'json',
        data: null,
    })
    .done(function(response) {
        try {
            if (response === true) {
                window.location.href = "../login/login.php";
            } else {
                console.error('Logout failed:', response);
            }
        } catch (e) {
            console.error('Error parsing JSON response:', e);
        }
    })
    .fail(function(xhr, status, error) {
        console.error('Logout request failed:', {
            status: status,
            error: error,
            response: xhr.responseText
        });
    });
}

// Function to check login status
function checkLoginStatus() {
    $.ajax({
        url: '../controladorLogin/logueo.read.php',
        type: 'POST',
        dataType: 'json',
        data: null,
    })
    .done(function(response) {
        // Handle successful login status check
        console.log('Login status checked successfully');
    })
    .fail(function(xhr, status, error) {
        console.error('Login status check failed:', {
            status: status,
            error: error,
            response: xhr.responseText
        });
    });
}