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

    <title>Detail Vendor Venue</title>
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
                        <img src="/Image/Detail_Vendor_Venue/Venue1.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 100,000,000 - 700,000,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_Venue/Venue2.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 100,000,000 - 700,000,000</h6></div>
                </div>
                <div class="carousel-item">
                    <div class="Carousel_image" >
                        <img src="/Image/Detail_Vendor_Venue/Venue3.jpeg" class="d-block w-100" alt="" style="height: 100%; width: 100%; border-radius: 10px">
                    </div>
                    <div class="container_price"></div>
                    <div class="price_text ms-3"><h6>Rp. 100,000,000 - 700,000,000</h6></div>
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
                <h4 class="mt-4" style="width: 70%">Indonesia Convention Exhibition (ICE)</h4>
                {{-- <h4 class="mt-4">Indonesia Convention Exhibition (ICE)</h4> --}}
                <div class="rate mt-4">
                    <i class="bi bi-star-fill" style="color: #FCB2A9"></i>
                    <span class="text-black" style="color: #C13C2C; font-family: SourceSerif4-Light">4.6</span>
                </div>
            </div>
            <div class="d-flex flex-row gap-1">
                <i class="bi-geo-alt-fill"></i>
                <h6 class="mt-1" style="font-family: SourceSerif4-Medium">Jl. BSD Grand Boulevard No.1, Pagedangan, Kec. Pagedangan, Kabupaten Tangerang, Banten 15339</h6>
                {{-- <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Location</h6> --}}
            </div>
            {{-- <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
            <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">About</h6>
            <h6 class="container mt-1">
                Indonesia Convention Exhibition adalah sebuah pusat konvensi dan pameran terbesar di Indonesia. ICE juga dikenal sebagai gedung konser dan gedung pernikahan terbesar dan berlokasi di Kompleks Bumi Serpong Damai
            </h6>

            <div class="d-flex flex-row justify-content-between">
                <h4 class="mt-4">Product</h4>

                    <div class="view_all_product" style="margin-top: 6%">
                        <a href="/View_All_Venue_Product" class="d-flex flex-row align-items-center gap-1">
                            <span class="text-black" >View all</span>
                            <i class="panah_kanan_view_all bi bi-arrow-right-short"></i>
                        </a>
                    </div>
            </div>

            <div class="row row-cols-2 mt-1">
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Venue/Product1.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Shine Package</h5>
                            <p class="overflow-ellipsis">
                                Mulai dari Rp 100.000.000++/200 orang
                                [Tambahan per orang Rp 788.000++]

                                HARI PERNIKAHAN
                                1. Pengaturan prasmanan pernikahan khusus untuk 200 orang
                                2. Air es gratis selama acara
                                3. 200 gelas es teh rasa
                                4. Gratis satu kali mencicipi makanan untuk 6 orang
                                5. Tahap maksimal 8 modul dengan 2,4 x 1,8 x H.40/60/80 cm
                                6. Air es gratis selama acara
                                7. Rangkaian bunga untuk meja prasmanan
                                8. Penggunaan ruangan maksimal 8 jam
                                9. Pemakaian listrik gratis 8.000 watt
                                9. Buku resepsi eksklusif
                                10. Voucher parkir gratis untuk 10 mobil pada hari itu
                                11. Ruang serbaguna rapat koordinasi pernikahan untuk 10 orang


                                *Harga belum termasuk Service Charge 2,5% & Pajak Pemerintah 10%
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Venue/Product2.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sun Package</h5>
                            <p class="overflow-ellipsis">
                                Mulai dari Rp 423.500++/orang
                                [800 orang]

                                PENGATURAN SEBELUM ACARA
                                1. Gratis satu kali mencicipi makanan untuk 10 orang
                                2. Ruang serbaguna rapat koordinasi pernikahan untuk 20 orang

                                HARI PERNIKAHAN
                                1. Pengaturan khusus Seleksi Prasmanan Pernikahan Premium untuk 500 orang
                                2. Tahap maksimal 8 modul dengan 2,4 x 1,8 x H.40/60/80 cm
                                3. Air es gratis selama acara
                                4 400 gelas minuman ringan atau es teh rasa
                                5. Ruang serbaguna untuk ruang ganti keluarga atau panitia
                                6. Rangkaian bunga untuk meja prasmanan
                                7. Penggunaan ruangan maksimal 8 jam
                                8. Pemakaian listrik gratis 8.000 watt
                                9. 2 Buku resepsi eksklusif
                                10. Voucher parkir gratis untuk 10 mobil di hari pernikahan

                                STALL PERNIKAHAN
                                1. 200 porsi Salmon Wellington
                                2. 250 porsi Sup Zuppa Jamur
                                3. 250 porsi Lontong Cap Gomeh
                                4. 200 Lava Coklat Hangat

                                AKOMODASI
                                1. Menginap satu malam di Premier Bridal Suite pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan pagi untuk pasangan
                                2. Menginap Satu Malam di 2 Kamar Deluxe untuk orang tua pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk dua orang

                                *Harga belum termasuk Service Charge 2,5% & Pajak Pemerintah 10%
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Venue/Product3.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mongolia Package</h5>
                            <p class="overflow-ellipsis">
                                Mulai dari Rp 605.000++/orang
                                [1000 orang]

                                PENGATURAN SEBELUM ACARA
                                1. Gratis satu kali mencicipi makanan untuk 10 orang
                                2. Ruang serbaguna rapat koordinasi pernikahan untuk 20 orang

                                HARI PERNIKAHAN
                                1. Pengaturan khusus 550 porsi pilihan menu prasmanan pernikahan tradisional premium
                                2. 400 gelas softdrink atau es teh rasa
                                3. 30 porsi makan malam awal keluarga
                                4. Ruang serbaguna untuk ruang ganti keluarga atau panitia
                                5. Air mancur kaca sampanye dengan dua botol sari buah apel berkilau untuk upacara bersulang
                                6. Air es gratis selama acara
                                7. Rangkaian bunga untuk meja prasmanan
                                8. Penggunaan ruangan maksimal 8 jam
                                9. Pemakaian listrik gratis 10.000 watt
                                10. Buku resepsi eksklusif
                                11. Voucher parkir gratis untuk 20 mobil per hari

                                STALL PERNIKAHAN
                                1. 400 porsi Salmon Wellington
                                2. 350 porsi Nasi Bali/Nasi Bogana/Nasi Panglima
                                3. 350 porsi Bebek Peking
                                4. 400 porsi Sup Zuppa Jamur
                                5. 350 Lava Coklat Hangat

                                AKOMODASI
                                1. Menginap dua malam di Premiere Bridal Suite pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan pagi untuk pasangan
                                2. Menginap dua malam di 2 Kamar Deluxe untuk orang tua pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk dua orang
                                3. Menginap satu malam di 4 Kamar Deluxe untuk Keluarga pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk dua orang

                                *Harga belum termasuk Service Charge 2,5% & Pajak Pemerintah 10%
                            </p>

                            <a class="Read_more" href="">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                        <div style="height: 180px">
                            <img src="/Image/Detail_Vendor_Venue/Product4.jpeg"
                                class="card-img-top" style="width: 100%; height: 100%;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rose Package</h5>
                            <p class="overflow-ellipsis">
                                Mulai dari Rp 605.000++/orang
                                [1000 orang]

                                PENGATURAN SEBELUM ACARA
                                1. Gratis satu kali mencicipi makanan untuk 10 orang
                                2. Ruang serbaguna rapat koordinasi pernikahan untuk 20 orang

                                HARI PERNIKAHAN
                                1. Pengaturan khusus 550 porsi Pilihan Menu Prasmanan Pernikahan Internasional Premium
                                2. 400 gelas softdrink atau es teh rasa
                                3. 30 porsi makan malam awal keluarga
                                4. Ruang serbaguna untuk ruang ganti keluarga atau panitia
                                5. Air mancur kaca sampanye dengan dua botol sari buah apel berkilau untuk upacara bersulang
                                6. Air es gratis selama acara
                                7. Rangkaian bunga untuk meja prasmanan
                                8. Penggunaan ruangan maksimal 8 jam
                                9. Pemakaian listrik gratis 10.000 watt
                                10. 4 buku resepsi eksklusif
                                11. Voucher parkir gratis untuk 20 mobil per hari

                                STALL PERNIKAHAN
                                1. 400 porsi Salmon Wellington
                                2. 350 porsi Nasi Bali/Nasi Bogana/Nasi Panglima
                                3. 350 porsi Bebek Peking
                                4. 400 porsi Sup Zuppa Jamur
                                5. 350 Lava Coklat Hangat

                                AKOMODASI
                                1. Menginap dua malam di premier Bridal Suite pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk pasangan
                                2. Menginap dua malam di 2 Kamar Deluxe untuk orang tua pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk dua orang
                                3. Menginap satu malam di 4 Kamar Deluxe untuk keluarga pada hari acara di Hotel Santika Premiere ICE BSD termasuk sarapan untuk dua orang

                                *Harga belum termasuk Service Charge 2,5% & Pajak Pemerintah 10%
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
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Venue/Akun1.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Haha hihi lulus</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Venue pernikahan di sini benar-benar memukau! Tempatnya indah dan sangat cocok untuk pernikahan impian kami. Semua tamu juga sangat terkesan dengan keindahan tempat ini</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Venue/Akun2.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Mawar</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Tidak ada yang bisa mengalahkan keindahan dan kenyamanan venue di sini. Setiap sudut tempat ini begitu menawan dan membuat momen pernikahan kami semakin berkesan. Sangat direkomendasikan!</h6>
                        </div>
                    </div>
                </div>
                <div class="review-card mb-5">
                    <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">
                    <div class="row">
                        <div class="col-2">
                            <img class="gambar_akun_review" src="/Image/Detail_Vendor_Venue/Akun3.jpeg" alt="">
                        </div>
                        <div class="col-10">
                            <h6 style="font-family: SourceSerif4-SemiBold">Dunia bersamamu</h6>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                                <i class="bi bi-star-fill" style="color: #FCB2A9; font-size: 14px"></i>
                            </div>
                            <h6>Kami sangat senang memilih venue ini sebagai lokasi pernikahan kami. Tempatnya luas, bersih, dan memiliki pemandangan yang menakjubkan. Pelayanan stafnya juga sangat ramah dan membantu</h6>
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
