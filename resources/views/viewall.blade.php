<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/viewall.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/inspiration">
                <i class="bi bi-arrow-left-short"></i>
            </a>
            <p>Gallery</p>
        </div>
        <div class="pin_container">
            <div class="card card_small" style="background-image: url('../img/1.jpeg'); background-size: cover;">
                <a href="/inspiration2">
                    <div class="bookmark">
                        <button id="btn">
                            <i class="bi bi-bookmark"></i>
                        </button>
                    </div>
                    </a>
                </div>
            <div class="card card_small" style="background-image: url('../img/2.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/3.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/4.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/5.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/6.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/7.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/8.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/9.jpeg'); background-size: cover;">
                <div class="bookmark">
                    <button id="btn">
                        <i class="bi bi-bookmark"></i>
                    </button>
                </div>
            </div>
            <div class="card card_small" style="background-image: url('../img/10.jpeg'); background-size: cover;">
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
            <a href="/viewfolder" style="text-decoration: none;">
                <div class="modal-bodys">
                    <img src="{{ asset('img/11.jpg') }}" alt="">
                    <p>Wedding</p>
                    <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                </div>
            </a>
            <div class="modal-bodys">
                <img src="{{ asset('img/1.jpeg') }}" alt="">
                <p>Food</p>
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
