<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Font.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-color: #FFFEF9;
            font-family: SourceSerif4-Regular;
        }
        .btn {
            background-color: #FCB2A9;
            color: white;
            border-radius: 0.25rem;
            font-weight: 600;
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .title {
            font-family: SourceSerif4-Bold;
        }
        .password-toggle {
            position: relative;
        }
        .password-toggle .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .login-link {
            color: #FCB2A9;
            font-family: SourceSerif4-SemiBold;
        }
        .img-top img {
            object-fit: cover;
        }
        .head {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .google {
            width: 300px;
            height: 50px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border: none;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div class="img-top mb-3">
        <img src="https://www.betterup.com/hs-fs/hubfs/husband-and-wife-newly-weds-taking-hands.jpg?width=1200&height=827&name=husband-and-wife-newly-weds-taking-hands.jpg" alt=""
            style="width: 100%; height: 150px">
    </div>
    <div class="register-form">
        <div class="head">
            <h1 class="title text-center mb-4">Log In</h1>
            <button class="google mb-4">
                <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-1024.png" alt="" width="40px" height="40px">
                Continue with Google
            </button>
            <h1 class="title text-center mb-4">Or</h1>
        </div>
        <form class="mx-5">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email">
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating mb-3 password-toggle">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <i class="fas fa-eye-slash toggle-password"></i>
            </div>

            @csrf
            <button type="submit" class="btn w-100 mb-3 mt-3" id="loginButton">Login</button>

            <h6 class="text-center mb-4">
                <span class="login-link">Forgot password?</span>
            </h6>
            <h6 class="text-center">
                Do not have an account? <a href="/register" style="text-decoration:none;"><span class="login-link">Register</span></a>
            </h6>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function () {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
                this.classList.toggle('fa-eye');
            });
        });

        document.getElementById('loginButton').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '/home';
        });
    </script>
</body>
</html>
