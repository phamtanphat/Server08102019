<?php
    require "connect.php";
    require "response.php";

    $id = $_POST["id"];
    $name = $_POST["name"];
    $yearofbirth = $_POST["yearofbirth"];
    $address = $_POST["address"];

    if($id != '' && $name != '' && $yearofbirth != '' && $address != ''){
        $query = "UPDATE sinhvien SET name = '$name' , yearofbirth = '$yearofbirth' ,address='$address' WHERE id = $id";
        $result = $con->query($query);
    
        if($result){
            echo json_encode(new Response("true","Cập nhật sinh viên thành công"));
        }else{
            echo json_encode(new Response("false","Cập nhật sinh viên thất bại"));
        }
    }else{
        echo json_encode(new Response("false","Dữ liệu không đầy đủ"));
    }    
?>