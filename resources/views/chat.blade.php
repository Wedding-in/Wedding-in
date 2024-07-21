<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap');
    </style>

    <link rel="stylesheet" href="../css/chat.css">

    <title>CHAT</title>
</head>
<body>
    {{-- HEADER --}}
    <div class="header container">
        <div class="row">
            <div class="col-3">
                <a style="color: black" href="/Detail_Vendor_Cake"><i class="bi bi-arrow-left-short"></i></a>
            </div>
            <div class="col-4">
                <h2>Vendor's Name</h2>
                <h6>Location</h6>
            </div>

            <div class="btn col-3" style="width: 36%">
                <button type="button" class="btn" style="color: white"><h6>Appointment</h6></button>
            </div>
        </div>
        <hr style="width: 115%">
    </div>

    {{-- BODY CHAT --}}
    <div class="chat container">
        <div class="vendor container">
            <div class="row">
                <div class="col-1">
                    <img src="../img/pp.png" alt="p" style="">
                </div>
                <div class="col">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quis totam labore odio hic nisi sint illo, repellat necessitatibus nemo consequatur et. Voluptas saepe facere provident cumque vel ea dolorum.</h6>
                </div>
            </div>
        </div>

        <div class="user container">
            <div class="row">
                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis amet atque deserunt, soluta et numquam, consequuntur earum natus ullam temporibus enim, ipsa omnis. Illo fugit soluta id omnis adipisci numquam?</h6>
            </div>
        </div>

        <div class="user container">
            <div class="row">
                <h6>Facilis amet atque consequuntur earum natus ullam temporibus enim, ipsa omnis. Illo fugit soluta id omnis adipisci numquam?</h6>
            </div>
        </div>

        <div class="vendor container">
            <div class="row">
                <div class="col-1">
                    <img src="../img/pp.png" alt="p" style="">
                </div>
                <div class="col">
                    <h6>Lmet consectetur adipisicing elit. Aut quis totam labore odio hic nisi sint illo, repellat necessitatibus nemo consequatur et. Voluptas saepe facere provident cumque vel ea dolorum.</h6>
                </div>
            </div>
        </div>

        <div class="user container">
            <div class="row">
                <h6>Tau ah ullam temporibus enim, ipsa omnis. Illo fugit soluta id omnis adipisci numquam?</h6>
            </div>
        </div>

        <div class="user container">
            <div class="row">
                <h6>Tau ah ullam temporibus enim, ipsa omnis. Illo fugit soluta id omnis adipisci numquam?</h6>
            </div>
        </div>

        <div class="type">
            <div class="row">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fcb2a9" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z"/>
                    </svg>
                </div>
                <div class="col">
                    <textarea name="" id="" cols="34" rows="1">Type a message</textarea>
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fcb2a9" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- NAVBAR --}}
</body>
</html>
