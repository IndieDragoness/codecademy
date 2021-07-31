// Declaring the factory function:
const robotFactory = (model, mobile) => {
    return {
        model: model,
        mobile: mobile,
        beep() {
            console.log('Beep Boop');
        }
    }
}

// Using the factory function to create an instance:
const tinCan = robotFactory('P-500', true);

// Calling the instance:
tinCan.beep();