<?php
  // Describe current location
	function lookAround(){
	// Write your code here:
  global $location, $wearing_glasses, $wearing_contacts, $moved_cupboard;
  
   // Check if the player can see
    if ($wearing_glasses xor $wearing_contacts) {
        // Use a switch statement to describe the surroundings based on location
        switch ($location) {
          case 'kitchen':
          // General kitchen description
          echo "This kitchen comes with all the tools and ingredients needed to cook mushroom soup--- except the mushrooms!\n\n";
          echo "From here, you see the door to the *bathroom* and the backdoor, which leads to the *woods*.\n\n";

          // Hint about the cupboard
          if ($moved_cupboard) {
            echo "The cupboard has been moved aside, and reveals a safe built into the wall.\n";
          } else {
            echo "Also, there's a conspicuously large cupboard against a peculiarly worn piece of the wall.\n";
          }
          break;
          case 'bathroom':
          // Bathroom description
          echo "Normal bathroom. There's a mirror here. You can get back out to the *kitchen*. You sense a magic presence in the toilet, but you decide to ignore it.\n";
          break;
          case 'woods':
          // Woods description
          echo "These woods aren't actually that terrifying. Unless you're afraid of mushrooms. There are millions of them here!\n";
          echo "You see the path leading back to your cabin's *kitchen*.\n";
          break;
            default:
                echo "You see nothing notable. This area seems unfamiliar.\n";
        }
    } else {
        // Player can't see properly
        echo "It's really hard to make out any details...\n";
    }
  
  
  
  
  
  
  
  
  
  
}