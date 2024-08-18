<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- select 2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
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
    </style>
</head>

<body>
    <div class="container-fluid d-flex flex-column " style=" height: 10vh; ">
        <div class="d-flex align-items-center m-0 p-0 " style=" height: inherit;">
            <div class="d-flex" style=" width: inherit; height: max-content;">
                <a href="/profile" class="btn p-0 m-0" >
                    <i class="bi bi-arrow-left-short" style="font-size: 50px"></i>
                </a>
            </div>
            <div class="d-flex " style=" width: 80%; height: inherit;align-items: center; justify-content: center;">
                <h2 style="font-family: SourceSerif4-SemiBold; font-size: 20px;padding-top: 8px">My Appointment</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex py-2 px-0 flex-column sub-title mb-3" style="border: solid transparent 1px;">
        <div class="col-md-3 d-flex justify-content-center align-items-center pt-2 " >
            <ul class="nav nav-pills  flex-row gap-2 nav-item-tabs justify-content-center" id="pills-tab" role="tablist"
                style=" width: 100%;">
                <li class="nav-item p-0" role="presentation">
                    <button class="nav-link active" id="pills-waiting-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-waiting" type="button" role="tab" aria-controls="pills-waiting"
                        aria-selected="true" style=""><span>Waiting</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-accepted-tab" data-bs-toggle="pill" data-bs-target="#pills-accepted"
                        type="button" role="tab" aria-controls="pills-accepted" aria-selected="false"
                        style="; "><span>Accepted</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-declined-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-declined" type="button" role="tab" aria-controls="pills-declined"
                        aria-selected="false" style=";"><span>Declined</span></button>
                </li>
                
            </ul>
        </div>
    </div>
    
    <div class="tab-content d-flex " id="pills-tabContent" style="margin-bottom: 12vh;border: solid transparent">
        <div class="tab-pane fade show active" id="pills-waiting" role="tabpanel" aria-labelledby="pills-waiting-tab"
            style=" width: 100%">
            <div class="container-fluid w-100">
                <div class="flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none" style="color: black;  width: 100%;">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wcs1vih77pv6121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Mei Convention</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px; margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%;">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-clock-fill" style="margin-right: 3px"></i>Waiting
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none " style="color: black;  width: 100%; ">
                        <div class="col-md-4 mb-3" >
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Lele Convention Centre (LCC)</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px;margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-clock-fill" style="margin-right: 3px"></i>Waiting
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none " style="color: black;  width: 100%; ">
                        <div class="col-md-4 mb-3" >
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Human Convetion</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px;margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-clock-fill" style="margin-right: 3px"></i>Waiting
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-accepted" role="tabpanel" aria-labelledby="pills-accepted-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none" style="color: black;  width: 100%;">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-PhyOumJmW.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">EC Cakery</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px; margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-check-circle-fill" style="margin-right: 3px"></i>Accepted
                                        </p>
                                        <a href="#" style=" color:white; font-size: 10px; padding-top: 5px; height: 4vh;">
                                            <p>
                                                <i class="bi bi-star text-warning" style="margin-right: 3px"></i>Rate and Review
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none" style="color: black;  width: 100%;">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-y74iM_v8N.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Mie Cakery</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px; margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-check-circle-fill" style="margin-right: 3px"></i>Accepted
                                        </p>
                                        <a href="#" style=" color:white; font-size: 10px; padding-top: 5px; height: 4vh;">
                                            <p>
                                                <i class="bi bi-star text-warning" style="margin-right: 3px"></i>Rate and Review
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none" style="color: black;  width: 100%;">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-tJBn6AEX9.webp"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Boulevard Cakery</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px; margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-check-circle-fill" style="margin-right: 3px"></i>Accepted
                                        </p>
                                        <a href="#"  style=" color:white; font-size: 10px; padding-top: 5px; height: 4vh;">
                                            <p>
                                                <i class="bi bi-star text-warning" style="margin-right: 3px"></i>Rate and Review
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-declined" role="tabpanel" aria-labelledby="pills-declined-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none " style="color: black;  width: 100%; ">
                        <div class="col-md-4 mb-3" >
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.lalamove.com/hubfs/catering%20lunch%20box%20%284%29.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Lele Catering</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px;margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-x-circle-fill" style="margin-right: 3px"></i>Declined
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none " style="color: black;  width: 100%; ">
                        <div class="col-md-4 mb-3" >
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/10/B1000153-2-Kebersihan-Terjaga-1024x538.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Rounded Cakery</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px;margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-x-circle-fill" style="margin-right: 3px"></i>Declined
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none " style="color: black;  width: 100%; ">
                        <div class="col-md-4 mb-3" >
                            <div class="card border-0" style="width: 100%; border-radius: 0.25rem;overflow: hidden;">
                                <img src="https://www.sawarna.net/wp-content/uploads/catering-nasi-box-sawarna.jpg"
                                    class="card-img-top" alt="..." height="200" style="width: 100%;">
                                <div class="card-body position-absolute w-100 overflow-auto p-3 d-flex align-items-center"
                                    style=" background-color: rgba(0, 0, 0, 0.5); bottom:0; border: 0;">
                                    <div class="w-100" style=" width: 100%;color: white; ">
                                        <h5 class="card-title">Boulevard Catering</h5>
                                    <p class="card-text" style=" width: 100%; font-size: 12px">
                                        <i class="bi-calendar" style="margin-right: 5px"></i>12/12/2021
                                        <i class="bi-clock" style="margin-right: 5px;margin-left: 5px"></i>12:00
                                    </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center p-0 m-0" style=" width :50%; ">
                                        <p class="card-text p-0 m-0" style=" color:white;  font-size: 15px; ">
                                            <i class="bi bi-x-circle-fill" style="margin-right: 3px"></i>Declined
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="rate position-absolute p-1"
                                    style="top: 10px; right: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 0.25rem;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    @include('/components/navbar')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</html>
