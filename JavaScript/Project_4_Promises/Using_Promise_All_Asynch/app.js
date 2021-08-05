/*
Our business is doing so well that we’re running low on inventory. We want to reach out to some distributors to see if they have the items we need. We only want to make one restocking order, so we’ll only want to place the order if all of the items are available.
*/
const { checkAvailability } = require('./library.js');

const onFulfill = (itemsArray) => {
	console.log(`Items checked: ${itemsArray}`);
	console.log(`Every item was available from the distributor. Placing order now.`);
};

const onReject = (rejectionReason) => {
	console.log(rejectionReason);
};

// Promise #1
const checkSunglasses = checkAvailability('sunglasses', 'Favorite Supply Co.');
// Promise #2
const checkPants = checkAvailability('pants', 'Favorite Supply Co.');
// Promise #3
const checkBags = checkAvailability('bags', 'Favorite Supply Co.');

// Promise array
const promiseArray = [checkSunglasses, checkPants, checkBags];

// Invoke Promise.all()
Promise.all(promiseArray).then(onFulfill).catch(onReject);
