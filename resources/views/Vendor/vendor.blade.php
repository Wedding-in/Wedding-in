<!doctype html>
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

    {{-- select 2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">


    <title>Vendor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Source Serif 4', serif;
        }

        .nav-link.active {
            text-color: white;
            /* text-decoration: underline; */
            border-radius: 0.25rem;
            transform: scale(1.04);
        }

        .nav-item-tabs li {
            /* border: solid black !important; */
            /* background-color: #6e6366;  */
            border-radius: 0.25rem;
            background-color: #654b4852;
        }

        .nav-item-tabs li span {
            color: white;
        }

        .nav-link.active {
            background-color: #FCB2A9 !important;

        }

        .nav-link span {
            color: black
        }

        .nav-link.nav-link.active span {
            color: white;
        }

        .nav-link:hover {
            /* transform: scale(1.04); */
            transition: 0.3s;
        }

        .items-tabs a:hover {
            /* transform: scale(1.02); */
            transition: 0.3s;
        }

        @font-face {
            font-family: SourceSerif4-Bold;
            src: url(../Font/SourceSerif4-Bold.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Light;
            src: url(../Font/SourceSerif4-Light.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Medium;
            src: url(../Font/SourceSerif4-Medium.ttf);
        }

        @font-face {
            font-family: SourceSerif4-Regular;
            src: url(../Font/SourceSerif4-Regular.ttf);
        }

        @font-face {
            font-family: SourceSerif4-SemiBold;
            src: url(../Font/SourceSerif4-SemiBold.ttf);
        }

        .card-body h5 {
            font-family: SourceSerif4-SemiBold;
        }

        .card-body p {
            font-family: SourceSerif4-Light;
        }

        .sub-title h2 {
            font-family: SourceSerif4-SemiBold;
        }

        .nav-item-tabs span {
            font-family: SourceSerif4-regular;
        }

        /* search */
        .search {
            width: 50%;
            /* min-height: 100vh; */
            /* border: solid blue; */
            background-color: #FFFEF9;
            padding: 5%;
        }

        .search-bar {
            top: 0;
            /* width: 100%; */
            /* max-width: 700px; */
            /* border: solid blue; */
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            border-radius: 5px;
            padding: 2.5px 5px;
            backdrop-filter: blur(4px) saturate(180%);
            border: #FCB2A9 2px solid;
        }

        .search-bar input {
            background: transparent;
            flex: 1;
            border: 0;
            outline: none;
            padding: 10px 10px;
            font-size: 18px;
            color: #cac7ff;
            width: 100%
        }

        ::placeholder, .search-bar::placeholder {
            color: #FCB2A9;
            font-family:  SourceSerif4-Regular;
            font-size: 18px;
        }

        .search-bar button {
            border: 0;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            /* border: solid green; */
            background: #FCB2A9;
            cursor: pointer;
        }

        .search-bar .icon {
            font-size: 1.7rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;

        }

        .line {
            position: relative;
            margin-top: 2%;
        }

        /* end search */

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

        .content-items a {
            text-decoration: none;
            color: black;
        }

        .select2 span {
            font-size: 18px;
        }

        .logo {
            background-color: white;
            border-radius: 30px;
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

<body style="background-color: #FFFEF9;">
    {{-- search --}}
    <div class="container-fluid align-items-center d-flex"style="height: 11vh; background-color: #FCB2A9;">
        <div class="search p-0 m-0 " style="border-radius: 5px; ">
            <form action="" class="search-bar p-0 m-0" style="  width: 100%">
                <input type="text" placeholder="Search" name='q'>
                <button type="submit" style="margin-right: 5px;">
                    <span class="icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </span>
                </button>
            </form>
        </div>
        {{-- end search --}}

        {{-- region --}}
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
        {{-- <div class="line">
            <hr>
        </div> --}}
        {{-- end region --}}
    </div>
    <div class="container-fluid d-flex py-2 px-0 flex-column sub-title" style="border: solid transparent 1px;">
        <h2 class="ps-4" style="font-weight: 600">Categories</h2>
        <div class="col-md-3 d-flex justify-content-center align-items-center pt-2 " >
            <ul class="nav nav-pills  flex-row gap-2 nav-item-tabs justify-content-center" id="pills-tab" role="tablist"
                style=" width: 100%;">
                <li class="nav-item p-0" role="presentation">
                    <button class="nav-link active" id="pills-venue-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-venue" type="button" role="tab" aria-controls="pills-venue"
                        aria-selected="true" style=""><span>Venue</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-cake-tab" data-bs-toggle="pill" data-bs-target="#pills-cake"
                        type="button" role="tab" aria-controls="pills-cake" aria-selected="false"
                        style="; "><span>Cake</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-catering-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-catering" type="button" role="tab" aria-controls="pills-catering"
                        aria-selected="false" style=";"><span>Catering</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-wo-tab" data-bs-toggle="pill" data-bs-target="#pills-wo"
                        type="button" role="tab" aria-controls="pills-wo" aria-selected="false"
                        style=";"><span>WO</span></button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content d-flex " id="pills-tabContent" style="margin-bottom: 15vh ;border: solid transparent">
        <div class="tab-pane fade show active" id="pills-venue" role="tabpanel" aria-labelledby="pills-venue-tab"
            style=" width: 100%">
            <div class="container-fluid w-100">
                <div class="flex-column d-flex items-tabs">
                    <a href="/Detail_Vendor_Venue" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wcs1vih77pv6121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Mei Convention </h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Lele Convention</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Human Convetion</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="#" class="text-decoration-none my-1" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                                    class="card-img-top" alt="..." height="200">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem; padding: 3px; border-radius: 3px">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                    <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                        class="card-img-top" alt="..." height="200">
                                    <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                        style=" background-color: rgba(0, 0, 0, 0.5)">
                                        <h5 class="card-title">Vendor's Name</h5>
                                        <p class="card-text">
                                            <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                        </p>
                                    </div>
                                    <div class="rate position-absolute p-1"
                                        style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem; padding: 3px; border-radius: 3px">
                                        <i class="text-white bi bi-star-fill"></i>
                                        <span class="text-white">4.6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-cake" role="tabpanel" aria-labelledby="pills-cake-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-PhyOumJmW.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">EC Cakery</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-tJBn6AEX9.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Mie Cakery</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0"
                                style="width: 100%; border-radius: 0.25rem;overflow: hidden;  ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-y74iM_v8N.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Boulevard Cakery</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-PhyOumJmW.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-tJBn6AEX9.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-y74iM_v8N.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-catering" role="tabpanel" aria-labelledby="pills-catering-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="/Detail_Vendor_Food" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.lalamove.com/hubfs/catering%20lunch%20box%20%284%29.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Lele Catering</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/10/B1000153-2-Kebersihan-Terjaga-1024x538.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Rounded Cakery</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.sawarna.net/wp-content/uploads/catering-nasi-box-sawarna.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Boulevard Catering</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://www.thomasthecaterer.co.uk/wp-content/uploads/2020/05/Wedding-food-catering-2048x1365.jpeg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/catering-ponyo.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/menu-yang-tepat.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-wo" role="tabpanel" aria-labelledby="pills-wo-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="/Detail_Vendor_WO" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-HNxU_GdhE.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">String Organizer</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-N8hKndJYP.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Stem Organizer</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-2" style="color: black;  width: 100%;">
                        <div class="col-md-4">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-2TYGZ4hFF.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Mara Organizer</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street,
                                        City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-HNxU_GdhE.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-N8hKndJYP.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; border-radius: 0.25rem;overflow: hidden; ">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-2TYGZ4hFF.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: rgba(0, 0, 0, 0.5)">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill" style="margin-right: 5px"></i>123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>

    @include('/components/navbar_vendor')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

</html>
