<?php
$id = $_POST['product_id'];
$product_name =$_POST['product_name'];
$product_category = $_POST['product_category'];
$product_quantity = $_POST['product_quantity'];
$product_price = $_POST['product_price'];

$connection=mysqli_connect('localhost','root','','products');

$query= "update product set
 product_name = '$product_name',
 product_category = '$product_category',
 product_quantity ='$product_quantity',
product_price= '$product_price' 
where product_id = '$id'
 ";
 mysqli_query($connection,$query);
header('Location: '.'tableshow.php');
