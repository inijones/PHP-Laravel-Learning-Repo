<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

// Write your code here:

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);

  $correct_answer = 6 - 11; // -5

  if ($user_answer == $correct_answer) { 
        $submission_response = "Correct!";
    } else {
        $validation_error = "* Wrong answer. Try again.";
    }
}



?>
<h2>Time for a math quiz!</h2>
<form method="post" action="">
<h4>Question 1:</h4>  
<p>What is 6 - 11?</p> 
<input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
<br>
<span class="error" id="error"><?= $validation_error;?></span> 
<br> 
<input type="submit" value="Submit Your Answer">
</form>
<div>
  <p id="answer-display">Your answer was: <?= $user_answer;?></p>
  <p id="submission-response"><?= $submission_response;?></p>
</div>