<?php
    $p_name = $_POST['p_name'];
    $p_category = $_POST['p_category'];
    $p_type = $_POST['p_type'];
    $p_price= $_POST['p_price'];

    $conn = mysqli_connect('localhost', 'root', '', 'products');

    $query = "INSERT INTO producs(p_name,p_category,p_type,p_price) values('$p_name','$p_category','$p_type','$p_price')";

    if(mysqli_query($conn, $query)){
        $response['msg'] = 'successful';
        $response['code'] = '201';
        echo json_encode($response);
    }
    else{
        $error['msg'] = 'failed';
        $error['code'] = '500';
        echo json_encode($error);
    }
?>