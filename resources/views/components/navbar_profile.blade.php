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
    <div class="navi">
        <ul>
            <li class="lists">
                <a href="/home">
                <span class="icons">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="texts">Home</span>
                </a>
            </li>
            <li class="lists">
                <a href="/inspiration">
                <span class="icons">
                    <ion-icon name="search-outline"></ion-icon>
                </span>
                <span class="texts">Inspiration</span>
                </a>
            </li>
            <li class="lists">
                <a href="/vendor">
                <span class="icons">
                    <ion-icon name="storefront-outline"></ion-icon>
                </span>
                <span class="texts">Vendor</span>
                </a>
            </li>
            <li class="lists">
                <a href="/bookmarks">
                <span class="icons">
                    <ion-icon name="bookmark-outline"></ion-icon>
                </span>
                <span class="texts">Bookmarks</span>
                </a>
            </li>
            <li class="lists active">
                <a href="/profile">
                <span class="icons">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="texts">Profile</span>
                </a>
            </li>
            <div class="indi"></div>
        </ul>
      </div>

      <script>
        const lists = document.querySelectorAll('.lists');
        function activelink(){
            lists.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        lists.forEach((item) =>
        item.addEventListener('click', activelink));
        </script>

      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
