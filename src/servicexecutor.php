<?php
include_once("rservice.php");
if(isset($_POST["onrequest"])){
    turnOn();
}

if(isset($_POST["offrequest"])){
    turnOff();
}s
