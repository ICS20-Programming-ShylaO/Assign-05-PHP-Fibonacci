<?php

// initializing user's max term number and the responses for displaying info
$maxTermNum = $_POST['final-term'];
$specialResponse = "";
$response = "";

// special response for when user enters an integer greater than or equal to 31
if ($maxTermNum >= 31) {
    $specialResponse = "The ending number of this sequence exceeds one million!";
}
// response for when user doesn't enter an integer
if (!is_numeric($maxTermNum)) {
    $response = "Please enter a valid integer.";
}
// response for when user doesn't enter a positive integer
elseif ($maxTermNum < 0) { 
    $response = "Please enter an integer greater than -1.";
}
// else to start the loop
else {
    // initializing variables for the loop: first term being 0, next term being 1, and the currentTerm equals to 0
    $previousTerm = 0;
    $nextTerm = 1;
    $currentTerm = 0;
    // for loop to calculate the fibonacci sequence starting from 0, ending with max term
    for ($counter = 0; $counter <= $maxTermNum; $counter++) {
      //ending the response once counter == maxTermNum
      if ($counter == $maxTermNum) {
        $response = $response . $previousTerm;
      }
      // build the response by using the empty string and adding the previous term and next term
      else {
          $response = $response . $previousTerm . ", ";
      }
      // setting current term to previous term + next term in order to set next term to the current term
      $currentTerm = $previousTerm + $nextTerm;
      // previous term turns to next term as per rules of the sequence
      $previousTerm = $nextTerm;
      // following rules of the sequence: current term/sum becomes the next term
      $nextTerm = $currentTerm;
    }
  }
  if ((!is_numeric($maxTermNum)) || ($maxTermNum < 0)) {
    echo $response;
  }
  else {
    // display special response and fibonacci sequence to user
    echo $specialResponse . "<br>The Fibonacci sequence ending on Term " . $maxTermNum . " is " . $response;
  }
