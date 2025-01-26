<?php
  
function pee(){
	// Write your code here:
  
   global $location, $needs_to_pee;

    // Check the player's location
    if ($location === 'bathroom' || $location === 'woods') {
        echo "You relieve yourself.\n";
        $needs_to_pee = false; // Player no longer needs to pee
    } else {
        echo "Are you crazy? You can't pee here!\n";
    }
  
  
  
  
}