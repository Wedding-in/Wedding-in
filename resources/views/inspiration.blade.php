<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspiration</title>
    <link rel="stylesheet" href="{{ asset('css/inspiration.css') }}">
</head>
<body>
    @include('components.search')
    <div class="pin_container">
        <div class="card card_small" style="background-image: url('../img/1.jpeg'); background-size: cover;">
            <a href="/inspiration2">
                <div class="bookmark">
                    <button id="btn">
                        <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                    </button>
                </div>
                </a>
            </div>
        <div class="card card_medium" style="background-image: url('../img/2.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_large" style="background-image: url('../img/3.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_medium" style="background-image: url('../img/4.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_large" style="background-image: url('../img/5.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_small" style="background-image: url('../img/6.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_medium" style="background-image: url('../img/7.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_large" style="background-image: url('../img/8.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
            </div>
        </div>
        <div class="card card_medium" style="background-image: url('../img/9.jpeg'); background-size: cover;">
            <div class="bookmark">
                <button id="btn">
                    <ion-icon name="bookmark-outline" class="icon"></ion-icon>
                </button>
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
                <img src="{{ asset('img/11.jpg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/11.jpg') }}" alt="">
                <p>Folder Name</p>
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
            </div>
            <div class="modal-footer">
                <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                <p>Add new Folder</p>
            </div>
        </div>
    </div>


    @include('components.navbar')

    <script src="{{ asset('js/inspiration.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
