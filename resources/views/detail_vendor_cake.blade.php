<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="../../css/Detail_Vendor.css">
    <link rel="stylesheet" href="../../css/Font.css">

    <title>Detail Vendor Cake</title>
</head>

<body>
    <div class="container">
        <div class="container panah"
            style="height: 55px; display: flex; flex-direction: column; justify-content: center">
            <i class="bi bi-arrow-left-short" style="font-size: 50px; margin-left: -3%"></i>
        </div>

        <div id="carouselExampleControls" class="container carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="Carousel_image">
                        <img src="/Image/Detail_Vendor_Cake/Product1.jpeg" class="d-block w-100" alt=""
                            style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3">
                        <h6>Rp. 300,000 - 600,000</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image">
                        <img src="/Image/Detail_Vendor_Cake/Product4.jpeg" class="d-block w-100" alt=""
                            style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3">
                        <h6>Rp. 300,000 - 600,000</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image">
                        <img src="/Image/Detail_Vendor_Cake/Product7.jpeg" class="d-block w-100" alt=""
                            style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3">
                        <h6>Rp. 300,000 - 600,000</h6>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" style="color: white" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="d-flex flex-row justify-content-between">
                {{-- <h4 class="mt-4">EC Cakery</h4> --}}
                <h4 class="mt-4" style="width: 70%">EC Cakery</h4>
                <div class="rate mt-4">
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="text-black" style="color: #C13C2C; font-family: SourceSerif4-Light">4.9</span>
                </div>
            </div>
            <div class="d-flex flex-row gap-1">
                <i class="bi-geo-alt-fill"></i>
                <h6 class="mt-1" style="font-family: SourceSerif4-Medium">Jl. Raya Babakan Madang No.25, Citaringgul,
                    Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6>
                {{-- <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Location</h6> --}}
            </div>
            {{-- <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
            <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">About</h6>
            <h6 class="container mt-1">
                EC Cakery adalah toko cake yang mengkhususkan diri dalam kue dan kue kering kustom. Dikenal karena
                desainnya yang indah dan rasa yang lezat, EC Cakery menawarkan berbagai macam kue panggang, mulai dari
                kue pernikahan dan ulang tahun hingga cupcake dan kue kering. Setiap item dibuat dengan bahan
                berkualitas tinggi dan dipersonalisasi untuk memenuhi preferensi unik setiap pelanggan, menjadikannya
                tujuan utama bagi mereka yang mencari kue yang indah dan lezat untuk berbagai acara.
            </h6>

            <div class="d-flex flex-row justify-content-between">
                <h4 class="mt-4">Product</h4>

                <div class="view_all_product" style="margin-top: 6%">
                    <a href="/View_All_Cake_Product" class="d-flex flex-row align-items-center gap-1">
                        <span class="text-black">View all</span>
                        <i class="panah_kanan_view_all bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>

            <div class="row row-cols-2 mt-1">
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Cake/Product1.jpeg" class="card-img-top"
                                style="width: 100%; height: 100%;" alt="...">
                        </div>
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

                            <a class="Read_more" href="/Detail_Product_Cake">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Cake/Product2.jpeg" class="card-img-top"
                                style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">5 Tiered Wedding Cake</h5>
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

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Cake/Product3.jpeg" class="card-img-top"
                                style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">3 Tiered Wedding Cake</h5>
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

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Cake/Product4.jpeg" class="card-img-top"
                                style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tiered Wedding Cake</h5>
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

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 class="mt-4">Review</h4>
            <div class="review-card">
                <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                <div class="row">
                    <div class="col-2">
                        <img class="gambar_akun_review" src="/Image/Detail_Vendor_Cake/Akun1.jpg" alt="">
                    </div>
                    <div class="col-10">
                        <h6 style="font-family: SourceSerif4-SemiBold">Franki kece badai</h6>
                        <div class="d-flex flex-row">
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #fcb3a962; font-size: 14px"></i>
                        </div>
                        <h6>Kue dari EC Cakery benar-benar luar biasa! Desainnya sangat cantik dan detail, sementara
                            rasanya luar biasa lezat dengan tekstur yang sempurna. Setiap gigitannya adalah perpaduan
                            sempurna antara rasa manis dan kelembutan. Saya sangat merekomendasikan kue ini untuk setiap
                            acara khusus!</h6>
                    </div>
                </div>
            </div>
            <div class="review-card">
                <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                <div class="row">
                    <div class="col-2">
                        <img class="gambar_akun_review" src="/Image/Detail_Vendor_Cake/Akun2.jpg" alt="">
                    </div>
                    <div class="col-10">
                        <h6 style="font-family: SourceSerif4-SemiBold">Om alex 22 tahun</h6>
                        <div class="d-flex flex-row">
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                        </div>
                        <h6>Setiap lapisan kue bener bener punya rasa yang kaya dan harmonis, jadi susah berhenti makann
                        </h6>
                    </div>
                </div>
            </div>
            <div class="review-card mb-5">
                <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                <div class="row">
                    <div class="col-2">
                        <img class="gambar_akun_review" src="/Image/Detail_Vendor_Cake/Akun3.jpeg" alt="">
                    </div>
                    <div class="col-10">
                        <h6 style="font-family: SourceSerif4-SemiBold">Epannnn Audi</h6>
                        <div class="d-flex flex-row">
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                        </div>
                        <h6>Tekstur kuenya lembut dan moist, dengan rasa yang seimbang dan tidak terlalu manis.
                            Dekorasinya sangat artistik, menunjukkan dedikasi dan keterampilan tinggi dari pembuat
                            kuenya.</h6>
                    </div>
                </div>
            </div>
        </div>



        <br><br>
    </div>
    {{-- </div> --}}

    @include('components.nav_make_appointment')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
