<!DOCTYPE html>
<html>
    <head>
    	<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
 <?php
 //Start images array
 $image[1]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-1.svg/200px-Dice-1.svg.png";
  $image[2]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-2.svg/200px-Dice-2.svg.png"; 
  $image[3]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-3.svg/200px-Dice-3.svg.png"; 
  $image[4]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-4.svg/200px-Dice-4.svg.png"; 
  $image[5]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-5.svg/200px-Dice-5.svg.png"; 
  $image[6]="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Dice-6.svg/200px-Dice-6.svg.png";
 //End images
 
 
    //write your do-while loop below
    $rollCount = 0;
do {
    $roll = rand(1,6);
    $rollCount ++;
    if ($roll != 6){
            print '<img src="'.$image[$roll].'">';
    }
    else {
        print '<img src="'.$image[$roll].'">';
    }
} while ($roll != 6);
$verb = "Fueron";
$last = "tiros";
if ($rollCount == 1) {
    $verb = "Fue";
    $last = "tiro";
}
echo "<p>{$verb} {$rollCount} {$last}!</p>";

?>
    </body>
</html>