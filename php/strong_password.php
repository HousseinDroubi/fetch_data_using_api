<?php
$password=$_POST['password'];

$is_having_long_length=false;
$is_containing_upper_letters=false;
$is_containing_lower_letters=false;
$is_having_symobls=false;
$is_having_numbers=false;
$counter=0;
// Let's suppose that the password is strong as long as these booleans are existed. so if 1 condition is appproved will takes rate as 1/4 so the sum is 4/4 which is strong.
$password_length=strlen($password);
// Catch if the password's length is long
if($password_length>=12){
    $is_having_long_length=true;
    $counter++;
}
// Catch if the password has an upper case letter
for ($i=0;$i<strlen($password);$i++){
    if(ctype_upper($password[$i])){
        $is_containing_upper_letters=true;
        $counter++;
        break;
    }   
}

// Catch if the password has an lower case letter
for ($i=0;$i<strlen($password);$i++){
    if(ctype_lower($password[$i])){
        $is_containing_lower_letters=true;
        $counter++;
        break;
    }   
}

// Catch if the password has at least one symbol
$symobls="?.,><'\;:/\|\"][}{=+_-)(*&^°%§¥¢$#@!`~";
for ($i=0;$i<strlen($symobls);$i++){
    for($j=0;$j<strlen($password);$j++){
        if($symobls[$i]==$password[$j]){
            $is_having_symobls=true;
            $counter++;
            break;   
        }         
    }
}

// Catch if the password has at least one number
$number="0123456789";
for ($i=0;$i<strlen($number);$i++){
    for($j=0;$j<strlen($password);$j++){
        if($number[$i]==$password[$j]){
            $is_having_numbers=true;
            echo 'here';
            $counter++;
            break;   
        }         
    }
}

// Getting the result as JSON
if($counter==0){
    $result =[
        "status"=>"very weak"
    ];
    
}else if($counter==1){
    $result =[
        "status"=>"weak"
    ];
}else if($counter==2){
    $result =[
        "status"=>"medium"
    ];
}else if($counter==3){
    $result =[
        "status"=>"strong"
    ];
}else{
    $result =[
        "status"=>"very strong"
    ];
}
echo json_encode($result);
?>