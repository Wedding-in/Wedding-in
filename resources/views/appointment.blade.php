<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap');
    </style>

    <link rel="stylesheet" href="../css/appointment.css">

    <title>CHAT</title>
</head>

<body>
    <div class="chat-container" style="background: #fffff8" id="blur">
        <div class="header">
            <div class="back-button">
                <a href="/chat">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                    class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                </svg> --}}
                <i class="bi bi-arrow-left-short" style="font-size: 50px; margin-left: -3%; color: black;"></i>
            </a>
            </div>
            <div class="vendor-info">
                <p class="vendor-name">Ec Cakery</p>
                <p class="rate-review" style="color: black">Bandung</p>
            </div>
        </div>
        <p class="title">Choose your appointment's date :</p>
        <div class="wrapper" style="background: #ffffff">
            <header style="flex-direction: column">
                <p class="chosen1" style="color: #FCB2A9"></p>
                <p class="chosen2" style="color: #FCB2A9"></p>
            </header>
            <header>
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="material-symbols-outlined">chevron_left</span>
                    <span id="next" class="material-symbols-outlined">chevron_right</span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                    <li>su</li>
                    <li>mo</li>
                    <li>tu</li>
                    <li>we</li>
                    <li>th</li>
                    <li>fr</li>
                    <li>sa</li>
                </ul>
                <ul class="days">

                </ul>
            </div>
        </div>

        <button class="appointment-button" onclick="togglebtnApp()">Make appointment</button>

            <div id="popup" class="popup" style="position: absolute; z-index: 9999;">
                <h2>Thank you</h2>
                <p>Your appointment has been successfully added.
                    You can check your list appointment on Profile menu.
                </p>
                <a href="/chat">
                    <button class="appointment-button" onclick="togglebtnApp()">Close</button>
                </a>
            </div>

        <script type="text/javascript">
            function togglebtnApp() {
                var popup = document.getElementById('popup');
                popup.classList.toggle('active');
            }
        </script>
    </div>
    </div>
</body>
<script src="js/appointment.js" defer></script>



</html>
