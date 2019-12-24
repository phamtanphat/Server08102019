<?php
    require "connect.php";
    require "response.php";

    $id = $_POST["id"];

    if($id != ''){

        $queryCheckId = "SELECT id FROM sinhvien WHERE id = $id";

        $instance = $con->query(($queryCheckId));

        if($instance->num_rows > 0 ){
            $query = "DELETE FROM sinhvien WHERE id = $id";
            $result = $con->query($query);
            if($result){
                echo json_encode(new Response("true","Xóa sinh viên thành công"));
            }else{
                echo json_encode(new Response("false","Sinh viên không tồn tại"));
            }
        }else{
            echo json_encode(new Response("false","Sinh viên không tồn tại"));
        }
    }else{
        echo json_encode(new Response("false","Dữ liệu không đầy đủ"));
    }    
?>