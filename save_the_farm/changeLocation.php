<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
    global $location;

    // Read the player's input and store it in a variable
    $go_to = readline (">> ");
    $go_to = strtolower($go_to);


      // Handle location changes with if/elseif statements
    if ($location === "kitchen" && $go_to === "bathroom") {
        echo "You go to: bathroom.\n";
        $location = "bathroom";
    } elseif ($location === "kitchen" && $go_to === "woods") {
        echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
        $location = "woods";
    } elseif ($location === "bathroom" && $go_to === "kitchen") {
        echo "You go to: kitchen.\n";
        $location = "kitchen";
    } elseif ($location === "woods" && $go_to === "kitchen") {
        echo "You go to: kitchen.\n";
        $location = "kitchen";
    } elseif (in_array($go_to, ["bathroom", "kitchen", "woods"])) {
        echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
    } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
    }
}