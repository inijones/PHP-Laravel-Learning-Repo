<?php
function eatSoup(){
	// Write your code here:
  
    global $has_soup, $is_hungry;

    // Check if the player has soup
    if (!$has_soup) {
        echo "You don't have any cooked food to eat!\n";
    } else {
        echo "You have eaten the soup!\n";
        $has_soup = false;   // Player no longer has soup
        $is_hungry = false;  // Player is no longer hungry
    }
  
  
  
  
}