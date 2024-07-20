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

    <title>Hello, world!</title>
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
            /* background-color: #AFD5BE; */
            text-color: white;
            text-decoration: underline;
            transform: scale(1.04);
        }

        .nav-link span {
            color: black
        }

        .nav-link.nav-link.active span {
            color: white;
        }

        .nav-link:hover {
            transform: scale(1.04);
            transition: 0.3s;
        }

        .items-tabs a:hover {
            transform: scale(1.02);
            transition: 0.3s;
        }
    </style>

</head>

<body style="background-color: #FFFEF9;">

    <div class="container d-flex py-4 flex-column" style="border: solid transparent 1px;">
        <h2 class="ps-5" style="font-weight: 600">Categories</h2>
        <div class="col-md-3 d-flex justify-content-center align-items-center pt-2">
            <ul class="nav nav-pills  flex-row gap-2 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-venue-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-venue" type="button" role="tab" aria-controls="pills-venue"
                        aria-selected="true" style="background-color: #AFD5BE;"><span>Venue</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-cake-tab" data-bs-toggle="pill" data-bs-target="#pills-cake"
                        type="button" role="tab" aria-controls="pills-cake" aria-selected="false"
                        style="background-color: #7eacc4; "><span>Cake</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-catering-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-catering" type="button" role="tab" aria-controls="pills-catering"
                        aria-selected="false" style="background-color: #faaf92;"><span>Food Catering</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-wo-tab" data-bs-toggle="pill" data-bs-target="#pills-wo"
                        type="button" role="tab" aria-controls="pills-wo" aria-selected="false"
                        style="background-color: #d8cc5e;"><span>WO</span></button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content d-flex " id="pills-tabContent" style="margin-bottom: 15vh ;border: solid transparent">
        <div class="tab-pane fade show active" id="pills-venue" role="tabpanel" aria-labelledby="pills-venue-tab">
            <div class="container" style="border: solid transparent">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wcs1vih77pv6121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-1" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064; height: 13vh;">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country, Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Iure neque, veniam labore
                                        iusto asperiores, numquam debitis impedit suscipit dignissimos earum corporis
                                        tenetur provident molestiae in iste quod, minus ad necessitatibus. Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Ratione neque cum alias quod
                                        expedita laborum, voluptatum itaque quidem dolorem at doloremque, exercitationem
                                        praesentium reiciendis quas quam est aspernatur ipsa rem?
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064; padding: 3px; border-radius: 3px">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                    <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                        style=" background-color: #00000064">
                                        <h5 class="card-title">Vendor's Name</h5>
                                        <p class="card-text">
                                            <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                        </p>
                                    </div>
                                    <div class="rate position-absolute"
                                        style="top: 10px; right: 10px; background-color: #00000064; padding: 3px; border-radius: 3px">
                                        <i class="text-white bi bi-star-fill"></i>
                                        <span class="text-white">4.6</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-cake" role="tabpanel" aria-labelledby="pills-cake-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-PhyOumJmW.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-tJBn6AEX9.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-y74iM_v8N.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-catering" role="tabpanel" aria-labelledby="pills-catering-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://www.thomasthecaterer.co.uk/wp-content/uploads/2020/05/Wedding-food-catering-2048x1365.jpeg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/catering-ponyo.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/menu-yang-tepat.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-wo" role="tabpanel" aria-labelledby="pills-wo-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-HNxU_GdhE.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-N8hKndJYP.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-2TYGZ4hFF.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body position-absolute bottom-0 start-0  w-100 text-white overflow-auto"
                                    style=" background-color: #00000064">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                                <div class="rate position-absolute"
                                    style="top: 10px; right: 10px; background-color: #00000064;">
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

</html>
