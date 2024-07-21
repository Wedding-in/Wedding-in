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

    <title>Detail Vendor WO</title>
</head>
<body>
    <div class="container">
        <div class="container panah" style="height: 55px; display: flex; flex-direction: column; justify-content: center">
            <a style="color: black" href="/vendor"><i class="bi bi-arrow-left-short" style="font-size: 50px; margin-left: -3%"></i></a>
        </div>

        <div id="carouselExampleControls" class="container carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_WO/WO1.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 900,000 - 5,000,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_WO/WO2.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 900,000 - 5,000,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_WO/WO3.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 900,000 - 5,000,000</h6></div>
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
                <h4 class="mt-4" style="width: 70%">Vi Organizer Bali x Villa Phillo</h4>
                <div class="rate mt-4">
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="text-black" style="color: #C13C2C; font-family: SourceSerif4-Light">4.6</span>
                </div>
            </div>
            <div class="d-flex flex-row gap-1">
                <i class="bi-geo-alt-fill"></i>
                <h6 class="mt-1" style="font-family: SourceSerif4-Medium">Jl. Raya Kerobokan No.82, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361</h6>
                {{-- <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Location</h6> --}}
            </div>
            {{-- <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
            <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Detail</h6>
            <h6 class="container mt-1">
                Vi Organizer Bali x Villa Phalosa up to 60 pax : <br>
                - Wedding Organizer <br>
                - Master of Ceremony <br>
                - Music Entertainment <br>
                - Makeup Artist <br>
                - Wedding Decoration <br>
                - Photography <br>
                - Videography <br>
                - Catering
            </h6>

            <div class="d-flex flex-row justify-content-between">
                <h4 class="mt-4">Gallery</h4>

                    <div class="view_all_product" style="margin-top: 6%">
                        <a href="/gallery" class="d-flex flex-row align-items-center gap-1">
                            <span class="text-black" >View all</span>
                            <i class="panah_kanan_view_all bi bi-arrow-right-short"></i>
                        </a>
                    </div>
            </div>

            {{-- <div class="container"> --}}
                <div class="container d-flex flex-column">
                    <div class="row">
                        <div class="gallery col-6 bg-danger">
                            <img src="/Image/Detail_Vendor_WO/WO1.jpeg" style="height: 100%; width: 100%" alt="">
                        </div>
                        <div class="gallery col-6 bg-danger">
                            <img src="/Image/Detail_Vendor_WO/WO2.jpeg" style="height: 100%; width: 100%" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="gallery col-4 bg-danger">
                            <img src="/Image/Detail_Vendor_WO/WO3.jpeg" style="height: 100%; width: 100%" alt="">
                        </div>
                        <div class="gallery col-4 bg-danger">
                            <img src="/Image/Detail_Vendor_WO/WO4.jpeg" style="height: 100%; width: 100%" alt="">
                        </div>
                        <div class="gallery col-4 bg-danger">
                            <img src="/Image/Detail_Vendor_WO/WO5.jpeg" style="height: 100%; width: 100%" alt="">
                        </div>
                    </div>
                </div>
            {{-- </div> --}}

            <div class="container">
                <h4 class="mt-4">Review</h4>
                <div class="review-card">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_WO/Akun1.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Franky William</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #fcb3a962; font-size: 14px"></i>
                            </div>
                            <h6>Acara pernikahan kami sukses besar berkat bantuan WO ini. Mereka kreatif, responsif, dan sangat berdedikasi. Saya sangat merekomendasikan mereka</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_WO/Akun3.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Evan Audi Widodo</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Saya tidak bisa cukup berterima kasih kepada WO atas kerja keras dan dedikasinya. Setiap detail diurus dengan cermat dan hasilnya luar biasa</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card mb-5">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_WO/Akun2.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Alex Sandro A</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Saya sangat puas dengan pelayanan dari WO. Mereka sangat profesional dan memperhatikan setiap detail, sehingga hari pernikahan kami berjalan dengan sempurna.</h6>
                        </div>
                    </div>
                </div>
            </div>



        <br><br>
        </div>
    </div>
    {{-- </div> --}}

    @include('components.nav_make_appointment')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
