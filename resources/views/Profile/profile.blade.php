<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Source Serif 4', serif;
        }

        @font-face {
            font-family: SourceSerif4-Bold;
            src: url(../Font/SourceSerif4-Bold.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Light;
            src: url(../Font/SourceSerif4-Light.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Medium;
            src: url(../Font/SourceSerif4-Medium.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Regular;
            src: url(../Font/SourceSerif4-Regular.ttf);
        }

        @font-face {
            font-family: SourceSerif4-SemiBold;
            src: url(../Font/SourceSerif4-SemiBold.ttf);
        }

        .text-right-namaprofile h5 {
            font-family: SourceSerif4-SemiBold;
        }

        .card-body p {
            font-family: SourceSerif4-Light;
        }

        .side-bot h2 {
            font-family: SourceSerif4-regular;
        }

        .text-right-namaprofile span {
            font-family: SourceSerif4-regular;
        }

        .modal-header h5 {
            font-family: SourceSerif4-Bold;
        }

        .modal-body label {
            font-family: SourceSerif4-SemiBold;
        }

        .modal-body input {
            font-family: SourceSerif4-regular;
        }

        .modal-body button {
            font-family: SourceSerif4-SemiBold;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style=" height: 30vh">
        <div class="row" style="border: 1px solid black; height: inherit">
            <div class="d-flex align-items-center">
                <div class="w-50 justify-content-center d-flex " style="position: relative">
                    <img class="border"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Ftfb7GxTyx0Es7zr7kUmnsKnTiqmP1sag&s"
                        alt="" height="130" width="130" style="border-radius: 50%">
                    {{-- <div class="camera-icon d-flex align-items-center justify-content-center"
                        style="background-color: #FCB2A9; position: absolute; bottom: 0; right: 10px; border-radius: 50%; width: 50px">
                        <a href="#" style=" font-size: 30px; color: white; "><i class="bi bi-camera"></i></a>
                    </div> --}}
                </div>
                <div class="w-50 text-right-namaprofile" style=" padding-left: 5px">
                    <h5>nama</h5>
                    <a style="color: #FCB2A9" href="/detailprofile"><span>Edit Profile</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center flex-column pt-3 side-bot" style=" height: 50vh">
        <div class="col-md-2 d-flex justify-content-center align-items-center"
            style="border-bottom:1px solid black;height: 10vh; width: 80%">
            <a href="#" class=" d-flex justify-content-between"
                style=" color: black; width: 100%;text-decoration: none;">
                <h2>My Appoinment</h2>
                <h2> > </h2>
            </a>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-items-center"
            style="border-bottom:1px solid black;height: 10vh; width: 80%">
            <a href="#" class=" d-flex justify-content-between"
                style=" color: black; width: 100%;text-decoration: none;">
                <h2>FAQ</h2>
                <h2> > </h2>
            </a>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-items-center"
            style="border-bottom:1px solid black;height: 10vh; width: 80%">
            <a href="#" class=" d-flex justify-content-between"
                style=" color: black; width: 100%;text-decoration: none;" data-bs-toggle="modal"
                data-bs-target="#changePasswordModal">
                <h2>Change Password</h2>
                <h2> > </h2>
            </a>
        </div>
        <div class="col-md-2 my-4 d-flex justify-content-center align-items-center" style="height: 10vh; width: 80%">
            <a href="#" class=" d-flex justify-content-center"
                style=" color: black; width: 100%;text-decoration: none;">
                <h2 style="color: red">Logout</h2>
            </a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary border-0" style="background-color: #FCB2A9">Change
                            Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('components.navbar')
</body>
{{-- jcquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


</html>
