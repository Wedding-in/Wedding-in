<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="../../css/Detail_Vendor.css">
    <link rel="stylesheet" href="../../css/Font.css">

    <title>Detail Vendor</title>
</head>
<body>
    <div class="container">
        <div class="container panah" style="height: 55px; display: flex; flex-direction: column; justify-content: center">
            <img src="/Image/Detail_Vendor1/LeftArrow.svg" style="height: 70%; width: 5%" alt="">
        </div>
    {{--
        <div class="container" style="position: relative;">
            <div class="Carousel_image" >
                <img src="/Image/Detail_Vendor1/Cake2.jpg" alt="" style="height: 100%; width: 100%; border-radius: 18px">
            </div>
            <div class="container_price"></div>
            <div class="price_text ms-3"><h6>Rp. 10,000 - 100,000</h6></div>
        </div> --}}

        {{-- <div class="container" style="position: relative;"> --}}
        <div id="carouselExampleControls" class="container carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor1/Cake2.jpg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 18px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 10,000 - 100,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor1/Cake1.jpg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 18px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 10,000 - 100,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor1/Cake3.jpg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 18px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 10,000 - 100,000</h6></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="d-flex flex-row justify-content-between">
                <h4 class="mt-4">EC Cakery</h4>
                <div class="rate mt-4">
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="text-black" style="color: #C13C2C; font-family: SourceSerif4-Light">4.6</span>
                </div>
            </div>
            <div class="d-flex flex-row gap-1">
                <i class="bi-geo-alt-fill"></i>
                {{-- <h6 class="mt-1" style="font-family: SourceSerif4-Medium">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
                <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Location</h6>
            </div>
            <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6>
            <div class=""><hr style="height:2px;border-width:0;color:black;background-color:black"></div>

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">About</h6>
            <h6 class="container mt-1">
                EC Cakery adalah toko cake yang mengkhususkan diri dalam kue dan kue kering kustom. Dikenal karena desainnya yang indah dan rasa yang lezat, EC Cakery menawarkan berbagai macam kue panggang, mulai dari kue pernikahan dan ulang tahun hingga cupcake dan kue kering. Setiap item dibuat dengan bahan berkualitas tinggi dan dipersonalisasi untuk memenuhi preferensi unik setiap pelanggan, menjadikannya tujuan utama bagi mereka yang mencari kue yang indah dan lezat untuk berbagai acara.
            </h6>

            <h4 class="mt-4">Product</h4>
            <div class="row row-cols-2 mt-2">
                <div class="col">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">4 Tiered Wedding Cake</h5>
                            <p class="overflow-ellipsis">
                                Cake Size : 20,30,40,50m
                                Includes:
                                - 10 cake suapan
                                - 4 family cake-
                                - 15 mingle cake
                                - ceremonial knife
                                - 1x virtual meeting
                                - digital sketch
                            </p>

                            <a style="font-size: 13px; text-decoration: none; color: #C13C2C" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">

                </div>
              </div>
        </div>

        <br><br>
    </div>
    {{-- </div> --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
