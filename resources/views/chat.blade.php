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
    <div class="chat-container">
        <div class="header">
            <div class="back-button">
                <a href="/chatlist">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg> --}}
                <i class="bi bi-arrow-left-short" style="font-size: 50px; margin-left: -3%; color: black;"></i>
            </a>
            </div>
            <div class="vendor-info">
                <p class="vendor-name" style="color: black">EC Cakery</p>
                <p class="rate-review" style="color: black">Bandung</p>
            </div>

            <button class="appointment-button">
                <a href="/appointment" style="text-decoration: none; outline: none; color: white;">
                Make Appointment
            </a>
            </button>

        </div>

        <div class="messages">
            <div class="message left">
                <img src="/img/pp.png" alt="Profile Image">
                <div class="message-bubble">sequi! Expedita, quibusdam!  architecto enim sunt mollitia, eveniet laborum eius numquam magni neque sequi. Nesciunt corporis quaerat iste sint minus est consectetur quam neque, dolore corrupti amet similique nobis suscipit, fugit odit in nulla! Repellendus libero eveniet quod commodi hic fugit in odio quasi iure est at voluptate nemo deserunt earum fuga architecto quae nesciunt, molestias quisquam laboriosam doloremque corporis amet. Minima, inventore alias.</div>
            </div>
            <div class="message right">
                <div class="message-bubble">L quae incidunt, quaerat minima corrupti dolor nostrum, voluptas possimus. Provident, unde beatae atque tempore repellat eius itaque quasi consequuntur illo porro quibusdam ducimus laborum quo dolorem dolore minima perferendis.</div>
            </div>
            <div class="message left">
                <img src="/img/pp.png" alt="Profile Image">
                <div class="message-bubble">Lorem ip eveniet laborum eius numquam magni neque sequi. Nesciunt corporis quaerat iste sint minus est consectetur quam neque, dolore corrupti amet similique nobis suscipit, fugit odit in nulla! Repellendus libero eveniet quod commodi hic fugit in odio quasi iure est at voluptate nemo</div>
            </div>
        </div>

        <div class="input-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FCB2A9" class="bi bi-paperclip" viewBox="0 0 16 16">
                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z"/>
              </svg>
            <input type="text" placeholder="Start typing...">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FCB2A9" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                </svg>
            </button>
        </div>
    </div>
</body>
</html>
