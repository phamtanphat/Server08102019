<?php
    class Response {
        function __construct($message,$data){
            $this->message=$message;
            $this->data=$data;
        }
    }
?>