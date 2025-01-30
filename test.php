<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Popup</title>
    <style>
        /* Basic styling for the form popup */
        .form-popup {
            display: none; /* Hidden by default */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #ccc;
            z-index: 9;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
        }

        /* Input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Buttons */
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin: 5px 0;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .cancel {
            background-color: red;
        }

        .cancel:hover {
            background-color: #cc0000;
        }

        /* Rounded image for login icon */
        .roundedImage {
            border-radius: 50%;
            cursor: pointer;
        }

        /* Hide the checkbox and label */
        .login-toggle {
            display: none;
        }

        /* Label that works as the login icon */
        .login-toggle-label {
            display: inline-block;
            cursor: pointer;
        }

        /* When checkbox is checked, show the form */
        .login-toggle:checked + .form-popup {
            display: block;
        }

        /* Style for the close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }

        /* Hide the close button initially */
        .close-btn {
            display: none;
        }

        /* Show the close button when form is visible */
        .login-toggle:checked + .form-popup .close-btn {
            display: block;
        }
    </style>
</head>
<body>

<!-- Checkbox toggle for form visibility -->
<input type="checkbox" class="login-toggle" id="loginToggle">
<label for="loginToggle" class="login-toggle-label">
    <img class="roundedImage" src="images/loginIcon.png" style="height:50px;width:50px;padding:10px;float:right;">
</label>

<!-- Popup form -->
<div class="form-popup">
    <!-- Close button that will hide the form -->
    <label for="loginToggle" class="close-btn">X</label>
    <form action="/action_page.php" method="POST" class="form-container">
        <h1>Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" class="btn">Login</button>
    </form>
</div>

</body>
</html>
