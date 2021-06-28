<?php

class TwoSum{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    //private $nums = [4,6,1,2,3,5,8];

    function doTwoSum(array $nums, int $target) {

        //$i=0;
        //foreach beacuse we need to get the index and value of each iterationn
        foreach($nums as $key => $num){

            for($i = $key+1; $i<count($nums); $i++){
                if((int) $num +  (int) $nums[$i] == $target){

                    //return as string
                    //$result[] = "[".$num.",". $nums[$i]."]";

                    //return as array
                    //$result[] = [$num,$nums[$i]];
                    
                    //return index
                    $result[] = [$key,$i];
                }
            }
        }

        $this->test($result);
    }

    function test($value){
        var_dump($value);
        exit;
    }

}


// $nums = [10, 6, 2, 3,5,7,4]; $target = 9;

$nums = [4,6,1,2,3,5,8]; $target = 6;
$twoSum = new TwoSum();
//$nums = [9, 4, 5, 2]; $target = 6;

$twoSum->doTwoSum($nums, $target);