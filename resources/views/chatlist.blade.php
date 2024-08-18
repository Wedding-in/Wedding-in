<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Font CSS --}}
    <link rel="stylesheet" href="../../css/Font.css">


    <style>
        .chat-item {
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .chat-item:active {
            transform: scale(0.98);
        }

        .clicked {
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body style="background-color: #FFFEF9">
    <div class="container-fluid p-0 d-flex justify-content-between align-items-center">
        <div class="container panah ps-4 d-flex align-items-center" style="height: 55px;">
            <a href="/home" style="text-decoration: none;">
            <i class="bi bi-arrow-left-short" style="font-size: 50px; margin-left: -3%; color: black;"></i>
        </a>
            <h3 class="text-bolder text-center"
                style="font-family: SourceSerif4-Bold; font-size: 1rem; margin-top: 2.5%;">Chats</h3>
        </div>
        <div class="search pe-4">
            <i class="bi bi-search" style="font-size: 25px"></i>
        </div>
    </div>
    <hr>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <a href="/chat" style="text-decoration: none; color: black;">
                <div class="chat-item d-flex align-items-center mb-3 ps-3" onclick="handleClick(this)">
                    <div class="gambare d-flex p-0 m-0" style="width: 20%; height: auto; aspect-ratio: 1 / 1; overflow: hidden; border-radius: 50%;">
                        <img src="https://www.pranataprinting.com/wp-content/uploads/2019/02/Tips-Sukses-Bisnis-Wedding-Organizer-Pranata-Printing-1170x658.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="chat-details ms-3" style="width: 100%; height: 100%;">
                        <div class="topperchat d-flex justify-content-between align-items-end">
                            <h5 class="chat-name" style="margin-bottom: -0.5%">RaxWeddingin</h5>
                            <p class="chat-time pe-3">05 Mei 2024</p>
                        </div>
                        <div class="lowerchat d-flex">
                            <i class="bi bi-check2-all"></i>
                            <p class="chat-message ms-1">Kalau misalnya saya ingin jadi</p>
                        </div>
                    </div>
                </div>
            </a>
                <hr>
                <a href="/chat" style="text-decoration: none; color: black;">
                <div class="chat-item d-flex align-items-center mb-3 ps-3" onclick="handleClick(this)">
                    <div class="gambare d-flex p-0 m-0" style="width: 20%; height: auto; aspect-ratio: 1 / 1; overflow: hidden; border-radius: 50%;">
                        <img src="https://www.pranataprinting.com/wp-content/uploads/2019/02/Tips-Sukses-Bisnis-Wedding-Organizer-Pranata-Printing-1170x658.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="chat-details ms-3" style="width: 100%; height: 100%;">
                        <div class="topperchat d-flex justify-content-between align-items-end">
                            <h5 class="chat-name" style="margin-bottom: -0.5%">RudiWeddingin</h5>
                            <p class="chat-time pe-3">12 April 2024</p>
                        </div>
                        <div class="lowerchat d-flex">
                            <p class="chat-message">Rudi: Kalau saya si gpp, masnya?</p>
                        </div>
                    </div>
                </div>
            </a>
                <hr>
                <a href="/chat" style="text-decoration: none; color: black;">
                <div class="chat-item d-flex align-items-center mb-3 ps-3" onclick="handleClick(this)">
                    <div class="gambare d-flex p-0 m-0" style="width: 20%; height: auto; aspect-ratio: 1 / 1; overflow: hidden; border-radius: 50%;">
                        <img src="https://www.pranataprinting.com/wp-content/uploads/2019/02/Tips-Sukses-Bisnis-Wedding-Organizer-Pranata-Printing-1170x658.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="chat-details ms-3" style="width: 100%; height: 100%;">
                        <div class="topperchat d-flex justify-content-between align-items-end">
                            <h5 class="chat-name" style="margin-bottom: -0.5%">RaxWeddingin</h5>
                            <p class="chat-time pe-3">05 Mei 2024</p>
                        </div>
                        <div class="lowerchat d-flex">
                            <i class="bi bi-check2-all"></i>
                            <p class="chat-message ms-1">Kalau misalnya saya ingin jadi</p>
                        </div>
                    </div>
                </div>
            </a>
                <hr>
                <a href="/chat" style="text-decoration: none; color: black;">
                <div class="chat-item d-flex align-items-center mb-3 ps-3" onclick="handleClick(this)">
                    <div class="gambare d-flex p-0 m-0" style="width: 20%; height: auto; aspect-ratio: 1 / 1; overflow: hidden; border-radius: 50%;">
                        <img src="https://www.pranataprinting.com/wp-content/uploads/2019/02/Tips-Sukses-Bisnis-Wedding-Organizer-Pranata-Printing-1170x658.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="chat-details ms-3" style="width: 100%; height: 100%;">
                        <div class="topperchat d-flex justify-content-between align-items-end">
                            <h5 class="chat-name" style="margin-bottom: -0.5%">RudiWeddingin</h5>
                            <p class="chat-time pe-3">12 April 2024</p>
                        </div>
                        <div class="lowerchat d-flex">
                            <p class="chat-message">Rudi: Kalau saya si gpp, masnya?</p>
                        </div>
                    </div>
                </div>
            </a>
                <hr>
            </div>
            <div class="col-md-8">
                <div class="chat-content">
                    <!-- Chat messages will be displayed here -->
                </div>
            </div>
        </div>
    </div>


    <script>
        function handleClick(element) {
            element.classList.toggle('clicked');
        }
    </script>
</body>
</html>

