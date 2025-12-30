<?php
    $conn = mysqli_connect('localhost', 'root', '', 'products');
    $id = $_GET['p_id'];
    $query = "DELETE FROM producs WHERE p_id = $id";
    mysqli_query($conn, $query);
    header("Location: webpage.php");
?>