<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/viewfolder.css') }}">
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
            <p style="font-family: SourceSerif4-Bold;">Wedding</p>
        </div>
        <div class="pin_container">
            <div class="card card_small" data-image-url="{{ asset('img/1.jpeg') }}">
                <img src="{{ asset('img/1.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/2.jpeg') }}">
                <img src="{{ asset('img/2.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/3.jpeg') }}">
                <img src="{{ asset('img/3.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/4.jpeg') }}">
                <img src="{{ asset('img/4.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/5.jpeg') }}">
                <img src="{{ asset('img/5.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/6.jpeg') }}">
                <img src="{{ asset('img/6.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/7.jpeg') }}">
                <img src="{{ asset('img/7.jpeg') }}" alt="Image Description">
            </div>
            <div class="card card_small" data-image-url="{{ asset('img/8.jpeg') }}">
                <img src="{{ asset('img/8.jpeg') }}" alt="Image Description">
            </div>
        </div>
    </div>

    <div class="custom-modal" id="customModal" style="display: none;">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        // JavaScript to handle custom modal
        const modal = document.getElementById('customModal');
const modalImage = document.getElementById('modalImage');
const closeButton = document.querySelector('.custom-modal .close');

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', function() {
        const imageUrl = this.getAttribute('data-image-url');
        modalImage.setAttribute('src', imageUrl);
        modal.style.display = 'flex'; // Menampilkan modal
    });
});

closeButton.addEventListener('click', function() {
    modal.style.display = 'none'; // Menutup modal
});

window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none'; // Menutup modal jika area di luar modal diklik
    }
});

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
