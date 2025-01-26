<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;


    // Determine if the player is ready to work
    $ready_to_work = !$is_hungry && $wearing_contacts && !$wearing_glasses && !$needs_to_pee;

    // Check if the player is in the kitchen
    if ($location !== 'kitchen') {
        echo "You don't see a cupboard here!\n";
    }
    // Check if the cupboard has already been moved
    elseif ($moved_cupboard) {
        echo "You've already moved the cupboard!\n";
    }
    // Check if the player is ready to work
    elseif (!$ready_to_work) {
        echo "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
    }
    // Move the cupboard
    else {
        echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
        $moved_cupboard = true; // Update the cupboard status
    }
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
}