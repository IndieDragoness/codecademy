<?php
namespace Codecademy;

echo "Hello, there. What's your first name?\n";
$user_input = readline(">");
$name_length = strlen($user_input);

if ($name_length > 8){
  echo "Hi, ${user_input}. That's a long name.";
} elseif ($name_length > 3){
  echo "Hi, ${user_input}.";
} else {
  echo "Hi, ${user_input}. That's a short name.";
}