<?php

    $id = $_GET['p_id'];
    $p_name = $_POST['p_name'];
    $p_category = $_POST['p_category'];
    $p_type = $_POST['p_type'];
    $p_price= $_POST['p_price'];

    $conn = mysqli_connect('localhost', 'root','', 'products');
    $query = "UPDATE producs SET p_name = '$p_name', p_category = '$p_Category', p_type = '$p_type', p_price = '$p_price' WHERE p_id = $id";

    if(mysqli_query($conn, $query)){
        $response['msg'] = "SUCCESSFUL!";
        $response['code'] = '201';
        echo json_encode($response);
    }
    else{
        $error['response'] = 'Failed';
        $error['code'] = '500';
        echo json_encode($error);
    }
?>