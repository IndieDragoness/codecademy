<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count += 1;

  $dice_roll = random_int(1, 10);
  echo "\nGuess 1-10:\n";
  $user_input = readline(">> ");
  $user_input = (int) $user_input;

  echo "\nRandom number was: ${dice_roll}\nYou guessed: ${user_input}\nRound: ${play_count}\n";

  if ($user_input === $dice_roll){
    $correct_guesses += 1;
  } elseif($user_input > $dice_roll){
    $guess_high += 1;
  } elseif($user_input < $dice_roll){
    $guess_low += 1;
  }
}

for ($i = 0; $i < 10; $i++) {
  guessNumber();
}

$percent_correct = $correct_guesses/$play_count;
echo "\nYou guessed correctly ${percent_correct}% of the time.\n";

if($guess_high > $guess_low){
  echo "\nWhen you guessed wrong, you tended to guess high.";
} elseif($guess_low > $guess_high){
  echo "\nWhen you guessed wrong, you tended to guess low.\n";
}