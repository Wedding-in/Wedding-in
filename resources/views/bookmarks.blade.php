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
</head>

<body style="background-color: #FFFEF9">

    <style>
        .nav-link.active {
            /* background-color: #AFD5BE; */
            text-color: white;
            transform: scale(1.04);
            i {
                color: white;
            }
        }

        .nav-link span {
            color: black
        }

        .nav-link i {
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

    <div class="container-fluid">
        <div class="coloring pt-3 pb-1" >
            <h3 class="text-bolder text-center"
                style="font-family: 'SourceSerif4', serif; font-size: 1.5rem; font-weight: bold;">Bookmarks</h3>
        </div>
        <h2 class="text-semibold pt-3 pb-1"
            style="font-family: 'SourceSerif4', serif; font-size: 1.5rem; font-weight: 600;">Categories</h2>
        <ul class="nav nav-tabs row mb-1" style="border: none">
            <li class="nav-item col-6" >
                <a class="nav-link active d-flex align-items-center m-0 p-1" data-bs-toggle="tab" href="#tab1"
                    style="border: 1px solid black; background-color: #FCB2A9; border-radius: 0.25rem;">
                    <div class=" col-12 p-2 d-flex justify-content-center">
                        <span class="text-bold" style="text-align: center;">Vendor</span>
                    </div>
                </a>
            </li>
            <li class="nav-item col-6">
                <a class="nav-link d-flex align-items-center m-0 p-1" data-bs-toggle="tab" href="#tab2"
                    style="border: 1px solid black; background-color: #FCB2A9; border-radius: 0.25rem;">
                    <div class="col-12 p-2 d-flex justify-content-center">
                        <span class="text-bold" style="text-align: center;">Inspiration</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <div class="container-fluid p-0 pt-2">
                    <div class="upper_content">
                        <span class="" style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Edit</span>
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
                                <label class="ps-2" for="choose" style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Choose all</label>
                            </div>

                            <span class="text-danger" style="font-family: 'SourceSerif4', serif; font-size: 1rem; cursor: pointer;" onclick="">Delete</span>

                        </div>
                    </div>
                    <div class="content pt-3">
                        <div class="fill_content card text-dark" style="border-radius: 0.25rem;">
                            <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/11/01/2936197536.jpg"
                                class="card-img" alt="..." style="height: 200px">
                            <div class="card-img-overlay m-0 p-0 ">
                                <div class="content insider d-flex align-items-start flex-column bd-highlight mb-3"
                                    style="height: 200px;">
                                    <div class="topper p-2 mb-auto d-flex justify-content-between" style="width: 100%">
                                        <input type="checkbox" id="choosing" name="choosing"></input>
                                        <div class="rating d-flex align-items-center pe-2 ps-2"
                                            style="border-radius: 0.25rem; background-color: rgba(0, 0, 0, 0.5);">
                                            <i class="text-white bi bi-star-fill pe-1"></i>
                                            <span style="color: white; font-family: 'SourceSerif4', serif; font-size: 1rem; padding-top: 2px;">4.7</span>
                                        </div>
                                    </div>
                                    <div class="bottom" style="width: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 0 0 0.25rem 0.25rem;">
                                        <span class="ps-2 text-light"
                                            style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Tokidoki
                                            Bosotto</span>
                                        <div class="location d-flex align-items-center">
                                            <i class="bi-geo-alt-fill pe-1" style="padding-left: 7px; color: white"></i>
                                            <span class="text-light"
                                                style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Japan</span>
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
                            <div class="left_content">
                                <div class="favorite"
                                    style="height: 190px; width:190px; border: 1px solid black; border-radius: 0.25rem; overflow: hidden;">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGzvPPPE_yYRcEO8LFzJ_LZTUvlImybCF5QbQjlkWfskfezI-P1s66TdUowV_J4LRry7o&usqp=CAU"
                                        class="card-img-top" alt="..."
                                        style="width: 190px; height:95px; border-radius: 0.25rem 0.25rem 0 0;">
                                    <div class="card-body m-0 p-0">
                                        <div class="lower_content d-flex">
                                            <img src="https://wallpapersmug.com/download/1024x768/b59983/anime-kitagawa-marin.jpg"
                                                alt=""
                                                style="height: 95px; width:95px; border-radius: 0 0 0.25rem 0;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZy-a-t8ZTpJ9CpYWIIfxxiwvPYhDcqA3EXw&s"
                                                alt=""
                                                style="height: 95px; width:95px; border-radius: 0 0 0 0.25rem;">
                                        </div>
                                    </div>
                                </div>
                                <div class="lower_part pt-1 d-flex justify-content-between align-items-center"
                                    style="width:190px; position: relative;">
                                    <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Marin Chuan</span>
                                    <i class="bi bi-three-dots-vertical" style="position: absolute; right: -3.5%;"></i>

                                </div>
                            </div>
                            <div class="right_content">
                                <div class="favorite"
                                    style="height: 190px; width:190px; border: 1px solid black; border-radius: 0.25rem; overflow: hidden;">
                                    <img src="https://embed.pixiv.net/spotlight.php?id=9262&lang=en"
                                        class="card-img-top" alt="..."
                                        style="width: 190px; height:95px; border-radius: 0.25rem 0.25rem 0 0;">
                                    <div class="card-body m-0 p-0">
                                        <div class="lower_content d-flex">
                                            <img src="https://static.zerochan.net/Furina.full.4054438.jpg"
                                                alt=""
                                                style="height: 95px; width:95px; border-radius: 0 0 0.25rem 0;">
                                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4d52fc21-e5cc-4b78-b4db-06f495150268/dg716p3-9aa66ba2-963a-45cd-bff3-0481e68f8866.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzRkNTJmYzIxLWU1Y2MtNGI3OC1iNGRiLTA2ZjQ5NTE1MDI2OFwvZGc3MTZwMy05YWE2NmJhMi05NjNhLTQ1Y2QtYmZmMy0wNDgxZTY4Zjg4NjYuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.l7PEcL6Jepesk4ZfMMPfdt_-UNwkGPbsCq8sY-Te73w"
                                                alt=""
                                                style="height: 95px; width:95px; border-radius: 0 0 0 0.25rem;">
                                        </div>
                                    </div>
                                </div>
                                <div class="lower_part pt-1 d-flex justify-content-between align-items-center"
                                    style="width:190px;      position: relative;">
                                    <span style="font-family: 'SourceSerif4', serif; font-size: 1rem;">Furinah</span>
                                    <i class="bi bi-three-dots-vertical" style="position: absolute; right: -3.5%;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.navbar')
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
