<?php

$num = 21;
var_dump(is_string($num));

$arr = array(
        "a" => "Welcome",
        "b" => 2,
        "c" => "GeeksforGeeks"
    );

var_dump(is_string($arr["a"]));
var_dump(is_string($arr["b"]));
var_dump(is_string($arr["c"]));

?>
