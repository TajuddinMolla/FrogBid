<?php
include('./header.php')
?>
<section class="mb-4 main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center banner-content">
        <h2 class="banner-title">Up to 50% off!</h2>
        <h5 class="banner-subTitle">Don't miss out on some very special items at extraordinary sale prices. For a limited time!</h5>
        <button class="banner-btn">Pick up bargain</button>
        <p class="banner-paragraph">With code: SUMMERSALE</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" src="./assets/image/banner_image.jpg" alt="Banner Image" >
      </div>
    </div>
  </div>
</section>

<section class="container my-4 pt-4">
  <div class="text-center d-flex flex-column justify-content-center align-items-center">
    <h2 class="mb-4 ">Why Frogbid?</h2>
    <p class="about-sec-p">We believe in easy access to things that are good for our mind, body and spirit. With a clever offering, superb support and a secure checkout you’re in good hands.</p>
  </div>
  <div class="row mt-4">
    <div class="col-md-4 text-center">
      <img src="./assets/image/imgone.webp" width="128" height="128" alt="">
      <h4 class="my-2">Smart ideas</h4>
      <p>With dozens of intelligent concepts, you’ll find what you’re looking for in our store, and it will be unique and personalized to match.</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="./assets/image/imgtwo.webp" width="128" height="128" alt="">
      <h4 class="my-2">Outstanding support</h4>
      <p>Our customer support is second to none – users rave about how we don’t rest until every issue is solved to their satisfaction.</p>
    </div>
    <div class="col-md-4 text-center">
      <img src="./assets/image/imgthree.webp" width="128" height="128" alt="">
      <h4 class="my-2">Secure checkout</h4>
      <p>With 128-bit SSL security with advanced encryption you are guaranteed that your purchases are safe.</p>
    </div>
  </div>
</section>

<section class="container my-4">
  <div class="text-center py-4">
    <h2>New Arrivals</h2>
  </div>
  <div class="row mt-3">
    <div class="col-lg-3 col-md-6">
      <div class="product-grid-one">
        <div class="product-image-one">
          <a href="#" class="image" id="imageOne"></a>
          <ul class="product-links-one">
            <li>
              <a href="#"><i class="fa fa-heart"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-random"></i></a>
            </li>
            <li id="shoppingBagOne">

            </li>
          </ul>
          <a href="#" class="product-view-one"><i class="fa fa-search"></i></a>
        </div>
        <div class="product-content-one">
          <ul class="rating-one">
            <li class="fas fa-star"></li>
            <li class="fas fa-star"></li>
            <li class="fas fa-star"></li>
            <li class="fas fa-star"></li>
            <li class="fas fa-star disable"></li>
            <li class="disable">(1 reviews)</li>
          </ul>
          <h3 class="title-one" id="titleOne"></h3>
          <div class="price-one" id="priceOne"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="product-grid-two">
        <div class="product-image-two">
          <a href="#" class="image" id="imageTwo">
          </a>
          <span class="product-discount-label-two">-23%</span>
          <ul class="product-links-two">
            <li>
              <a href="#"><i class="fa fa-search"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-heart"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-random"></i></a>
            </li>
          </ul>
          <span id="shoppingBagTwo">
          </span>
        </div>
        <div class="product-content-two">
          <h3 class="title-two" id="titleTwo"></h3>
          <div class="price-two" id="priceTwo"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="product-grid-three">
        <div class="product-image-three">
          <a href="#" class="image" id="imageThree">
          </a>
          <span class="product-sale-label-three">Sale</span>
          <a href="#" class="product-like-icon-three" data-tip="Add to Wishlist">
            <i class="far fa-heart"></i>
          </a>
          <ul class="product-links-three">
            <li>
              <a href="#"><i class="fa fa-search"></i></a>
            </li>
            <li id="shoppingBagThree">

            </li>
            <li>
              <a href="#"><i class="fa fa-random"></i></a>
            </li>
          </ul>
        </div>
        <div class="product-content-three">
          <h3 class="title-three" id="titleThree"></h3>
          <div class="price-three" id="priceThree"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="product-grid-four">
        <div class="product-image-four">
          <a href="#" class="image" id="imageFour"></a>
          <ul class="social-four">
            <li>
              <a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
            </li>
            <li>
              <a href="#" data-tip="Add to wishlist"><i class="fa fa-heart"></i></a>
            </li>
          </ul>
          <div class="product-rating-four">
            <ul class="rating-four">
              <li class="fas fa-star"></li>
              <li class="fas fa-star"></li>
              <li class="fas fa-star"></li>
              <li class="far fa-star"></li>
              <li class="far fa-star"></li>
            </ul>
            <span id="shoppingBagFour">

            </span>

          </div>
        </div>
        <div class="product-content-four">
          <h3 class="title-four" id="titleFour"></h3>
          <div class="price-four" id="priceFour"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('./footer.php')
?>