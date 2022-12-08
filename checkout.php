<?php
include('./header.php')
?>
<section class="container my-4">
  <!--Main layout-->
  <main class="mt-5">
    <div class="container wow fadeIn" id="showCheckout">
      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form Update</h2>

      <div class="row show-chekout">
        <div class="col-md-6 mb-4">
          <div class="card">
            <form class="card-body" onsubmit="return false" id="customerFormData" enctype=”multipart/form-data”>
              <div class="row">
                <div class="col-md-6 mb-2">
                  <label for="firstName" class="">First name</label>
                  <div class="md-form">
                    <input required name="first_name" type="text" id="firstName" class="form-control mt-1" />
                  </div>
                </div>

                <div class="col-md-6 mb-2">
                  <div class="md-form">
                    <label for="lastName" class="">Last name</label>
                    <input required name="last_name" type="text" id="lastName" class="form-control mt-1" />
                  </div>
                </div>
              </div>

              <div class="md-form mb-2">
                <label for="mobile" class="">Mobile No.</label>
                <input required type="text" name="mobile_no" id="mobile" class="form-control mt-1 " placeholder="01800000000" />
              </div>

              <div class="md-form mb-2">
                <label for="address" class="">Address</label>
                <input required type="text" name="addresses" id="address" class="form-control mt-1" placeholder="Write Exact Address" />
              </div>
              <div class="md-form mb-2">
                <label for="payment_option" class="">Select Payment Option</label>
                <select class="form-select form-select mb-3 mt-1" aria-label=".form-select example" required name="payment_option">
                  <option value="">Payment Option</option>
                  <option value="1">Cash on delivery</option>
                </select>
              </div>
              <button class="btn bg-secondary btn-md btn-block text-white" onclick="orderPlaceHandler()" type="submit">
                Place Order
              </button>
            </form>
          </div>
          <!--/.Card-->
        </div>

        <div class="col-md-6 mb-4">
          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Shopping Bag</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col" style="width:50%">Item</th>
                <th scope="col" style="width:20%;text-align: center;"><span>Qty</span> </th>
                <th scope="col" style="width:30%;text-align: center;">Price</th>
              </tr>
            </thead>
            <tbody id="cartItem">
            </tbody>
          </table>
          <ul class="list-group mb-3 z-depth-1">

            <li class="list-group-item d-flex justify-content-between text-success">
              <span>Total (BDT)</span>
              <strong><span id="totalAmout">30000</span> </strong>
            </li>
          </ul>
          <!-- Cart -->
        </div>
      </div>

    </div>
    <div class="container">
      <div class="row no-item text-center" id="noItem">
        <h2 class="mb-4">Sorry! There is no Item in the Shopping Bag</h2>
        <a href="./index.php" class="btn btn-secondary">Continue Shopping</a>
      </div>
    </div>
  </main>
  <!--Main layout-->
</section>

<?php
include('./footer.php')
?>