<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rate</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Font.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #FFFEF9;
        height: 100%;
        font-family: SourceSerif4-Regular;
    }
    .heading span {
        font-family: SourceSerif4-Bold;
    }
    .heading h6 {
        font-family: SourceSerif4-Bold;
    }
    .name h6 {
        font-family: SourceSerif4-SemiBold;
    }
    .icon-size {
        font-size: 48px;
    }
    .btn {
        height: 80%;
        width: 100%;
        background-color: #FCB2A9;
        color: black;
        font-family: SourceSerif4-SemiBold;
        border-radius: 0.25rem;
        border: none;
    }
    .fill-text textarea {
        border-radius: 0.25rem;
    }
    .img-vendor {
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <div class="row mx-3 mt-3 mb-4">
        <div class="col-2">
            <i class="icon-size bi bi-arrow-left-short"></i>
        </div>
        <div class="heading col-6 d-flex flex-column justify-content-center">
            <h6>
                Vendor's name
            </h6>
            <span>
                Rate and Review
            </span>
        </div>
        <div class="col-4 d-flex flex-column justify-content-center">
            <button type="button" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Submit
            </button>
        </div>
    </div>
    <hr style="border: 1px solid black;">
    <div class="box-rate row mx-3">
        <div class="col-6">
            <img src="https://alexandra.bridestory.com/images/dpr_1.0,f_auto,fl_progressive,q_80,c_fill,g_faces,w_800/blogs/shutterstock_1193856283-I3xQC_Bb1/20-vendor-pernikahan-pilihan-di-surabaya-untuk-mewujudkan-pernikahan-impian-anda-1.jpg" class="img-vendor mb-3" alt="">
        </div>
        <div class="name col-6 d-flex flex-column justify-content-center">
            <h6>
                Product's Name
            </h6>
            <h6>
                12 July 2024
            </h6>
        </div>
    </div>
    <div class="box-star row mx-3 mt-3">
        <div class="col-6">
            <span>
                Rate of Vendor's
            </span>
        </div>
        <div class="col-6">
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>
    <hr style="border: 1px solid black;">
    <div class="fill-text row mx-3 mt-4">
        <textarea name="" id="" cols="30" rows="5" placeholder="Give a review about your experience (optional)"></textarea>
    </div>
</body>
</html>
