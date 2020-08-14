<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/Frost.css">
    <script src="Jquery/jquery-3.4.1.js"></script>
    <title>Shop</title>
</head>
<body>
<header>
    <div id="logo" onclick="slowScroll('#bigslider')">
        <img src="Images/WoW-label.png"  width="45px" height="45px" alt="" id="label-menu">
    </div>
    <div id="menu">
        <a href="#shop" title="STORE" onclick="slowScroll('#shop')">STORE</a>
        <a href="#advantages" title="advantages" onclick="slowScroll('#advantages')">ADVANTAGES</a>
        <a href="#contacts" title="Contacts" onclick="slowScroll('#contacts')">CONTACTS</a>
        <a href="#Faq" title="Faq" onclick="slowScroll('#Faq')">FAQ</a>
        <a href="Login open/Login.html" title="Personal Area" onclick="slowScroll('#Admin-Panel')">ADMIN-PANEL</a>
    </div>
</header>


<div id="new-content">
    <div id="sidebar">
        <div id="main-menu">
            <span id="icon-catalog"><img src="https://image.flaticon.com/icons/svg/1636/1636053.svg" height="30px" width="30px" alt=""></span>
            <span id="catalog"> Catalog Products</span>
        </div>
        <div class="catalogs">
            <ul  class="list-group">
                <li class="list-group-item disabled" aria-disabled="true">Bests top computers devises 2020</li>
                <li class="list-group-item">Processors</li>
                <li class="list-group-item">Video Cards</li>
                <li class="list-group-item">Keyboards</li>
                <li class="list-group-item">Bets products which have discounts</li>
                <li class="list-group-item">Bests PC games</li>
                <li class="list-group-item">Gaming Mouses</li>
                <li class="list-group-item">Gaming Screen</li>
                <li class="list-group-item">Gaming Notebook</li>
                <li class="list-group-item">Gaming Phone</li>
                <li class="list-group-item">Bests video game for console</li>
                <li class="list-group-item">Gaming Joysticks</li>
                <li class="list-group-item">Top RAM</li>
                <li class="list-group-item">Music System</li>
                <li class="list-group-item">Bests Apps</li>
                <li class="list-group-item">Gaming Backpack</li>
                <li class="list-group-item">Gaming Mat</li>
                <li class="list-group-item">Gaming Chair</li>
            </ul>
        </div>
    </div>

    <div id="big-card">
        {% for article in articles %}
        <div class="card" >
            <img src="Images/{{article.image}}" height="250px" width="250px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{article.title}}</h5>
                <p class="card-text">{{article.description}}</p>
                <a href="#" class="button">Go somewhere</a>
            </div>
        </div>
        {% endfor %}
    </div>

</div>

<footer>
    <span id="footer-text">
        Copyright © 2020
    </span>
</footer>

</body>
</html>
