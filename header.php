<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>

  <link rel="stylesheet" href="./assets/css/style.css?v=<?= time(); ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php
  require('./database/Database.php');
  ?>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(0, 0, 0, 0.05); padding: 20px 0;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Frog Bid</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
          </ul>
          <a href="./checkout.php" class="shopping-cart">
            <span class="cart-qty" id="cartQty"></span>
            <img class="" src="./assets/image/Shopping-Bag.png" />
          </a>
        </div>
      </div>
    </nav>
  </header>