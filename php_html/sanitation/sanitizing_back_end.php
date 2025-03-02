<?php
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $number = trim($_POST["number"]);

    // Step 1: Check if the number is fewer than 30 characters
    if (strlen($number) >= 30) {
        $message = $validation_error;
    } else {
        // Step 2: Remove all non-numeric characters
        $sanitized_number = preg_replace("/[^0-9]/", "", $number);

        // Step 3: Check if the sanitized number is exactly 10 digits
        if (strlen($sanitized_number) === 10) {
            // Step 4: Store the number and update the message
            $contacts[$name] = $sanitized_number;
            $message = "Thanks $name, we'll be in touch.";
        } else {
            // Step 5: Invalid phone number
            $message = $validation_error;
        }
    }
}
?>
<html>
	<body>
  <h3>Contact Form:</h3>
		<form method="post" action="">
			Name:
			<br>
  		<input type="text" name="name" value="<?= $name;?>">
 			<br><br>
  		Phone Number:
  		<br>
  		<input type="text" name="number" value="<?= $number;?>">
  		<br><br> 
  		<input type="submit" value="Submit">
		</form>
		<div id="form-output">
			<p id="response"><?= $message?></p>
    </div>
	</body>
</html>
    