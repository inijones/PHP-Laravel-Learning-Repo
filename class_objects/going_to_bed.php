<?php
class StringUtils {
  public static function secondCase($string) {
    $string = strtolower($string);
    if (strlen($string) > 1) {
      $string[1] = strtoupper($string[1]);
    }
    return $string;
  }
}

class Pajamas {
  private $owner;
  private $fit;
  private $color;

  public function __construct($owner, $fit = "loose", $color = "white") {
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe() {
    return "{$this->owner}'s pajamas are {$this->color} and have a {$this->fit} fit.";
  }

  public function setFit($newFit) {
    $this->fit = $newFit;
  }
}

class ButtonablePajamas extends Pajamas {
  private $button_state;

  public function __construct($owner, $fit = "loose", $color = "white") {
    parent::__construct($owner, $fit, $color);
    $this->button_state = "unbuttoned";
  }

  public function toggleButtons() {
    $this->button_state = ($this->button_state === "unbuttoned") ? "buttoned" : "unbuttoned";
  }

  public function describe() {
    return parent::describe() . " The buttons are currently {$this->button_state}.";
  }
}

?>

// Testing
$moose_PJs = new ButtonablePajamas("Moose", "snug", "blue");

echo $moose_PJs->describe() . "\n"; // Initially unbuttoned

$moose_PJs->toggleButtons(); 
echo $moose_PJs->describe() . "\n"; // Now buttoned

$moose_PJs->toggleButtons();
echo $moose_PJs->describe() . "\n"; // Back to unbuttoned
