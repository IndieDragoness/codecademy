<?php

function magic8Ball(){
  echo "Enter a question that can be answered with either yes or no.\n";
  $user_input = readline(">");
  echo "You asked: ${user_input}\n";

  $magic_answer = random_int(0, 19);
  // echo "Magic answer: ${magic_answer}\n";

  switch ($magic_answer) {
    case 0:
      echo "It is certain.\n";
      break;
    case 1:
      echo "It is decidedly so.\n";
      break;
    case 2:
      echo "Without a doubt.\n";
      break;
    case 3:
      echo "Yes - definitely.\n";
      break;
    case 4:
      echo "You may rely on it.\n";
      break;
    case 5:
      echo "As I see it, yes.\n";
      break;
    case 6:
      echo "Most likely.\n";
      break;
    case 7:
      echo "Maybe...\n";
      break;
    case 8:
      echo "It's possible.\n";
      break;
    case 9:
      echo "I could see it happening.\n";
      break;
    case 10:
      echo "There's potential.\n";
      break;
    case 11:
      echo "No.\n";
      break;
    case 12:
      echo "Unlikely.\n";
      break;
    case 13:
      echo "I don't guarantee it.\n";
      break;
    case 14:
      echo "Never.\n";
      break;
    case 15:
      echo "Not possible.\n";
      break;
    case 16:
      echo "All your wildest dreams will come true. Oh, and... probably not.\n";
      break;
    case 17:
      echo "I don't get paid enough to keep doing this.\n";
      break;
    case 18:
      echo "You think I'd still be here if my predictions came true?\n";
      break;
    case 19:
      echo "These questions tire me, mortal.\n";
      break;
  }
}

magic8Ball();