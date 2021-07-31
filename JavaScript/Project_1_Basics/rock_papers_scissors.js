const getUserChoice = userInput => {
    userInput = userInput.toLowerCase();
    if (userInput === 'rock' || userInput === 'paper' || userInput === 'scissors') {
        console.log(userInput);
        return userInput;
    } else {
        console.log('Error: Not valid input.');
    }
};

function getComputerChoice() {
    randomNum = Math.floor(Math.random() * 3);
    if (randomNum === 0) {
        return 'rock';
    } else if (randomNum === 1) {
        return 'paper';
    } else if (randomNum === 2) {
        return 'scissors';
    }
}

function determineWinner(userChoice, computerChoice) {
    if (userChoice === computerChoice) {
        return 'The game was a tie.';
    }
    if (userChoice === 'rock') {
        if (computerChoice === 'paper') {
            return 'User: Rock, Computer: Paper - Computer wins!';
        } else {
            return 'User: Rock, Computer: scissors - User wins!';
        }
    }
    if (userChoice === 'paper') {
        if (computerChoice === 'scissors') {
            return 'User: paper, Computer: scissors - Computer wins!';
        } else {
            return 'User: paper, Computer: rock - User wins!';
        }
    }
    if (userChoice === 'scissors') {
        if (computerChoice === 'rock') {
            return 'User: scissors, Computer: rock - Computer wins!';
        } else {
            return 'User: scissors, Computer: paper - User wins!';
        }
    }
}

const playGame = () => {
    var userChoice = getUserChoice('Rock');
    var computerChoice = getComputerChoice();
    console.log(`User threw: ${userChoice}`);
    console.log(`Computer threw: ${computerChoice}`);
    console.log(determineWinner(userChoice, computerChoice));
}

playGame();