<?php

include ('UserClass.php');

$user1 = new user('Vik', 'vik@v.com', 3);

echo $user1->getType();

echo $user1->getName();


/*
 * practise with user class
 
$vik = new User(27);
$vik->getAge;

//echo $vik->age;



//set up password and hint for it
echo $vik->getPassword('getit');
//not correct because hint is not correct
//echo $vik->getPassword('getit');


*/
        
