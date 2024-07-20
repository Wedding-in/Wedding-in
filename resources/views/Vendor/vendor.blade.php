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
            background-color: #AFD5BE;
            color: black;
            text-decoration: underline;
            transform: scale(1.04);
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

    <div class="row d-flex py-4">
        <h2 class="ps-5" style="font-weight: 600">Categories</h2>
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <ul class="nav nav-pills  flex-row gap-2 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-venue-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-venue" type="button" role="tab" aria-controls="pills-venue"
                        aria-selected="true" style="background-color: #AFD5BE; color: black;">Venue</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-cake-tab" data-bs-toggle="pill" data-bs-target="#pills-cake"
                        type="button" role="tab" aria-controls="pills-cake" aria-selected="false"
                        style="background-color: #e6eff6; color: black">Cake</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-catering-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-catering" type="button" role="tab" aria-controls="pills-catering"
                        aria-selected="false" style="background-color: #faaf92; color: black">Food Catering</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-wo-tab" data-bs-toggle="pill" data-bs-target="#pills-wo"
                        type="button" role="tab" aria-controls="pills-wo" aria-selected="false"
                        style="background-color: #d8cc5e; color: black">WO</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content d-flex " id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-venue" role="tabpanel" aria-labelledby="pills-venue-tab">
            <div class="container">
                <div class="row flex-column d-flex items-tabs">
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://images.weddingku.com/images/upload/articles/images/wcs1vih77pv6121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-1" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://images.weddingku.com/images/upload/articles/images/wc61vihutovr121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://images.weddingku.com/images/upload/articles/images/diyk05nba7cx121920191209.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
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
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-PhyOumJmW.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-tJBn6AEX9.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-y74iM_v8N.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
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
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://www.thomasthecaterer.co.uk/wp-content/uploads/2020/05/Wedding-food-catering-2048x1365.jpeg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/catering-ponyo.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://www.makanponyo.com/wp-content/uploads/2019/07/menu-yang-tepat.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
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
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-HNxU_GdhE.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-N8hKndJYP.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: 123 Main Street, City, Country
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none my-3" style="color: black;">
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                <div class="rate position-absolute" style=" top: 10px; right: 10px; ">
                                    <i class="text-white bi bi-star-fill"></i>
                                    <span class="text-white">4.6</span>
                                </div>
                                <img src="https://alexandra.bridestory.com/image/upload/dpr_1.0,f_webp,fl_progressive,q_60,c_fill,g_faces,w_560,h_280/assets/upload-2TYGZ4hFF.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor's Name</h5>
                                    <p class="card-text">
                                        <i class="bi-geo-alt-fill"></i> Location: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, consequuntur, consequatur laudantium veritatis, rem laborum nisi labore quos rerum nemo fuga unde iste commodi est aperiam vel velit. Accusantium, facere.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
