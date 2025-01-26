<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber()
{
  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  $play_count++;
  $randomNumber = rand(1, 10);
  echo "\nMake your guess...\n";

  $playerGuess = readline(">> ");

  // Convert the string to an integer
  $playerGuessAsNumber = intval($playerGuess);

  // Output the converted value (optional for debugging)
  echo "Your guess as a number is: $playerGuessAsNumber\n";

  
  echo "The random number was: $randomNumber\n";
  echo "You guessed: $playerGuessAsNumber\n";

    // Compare the guess to the random number and adjust global variables
    if ($playerGuessAsNumber === $randomNumber) {
        $correct_guesses++;
        echo "Correct! The number was $randomNumber.\n";
    } elseif ($playerGuessAsNumber > $randomNumber) {
        $guess_high++;
        echo "Too high! The number was $randomNumber.\n";
    } else {
        $guess_low++;
        echo "Too low! The number was $randomNumber.\n";
    }

    // Display current stats
    echo "Stats so far:\n";
    echo "Correct guesses: $correct_guesses\n";
    echo "High guesses: $guess_high\n";
    echo "Low guesses: $guess_low\n";
    echo "----------------------------------\n";
}

// Set the number of rounds
$totalRounds = 10;

// Run the game for the specified number of rounds
for ($round = 1; $round <= $totalRounds; $round++) {
    guessNumber($round);
}

// Calculate the percentage of correct guesses
if ($play_count > 0) {
    $percent_correct = ($correct_guesses / $play_count) * 100;
    echo "Game over! You guessed correctly " . round($percent_correct, 2) . "% of the time.\n";
} else {
    echo "No games played.\n";
}

// Final stats
// Final stats
echo "Final Stats:\n";
echo "Correct guesses: $correct_guesses\n";
echo "High guesses: $guess_high\n";
echo "Low guesses: $guess_low\n";

// Analyze guessing tendencies
if ($guess_high > $guess_low) {
    echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_low > $guess_high) {
    echo "When you guessed wrong, you tended to guess low.\n";
} else {
    echo "You guessed wrong an equal number of times high and low.\n";
}
