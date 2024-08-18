<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Detail</title>
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

        .form-text-field h5 {
            font-family: SourceSerif4-SemiBold;
        }

        .card-body p {
            font-family: SourceSerif4-Light;
        }

        .side-bot h2 {
            font-family: SourceSerif4-SemiBold;
        }

        .text-right-namaprofile span {
            font-family: SourceSerif4-regular;
        }





        .container-form {

            font-weight: 500;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 20vh;
        }

        .content-form {
            width: 90%;
            display: flex;
            justify-content: center;
        }

        .content-form form {
            /* border: solid red; */
            width: 100%;
            font-weight: 600;
        }

        .content-form input {
            border: 1px solid grey;
            padding: 2%;
            padding-right: 12%;
            font-family: SourceSerif4-Regular;
            width: 100%;
            height: 7vh;
            /* margin: 0; */
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="container-fluid d-flex flex-column " style=" height: 10vh;">
        <div class="d-flex  align-items-center m-0 p-0" style=" height: inherit;">
            <div class="d-flex justify-content-end align-items-center" style=" width: 20%">
                <a href="/profile" class="btn">
                    <i class="bi bi-arrow-left-short" style="font-size: 50px"></i>
                </a>
            </div>
            <div class="d-flex align-items-center justify-content-center" style=" margin-left: 10%">
                <h2 style="font-family: SourceSerif4-SemiBold;">Edit Profile</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 m-0" style=" height: 45vh; ">
        <div class="d-flex justify-content-center position-relative gambar-profile m-0" style=" align-items: center;height: inherit;">
            <div class="border" style="border-radius: 50%">
                <img src="https://pv1.narvii.com/uploaded_cover/7993/3a6678f22521322b56b1ab034da37e4147f0c26dr1-720-902_raw.jpg"
                    alt="" height="300" width="300" style="border-radius: 50%; border: #FCB2A9 solid 1px">
                <div class="d-flex align-items-center justify-content-center icon-camera"
                    style="background-color: #FCB2A9; position: absolute; bottom: 50px; right: 25px; border-radius: 50%; width: 80px">
                    <a href="#" style=" font-size: 40px; color: white; "><i class="bi bi-camera"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="container-form">
            <div class="content-form">
                <form class="dflex form-text-field" action="/action_page.php">
                    <label for="fname">
                        <h5>Nama Lengkap</h5>
                    </label>
                    <input type="text" id="fname" name="fname" value="Alvina Krisendi" disabled>
                    <br>
                    <br>
                    <label for="notelp" style="width: 100%" class="label-form  d-flex align-items-center" disabled>
                        <h5>No. Telp</h5>
                        <i class="bi bi-pencil pb-1 ms-2"></i>
                    </label>
                    <input autocomplete="off" type="text" id="notelp" name="notelp" value="0812345679031"
                        placeholder="08XXXXXXXXXXX" disabled>
                    <br>
                    <br>
                    <label for="alamat" class="label-form d-flex align-items-center" style="width: 100%" disabled>
                        <h5>Alamat</h5>
                        <i class="bi bi-pencil pb-1 ms-2"></i>
                    </label>
                    <input type="text" id="alamat" name="alamat" value="jl.rumah ayam rt 00 rw 00" disabled>
                    <br>
                    <br>
                    <label for="email" class="label-form d-flex align-items-center" style="width: 100%;" disabled>
                        <h5>Email</h5>
                        <i class="bi bi-pencil pb-1 ms-2 "></i>
                    </label>
                    <input type="text" id="email" name="email" placeholder="@gmail.com" value="alvina@gmail.com" disabled>

                </form>
            </div>
        </div>
    </div>
</body>
<script>
    var notelp = document.getElementById('notelp');
    notelp.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
        if (this.value.length > 13) {
            this.value = this.value.slice(0, 13);
        }
    });
    var email = document.getElementById('email');
    email.addEventListener('input', function() {
        this.value = this.value.replace(/[^a-zA-Z0-9@.]/g, '');
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $(".label-form i").click(function() {
            let name = $(this).parent().attr('for');
            $(`input[name=${name}]`).removeAttr('disabled');
            $(`input[name=${name}]`).focus();
        });

        $(".label-form i").dblclick(function() {
            let name = $(this).parent().attr('for');
            $(`input[name=${name}]`).attr('disabled', 'disabled');
        });

        $("input").blur(function() {
            $(this).attr('disabled', 'disabled');
        });

        $("input").keypress(function(e) {
            if (e.which === 13) {
                $("input").attr('disabled', 'disabled');
            }
        });
    });
</script>

</html>
