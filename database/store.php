

<?php
require('./Database.php');
$data = file_get_contents('php://input');
$value = array();
$items = json_decode($data);
$first_name = htmlspecialchars($items[0]->first_name);
$last_name = htmlspecialchars($items[0]->last_name);
$mobile_no = htmlspecialchars($items[0]->mobile_no);
$addresses = htmlspecialchars($items[0]->addresses);
$payment_option = $items[0]->payment_option;
$customer_id = $items[0]->customer_id;
$total_price = $items[0]->total_amount;

// foreach ($items[0]->productItems as $data) {
//     $total_price = $total_price + ($data->qty * $data->price);
// }
foreach ($items[0]->productItems as $data) {
    $product_id = $data->id;
    $product_name = htmlspecialchars($data->name);
    $qty = $data->qty;
    $value[] =  "('$first_name','$last_name','$mobile_no','$addresses','$payment_option','$product_id','$product_name','$qty','$total_price', '$customer_id')";
}
// print_r($value);
$query_values = implode(',', $value);

// echo($query_values);
$sql = "INSERT INTO orders (first_name,last_name,mobile_no,addresses,payment_option,product_id,product_name,qty,total_price,customer_id)  VALUES  $query_values ";
if (mysqli_query($connect_DB, $sql)) {
    echo json_encode(['success' => true]);
    header("Content-type: application/json");
} else {
    echo json_encode(['success' => false]);
    header("Content-type: application/json");
}
mysqli_close($connect_DB);
