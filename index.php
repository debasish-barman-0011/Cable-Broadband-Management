<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <h1>Website Name</h1>
            <button data-form="loginForm">Login</button>
            <button data-form="adminRegistrationForm">Admin Register</button>
            <button data-form="consumerRegistrationForm">New Consumer Registration</button>
        </div>
    </nav>

    <div class="login-form form-container" id="loginForm">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div id="loginMessage"></div>
        </form>
    </div>

    <div class="admin-registration-form form-container" id="adminRegistrationForm">
        <h2>Admin Registration</h2>
        <!-- Admin registration form fields -->
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Set Username" required>
            <input type="password" name="password" placeholder="Set Password" required>
            <button type="submit">Register</button>
            <!-- <div id="loginMessage"></div> -->
        </form>
    </div>

    <div class="consumer-registration-form form-container" id="consumerRegistrationForm">
        <h2>New Consumer Registration</h2>
        <!-- Consumer registration form fields -->
        <form action="#" method="post">
            <input type="text" name="Consumer_Name" placeholder="Consumer Name" required>
            <input type="text" name="STB_ID" placeholder="STB ID" required>
            <input type="number" name="Mobile_Number" placeholder="Mobile Number" required>
            <input type="email" name="Email_ID" placeholder="Email_ID" required>

            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                <option selected name="Area">Select Area</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
            <button type="submit">Register</button>
            <!-- <div id="loginMessage"></div> -->
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>