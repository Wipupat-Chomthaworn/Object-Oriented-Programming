<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <title>replit</title>
  <style>
    .container-fluid {
      mix-blend-mode: lighten;
    }

        * {
      box-sizing: border-box;
    }

    html {
      font-size: 12px;
    }

    body {
/*       -webkit-text-stroke: 0.5px black; */
      font-family: 'Roboto Slab', serif;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url("img/bg.png");
      width: 100%;
      overflow-x: hidden;
      color: white;
    }

    .container-motto {
      width: 100%;
      position: relative;
      text-align: center;
      color: white;
    }

    .container-motto img {
      width: 100%;
      height: 30%;
    }

    .top-centered {
      position: relative;
      font-size: 5vw;
      transform: translate(0%, -300%);
    }


    .bottom-centered {
      position: relative;
      font-size: 6vw;
      left: 50%;
      transform: translate(-50%, -250%);
    }

    .card-title,
    .card-text {
      color: black;
    }

    .top-centered hr {
      color: white;
      position: relative;
      width: 50vw;
      left: 35%;
      text-align: center;
      z-index: 1;
      opacity: 1;
    }
    .units {
    bottom: calc(10% - 30px);
    right: calc(-20% - 30px);
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    }
    
    .units .btn {
    width: 40px;
    height: 40px;
    font-size: 24px;
    margin: 20px;
    background-color: crimson;
    color: white;
    border-radius: 50%;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    justify-content: center;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
}
    .count {
          font-size: 24px;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    }
    .shopping-bag
    .shopping-bag {
      padding: 10px 5px;
    }
    .shopping-bag a {
    border-radius: 10% 10% 10% 10%;
    display: flex;
    width: 143px;
    height: 64px;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    background: crimson;
    border: 5px solid white;
    justify-content: space-evenly;
    text-decoration: none;
    align-items: center;
    }
    .text1 {
font-size: 24px;
    color: white;
    text-decoration: none;
    }
    .shopping-bag a img {
    width: 45px;
    height: 40px;
    }
    .shopping-bag .total-items-in-cart {
    margin-left: 4px;
    padding: 6px;
    font-size: 17px;
    background-color: white;
    border-radius: 5px;
    }

    .container-cart{
      max-width: 1200px;
      margin: 0 auto;
    }

    .container-cart h1{
      font-size: 50px;
      font-weight: bold;
      padding: 20px 0;
    }

    .cart{
      display: flex;
    }

    .cart-items {
      flex: 0.75;
    }
    
    .product{
      display: flex;
      width: 100%;
      height: 200px;
      overflow: hidden;
      border: 1px solid silver;
      margin-bottom: 20px;
      background-color: #352E2E;
    }

    .product:hover{
      boder: none;
      box-shadow: 2px 2px 2px 4px rgb(0,0,0,.2);
      transform: scale(1.01);
    }
    .product img{
      width: 300px;
      height: 200px;
      object-fit: cover;
    }

    .product-info{
      padding: 20px;
      width: 100%;
      position: relative;
    }

    .product-name, .product-price{
      margin-bottom: 15px;
    }
    .product-name{
      font-size: 32px;
    }
    .product-price ins{
      margin: 10px;
      color: green;
    }

    .product-remove{
      position: absolute;
      bottom: 10px;
      padding: 10px 25px;
      background-color: green;
      color: white;
      cursor: pointer;
      border-radius: 5px;
    }

    .product-remove:hover{
      background-color: white;
      color: green;
      font-wight: 600;
      border: 1px solid green;
      
    }

  .quantity{
    display: flex;
    width: 60px;
    height: 60px;
    font-size: 24px;
    left: calc(50% - 30px);
    bottom: calc(50% - 30px);
    background: #fff;
    border: 2px solid #ddd;
    color: #7f7f7f;
    text-align: center;
    font: 600 1.5rem Helvetica, Arial, sans-serif;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    }
    .cart-total{
      flex: 0.25;
      margin-left: 20px;
      padding: 20px;
      height: 280px;
      border: 1px solid silver;
      border-radius: 5px;
      background-color: #352E2E;
    }

    .cart-total p{
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      font-size: 20px;
    }

    .cart-total a{
      display: block;
      text-align: center;
      height: 40px;
      line-height: 40px;
      background-color: tomato;
      color: white;
      text-decoration: none;
    }

    .cart-total a:hover{
      background-color: red;
    }
        .navbar-promotion img, .navbar-menu img, .navbar-home img{
      height: 95px; 
      opacity: 0.7;
    }
    .navbar-promotion img:hover, .navbar-menu img:hover, .navbar-home img:hover{
      height: 95px; opacity: 1;      
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-black" style="min-height: 100px; height: 100px; max-height: 100px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="img/Logo.png" style="height: 95px;" alt="logo">
      </a>
    </div>

    <div class="container-fluid">
      <a class="navbar-home" href="index.html">
        <img id="navbar-home" src="img/Home_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Home</h1> -->
      </a>
    </div>
    <div class="container-fluid">
      <a class="navbar-promotion" href="Promotion.html">
        <img id="navbar-promotion" src="img/Promotion-web_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Promotion</h1> -->
      </a>
    </div>

    <div class="container-fluid">
      <a class="navbar-menu" href="Sashimi.php">
        <img id="navbar-menu" src="img/Menu_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Menu</h1> -->
      </a>
    </div>
    <!--     nev trolley login -->
    <div class="container">
      <div class="shopping-bag">
        <a class="navbar-trolley" href="Cart.php">
          <img src="img/Trolley.png" alt="logo">
          <div class="text1">Cart</div>
          <div class="total-items-in-cart">
                        0
                    </div>
        </a>
      </div>
      <div class="container-fluid">
        <a class="navbar-account" href="log in.php">
          <img src="img/Account.png" alt="logo">
        </a>
      </div>
      <div class="container-fluid">
        <a class="navbar-contact" href="contact.html">
          <img src="img/Contact us.png" alt="logo">
          <!--         <h1 class="nav-name">Menu</h1> -->
        </a>
      </div>
    </div>
  </nav>
    <div class="container-cart">
    <h1>Shopping Cart</h1>
    <span class="count"> 2 items in the bag</span>
    <div class="cart">
      <div class="cart-items"></div>
      <div class="cart-total">
        <p>
          <span>SUBTOTAL</span>
          <span class="subtotal"></span>
        </p>
        <p>
          <span>TAX</span>
          <span>5%</span>
        </p>
        <p>
          <span>DISCOUNT</span>
          <span class="discount">0</span>
        </p>
        <p>
          <span>TOTAL</span>
          <span class="total"></span>
        </p>
        <a href="#" onclick="checkout()">Proceed to Checkout</a>
      </div>
    </div>
  </div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
<script src="products.js"></script>
<script src="promotion.js"></script>
<script src="cart.js"></script>
  
</html>