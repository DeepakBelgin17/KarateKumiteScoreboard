<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {

            background-image: url('/images/34998.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
margin:0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .login-container {
            width: 400px;
            text-align: center;
        }

        .card-login {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .card-header {
            background-color:rgb(116, 113, 113);
            color:white;
            text-align: center;
            padding: 1.5rem;
 }

        .card-body {
            padding: 2rem;
        }

    .form-group {
            margin-bottom: 1rem;
 }

        .btn-login {
            background-color:rgb(71, 68, 68);
            color: white;
            width: 50%;
            height: 40px;

             margin-left:0px;

        }
 .btn-login:hover {
            background-color: yellowgreen;
        }
.hi{
color:black;
}

.ice {
    border: 2px solid black; /* Set border color */
    border-radius: 5px; /* Add some border radius */
    padding: 10px; /* Add padding for better appearance */
    font-size: 16px; /* Adjust font size */
    color: #070707; /* Set text color */

}
    </style>
</head>

<body>
    <div class="container login-container">
        <div class="card card-login">
            <div class="card-header">
                <h3>Admin Login</h3>
            </div>
            <div class="card-body">


                <form action="{{ route('admin.login') }}" method="POST">

@csrf
<form id="loginForm">
                    <div class="form-group">
                        <label for="username" class="hi">Email</label>
                        <input type="email" class="form-control ice" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="hi">Password</label>
                        <input type="password" class="form-control ice" name="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-login mt-4 " onclick="validateForm()">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (email.trim() === '' || password.trim() === '') {
                alert('Please enter both email and password.');
                return;
            }

            // If all fields are filled, proceed with form submission
            document.getElementById('loginForm').submit();
        }
    </script>
</body>

</html>
