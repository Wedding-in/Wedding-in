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
      height: 100%;
      margin: 0;
      padding-bottom: 25%;
      /* overflow: hidden; */
    }

    .carousel-img {
        height: 80%;
        object-fit: cover;
    }
    .custom-img {
      height: 100%;
      object-fit: cover;
      /* border: 2px;
      padding: 5px; */
    }
    .card-img-top {
        height: 135px;
        width: 100%;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      height: 100%;
      margin: 0%;
      /* overflow: hidden; */
    }
    .card-body {
      height: 30px;
    }
    .cards {
        overflow-x: auto;
        margin: 0%;
    }
    .custom-card {
        width: 32%;
        /* height: 100%; */
    }
    .card-title {
        font-family: SourceSerif4-Regular;
        font-size: 12px;
    }
    .star {
        font-family: SourceSerif4-Regular;
        font-size: 12px;
    }
    h5 {
        font-family: SourceSerif4-SemiBold;
    }
    .content-items a{
      text-decoration: none;
      color: black;
    }
    .carousel-indicators {
        /* border: 1px solid black; */
        /* margin-bottom: -10%; */
    }
    a {
        text-decoration: none;
      color: black;
    }

    /* region */
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

        .select2 span {
            font-size: 18px;
        }

        .icon-size {
            font-size: 25px;
        }

        .option {
            font-family: SourceSerif4-Regular;
        }

        .select2-container .select2-selection--single {
            font-family: SourceSerif4-Regular;
        }

        .selection {
            color: white;
        }

        .select2-container .select2-results__option--highlighted[aria-selected] {
            background-color: #FCB2A9;
            /* Warna latar belakang saat di-hover */
            color: black;
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
            /* ngubah right 0 */
            right: 0;
            /* Posisi horizontal dari segitiga */
            border-width: 6px;
            /* Ukuran segitiga */
            border-style: solid;
            border-color: white transparent transparent transparent;
            width: 0;
            height: 0;
        }

        select.nav-link.select2 {
            color: white;
            background-color: transparent;
        }

        .select2-container--default .select2-selection--single {
            background-color: transparent;
            color: white;
            /* border: 1px solid white; */
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: white;
        }

        .select2-container--default .select2-results__option--highlighted {
            background-color: grey;
            color: white;
        }

        /* end region */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg mb-4">
    <div class="container-fluid">
      <a class="navbar-brand col-1" href="#">
        <img class="logo ms-2" src="/Image/Logo.png" alt="Chat" width="45" height="45">
      </a>
      <div class="region" style=" width: 50%; ">
        <div class="dropdown d-flex justify-content-center text-align-center" >
            <i class="icon-size bi bi-geo-alt" style="color: white"></i>
            {{-- tambahan p-3 m-0 --}}
            <select class="nav-link select2 border-0 d-flex p-3 m-0" id="region-select">
                <option class="text-align-center"><span class="Region">Region</span></option>
                <option value="serang" style="color: black">Serang</option>
                <option value="depok" style="color: black">Jakarta</option>
                <option value="jambi" style="color: black">Sentul</option>
                <option value="bogor" style="color: black">Bangka</option>
            </select>
        </div>
    </div>
      <div class="col-1">
        <i class="icon-size bi bi-chat-dots-fill" style="color: white"></i>
    </div>
    </div>
  </nav>

  <h5 class="text mx-4 mb-4">
    Our promo
  </h5>
  <div id="carouselExampleIndicators" class="carousel slide mx-4 mb-4">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: 200px;">
      <div class="carousel-item active">
        <a href="">
          <img src="https://storage.googleapis.com/ekrutassets/blogs/images/000/005/878/original/Wedding_Organizer_Definisi__Peran_dan_Tanggung_Jawab__Serta_Perbedaannya_dengan_Wedding_Planner.jpg" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="">
          <img src="https://lazada-blog-upload-id.oss-ap-southeast-5.aliyuncs.com/prod-id/2023/06/lagu-wedding-barat-terbaik.jpg?OSSAccessKeyId=LTAI5tSRtDGoirEbT2eG2GRJ&Expires=1721989577&Signature=1PeyiJuClvQdT9YTbQVvQqOO73s%3D" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="">
          <img src="https://akcdn.detik.net.id/community/media/visual/2023/04/01/inspirasi-dekorasi-pernikahan-mewah-dari-10-vendor-di-indonesia-dream-wedding-festival-2023-3.jpeg?w=700&q=90" class="d-block w-100" alt="...">
        </a>
      </div>
    </div>
  </div>
  <h5 class="text mx-4 mb-4">
    Our Top Venue Vendor
  </h5>

    <div class="cards row d-flex mx-4 content-  tems mb-4 justify-content-between">
        <div class="card custom-card col-4 p-2">
            <a href="">
                <img src="https://dbijapkm3o6fj.cloudfront.net/resources/34550,1004,1,6,4,0,600,450/-4601-/20230607144102/bright-airy-and-breathtaking-wedding-venue-at-swiss-belresort-dago-heritage-bandung.jpeg" class="card-img-top custom-img" alt="...">
                <div class="card-body d-flex justify-content-between p-0 mt-2">
                  <span class="card-title mt-1">RTB</span>
                  <div class="card-text">
                      <p>
                          <i class="star-icon bi bi-star-fill" style="color: #FCB2A9"></i>
                          <span class="star ps-2">4.7</span>
                      </p>
                  </div>
                </div>
            </a>
        </div>
        <div class="card custom-card col-4 p-2">
            <a href="">
                <img src="https://media-api.xogrp.com/images/2c80fca0-cd62-4404-8bab-7152674314c1~rs_768.h" class="card-img-top custom-img" alt="...">
                <div class="card-body d-flex justify-content-between p-0 mt-2">
                <span class="card-title mt-1">RTB</span>
                <div class="card-text">
                    <p>
                        <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="star ps-2">4.7</span>
                    </p>
                </div>
                </div>
            </a>
        </div>
        <div class="card custom-card col-4 p-2">
            <a href="">
                <img src="https://nibble-images.b-cdn.net/nibble/original_images/wedding-venue-bogor-5.jpg" class="card-img-top custom-img" alt="...">
                <div class="card-body d-flex justify-content-between p-0 mt-2">
                <span class="card-title mt-1">RTB</span>
                <div class="card-text">
                    <p>
                        <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="star ps-2">4.7</span>
                    </p>
                </div>
                </div>
            </a>
        </div>
  </div>


  <h5 class="text mx-4 mb-4">
    Our Top Wedding Cake Vendor
  </h5>
  <div class="cards row d-flex mx-4 content-  tems mb-4 justify-content-between">
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://i.pinimg.com/564x/1d/9d/f3/1d9df31e9a4a40450195493aa8a4a551.jpg" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://pernikahan.or.id/wp-content/uploads/2023/03/kue-pernikahan-buttercream.jpg" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://i.pinimg.com/564x/c4/45/57/c4455712fafa76f6b776bedd51f24414.jpg" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
</div>

  <h5 class="text mx-4 mb-4">
    Our Top Food Catering Vendor
  </h5>
  <div class="cards row d-flex mx-4 content-  tems mb-4 justify-content-between">
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://weddingmarket.com/storage/images/artikelideacontent/new/3591abf08c5a9ed3df4cfd512531c035769527dc.webp" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://weddingmarket.com/storage/images/artikelideacontent/new/2dfdc7a628d6b72c4cb4d06c2d290fa98252f1d6.webp" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
    <div class="card custom-card col-4 p-2">
        <a href="">
            <img src="https://undanganpro.wordpress.com/wp-content/uploads/2012/04/mc1.jpg" class="card-img-top custom-img" alt="...">
            <div class="card-body d-flex justify-content-between p-0 mt-2">
            <span class="card-title mt-1">RTB</span>
            <div class="card-text">
                <p>
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                <span class="star ps-2">4.7</span>
                </p>
            </div>
            </div>
        </a>
    </div>
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
