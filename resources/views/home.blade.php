<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Font.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <style>
    body {
      background-color: #FFFEF9;
    }

    .select2-container--default .select2-selection--single {
      background-color: transparent;
      border: none;
      height: auto;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      white-space: normal;
      text-overflow: clip;
      /* overflow: visible; */
      font-family: 'SourceSerif4-Regular';
    }

    .card-img-top {
      height: 12rem;
    }

    .custom-img {
      height: 15rem;
      object-fit: cover;
      border: 2px;
      padding: 5px;
    }

    .navbar {
        background-color: #FCB2A9;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1000;
    }
    .dropdown {
      display: flex;
      align-items: center;
      justify-content: center;
      /* border: 1px solid black; */
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .card-title {
        font-family: SourceSerif4-Regular;
    }
    .star {
        font-family: SourceSerif4-Regular;
    }
    h2 {
        font-family: SourceSerif4-SemiBold;
    }
    .content-items a{
      text-decoration: none;
      color: black;
    }
    .select2 span{
      font-size: 25px;
    }
    .logo{
        background-color: white;
        border-radius: 30px;
    }
    .icon-size {
      font-size: 38px;
    }
    .option {
        font-family: SourceSerif4-Regular;
    }
    .select2-container .select2-selection--single {
        font-family: SourceSerif4-Regular;
    }

    .select2-container .select2-results__option {
        font-family: SourceSerif4-Regular;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: none;
    }

    .select2-container--default .select2-selection--single {
        position: relative;
    }


    .select2-container--default .select2-selection--single::after {
        content: '';
        position: absolute;
        top: 50%;
        right: 8px; /* Posisi horizontal dari segitiga */
        border-width: 6px; /* Ukuran segitiga */
        border-style: solid;
        border-color: #000 transparent transparent transparent;
        width: 0;
        height: 0;
    }

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg mb-4">
    <div class="container-fluid">
      <a class="navbar-brand col-1" href="#">
        <img class="logo" src="/Image/Logo_PNG.png" alt="Chat" width="45" height="45">
      </a>
      <div class="dropdown d-flex justify-content-center text-align-center col-4">
          <i class="icon-size bi bi-geo-alt"></i>
          <select class="nav-link select2">
            <option class="text-align-center"><span>Region</span></option>
            <option value="action">Serang</option>
            <option value="action">Depok</option>
            <option value="action">Jambi</option>
            <option value="action">Bogor</option>
          </select>
      </div>
      <div class="col-1">
        <i class="icon-size bi bi-chat-dots-fill"></i>
    </div>
    </div>
  </nav>

  <h2 class="text mx-4 mb-4">
    Our promo
  </h2>
  <div id="carouselExampleIndicators" class="carousel slide mx-4 mb-4">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: 280px;">
      <div class="carousel-item active">
        <a href="">
          <img src="https://storage.googleapis.com/ekrutassets/blogs/images/000/005/878/original/Wedding_Organizer_Definisi__Peran_dan_Tanggung_Jawab__Serta_Perbedaannya_dengan_Wedding_Planner.jpg" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="">
          <img src="https://parador-hotels.com/_next/image?url=https%3A%2F%2Fbackend.parador-hotels.com%2Fwp-content%2Fuploads%2F2023%2F09%2FApa-yang-Dimaksud-dengan-Wedding-Package.webp&w=1920&q=75" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="">
          <img src="https://akcdn.detik.net.id/community/media/visual/2023/04/01/inspirasi-dekorasi-pernikahan-mewah-dari-10-vendor-di-indonesia-dream-wedding-festival-2023-3.jpeg?w=700&q=90" class="d-block w-100" alt="...">
        </a>
      </div>
    </div>
  </div>
  <h2 class="text mx-4 mb-4">
    Our Top Venue Vendor
  </h2>
  <div class="d-flex mx-4 content-items mb-4">
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://dbijapkm3o6fj.cloudfront.net/resources/34550,1004,1,6,4,0,600,450/-4601-/20230607144102/bright-airy-and-breathtaking-wedding-venue-at-swiss-belresort-dago-heritage-bandung.jpeg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://media-api.xogrp.com/images/2c80fca0-cd62-4404-8bab-7152674314c1~rs_768.h" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://nibble-images.b-cdn.net/nibble/original_images/wedding-venue-bogor-5.jpg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
  </div>

  <h2 class="text mx-4 mb-4">
    Our Top Wedding Cake Vendor
  </h2>
  <div class="d-flex mx-4 content-items mb-4">
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://i.pinimg.com/564x/1d/9d/f3/1d9df31e9a4a40450195493aa8a4a551.jpg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://pernikahan.or.id/wp-content/uploads/2023/03/kue-pernikahan-buttercream.jpg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://i.pinimg.com/564x/c4/45/57/c4455712fafa76f6b776bedd51f24414.jpg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
  </div>

  <h2 class="text mx-4 mb-4">
    Our Top Food Catering Vendor
  </h2>
  <div class="d-flex mx-4 content-items mb-4">
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://weddingmarket.com/storage/images/artikelideacontent/new/3591abf08c5a9ed3df4cfd512531c035769527dc.webp" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://weddingmarket.com/storage/images/artikelideacontent/new/2dfdc7a628d6b72c4cb4d06c2d290fa98252f1d6.webp" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="">
      <div class="card custom-card" style="width: 10rem; margin-right: 1rem;">
        <img src="https://undanganpro.wordpress.com/wp-content/uploads/2012/04/mc1.jpg" class="card-img-top custom-img" alt="...">
        <div class="card-body d-flex justify-content-between">
          <span class="card-title">RTB</span>
          <div class="card-text">
            <p>
                <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
              <span class="star ps-2">4.7</span>
            </p>
          </div>
        </div>
      </div>
    </a>
  </div>
  @include('components.navbar')
</body>
<script>
  $(document).ready(function () {
    $('.select2').select2({
      placeholder: "Region",
      allowClear: false
    });
  });
</script>

</html>
