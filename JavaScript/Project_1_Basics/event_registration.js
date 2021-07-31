let raceNumber = Math.floor(Math.random() * 1000);
let registeredEarly = true;
let runnerAge = 18;

if (runnerAge >= 18 && registeredEarly){
  raceNumber += 1000;
}

if (runnerAge > 18 && registeredEarly){
  console.log(`Your race is at 9:30AM, and your race number is: ${raceNumber}`);
} else if (runnerAge > 18 && !registeredEarly){
  console.log(`Your race is at 11:00AM, and your race number is: ${raceNumber}`);
} else if (runnerAge < 18){
  console.log(`Youth registrants run at 12:30PM (regardless of registration).`);
} else{
  console.log('Please see the registration desk.')
}