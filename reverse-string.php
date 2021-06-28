<?php

// PHP function to reverse a string using  
// recursion and substr() 
function Reverse($str){ 
      
    // strlen() used to calculate the  
    // length of the string 
    $len = strlen($str); 
    // var_export($len); exit;
  
    // Base case for recursion 
    if($len == 1){ 
        return $str; 
    } 
    else{ 
        //var_export($len--); exit;
        $len--; 
        //var_export($len); exit;
          
        // extract first character and concatenate 
        // at end of string returned from recursive 
        // call on remaining string 
        //var_export(substr($str,1, $len));  exit; //eeksforGeeks
        //var_export(substr($str, 0, 1)); exit; //G
        //return (Reverse(substr($str,1, $len)).substr($str, 0, 1)); exit;
        //return Reverse("eeksforGeeksG");  
        //                 . substr($str, 0, 1); 
        return Reverse(substr($str,1, $len))  
                        . substr($str, 0, 1); 
    } 
} 
  
// Driver Code 
$str = "GeeksforGeeks"; 
print_r(Reverse($str)); 