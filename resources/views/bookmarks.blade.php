<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmarks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Font CSS --}}
    <link rel="stylesheet" href="../../css/Font.css">

</head>

<body style="background-color: #FFFEF9">

    <style>
        .nav-link.active {
            text-color: white;
            /* text-decoration: underline; */
            border-radius: 0.25rem;
            transform: scale(1.04);
        }
        .nav-item-tabs li{
            /* border: solid black !important; */
            /* background-color: #6e6366;  */
            border-radius: 0.25rem;
            background-color: #654b4852;
        }
        .nav-item-tabs li span{
            color: white;
        }
        .nav-link.active{
            background-color: #FCB2A9 !important;

        }
        .nav-link span {
            color: white
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

    </style>

    <div class="container-fluid">
        <div class="coloring pt-3 pb-1" >
            <h3 class="text-bolder text-center"
                style="font-family: SourceSerif4-Bold; font-size: 1rem;">Bookmarks</h3>
        </div>
        <h2 class="text-semibold pt-3 pb-1"
            style="font-family: SourceSerif4-SemiBold; font-size: 1.5rem;">Categories</h2>
        <ul class="nav nav-tabs row mb-1" style="border: none">
            <li class="nav-item col-6" >
                <a class="nav-link active d-flex align-items-center m-0 p-1" data-bs-toggle="tab" href="#tab1"
                    style=" background-color: #654b4852; border-radius: 0.25rem;">
                    <div class=" col-12 p-2 d-flex justify-content-center">
                        <span class="text-bold" style="text-align: center; font-family: SourceSerif4-SemiBold;">Vendor</span>
                    </div>
                </a>
            </li>
            <li class="nav-item col-6">
                <a class="nav-link d-flex align-items-center m-0 p-1" data-bs-toggle="tab" href="#tab2"
                    style=" background-color: #654b4852; border-radius: 0.25rem;">
                    <div class="col-12 p-2 d-flex justify-content-center">
                        <span class="text-bold" style="text-align: center; font-family: SourceSerif4-SemiBold;">Inspiration</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <div class="container-fluid p-0 pt-2">
                    <div class="upper_content">
                        <span class="" style="font-family: SourceSerif4-Regular; font-size: 1rem;">Edit</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="content m-0 d-flex align-items-center">
                                <input type="checkbox" id="choose" name="choose" onclick="checkAll()"></input>
                                <style>
                                    input[type="checkbox"] {
                                        width: 20px;
                                        height: 20px;
                                        background-color: #fff;
                                        border: 1px solid #000;
                                        border-radius: 5px;
                                        cursor: pointer;
                                    }

                                    input[type="checkbox"]:checked {
                                        background-color: #000;
                                    }
                                </style>
                                <label class="ps-2" for="choose" style="font-family: SourceSerif4-Regular; font-size: 1rem;">Choose all</label>
                            </div>

                            <span class="text-danger" style="font-family: SourceSerif4-Regular; font-size: 1rem; cursor: pointer;" onclick="">Delete</span>

                        </div>
                    </div>
                    <div class="content pt-3 " style=" margin-bottom: 15vh">
                        <a href="/detail_vendor_WO">
                        <div class="fill_content card text-dark" style="border-radius: 0.25rem;">
                            <img src="https://weddingmarket.com/storage/images/artikelidea/653336c74a1f2b9c3b1c778b297935f98f76b024.webp"
                                class="card-img" alt="..." style="height: 200px">
                            <div class="card-img-overlay m-0 p-0 ">
                                <div class="content insider d-flex align-items-start flex-column bd-highlight mb-3"
                                    style="height: 200px;">
                                    <div class="topper p-2 mb-auto d-flex justify-content-between" style="width: 100%">
                                        <input type="checkbox" id="choosing" name="choosing"></input>
                                        <div class="rating d-flex align-items-center pe-2 ps-2"
                                            style="border-radius: 0.25rem; background-color: rgba(0, 0, 0, 0.5);">
                                            <i class="text-white bi bi-star-fill pe-1"></i>
                                            <span style="color: white; font-family: SourceSerif4-Regular; font-size: 1rem; padding-top: 1px;">4.7</span>
                                        </div>
                                    </div>
                                    <div class="bottom" style="width: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 0 0 0.25rem 0.25rem;">
                                        <span class="ps-2 text-light"
                                            style="font-family: SourceSerif4-Regular; font-size: 1rem;">Never Gonna G U P</span>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi-geo-alt-fill pe-1" style="padding-left: 7px; color: white"></i>
                                            <span class="text-light"
                                                style="font-family: SourceSerif4-Light; font-size: 1rem;">Sisa Kenangan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <br>
                        <div class="fill_content card text-dark" style="border-radius: 0.25rem;">
                            <img src="https://weddingmarket.com/storage/images/artikelidea/653336c74a1f2b9c3b1c778b297935f98f76b024.webp"
                                class="card-img" alt="..." style="height: 200px">
                            <div class="card-img-overlay m-0 p-0 ">
                                <div class="content insider d-flex align-items-start flex-column bd-highlight mb-3"
                                    style="height: 200px;">
                                    <div class="topper p-2 mb-auto d-flex justify-content-between" style="width: 100%">
                                        <input type="checkbox" id="choosing" name="choosing"></input>
                                        <div class="rating d-flex align-items-center pe-2 ps-2"
                                            style="border-radius: 0.25rem; background-color: rgba(0, 0, 0, 0.5);">
                                            <i class="text-white bi bi-star-fill pe-1"></i>
                                            <span style="color: white; font-family: SourceSerif4-Regular; font-size: 1rem; padding-top: 1px;">4.7</span>
                                        </div>
                                    </div>
                                    <div class="bottom" style="width: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 0 0 0.25rem 0.25rem;">
                                        <span class="ps-2 text-light"
                                            style="font-family: SourceSerif4-Regular; font-size: 1rem;">Never Gonna G U P</span>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi-geo-alt-fill pe-1" style="padding-left: 7px; color: white"></i>
                                            <span class="text-light"
                                                style="font-family: SourceSerif4-Light; font-size: 1rem;">Sisa Kenangan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="fill_content card text-dark" style="border-radius: 0.25rem;">
                            <img src="https://weddingmarket.com/storage/images/artikelidea/653336c74a1f2b9c3b1c778b297935f98f76b024.webp"
                                class="card-img" alt="..." style="height: 200px">
                            <div class="card-img-overlay m-0 p-0 ">
                                <div class="content insider d-flex align-items-start flex-column bd-highlight mb-3"
                                    style="height: 200px;">
                                    <div class="topper p-2 mb-auto d-flex justify-content-between" style="width: 100%">
                                        <input type="checkbox" id="choosing" name="choosing"></input>
                                        <div class="rating d-flex align-items-center pe-2 ps-2"
                                            style="border-radius: 0.25rem; background-color: rgba(0, 0, 0, 0.5);">
                                            <i class="text-white bi bi-star-fill pe-1"></i>
                                            <span style="color: white; font-family: SourceSerif4-Regular; font-size: 1rem; padding-top: 1px;">4.7</span>
                                        </div>
                                    </div>
                                    <div class="bottom" style="width: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 0 0 0.25rem 0.25rem;">
                                        <span class="ps-2 text-light"
                                            style="font-family: SourceSerif4-Regular; font-size: 1rem;">Never Gonna G U P</span>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi-geo-alt-fill pe-1" style="padding-left: 7px; color: white"></i>
                                            <span class="text-light"
                                                style="font-family: SourceSerif4-Light; font-size: 1rem;">Sisa Kenangan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2">
                <div class="container-fluid m-0 p-0">
                    <div class="card m-0 p-0 border-0">
                        <div class="content d-flex justify-content-between pt-3">
                            <div class="left_content" style="width:47%">
                                <a href="/viewfolder">
                                <div class="favorite"
                                    style="height: 190px; width:100%; border: 1px solid black; border-radius: 0.25rem; overflow: hidden;">
                                    <img src="https://media.suara.com/pictures/653x366/2023/01/12/27038-potret-pernikahan-nex-carlos-instagramatvienesca.jpg"
                                        class="card-img-top" alt="..."
                                        style="width: 100%; height:50%; border-radius: 0.25rem 0.25rem 0 0;">
                                    <div class="card-body m-0 p-0">
                                        <div class="lower_content d-flex">
                                            <img src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2020/04/cincin-pernikahan.jpg"
                                                alt=""
                                                style="height: 95px; width:50%; border-radius: 0 0 0.25rem 0;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5PMvSnjsMrmXk0YwGnj9tqlXQCftXJtr_rA&s"
                                                alt=""
                                                style="height: 95px; width:50%; border-radius: 0 0 0 0.25rem;">
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div>
                                    <div class="lower_part pt-1 d-flex justify-content-between align-items-center"
                                        style="width:100%; position: relative;">
                                        <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Weding</span>
                                        <i class="bi bi-three-dots-vertical"  onclick="showPopup(event)"></i>
                                    </div>
                                        <div id="popup" style="display: none;">
                                            <div class="Isian" style="background-color: #FFFEF9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                                <div class="Deleting p-0 m-0 d-flex align-items-center">
                                                    <i class="bi bi-trash3 p-1 ps-2" style="color: red"></i>
                                                    <span style="font-family: 'SourceSerif4', serif; font-size: 1rem; color: red;">Delete</span>
                                                </div>

                                                <div class="Rename p-0 m-0 d-flex align-items-center">
                                                    <i class="bi bi-pen p-1 ps-2"></i>
                                                    <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Rename</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="right_content" style="width:47%">
                                <div class="favorite"
                                    style="height: 190px; width:100%; border: 1px solid black; border-radius: 0.25rem; overflow: hidden;">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQswrUiZDW4mkAJSd3OSgDefljX6d6ZULJfww&s"
                                        class="card-img-top" alt="..."
                                        style="width: 100%; height:50%; border-radius: 0.25rem 0.25rem 0 0;">
                                    <div class="card-body m-0 p-0">
                                        <div class="lower_content d-flex">
                                            <img src="https://v1.indonesia.travel/content/dam/indtravelrevamp/id-id/ide-liburan/lagi-cari-lokasi-pernikahan-cek-7-lokasi-pernikahan-di-indonesia-aja-ini-yuk/royal-tulip.jpeg"
                                                alt=""
                                                style="height: 95px; width:50%; border-radius: 0 0 0.25rem 0;">
                                            <img src="https://marketplace.canva.com/EAF5iY3yl10/1/0/1600w/canva-cokelat-minimalis-momen-indah-kolase-foto-pernikahan-kiriman-instgaram-jG4b5V-Fo8s.jpg"
                                                alt=""
                                                style="height: 95px; width:50%; border-radius: 0 0 0 0.25rem;">
                                        </div>
                                    </div>
                                </div>
                                <div class="lower_part pt-1 d-flex justify-content-between align-items-center"
                                    style="width:100%; position: relative;">
                                    <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">ImpianKu Istri ke 2</span>
                                    <i class="bi bi-three-dots-vertical"  onclick="showPopup2(event)"></i>
                                    </div>

                                    <div id="popup2" style="display: none;" >
                                        <div class="Isian" style="background-color: #FFFEF9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                            <div class="Deleting p-0 m-0 d-flex align-items-center">
                                                <i class="bi bi-trash3 p-1 ps-2" style="color: red"></i>
                                                <span style="font-family: 'SourceSerif4', serif; font-size: 1rem; color: red;">Delete</span>
                                            </div>

                                            <div class="Rename p-0 m-0 d-flex align-items-center">
                                                <i class="bi bi-pen p-1 ps-2"></i>
                                                <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Rename</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function showPopup2(event) {
                                        event.stopPropagation();
                                        var popup = document.getElementById("popup2");
                                        popup.style.display = "block";
                                        document.addEventListener("click", dismissPopup2);
                                    }

                                    function dismissPopup2() {
                                        var popup = document.getElementById("popup2");
                                        popup.style.display = "none";
                                        document.removeEventListener("click", dismissPopup2);
                                    }

                                    function deleteItem() {
                                        // Code to delete the item goes here
                                    }

                                    function renameItem() {
                                        // Code to rename the item goes here
                                    }
                                </script>

                                    <script>
                                        function showPopup(event) {
                                            event.stopPropagation();
                                            var popup = document.getElementById("popup");
                                            popup.style.display = "block";
                                            document.addEventListener("click", dismissPopup);
                                        }

                                        function dismissPopup() {
                                            var popup = document.getElementById("popup");
                                            popup.style.display = "none";
                                            document.removeEventListener("click", dismissPopup);
                                        }

                                        function deleteItem() {
                                            // Code to delete the item goes here
                                        }

                                        function renameItem() {
                                            // Code to rename the item goes here
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.navbar_bookmark')
    <script>
        function checkAll() {
            var checkboxes = document.getElementsByName('choosing');
            var chooseAllCheckbox = document.getElementById('choose');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = chooseAllCheckbox.checked;
            }
        }
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
