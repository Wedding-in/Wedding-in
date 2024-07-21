<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/gallery2.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/gallery">
                <i class="bi bi-arrow-left-short"></i>
            </a>
            <p>Gallery</p>
        </div>
        <div class="isi">
            <div class="card card_large" style="background-image: url('../img/5.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

     {{-- modal pop up --}}
     <div class="modals">
        <div class="modal-contents">
            <div class="modal-headers">
                <span class="close">-----------------</span>
            </div>
            <div class="modal-bodys">
                <img src="{{ asset('img/1.jpeg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-bodys">
                <img src="{{ asset('img/1.jpeg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-footers">
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                <p>Add new Folder</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/inspiration.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
