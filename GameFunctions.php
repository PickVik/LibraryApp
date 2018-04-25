<?php

$userChoice = $_REQUEST["choice"];
$resultText = "";


if ($userChoice == 'R'){
    $userChoice = 'Rock';
     
}
elseif ($userChoice == 'P'){
    $userChoice = 'Paper';
    
    
}
elseif ($userChoice =='S'){
    $userChoice = 'Scissor';
   
}

else {
    echo 'ERROR';
    return;
}

$computer = rand(0, 2);


if ($computer == 0){

$computer = 'Rock';
$resultText = 'Computer played Rock!' . "<br/><br/>" ;
}

elseif ($computer == 1) {
    $computer = 'Paper';
    $resultText = 'Computer played Paper!' . "<br/><br/>";
   
}
elseif ($computer == 2){
    $computer = 'Scissor';
    $resultText = 'Computer played Scissor!' . "<br/><br/>";
    
}
        
switch (true){
    case $userChoice === $computer:
    $resultText = $resultText . '<p style="color: orange"><b>It is a DRAW..</b></p>';
        echo $resultText;
    break;

    case $userChoice == 'Rock'&& $computer == 'Scissor':
    case $userChoice == 'Paper'&& $computer =='Rock':
    case $userChoice == 'Scissor'&& $computer == 'Paper':    
    $resultText = $resultText . "\n". '<p style="color: green"><b>You WIN!!!!</b></p>';
        echo $resultText;
    break; 
    
    default:
        $resultText = $resultText . '<p style="color: red"><b>Ohh dear.. You LOSE! :(<b></p>';
        echo $resultText;
             
            
}

