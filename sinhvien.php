<?php
    require "connect.php";
    require "response.php";

    class Sinhvien{
        function __construct($id,$name,$yearofbirth,$address){
            $this->id=$id;
            $this->name=$name;
            $this->yearofbirth=$yearofbirth;
            $this->address=$address;
        }
    }
    $query = "SELECT * FROM sinhvien";
    $result = $con->query($query);

    $array = [];

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           array_push($array, new Sinhvien(
                                    $row["id"],
                                    $row["name"],
                                    $row["yearofbirth"],
                                    $row["address"],
           ));
        }
        echo json_encode(new Response("true",$array));
    }else{
        echo json_encode(new Response("false","Không có dữ liệu"));
    }

?>