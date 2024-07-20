<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        <h4 class="container mt-4" style="font-family: SourceSerif4-Bold">EC Cakery</h4>
        <div class="container">
            <h6 style="font-family: SourceSerif4-Regular">Location</h6>
        </div>
    </div>
    {{-- </div> --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
