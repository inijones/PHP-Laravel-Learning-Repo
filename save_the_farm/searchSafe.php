<?php

function searchSafe(){
	// Write your code here:
  
   global $location, $moved_cupboard, $rounds_left;

    // Check if the player is in the kitchen and if the cupboard has been moved
    if ($location !== 'kitchen' || !$moved_cupboard) {
        echo "You don't see any safe here!\n";
    } else {
        // If conditions are met, display the winning message
        echo "You search through the safe (the passcode is \"1234\"). With bated breath, you pull out the contents! It's a chocolate Mickey Mouse, wrapped in gold foil. Delicious!\n";
        echo "YOU WIN THE GAME!!!!\n\n";

        // Set $rounds_left to 1 to indicate the end of the game
        $rounds_left = 1;
    }
  
}  