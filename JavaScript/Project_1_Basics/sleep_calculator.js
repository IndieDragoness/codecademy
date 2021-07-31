function getSleepHours(day) {
    day = day.toLowerCase();
    switch (day) {
        case 'monday':
            return 8;
            break;
        case 'tuesday':
            return 1;
            break;
        case 'wednesday':
            return 9;
            break;
        case 'thursday':
            return 7;
            break;
        case 'friday':
            return 3;
            break;
        case 'saturday':
            return 5;
            break;
        case 'sunday':
            return 4;
            break;
        default:
            return -1;
            break;
    }
}

const getActualSleepHours = () => getSleepHours('Monday') + getSleepHours('Tuesday') + getSleepHours('Wednesday') + getSleepHours('Thursday') + getSleepHours('Friday') + getSleepHours('Saturday') + getSleepHours('Sunday');

const getIdealSleepHours = () => {
    const idealHours = 7.5;
    return idealHours * 7;
};

const calculateSleepDebt = () => {
    const actualSleepHours = getActualSleepHours();
    const idealSleepHours = getIdealSleepHours();

    if (actualSleepHours > idealSleepHours) {
        console.log('Congrats! You are getting above ideal sleep.');
    } else if (actualSleepHours < idealSleepHours) {
        console.log('Unfortunately, you are getting below ideal sleep.');
    } else {
        console.log('You are getting exactly ideal sleep. Careful you don\'t lose any hours.');
    }
};

console.log('Actual sleep: ' + getActualSleepHours());
calculateSleepDebt();