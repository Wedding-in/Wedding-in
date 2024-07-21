<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspiration</title>
    <link rel="stylesheet" href="{{ asset('css/inspiration2.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/inspiration">
                <ion-icon name="arrow-back-outline" class="icon"></ion-icon>
            </a>
            <p>Inspiration</p>
        </div>
        <div class="isi">
            <div class="card card_large" style="background-image: url('../img/5.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>

     {{-- modal pop up --}}
     <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">-----------------</span>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/1.jpeg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/1.jpeg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-footer">
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
