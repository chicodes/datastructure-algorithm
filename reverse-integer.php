<?php

// Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

// Assume the environment does not allow you to store 64-bit integers (signed or unsigned).


//1. get the string
//2. split the string in character array so that each element has an index
//3. loop through the array, starting from the last character in the array, append and continue to append till you get to the end.


class ReverseInteger{

    function reverse($x) {
            
        $valueToArray = str_split($x); $appendSign = "";
        for($i=count($valueToArray)-1; $i>=0; $i--){
            $result[] =  $valueToArray[$i];
        }
        $result = implode(",", $result);
        if($valueToArray[0] == "-"){
            $appendSign = $valueToArray[0];
            $removeLastCharacter = substr($result,0,-1);
            $result = str_replace("," ,"",$removeLastCharacter);
        }
        else{
            $result = str_replace("," ,"",$result);
        }
        return $appendSign.$result;
    }

    function test($value){
        var_dump($value);
        exit;
    }
}

$reverseInteger = new ReverseInteger();
echo $reverseInteger->reverse(-34567);