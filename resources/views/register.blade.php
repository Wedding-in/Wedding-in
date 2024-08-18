<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Font.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Register</title>
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
        .title{
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
    </style>
</head>
<body>
    <div class="img-top mb-3">
        <img src="https://www.betterup.com/hs-fs/hubfs/husband-and-wife-newly-weds-taking-hands.jpg?width=1200&height=827&name=husband-and-wife-newly-weds-taking-hands.jpg" alt=""
            style="width: 100%; height: 150px">
    </div>
    <div class="register-form">
        <h1 class="title text-center mb-4">Register</h1>
        <form class="mx-5">
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingFirstName" placeholder="First Name">
                    <label class="ms-2" for="floatingFirstName">First Name</label>
                </div>
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingLastName" placeholder="Last Name">
                    <label class="ms-2" for="floatingLastName">Last Name</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email">
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating mb-3 password-toggle">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <i class="fas fa-eye-slash toggle-password"></i>
            </div>
            <div class="form-floating mb-3 password-toggle">
                <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password">
                <label for="floatingConfirmPassword">Confirm Password</label>
                <i class="fas fa-eye-slash toggle-password"></i>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with privacy and policy</label>
            </div>
            @csrf
            <button type="submit" class="btn w-100 mb-3 mt-3" id="registerButton">Register</button>
            <h6 class="text-center">
                Already have an account? <a href="/login" style="text-decoration: none;"><span class="login-link">Log in</span></a>
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
        document.getElementById('registerButton').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '/login';
        });
    </script>
</body>
</html>
