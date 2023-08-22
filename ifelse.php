<?php 

   $marks = 95;

   if( $marks >= 0 && $marks <= 32 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got F";
      echo "</br>";
      echo "You are fail!";
      echo "</br>";
      echo "Your Point 0.00";
   }elseif( $marks >= 33 && $marks <= 39 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got D";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 1.00";
   }elseif( $marks >= 40 && $marks <= 49 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got C";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 2.00";
   }elseif ($marks >= 50 && $marks <= 59 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got B";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 3.00";
   }elseif( $marks >= 60 && $marks <= 69 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got A-";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 3.50";
   }elseif( $marks >= 70 && $marks <= 79 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got A";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 4.00";
   }elseif( $marks >= 80 && $marks <= 100 ){
      echo "Your Marks is $marks";
      echo "</br>";
      echo "You got A+";
      echo "</br>";
      echo "You are pass!";
      echo "</br>";
      echo "Your Point 5.00";
   }

?>
