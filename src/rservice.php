<?php

function getFileHandler(){
    return fopen("data.dat", "w+");
}


function turnOn(){
    $file = getFileHandler();
    fwrite($file, "on");
    fclose($file);
}

function turnOff(){
    $file = getFileHandler();
    fwrite($file, "off");
    fclose($file);
}

function getStatus(){
    echo file_get_contents("data.dat");
}

