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
            <a style="text-decoration: none; color: black" href="/Detail_Vendor_Cake"><i class="bi bi-arrow-left-short"
                    style="font-size: 40px; margin-left: -3%"></i></a>
        </div>

        <div class="container d-flex justify-content-center align-items-center mt-3 mb-3"
            style="height: 320px; width: 85%; background-color: #F4F4F4;">
            {{-- <div class="" style="width: 100%; height: 100%;"> --}}
            <img src="/Image/Detail_Vendor_Cake/Product1.jpeg" alt="" style="height: 100%; max-width: 100%">
            {{-- </div> --}}
        </div>

        {{-- <div class="container"
            style="height: 320px; width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="">
                <img src="/Image/Detail_Vendor_Cake/Cake1.jpg" alt=""
                    style="max-height: 100%; max-width: 100%;">
            </div>
        </div> --}}


        <div class="container">
            <div class="d-flex flex-row justify-content-between">
                {{-- <h4 class="mt-4">EC Cakery</h4> --}}
                <h4 class="mt-4" style="width: 70%">EC Cakery</h4>
            </div>
            {{-- <h6 class="mt-1">Jl. Raya Babakan Madang No.25, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</h6> --}}
            <hr style="height:2px;border-width:0;color:#C13C2C;background-color:#C13C2C">

            <h6 class="mt-1" style="font-family: SourceSerif4-SemiBold">Detail</h6>
            <h6 class="container mt-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget sapien eget tincidunt.
                Donec quis varius est.
                <br><br>
                Lorem ipsum dolor : <br>
                Lorem ipsum dolor sit amet, consectetur
                Lorem ipsum dolor sit amet, consectetur
                Lorem ipsum dolor sit amet, consectetur
                Lorem ipsum dolor sit amet, consectetur
                Lorem ipsum dolor sit amet, consectetur <br><br>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget sapien eget tincidunt.
                Donec quis varius est.
            </h6>
        </div>

        <br><br><br><br><br><br>
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
