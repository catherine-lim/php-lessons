<?php
function error_handler($error){
    print( 'custom error: ' . $error->getMessage() );
}
set_exception_handler('error_handler');

// throw new Exception('I want an error');
//dostuff();

$randomNumber = rand(1,10);
if($randomNumber %2 !==0){
    print("The number was $randomNumber");
} else{
print("The number was $randomNumber");
print('<br>');
throw new Exception('Exception: the number was even');
}
?> 
