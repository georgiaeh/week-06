<?php

require __DIR__ . "/vendor/autoload.php";

for($i = 1; $i < 100; $i += 1){
    $output = "";

    if( $i % 3 === 0 ){
        $output = $output . "Fizz";
    }
    if( $i % 5 === 0 ){
        $output = $output . "Buzz";
    }
    if( $output === ""){
        $output = $output . strval($i);
    }
    dump($output);
}


?>