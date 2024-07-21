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

    <title>Detail Vendor Food</title>
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
                        <img src="/Image/Detail_Vendor_Food/Food1.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 150,000 - 500,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_Food/Food2.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 150,000 - 500,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_Food/Food3.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 150,000 - 500,000</h6></div>
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
                {{-- <h4 class="mt-4">EC Cakery</h4> --}}
                <h4 class="mt-4" style="width: 70%">Garuda Mutiara Katering</h4>
                <div class="rate mt-4">
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="text-black" style="color: #C13C2C; font-family: SourceSerif4-Light">4.8</span>
                </div>
            </div>
            <div class="d-flex flex-row gap-1">
                <i class="bi-geo-alt-fill"></i>
                <h6 class="mt-1" style="font-family: SourceSerif4-Medium">Jl. Kalibata Timur Raya No.57 14, RT.14/RW.1, Pejaten Timur, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12510</h6>
                {{-- <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Location</h6> --}}
            </div>
            {{-- <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
            <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">About</h6>
            <h6 class="container mt-1">
                Mutiara Garuda Catering adalah penyedia layanan makanan premium yang mengutamakan kebersihan, kerapihan, serta kepuasan client. Kami menyediakan berbagai pilihan menu, mulai dari masakan tradisional Indonesia hingga masakan internasional, yang dapat disesuaikan dengan selera dan kebutuhan acara Anda.
            </h6>

            <div class="d-flex flex-row justify-content-between">
                <h4 class="mt-4">Product</h4>

                    <div class="view_all_product" style="margin-top: 6%">
                        <a href="/View_All_Food_Product" class="d-flex flex-row align-items-center gap-1">
                            <span class="text-black" >View all</span>
                            <i class="panah_kanan_view_all bi bi-arrow-right-short"></i>
                        </a>
                    </div>
            </div>

            <div class="row row-cols-2 mt-1">
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Food/Food1.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">American Buffet</h5>
                            <p class="overflow-ellipsis">
                                Memperkenalkan Prasmanan khas Amerika kami. Kaya rasa dan menu, pasti Anda akan ketagihan lagi
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Food/Food2.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Indonesian Buffet</h5>
                            <p class="overflow-ellipsis">
                                Memperkenalkan Prasmanan khas Indonesia kami. Kaya rasa dan menu, pasti Anda akan ketagihan lagi
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Food/Food3.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Japanesse Buffet</h5>
                            <p class="overflow-ellipsis">
                                Memperkenalkan Prasmanan khas Jepang kami. Kaya rasa dan menu, pasti Anda akan ketagihan lagi
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Food/Food4.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Italian Buffet</h5>
                            <p class="overflow-ellipsis">
                                Memperkenalkan Prasmanan khas Italia kami. Kaya rasa dan menu, pasti Anda akan ketagihan lagi
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
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Food/Akun1.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Felixson</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #fcb3a962; font-size: 14px"></i>
                            </div>
                            <h6>Kami sangat puas dengan layanan dari Garuda Mutiara Catering. Mereka tidak hanya menyediakan makanan yang enak, tetapi juga memastikan semuanya disajikan dengan sangat rapi dan bersih</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Food/Akun2.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Krisendi</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Layanan catering dari Garuda Mutiara benar-benar top-notch! Setiap hidangan memiliki cita rasa yang istimewa dan tim mereka sangat responsif serta ramah</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card mb-5">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Food/Akun3.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Darlene</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Garuda Mutiara Catering benar-benar luar biasa! Hidangannya lezat, penyajiannya elegan, dan seluruh tim sangat profesional. Semua tamu kami sangat terkesan.</h6>
                        </div>
                    </div>
                </div>
            </div>



        <br><br>
    </div>
    {{-- </div> --}}

    @include('components.nav_make_appointment')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
