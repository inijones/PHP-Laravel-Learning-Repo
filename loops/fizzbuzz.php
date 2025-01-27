<?php
$counter = 1;
// while ($counter <= 100) {

//   if ($counter % 15 === 0) {
//     echo "FizzBuzz";
//   } elseif ($counter % 3 === 0) {
//     echo "Fizz";
//   } elseif ($counter % 5 === 0) {
//     echo "Buzz";
//   } else {
//       echo $counter;
//   }
 
//   $counter++;
//    echo "\n";
// }

$output = [];

// Use a for loop to iterate through numbers 1 to 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        // Divisible by both 3 and 5 (i.e., 15)
        $output[] = "FizzBuzz";
    } elseif ($i % 3 === 0) {
        // Divisible by 3 only
        $output[] = "Fizz";
    } elseif ($i % 5 === 0) {
        // Divisible by 5 only
        $output[] = "Buzz";
    } else {
        // Add the number itself
        $output[] = (string)$i;
    }
}

// Use a foreach loop to print each statement in the $output array
// foreach ($output as $line) {
//     echo $line . "\n";
// }

// foreach ($output as $line) {
//     if ($line === "Fizz") {
//         // Skip printing "Fizz"
//         continue;
//     }
//     // Print everything except "Fizz"
//     echo $line . "\n";
// }

foreach ($output as $line) {
    if ($line === "Fizz") {
        // Skip printing "Fizz"
        continue;
    } elseif ($line === "FizzBuzz") {
        // Print "FizzBuzz" and exit the loop
        echo $line . "\n";
        break;
    }
    // Print everything else
    echo $line . "\n";
}