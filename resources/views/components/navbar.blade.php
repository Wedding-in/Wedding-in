<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspiration</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="#">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="text">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon">
                    <ion-icon name="search-outline"></ion-icon>
                </span>
                <span class="text">Inspiration</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon">
                    <ion-icon name="storefront-outline"></ion-icon>
                </span>
                <span class="text">Vendor</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon">
                    <ion-icon name="bookmark-outline"></ion-icon>
                </span>
                <span class="text">Bookmark</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="text">Profile</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
      </div>

      <script>
        const list = document.querySelectorAll('.list');
        function activelink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click', activelink));
        </script>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
