const cartItem = document.getElementById("cartItem");
const showCheckout = document.getElementById("showCheckout");
const noItem = document.getElementById("noItem");

let cartItems = JSON.parse(sessionStorage.getItem("cartItems")) ?? [];

const cartQty = document.getElementById("cartQty");

const totalAmount = document.getElementById("totalAmout");

const hiddenProductItem = document.getElementById("hiddenProductItem");

let finalTotalAmount = 0


const moneyHandler = (price, offerPrice) => {
  return offerPrice > 0 ? offerPrice : price;
};

const totalAmountHandler = () => {
  let totalAmountValue = 0;
  
  if (!totalAmount) return;
  if (!cartItems || cartItems.length <= 0) return;
  cartItems.map(
    (item) =>
      (totalAmountValue =
        totalAmountValue + item.qty * moneyHandler(item.price, item.offerPrice))
  );
  totalAmount.innerHTML = totalAmountValue;
  finalTotalAmount = totalAmountValue;
};

const checkoutItemHandler = (items) => {
  if (cartItem && items && items.length > 0) {
    showCheckout.style.display = "block";
    noItem.style.display = "none";
    items.map(
      (item) =>
        (cartItem.innerHTML += `
              <tr>
                      <td style="width: 50%">${item.name}</td>
                      <td style="width: 20%;"><div class="cart-items-td"> <i class="fas fa-minus" onclick="removeOneItem(${
                        item.id
                      })"></i> ${
          item.qty
        } <i class="fas fa-plus" onclick="addOneItem(${
          item.id
        })"></i></div></td>
                      <td style="width: 30%"><div class="cart-items-td">${
                        item.qty * moneyHandler(item.price, item.offerPrice)
                      } <span onclick="removeItems(${
          item.id
        })"><i class="fas fa-xmark"></i></span> </div></td>
                    </tr>
              `)
    );
  }
  if (cartItem && (!items || items.length <= 0)) {
    showCheckout.style.display = "none";
    noItem.style.display = "block";
  }
};
const cartHandler = () => {
  items = JSON.parse(sessionStorage.getItem("cartItems"));
  checkoutItemHandler(items);
  totalAmountHandler();
  if (!items || items.length <= 0) return;
  cartQty.innerHTML = items.length;
};
function shoppingBagHandler(data) {
  if (cartItems && cartItems.length > 0) {
    cartItems = cartItems.map((item) =>
      item.id == data.id ? { ...item, qty: item.qty + 1 } : item
    );
    let result = cartItems.filter((item) => item.id == data.id);
    if (result.length <= 0) {
      cartItems.push({ ...data, qty: 1 });
    }
  } else {
    cartItems.push({ ...data, qty: 1 });
  }
  sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  cartHandler();
}

cartHandler();

function removeItems(itemID) {
  const filterIndex = cartItems.findIndex((item) => item.id == itemID);
  cartItems.splice(filterIndex, 1);
  sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  cartItem.innerHTML = "";
  cartQty.innerHTML = cartItems.length;
  cartHandler();
}

function removeOneItem(itemId) {
  let filterResult = cartItems.filter((item) => item.id == itemId);
  if (filterResult[0].qty <= 1) return;
  cartItems = cartItems.map((item) =>
    item.id == itemId ? { ...item, qty: item.qty - 1 } : item
  );
  sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  cartItem.innerHTML = "";
  cartQty.innerHTML = cartItems.length;
  cartHandler();
}

function addOneItem(itemId) {
  cartItems = cartItems.map((item) =>
    item.id == itemId ? { ...item, qty: item.qty + 1 } : item
  );
  sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  cartItem.innerHTML = "";
  cartQty.innerHTML = cartItems.length;
  cartHandler();
}

const orderPlaceHandler = () => {

  
  let regMobileVerify = /^0(19|14|17|13|18|16|15)\d{8}$/;

  const form = document.getElementById("customerFormData");

  const first_name = form.elements["first_name"].value;
  const last_name = form.elements["last_name"].value;
  const mobile_no = form.elements["mobile_no"].value;
  const addresses = form.elements["addresses"].value;
  const payment_option = form.elements["payment_option"].value;
  const finalAmount = finalTotalAmount;

  if (!first_name || !last_name || !mobile_no || !addresses || !payment_option)
    return;

  if (!regMobileVerify.test(mobile_no)) {
    alert(
      "Enter Valid No. Maximum 11 Digit start with 0(19|14|17|13|18|16|15)"
    );
    return;
  }
  let allData = [
    {
      first_name: first_name,
      last_name: last_name,
      mobile_no: mobile_no,
      addresses: addresses,
      total_amount: finalAmount,
      payment_option: payment_option,
      customer_id: 1,
      productItems: [...cartItems],
    },
  ];
  fetch("./database/store.php", {
    method: "post",
    body: JSON.stringify(allData),
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        sessionStorage.removeItem("cartItems");
        cartQty.innerHTML = "";
        cartHandler();

        alert("Successfully Completed");
      } else {
        alert("Something Went Wrong");
      }
    })
    .catch((error) => {
      console.log(error);
      alert("Something Went Wrong");
    });
};
