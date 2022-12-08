//Product Card One
const titleOne = document.getElementById("titleOne");
const priceOne = document.getElementById("priceOne");
const imageOne = document.getElementById("imageOne");
const shoppingBagOne = document.getElementById("shoppingBagOne");

//Product Card Two

const titleTwo = document.getElementById("titleTwo");
const priceTwo = document.getElementById("priceTwo");
const imageTwo = document.getElementById("imageTwo");

const shoppingBagTwo = document.getElementById("shoppingBagTwo");

//Product Card Three

const titleThree = document.getElementById("titleThree");
const priceThree = document.getElementById("priceThree");
const imageThree = document.getElementById("imageThree");

const shoppingBagThree = document.getElementById("shoppingBagThree");
//Product Card Four

const titleFour = document.getElementById("titleFour");
const priceFour = document.getElementById("priceFour");
const imageFour = document.getElementById("imageFour");

const shoppingBagFour = document.getElementById("shoppingBagFour");
//Shopping Bag
const addToShoppingBagBtn = document.getElementById("addToShoppingBag");

if (
  titleOne ||
  priceOne ||
  imageOne ||
  shoppingBagOne ||
  shoppingBagTwo ||
  shoppingBagThree ||
  shoppingBagFour ||
  titleTwo ||
  priceTwo ||
  imageTwo ||
  titleThree ||
  priceThree ||
  imageThree ||
  titleFour ||
  priceFour ||
  imageFour
) {

  //Product Card One
  titleOne.innerHTML = `<a href="#">${product[0].name}</a>`;
  priceOne.innerHTML = `BDT ${product[0].price}`;
  imageOne.innerHTML = `<img class="img-1-one" src="${product[0].imageOne}" /><img class="img-2-two" src="${product[0].imageTwo}" />`;
  shoppingBagOne.innerHTML = `<a href="#" id="addToShoppingBag" onclick="shoppingBagHandler(product[0])"><i class="fa fa-shopping-cart"></i></a>`;

  //Product Card Two
  titleTwo.innerHTML = `<a href="#">${product[1].name}</a>`;
  priceTwo.innerHTML = `BDT ${product[1].offerPrice} <span>BDT ${product[1].price}</span>`;
  imageTwo.innerHTML = `<img src="${product[1].imageOne}" />`;
  shoppingBagTwo.innerHTML = `<a href="#" class="add-to-cart-two" onclick="shoppingBagHandler(product[1])">Add to Cart</a>`;
  //Product Card Three

  titleThree.innerHTML = `<a href="#">${product[2].name}</a>`;
  priceThree.innerHTML = `<span>BDT ${product[2].price}</span> BDT ${product[2].offerPrice}`;
  imageThree.innerHTML = `<img class="pic-1-three" src="${product[2].imageOne}" />
    <img class="pic-2-three" src="${product[2].imageTwo}" />`;
    shoppingBagThree.innerHTML = `<a href="#" onclick="shoppingBagHandler(product[2])"><i class="fas fa-shopping-cart" ></i></a>`;
  //Product Card Four
  titleFour.innerHTML = `<a href="#">${product[3].name}</a>`;
  priceFour.innerHTML = `BDT ${product[3].price}`;
  imageFour.innerHTML = `<img class="pic-1-four" src="${product[3].imageOne}" />
    <img class="pic-2-four" src="${product[3].imageTwo}" />`;
    shoppingBagFour.innerHTML = `<a class="add-to-cart-four" href="#" onclick="shoppingBagHandler(product[3])"> ADD TO CART </a>`;
}
