<?php
session_start();
$connection = mysqli_connect("localhost","root","","first_db");
if (isset($_GET['latest_orders_submit']) && isset($_GET['num'])) {
    $limit =$_GET['num'];
    $query = "SELECT orderNumber,orderDate,customerNumber FROM `orders` ORDER BY orderDate limit $limit";
    $queryResult=mysqli_query($connection,$query);
    $orders=mysqli_fetch_all($queryResult,MYSQLI_ASSOC);
    $_SESSION['oreders']=$orders;
    header("location: latest-orders.php");
}
if (isset($_GET['product_name_submit']) && isset($_GET['product_name'])) {
    $productName =$_GET['product_name'];
    $query = "SELECT SUM(quantityOrdered) FROM orderdetails WHERE productCode =(
        SELECT productCode FROM products WHERE productName='$productName'
        )";
    $queryResult=mysqli_query($connection,$query);
    $prdctQnty=mysqli_fetch_row($queryResult);
    $_SESSION['prdctQnty']=$prdctQnty[0];
    header("location: product-quantity-orderded.php");
}
if (isset($_GET['customer_submit']) && isset($_GET['customer'])) {
    $keyWord =$_GET['customer'];
    $query = "SELECT customerName,country FROM `customers` WHERE 
    customerName LIKE '%$keyWord%'";
    $queryResult=mysqli_query($connection,$query);
    $customers=mysqli_fetch_all($queryResult,MYSQLI_ASSOC);
    $_SESSION['customers']=$customers;
    header("location: search-customers.php");
}
if (isset($_GET['order_number_api_submit']) && isset($_GET['order_number'])) {
    $orderNumber =$_GET['order_number'];
    $query = "SELECT * FROM orders WHERE orderNumber =$orderNumber ";
    $queryResult=mysqli_query($connection,$query);
    $order=mysqli_fetch_all($queryResult,MYSQLI_ASSOC);
    $orderAPI=json_encode($order);
    $_SESSION['orderAPI']=$orderAPI;
    header("location: show-order-api.php");
}
?>