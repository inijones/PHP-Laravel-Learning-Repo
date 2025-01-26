<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  // Write your code here:
    // Check and print if the player is wearing contacts
    if ($wearing_contacts) {
        echo "You are wearing contacts.\n";
    }

    // Check and print if the player is wearing glasses
    if ($wearing_glasses) {
        echo "You are wearing glasses.\n";
    }

    // Check and print if the player has mushrooms
    if ($has_mushrooms) {
        echo "You are holding mushrooms.\n";
    }

    // Check and print if the player has soup
    if ($has_soup) {
        echo "You are holding a scalding-hot bowl of mushroom soup.\n";
    }

    // Check and print if the player needs to pee
    if ($needs_to_pee) {
        echo "You need to pee!\n";
    }

     // Check and print if the player is hungry or well-fed
    if ($is_hungry) {
        echo "You are hungry.\n";
    } else {
        echo "You are well-fed and energetic.\n";
    }
}




