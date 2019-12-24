<?php

    require "connect.php";
    require "response.php";

    $name = $_POST["name"];
    $yearofbirth = $_POST["yearofbirth"];
    $address = $_POST["address"];

    if($name != '' && $yearofbirth != '' && $address != ''){
        $query = "INSERT INTO sinhvien VALUES (null , '$name','$yearofbirth','$address')";
        $result = $con->query($query);
        if($result){
            echo json_encode(new Response("true","Thêm sinh viên thành công"));
        }else{
            echo json_encode(new Response("false","Thêm sinh viên thất bại"));
        }
    }else{
        echo json_encode(new Response("false","Dữ liệu không đầy đủ"));
    }
?>