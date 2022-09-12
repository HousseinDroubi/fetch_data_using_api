<?php
$string= $_GET['string'];
$isPalindrome=false;
// In order to change all the characters to lower case if there are on or more character in capital letter
$string_to_lower=strtolower($string);
$string_length = strlen($string);
// In case the length of string is 1 or 2 with same characters, so, the string will be palindrome
if($string_length==1 || ($string_length==2 && $string_to_lower[0]==$string_to_lower[1])){
    $isPalindrome=true;
}else{
// In order to see if the length of string is odd, so, we have to delete the middle character. And if it's even we kept it as it.
    if(strlen($string_to_lower)%2!=0){
        $reverse_second_part=substr($string_to_lower,(int)strlen($string_to_lower)/2+1);
        // So, here the string will be divied into two equal parts. Now we have to check if first part is the reverse of second part
    }else{
        // In case the length of string is even, the only substring who will be modified is then second part.
        $reverse_second_part=substr($string_to_lower,(int)strlen($string_to_lower)/2);
    }
    $first_part=substr($string_to_lower,0,(int)strlen($string_to_lower)/2);

// Now we have to initiate second variable but not the reversed one in order to compare it with first part later on.
    $second_part='';
    for($i=strlen($reverse_second_part)-1;$i>=0;$i--){
        $second_part=$second_part.$reverse_second_part[$i];
    }
    // Check if first part is equal to second part
    if(strcmp($first_part, $second_part)== 0){
        $isPalindrome=true;
    }
}
if($isPalindrome){
    $result =[
        "polindrome"=>"true"
    ];
    
}else{
    $result =[
        "polindrome"=>"false"
    ];
}
echo json_encode($result);
?>