<?php

function dd($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}



function urlIs($value){
    return $_SERVER['REQUEST_URI'] == $value;
}
